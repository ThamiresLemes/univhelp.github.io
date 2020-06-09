<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\acp;

class rightheaderimage_info
	{
		function module()
	{
		return array(
			'filename' => '\hifikabin\rightheaderimage\acp\rightheaderimage_module',
			'title' => 'ACP_RIGHTHEADERIMAGE',
			'modes' => array(
				'config' => array('title' => 'ACP_RIGHTHEADERIMAGE_CONFIG', 'auth' => 'ext_hifikabin/rightheaderimage && acl_a_board', 'cat' => array('ACP_RIGHTHEADERIMAGE')),
			),
		);
	}
}
