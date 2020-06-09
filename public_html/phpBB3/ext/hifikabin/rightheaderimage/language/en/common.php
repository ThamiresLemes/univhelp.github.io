<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_RIGHTHEADERIMAGE_CONFIG'				=> 'Right Header Image',
	'ACP_RIGHTHEADERIMAGE_CONFIG_EXPLAIN'		=> 'This is configuration page for the Right Header Image extension. The header bar of your forum will size automatically to accommodate the image size.',

	'ACP_RIGHTHEADERIMAGE_CONFIG_SET'			=> 'Configuration',
	'RIGHTHEADERIMAGE_CONFIG_SAVED'				=> 'Right Header Image settings saved',

	'RIGHTHEADERIMAGE_ENABLE'					=> 'Enable Right Header Image',
	'RIGHTHEADERIMAGE_ENABLE_EXPLAIN'			=> 'Do you want to enable the Right Header Image EXT?',

	'RIGHTHEADERIMAGE_SEARCH'					=> 'Search',
	'RIGHTHEADERIMAGE_SEARCH_EXPLAIN'			=> 'Do you want to show the Search in the NavBar when Right Header Image is enabled?',

	'RIGHTHEADERIMAGE_IMAGE_URL'				=> 'Right Header Image URL',
	'RIGHTHEADERIMAGE_IMAGE_URL_EXPLAIN'		=> 'Enter the full URL of the image INCLUDING  http:// ',
	'RIGHTHEADERIMAGE_IMAGE_URL_PLACEHOLDER'	=> 'http://image.jpg',

	'RIGHTHEADERIMAGE_IMAGE_LINK'				=> 'Right Header Image Link URL',
	'RIGHTHEADERIMAGE_IMAGE_LINK_EXPLAIN'		=> 'Enter the full URL of the page you wish to link the image to INCLUDING http:// ',
	'RIGHTHEADERIMAGE_IMAGE_LINK_PLACEHOLDER'	=> 'http://link.com',

	'RIGHTHEADERIMAGE_TARGET'					=> 'Link Target',
	'RIGHTHEADERIMAGE_TARGET_EXPLAIN'			=> 'What do you want to happen when the image is clicked?' ,
	'RIGHTHEADERIMAGE_TARGET_NOTHING'			=> 'Nothing' ,
	'RIGHTHEADERIMAGE_TARGET_SAME'				=> 'Open link in the same tab' ,
	'RIGHTHEADERIMAGE_TARGET_NEW'				=> 'Open link in a new tab' ,

	'RIGHTHEADERIMAGE_RESIZE'					=> 'Image Size',
	'RIGHTHEADERIMAGE_RESIZE_EXPLAIN'			=> 'You can change the maxium size of the image here but be aware that larger images may upset the layout within the header. Default is 200' ,

	'RIGHTHEADERIMAGE_REQUIRE_3.1.4'			=> 'This extension requires phpBB 3.1.4 or higher and will not work with 3.2.0 or later.',
	'RIGHTHEADERIMAGE_REQUIRE_3.2.0'			=> 'This extension is for phpBB 3.2.0 or higher and will not work with 3.1.0.',
));
