<?php
/**
*
* language/en/mods/info_ucp_boardwatch.php [English]
*
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine



// The following language definitions are used in the postnotices to groups mod.
$lang = array_merge($lang, array(

	// language definitions for UMIL installation
	'BOARDWATCH1'					=> 'Boardwatch installation script',
	'INSTALL_BOARDWATCH1'			=> 'Install boardwatch module, permissions and database fields',
	'INSTALL_BOARDWATCH1_CONFIRM'	=> 'Are you ready to install boardwatch module, permissions and database fields?',
	'UPDATE_BOARDWATCH1'			=> 'Update boardwatch to latest version',
	'UPDATE_BOARDWATCH1_CONFIRM'	=> 'Are you ready to update boardwatch to the latest version?',
	'UNINSTALL_BOARDWATCH1'			=> 'Uninstall boardwatch',
	'UNINSTALL_BOARDWATCH1_CONFIRM'	=> 'Are you ready to uninstall boardwatch module, permissions and database fields?',

	// language definitions used in the UCP
	'BOARDWATCH'				=> 'Post notification options',
	'BOARDWATCH_BOARDWATCH'		=> 'Send me notice of all posts, even where I am not subscribed to the forum or topic',
	'BOARDWATCH_EDIT_OPTIONS'	=> 'Edit post notification options',
	'BOARDWATCH_FORUMWATCH'		=> 'When I subscribe to a forum, send me notice of all posts in the forum',
	'BOARDWATCH_NO_OPTIONS'		=> 'You have no post notification options available',
	'BOARDWATCH_TOPICWATCH'		=> 'When I subscribe to a topic, send me notice of all posts in the topic',
	'BOARDWATCH_YES_BUT'		=> 'Yes, but only once between visits to the site',
	'FORUMWATCH_YES_BUT'		=> 'Yes, but only once between visits to the forum',
	'TOPICWATCH_YES_BUT'		=> 'Yes, but only once between visits to the topic',
	// language definitions used when converting a bbcode encoded message to plain text
   'CODE'                              => 'Code',
   'IMAGE_AT'                           => 'Image at',
   'QUOTE'                              => 'Quote',
   'WROTE'                              => 'wrote',

));

?>