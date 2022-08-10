<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\migrations;

class update_1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\rightheaderimage\migrations\rightheaderimage_schema');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.update', array('rightheaderimage_version', '1.0.1')),
			array('config.add', array('rightheaderimage_search', 0)),
		);
	}
}
