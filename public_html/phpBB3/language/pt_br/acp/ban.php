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

// Banning 
$lang = array_merge($lang, array( 
 	'1_HOUR'		=> '1 hora', 
	'30_MINS'		=> '30 minutos', 
	'6_HOURS'		=> '6 horas', 

	'ACP_BAN_EXPLAIN'	=> 'Aqui você pode controlar os banimentos de usuários por nome, endereço de IP, ou endereço de e-mail. Estes métodos proíbem o usuário de acessar a qualquer parte do fórum. Você pode especificar uma pequena razão para o banimento (máximo de 3000 caracteres) se assim desejar. Esta razão será exibida no log do administrador. A duração do banimento também pode ser selecionada. Se você quiser que o banimento termine em uma data específica depois de outro período de tempo configurado, selecione <span style="text-decoration: underline;">Até -&gt;</span> para a longevidade do mesmo e escreva a data no formato <kbd>AAAA-MM-DD</kbd>, ou seja, em ano-mês-dia.',

	'BAN_EXCLUDE'			=> 'Excluir banimento',
	'BAN_LENGTH'			=> 'Duração do banimento',
	'BAN_REASON'			=> 'Razão para o banimento',
	'BAN_GIVE_REASON'		=> 'Razão para o banimento mostrada ao banido',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A lista de banimentos foi atualizada com sucesso.',
	'BANNED_UNTIL_DATE'		=> 'até %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (até %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"
	
	'EMAIL_BAN'					=> 'Banir um ou mais endereços de e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Ative a seguinte opção para banir a todos os endereços de e-mail desejados.',
	'EMAIL_BAN_EXPLAIN'			=> 'Quando você utilizar mais de um endereço de e-mail, separe cada item em uma nova linha. Para selecionar endereços de e-mail parciais, utilize asteriscos (*), como por exemplo, <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.', 
	'EMAIL_NO_BANNED'			=> 'Não há endereços de e-mail banidos', 
	'EMAIL_UNBAN'				=> 'Desbanir um ou mais endereços de e-mail', 
	'EMAIL_UNBAN_EXPLAIN'		=> 'Você pode desbanir diversos endereços de e-mail de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador. Os e-mails banidos possuem uma seleção ao fundo.', 

	'IP_BAN'					=> 'Banir um ou mais endereços de IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Ative a seguinte opção para banir a todos os endereços de IP desejados.',
	'IP_BAN_EXPLAIN'			=> 'Quando você utilizar mais de um endereço de IP ou hostname, separe cada item numa nova linha. Para selecionar um grupo de endereços de IP, separe o início do fim com um hífen (-). Você também pode utilizar asteriscos (*).', 
	'IP_HOSTNAME'				=> 'Endereços de IP ou hostnames', 
	'IP_NO_BANNED'				=> 'Não há endereços de IP banidos', 
	'IP_UNBAN'					=> 'Desbanir um ou mais endereços de IP', 
	'IP_UNBAN_EXPLAIN'			=> 'Você pode desbanir diversos endereços de IP de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador. Endereços de IP banidos possuem uma seleção ao fundo.', 

	'LENGTH_BAN_INVALID'		=> 'O formato da data deve ser <kbd>AAAA-MM-DD</kbd>.',
	'OPTIONS_BANNED'			=> 'Banido',
	'OPTIONS_EXCLUDED'			=> 'Excluído',

	'PERMANENT'		=> 'Permanente', 

	'UNTIL'						=> 'Até',
	'USER_BAN'					=> 'Banir um ou mais usuários selecionados',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Ative a seguinte opção para excluir os usuários acima de todos os banimentos atuais.',
	'USER_BAN_EXPLAIN'			=> 'Você pode banir diversos usuários de uma só vez, separando cada item em uma nova linha. Use a opção <span style="text-decoration: underline;">Encontrar um usuário</span> para pesquisar e adicionar um ou mais usuários automaticamente.', 
	'USER_NO_BANNED'			=> 'Não há nomes de usuários banidos', 
	'USER_UNBAN'				=> 'Desbanir um ou mais usuários', 
	'USER_UNBAN_EXPLAIN'		=> 'Você pode desbanir diversos usuários de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador. Os usuários banidos possuem uma seleção ao fundo.', 
));
