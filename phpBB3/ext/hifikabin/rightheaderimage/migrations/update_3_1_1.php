<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\migrations;

class update_3_1_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\rightheaderimage\migrations\update_3_1_0');
	}

	public function update_data()
	{
		return array(
			// Remove configs
			array('config.remove', array('rightheaderimage_version', '')),
		);
	}
}
