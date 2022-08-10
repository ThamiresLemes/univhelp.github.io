<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Tópicos ativos',
	'ANNOUNCEMENTS'			=> 'Anúncios',

	'FORUM_PERMISSIONS'		=> 'Permissões do fórum',

	'ICON_ANNOUNCEMENT'		=> 'Anúncio',
	'ICON_STICKY'			=> 'Tópico fixo',

	'LOGIN_NOTIFY_FORUM'	=> 'Você foi notificado sobre este fórum. Por favor, faça o login para visualizá-lo.',

	'MARK_TOPICS_READ'		=> 'Marcar todos os tópicos como lidos',

	'NEW_POSTS_HOT'			=> 'Mensagens novas [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Mensagens novas [ Trancadas ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Não há mensagens novas [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Não há mensagens novas [ Trancadas ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Você não possui as permissões requeridas para ver e ler tópicos neste fórum.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Esta categoria não possui fóruns.',
	'NO_UNREAD_POSTS_HOT'	=> 'Nenhuma mensagem não lida [ Populares ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nenhuma mensagem não lida [ Trancadas ]',

	'POST_FORUM_LOCKED'		=> 'Este fórum está trancado',

	'TOPICS_MARKED'			=> 'Todos os tópicos foram marcados como lidos',

	'UNREAD_POSTS_HOT'		=> 'Mensagens não lidas [ Populares ]',
	'UNREAD_POSTS_LOCKED'	=> 'Mensagens não lidas [ Trancadas ]',

	'VIEW_FORUM'			=> 'Exibir fórum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tópico',
		2	=> '%d tópicos',
	),

));
