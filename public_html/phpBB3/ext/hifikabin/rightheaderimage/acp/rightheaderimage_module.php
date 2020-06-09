<?php
/**
*
* @package phpBB Extension - Right Header Image
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\rightheaderimage\acp;

class rightheaderimage_module
{
var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request;
		global $config;

		$this->tpl_name = 'acp_rightheaderimage_config';
		$this->page_title = $user->lang('RIGHTHEADERIMAGE_CONFIG');
		add_form_key('acp_rightheaderimage_config');
      
		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_rightheaderimage_config'))
		{
			trigger_error('FORM_INVALID');
		}
		$config->set('rightheaderimage_enable', $request->variable('rightheaderimage_enable', 0));
		$config->set('rightheaderimage_search', $request->variable('rightheaderimage_search', 0));
		$config->set('rightheaderimage_image_url', $request->variable('rightheaderimage_image_url', ''));
		$config->set('rightheaderimage_image_link', $request->variable('rightheaderimage_image_link', ''));
		$config->set('rightheaderimage_target', $request->variable('rightheaderimage_target', 0));
		$config->set('rightheaderimage_resize', $request->variable('rightheaderimage_resize', 0));

		trigger_error($user->lang('RIGHTHEADERIMAGE_CONFIG_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'RIGHTHEADERIMAGE_ENABLE'			=> $config['rightheaderimage_enable'],
			'RIGHTHEADERIMAGE_SEARCH'			=> $config['rightheaderimage_search'],
			'RIGHTHEADERIMAGE_IMAGE_URL'		=> $config['rightheaderimage_image_url'],
			'RIGHTHEADERIMAGE_IMAGE_LINK'		=> $config['rightheaderimage_image_link'],
			'RIGHTHEADERIMAGE_TARGET'			=> $config['rightheaderimage_target'],
			'RIGHTHEADERIMAGE_RESIZE'			=> $config['rightheaderimage_resize'],
			'U_ACTION'							=> $this->u_action,
		));
	}
}
