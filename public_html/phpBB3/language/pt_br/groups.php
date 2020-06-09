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
	'ALREADY_DEFAULT_GROUP'				=> 'O grupo selecionado já é o seu grupo padrão.',
	'ALREADY_IN_GROUP'					=> 'Você já é membro deste grupo.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Você já solicitou a sua inscrição ao grupo selecionado.',

	'CANNOT_JOIN_GROUP'        			=> 'Você não está autorizado a entrar neste grupo. Você pode apenas entrar em grupos abertos e livremente abertos.',
    'CANNOT_RESIGN_GROUP'      			=> 'Você não está autorizado a sair deste grupo.  Você pode apenas sair de grupos abertos e livremente abertos.',
	'CHANGED_DEFAULT_GROUP'	   			=> 'O grupo padrão foi alterado com sucesso.',
	 
	'GROUP_AVATAR'						=> 'Avatar do grupo', 
	'GROUP_CHANGE_DEFAULT'				=> 'Você deseja realmente alterar o seu grupo padrão para o grupo “%s”?', 
	'GROUP_CLOSED'						=> 'Fechado', 
	'GROUP_DESC'						=> 'Descrição do Grupo', 
	'GROUP_HIDDEN'						=> 'Invisível', 
	'GROUP_INFORMATION'					=> 'Informação do Grupo', 
	'GROUP_IS_CLOSED'					=> 'Este é um grupo fechado, novos membros somente poderão inscrever-se ao convite do líder do grupo.',
	'GROUP_IS_FREE'						=> 'Este é um grupo livremente aberto, todos os novos membros serão bem-vindos.', 
	'GROUP_IS_HIDDEN'					=> 'Este é um grupo invisível, somente os membros deste podem visualizá-lo.', 
	'GROUP_IS_OPEN'						=> 'Este é um grupo aberto, novos membros são aceitos.', 
	'GROUP_IS_SPECIAL'					=> 'Este é um grupo especial, sendo gerenciado diretamente pelos administradores.', 
	'GROUP_JOIN'						=> 'Entrar no Grupo', 
	'GROUP_JOIN_CONFIRM'				=> 'Você deseja realmente entrar no grupo selecionado?', 
	'GROUP_JOIN_PENDING'				=> 'Inscrever-se no Grupo', 
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Você deseja realmente inscrever-se no grupo selecionado?', 
	'GROUP_JOINED'						=> 'Você entrou no grupo selecionado com sucesso.', 
	'GROUP_JOINED_PENDING'				=> 'A sua inscrição foi enviada com sucesso. Por favor, aguarde até que um líder do grupo aprove a sua inscrição.', 
	'GROUP_LIST'						=> 'Administrar membros', 
	'GROUP_MEMBERS'						=> 'Membros do grupo', 
	'GROUP_NAME'						=> 'Nome do grupo', 
	'GROUP_OPEN'						=> 'Aberto', 
	'GROUP_RANK'						=> 'Rank do grupo', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Excluir inscrição', 
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Você deseja realmente excluir a sua inscrição do grupo selecionado?', 
	'GROUP_RESIGN_PENDING'				=> 'Excluir inscrição', 
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Você deseja realmente excluir a sua inscrição do grupo selecionado?', 
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'A sua inscrição foi excluída com sucesso.',
	'GROUP_RESIGNED_PENDING'			=> 'A sua inscrição foi excluída com sucesso.',
	'GROUP_TYPE'						=> 'Tipo do grupo', 
	'GROUP_UNDISCLOSED'					=> 'Grupo Invisível', 
	'FORUM_UNDISCLOSED'					=> 'Moderando fórum(ns) invisível(is)', 

	'LOGIN_EXPLAIN_GROUP'				=> 'Você precisa autenticar-se para ver as informações do grupo',

	'NO_LEADERS'						=> 'Você não é líder de nenhum grupo.',
	'NOT_LEADER_OF_GROUP'				=> 'A ação selecionada não pode ser realizada porque você não é líder do grupo selecionado.', 
	'NOT_MEMBER_OF_GROUP'				=> 'A ação selecionada não pode ser realizada porque você não é membro do grupo selecionado ou a sua inscrição talvez ainda não tenha sido aceita.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Você não está autorizado a sair de seu grupo padrão.', 

	'PRIMARY_GROUP'						=> 'Grupo primário', 

	'REMOVE_SELECTED'					=> 'Excluir selecionados', 

	'USER_GROUP_CHANGE'					=> 'Do grupo "%1$s" para "%2$s"', 
	'USER_GROUP_DEMOTE'					=> 'Demitir liderança', 
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Você deseja realmente demitir-se do grupo selecionado?', 
	'USER_GROUP_DEMOTED'				=> 'A sua demissão foi realizada com sucesso.', 
));
