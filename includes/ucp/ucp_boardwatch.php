<?php
/**
*
* includes/ucp/ucp_boardwatch.php
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



class ucp_boardwatch
{
	var $u_action;
	var $new_config;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		// get the current selections from the database to show as the default
		$sql = 'SELECT user_boardwatchb, user_boardwatchf, user_boardwatcht
			FROM ' . USERS_TABLE . '
			WHERE user_id = ' . $user->data['user_id'];
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		// is the user submitting his or her selections?
		if (isset($_POST['submit']))
		{
			// get the selections
			$boardwatchb_selection	= request_var('boardwatch', $row['user_boardwatchb']);
			$boardwatchf_selection	= request_var('forumwatch', $row['user_boardwatchb']);
			$boardwatcht_selection	= request_var('topicwatch', $row['user_boardwatchb']);

			$sql_ary = array(
				'user_boardwatchb'		=> $boardwatchb_selection,
				'user_boardwatchf'		=> $boardwatchf_selection,
				'user_boardwatcht'		=> $boardwatcht_selection,
				'user_notify_status'	=> 0
			);

			$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE user_id = ' . $user->data['user_id'];
			$db->sql_query($sql);

			meta_refresh(3, $this->u_action);
			$message = $user->lang['PREFERENCES_UPDATED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a>');
			trigger_error($message);
		}

		include($phpbb_root_path . 'includes/constants_boardwatch.' . $phpEx);
		$template->assign_vars(array(

			'S_BOARDWATCH_YES'			=> ($row['user_boardwatchb'] == BOARDWATCH_YES) ? true : false,
			'S_BOARDWATCH_YES_BUT'		=> ($row['user_boardwatchb'] == BOARDWATCH_YES_BUT) ? true : false,
			'S_BOARDWATCH_NO'			=> ($row['user_boardwatchb'] == BOARDWATCH_NO) ? true : false,
			'S_FORUMWATCH_YES'			=> ($row['user_boardwatchf'] == BOARDWATCH_YES) ? true : false,
			'S_FORUMWATCH_YES_BUT'		=> ($row['user_boardwatchf'] == BOARDWATCH_YES_BUT) ? true : false,
			'S_TOPICWATCH_YES'			=> ($row['user_boardwatcht'] == BOARDWATCH_YES) ? true : false,
			'S_TOPICWATCH_YES_BUT'		=> ($row['user_boardwatcht'] == BOARDWATCH_YES_BUT) ? true : false,
			'S_UCP_ACTION'				=> $this->u_action,
			'S_NO_BOARDWATCH_OPTIONS'	=> (!$auth->acl_get('u_boardwatchb') && !$auth->acl_get('u_boardwatchf') && !$auth->acl_get('u_boardwatcht')) ? true : false,
			'S_VIEW_BOARDWATCH_OPTIONS'	=> ($auth->acl_get('u_boardwatchb')) ? true :false,
			'S_VIEW_FORUMWATCH_OPTIONS'	=> ($auth->acl_get('u_boardwatchf')) ? true :false,
			'S_VIEW_TOPICWATCH_OPTIONS'	=> ($auth->acl_get('u_boardwatcht')) ? true :false,
		));
		$this->page_title = 'BOARDWATCH_EDIT_OPTIONS';
		$this->tpl_name = 'ucp_boardwatch';

	}
}



?>