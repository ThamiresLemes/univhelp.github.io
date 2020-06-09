<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
		'core.user_setup'   => 'load_language_on_setup',
		'core.page_header' => 'add_page_header_link',
		'core.page_header_after' => 'header_rightheaderimage',
		);
	}

	protected $template;

	protected $config;

	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->config = $config;
	}

   
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'hifikabin/rightheaderimage',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
		'RIGHTHEADERIMAGE_ENABLE'			=> $this->config['rightheaderimage_enable'],
		'RIGHTHEADERIMAGE_SEARCH'			=> $this->config['rightheaderimage_search'] ,
		'RIGHTHEADERIMAGE_TARGET'			=> $this->config['rightheaderimage_target'] ,
		'RIGHTHEADERIMAGE_IMAGE_URL'		=> $this->config['rightheaderimage_image_url'] ,
		'RIGHTHEADERIMAGE_IMAGE_LINK'		=> $this->config['rightheaderimage_image_link'] ,
		'RIGHTHEADERIMAGE_RESIZE'			=> $this->config['rightheaderimage_resize'] ,
		));
	}

	public function header_rightheaderimage($event)
	{
		$this->template->assign_vars(array(
			'S_IN_SEARCH'		=> ($this->config['rightheaderimage_enable']) ? true : false,
		));
	}
}
