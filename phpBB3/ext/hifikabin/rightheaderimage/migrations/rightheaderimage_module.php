<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\migrations;

class rightheaderimage_module extends \phpbb\db\migration\migration
{
   
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_RIGHTHEADERIMAGE')),
			array('module.add', array(
				'acp', 'ACP_RIGHTHEADERIMAGE', array(
					'module_basename' => '\hifikabin\rightheaderimage\acp\rightheaderimage_module', 'modes'   => array('config'),
				),
			)),
		);
	}
}
