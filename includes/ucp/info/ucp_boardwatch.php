<?php
/**
*
* @package ucp
* @version $Id: includes/ucp/info/ucp_boardwatch
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class ucp_boardwatch_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_boardwatch',
			'title'		=> 'BOARDWATCH_EDIT_OPTIONS',
			'version'	=> '1.0.0e',
			'modes'		=> array(
				'boardwatch'			=> array('title' => 'BOARDWATCH_EDIT_OPTIONS', 'auth' => 'acl_u_boardwatchb || acl_u_boardwatchf || acl_u_boardwatcht', 'cat' => ''),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>