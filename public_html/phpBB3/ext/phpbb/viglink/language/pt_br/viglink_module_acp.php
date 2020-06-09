<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Configurações do VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink é um serviço de terceiros que pode discretamente rentabilizar os links postados por usuários do seu fórum sem que isso tenha um impacto sobre a experiência do usuário. Quando os usuários clicam em links para produtos ou serviços e compram algo em um comerciante parceiro, este paga uma comissão ao VigLink e parte do montante é compartilhada com o projeto phpBB. Ao escolher ativar o VigLink e deixando as comissões para o projeto phpBB, você ajuda muito o nossa organização de software de código aberto e assegura a continuidade da nossa segurança financeira.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Você pode alterar essas configurações a qualquer momento no painel “<a href="%1$s">Configurações do VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Você não vai ser redirecionado para esta página depois de ter preenchido as suas preferências disponíveis abaixo, clicando no botão Enviar.',
	'ACP_VIGLINK_ENABLE'			=> 'Ativar VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Ativa o uso dos serviços VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Reivindicar quota de comissões (opcional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Você pode reivindicar a sua quota de comissões sobre as vendas geradas ao VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Serviços VigLink foram desativados pelo phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Reivindicar quota de comissões',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Você pode obter todas as comissões de vendas sobre as ações geradas a partir dos links monetizado para o seu fórum em vez de pagar estas ações como doações para o projeto phpBB. Para gerenciar as configurações de conta, você deve ter uma conta “VigLink Convert” clicando em “Converter conta”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Converter conta',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'O link para sua conta VigLink não foi encontrado.',
));
