<?php
/**
*
* includes/functions_boardwatch.php
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* draw the boardwatch preference options in the acp prefs panel
*/
function boardwatch_draw_acp_prefs(&$data, $user_row)
{
	global $phpbb_root_path, $phpEx, $template, $user;
	include($phpbb_root_path . 'includes/constants_boardwatch.' . $phpEx);
	$user->add_lang('mods/info_ucp_boardwatch');
	$data = array_merge($data, array(
		'boardwatchb'	=> request_var('boardwatch', $user_row['user_boardwatchb']),
		'boardwatchf'	=> request_var('forumwatch', $user_row['user_boardwatchf']),
		'boardwatcht'	=> request_var('topicwatch', $user_row['user_boardwatcht']),
		)
	);

	$template->assign_vars(array(
		'S_BOARDWATCH_YES'			=> ($data['boardwatchb'] == BOARDWATCH_YES) ? true : false,
		'S_BOARDWATCH_YES_BUT'		=> ($data['boardwatchb'] == BOARDWATCH_YES_BUT) ? true : false,
		'S_BOARDWATCH_NO'			=> ($data['boardwatchb'] == BOARDWATCH_NO) ? true : false,
		'S_FORUMWATCH_YES'			=> ($data['boardwatchf'] == BOARDWATCH_YES) ? true : false,
		'S_FORUMWATCH_YES_BUT'		=> ($data['boardwatchf'] == BOARDWATCH_YES_BUT) ? true : false,
		'S_TOPICWATCH_YES'			=> ($data['boardwatcht'] == BOARDWATCH_YES) ? true : false,
		'S_TOPICWATCH_YES_BUT'		=> ($data['boardwatcht'] == BOARDWATCH_YES_BUT) ? true : false,
	));
}


/**
* add boardwatch preferences to the update query
*/
function boardwatch_submit_acp_prefs(&$sql_ary, $data)
{
	global $phpbb_root_path, $phpEx, $template;
	$sql_ary = array_merge($sql_ary, array(
		'user_boardwatchb'	=> $data['boardwatchb'],
		'user_boardwatchf'	=> $data['boardwatchf'],
		'user_boardwatcht'	=> $data['boardwatcht'],
		)
	);
}


/**
* include users subscribed to boardwatch in the list of users who will get notice of the post or reply
*/
function include_boardwatch_users(&$notify_rows, &$sql_ignore_users, $mode)
{
	global $db;

	if ($mode != 'post' && $mode != 'reply' && $mode != 'quote')
	{
		// boardwatch only should be sent for new posts or replies (including posts), so return if not one of those
		return;
	}

	$template = ($mode == 'post') ? 'boardwatch_post' : 'boardwatch_reply';

	$sql = 'SELECT user_id, username, user_email, user_lang, user_notify_type, user_jabber, user_boardwatchb, user_notify_status
		FROM ' . USERS_TABLE . '
		WHERE user_boardwatchb <> ' . BOARDWATCH_NO . '
			AND user_notify_status = 0
			AND user_id NOT IN (' . $sql_ignore_users . ')
			AND user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')';
	$result = $db->sql_query($sql);

	$boardwatch_yes_but_list = '';
	while ($row = $db->sql_fetchrow($result))
	{
		$notify_rows[$row['user_id']] = array(
			'user_id'				=> $row['user_id'],
			'username'				=> $row['username'],
			'user_email'			=> $row['user_email'],
			'user_jabber'			=> $row['user_jabber'],
			'user_lang'				=> $row['user_lang'],
			'user_notify_status'	=> $row['user_notify_status'],
			'notify_type'			=> 'boardwatch',
			'yes_but'				=> ($row['user_boardwatchb'] == BOARDWATCH_YES_BUT) ? true : false,
			'template'				=> ($mode == 'post') ? 'boardwatch_post' : 'boardwatch_reply',
			'method'				=> $row['user_notify_type'],
			'allowed'				=> false
		);

		if ($row['user_boardwatchb'] == BOARDWATCH_YES_BUT)
		{
			$boardwatch_yes_but_list .= ', ' . $row['user_id'];
		}
	}
	$db->sql_freeresult($result);

	// make sure the subsequent topic and forum notices don't go out to people already receiving boardwatch notices
	if (sizeof($notify_rows))
	{
		$sql_ignore_users .= ', ' . implode(', ', array_keys($notify_rows));
	}

	return trim($boardwatch_yes_but_list, ', ');
}


/**
* update the boardwatch_status entry in the users table
*/
function update_boardwatch_status($boardwatch_yes_but_list)
{
	global $db;

	// if there is anyone in the yes but list, set notify status flag to 1 for them so they won't be notified again till they revisit site
	if ($boardwatch_yes_but_list)
	{
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_notify_status = 1
			WHERE user_id IN (' . $boardwatch_yes_but_list . ')';
		$db->sql_query($sql);
	}
}

/**
*   This function does the following:
*   -   turns any quote or code bbcode tag into a simple plain text lead-in to or
*      exit from the quote or code block (if the post has a quote tag that specifies
*      a particular person that is being quoted, the code adds at the beginning the plain text
*      words "written by John Brown" or whoever the quote is from),
*
*   -   turns the [*] bbocode (marking a list item) into a simple plain text asterisk,
*
*   -   turns a url or img with an alias into a simple plain text url or img with brackets around it and
*
*   -   strips out all other bbcode.
*
*   Thanks to Merlin Sythove for helping me (asinshesq) come up with this code
*/
function bbcode_process_to_plain_text($text, $bbcode_uid = '', $lang)
{
   // First, add a colon before bbcode_uid since all bbcode_uid identifiers are always preceded by a colon
   $bbcode_uid = ':' . $bbcode_uid;

   // Next, remove slashes
   $text = html_entity_decode(trim(stripslashes($text)));

   // Before we start with bbcode removal, convert html links or email addresses to plain text
   $text = preg_replace('/<!-- w --><a class="postlink" href="http:\/\/(.*?)">(.*?)<\/a><!-- w -->/', '\\1', $text);
   $text = preg_replace('/<!-- m --><a class="postlink" href="http:\/\/(.*?)">(.*?)<\/a><!-- m -->/', '\\1', $text);
   $text = preg_replace('/<!-- e --><a href="mailto:(.*?)">(.*?)<\/a><!-- e -->/', '\\1', $text);
   $text = preg_replace('/<!-- s(.*?) --><img src="(.*?)" alt="(.*?)" title="(.*?)" \/><!-- s(.*?) -->/', '[\\4]', $text);

   // Now, we define the plain text markers used for [ quote ] and [ code ] blocks, list items, and [ img ] open and close tags
   $newline = "\r\n";
   $q1 = $newline . '>>>>>>>>>>>>>>>>>>>>>>' . $newline; // quote or code opening marker
   $q2 = $newline . '<<<<<<<<<<<<<<<<<<<<<<' . $newline; $newline; // quote or code closing marker
   $l1 = $newline . '   (*) '; // list item marker
   $img1 = '[' . $lang['IMAGE_AT'] . ': '; // img opening marker
   $img2 = ' ]'; // img closing marker

   // Next, replace open and close quote tags with plain text versions
    $text = preg_replace('/\[quote=\"(.*?)\"' . $bbcode_uid . '\]/', $newline . '\\1 '. $lang['WROTE'].':'.$q1, $text);
   $text = preg_replace('/\[quote' . $bbcode_uid . '\]/', $newline . $lang['QUOTE'].':'.$q1, $text);
   $text = preg_replace('/\[\/quote' . $bbcode_uid . '\]/', $q2, $text);

   // And now, replace code tags with plain text versions
   $text = preg_replace('/\[code' . $bbcode_uid . '\]/', $newline . $lang['CODE'].':'.$q1, $text);
   $text = preg_replace('/\[\/code' . $bbcode_uid . '\]/', $q2, $text);

   // Now, replace any open or close brackets that have been converted by phpbb into [ or ] (e.g if nested inside of code tags)
   $text = preg_replace('/&#91;/', '[', $text);
   $text = preg_replace('/&#93;/', ']', $text);

   // Next, change list item bbcode ([*]) into simple asterisks (note: does not process list numbers or letters)
   $text = preg_replace('/\[\*' . $bbcode_uid . '\]/', $l1, $text);

   // Now, process image and url bbcode (get rid of aliases and insert the actual image or url address; put images inside of square prackets).
   $text = preg_replace('/\[img' . $bbcode_uid . '\](.*?)\[\/img' . $bbcode_uid . '\]/', $img1 .'\\1' . $img2, $text);
   $text = preg_replace('/\[url=(.*?)' . $bbcode_uid . '\](.*?)\[\/url' . $bbcode_uid . '\]/', '\\1', $text);
   $text = preg_replace('/\[url' . $bbcode_uid . '\](.*?)\[\/url' . $bbcode_uid . '\]/', '\\1', $text);

   // Now, remove all bracketed expressions with bbcode_uid identifier in them
   $text = preg_replace('/\[([^[]*?)' . $bbcode_uid . '([^]]*?)\]/', '', $text);

   // And finally, change multiple blank lines into one blank line
   $text = preg_replace('/(\\r\\n){3,}/s', $newline.$newline, $text);

   return $text;
}


/**
* look up the post_text and bbcode_uid
*/
function fetch_posttext($post_id)
{
   global $db;

   // user is including post text in notice, so fetch bbcode_uid for the post and run text through
   // bbcode_process_to_plain_text() to clean up any bbcode in it
   $sql = 'SELECT post_text, bbcode_uid
      FROM ' . POSTS_TABLE . '
      WHERE post_id = ' . $post_id;
   $result = $db->sql_query($sql);
   $row = $db->sql_fetchrow($result);

   return array('post_text' => $row['post_text'], 'bbcode_uid' => $row['bbcode_uid']);
}

?>