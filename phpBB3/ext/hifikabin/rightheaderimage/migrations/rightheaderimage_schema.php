<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\migrations;

class rightheaderimage_schema extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}
   
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('rightheaderimage_enable', '')),
			array('config.add', array('rightheaderimage_image_url', '')),
			array('config.add', array('rightheaderimage_image_link', '')),
			array('config.add', array('rightheaderimage_version', '1.0.0')),
			array('config.add', array('rightheaderimage_target', '')),
		);
	}
}
