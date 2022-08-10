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
	'APPROVE'						=> 'Aprovar',
	'ATTACHMENT'						=> 'Anexo',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'A ferramenta de anexos encontra-se desativada.',

	'BOOKMARK_ADDED'		=> 'O tópico foi adicionado aos favoritos com sucesso.',
	'BOOKMARK_ERR'			=> 'Erro ao adicionar o tópico aos favoritos. Por favor, tente novamente.',
	'BOOKMARK_REMOVED'		=> 'O tópico foi excluído dos favoritos com sucesso.',
	'BOOKMARK_TOPIC'		=> 'Adicionar aos favoritos',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Excluir dos favoritos',
	'BUMPED_BY'				=> 'Ressuscitado pela última vez por %1$s em %2$s.',
	'BUMP_TOPIC'			=> 'Ressuscitar',

	'CODE'					=> 'Código',

	'DELETE_TOPIC'			=> 'Excluir',
	'DELETED_INFORMATION'				=> 'Excluído por %1$s em %2$s',
	'DISAPPROVE'						=> 'Reprovar',
	'DOWNLOAD_NOTICE'		=> 'Você não está autorizado a ver ou baixar esse anexo.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Editado pela última vez por %2$s em %3$s, em um total de %1$d vez.',
		2	=> 'Editado pela última vez por %2$s em %3$s, em um total de %1$d vezes.',
	),
	'EMAIL_TOPIC'			=> 'Enviar para um amigo',
	'ERROR_NO_ATTACHMENT'	=> 'O anexo selecionado já não existe mais.',

	'FILE_NOT_FOUND_404'	=> 'O arquivo <strong>%s</strong> não existe.',
	'FORK_TOPIC'			=> 'Copiar',
	'FULL_EDITOR'			=> 'Editor Completo',

	'LINKAGE_FORBIDDEN'		=> 'Você não está autorizado a ver, baixar, ou criar links de/para este site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Você foi notificado sobre este tópico. Por favor, faça o login para visualizá-lo.',
	'LOGIN_VIEWTOPIC'		=> 'O administrador exige que você esteja registrado e autenticado para visualizar este tópico.',

	'MAKE_ANNOUNCE'				=> 'Marcar como "Anúncio"',
	'MAKE_GLOBAL'				=> 'Marcar como "Global"',
	'MAKE_NORMAL'				=> 'Marcar como "Normal"',
	'MAKE_STICKY'				=> 'Marcar como "Fixo"',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Você pode selecionar somente <strong>%d</strong> opção',
		2	=> 'Você pode selecionar até <strong>%d</strong> opções',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> não se encontra mais disponível',
	'MOVE_TOPIC'				=> 'Mover',

	'NO_ATTACHMENT_SELECTED'=> 'O Anexo deve ser selecionado',
	'NO_NEWER_TOPICS'		=> 'Não há tópicos novos neste fórum.',
	'NO_OLDER_TOPICS'		=> 'Não há tópicos antigos neste fórum.',
	'NO_UNREAD_POSTS'		=> 'Não há mensagens novas não lidas neste tópico.',
	'NO_VOTE_OPTION'		=> 'Você deve selecionar uma opção de voto.',
	'NO_VOTES'				=> 'Não há votos registrados',
	'NO_AUTH_PRINT_TOPIC'	=> 'Você não está autorizado a imprimir tópicos.',

	'POLL_ENDED_AT'			=> 'Esta enquete foi concluída em %s',
	'POLL_RUN_TILL'			=> 'Esta enquete será concluída em %s',
	'POLL_VOTED_OPTION'		=> 'Você já votou nessa opção',
	'POST_DELETED_RESTORE'	=> 'Esta mensagem foi excluída. Pode ser restaurada.',
	'PRINT_TOPIC'			=> 'Exibir página para impressão',

	'QUICK_MOD'				=> 'Ferramentas rápidas',
	'QUICKREPLY'			=> 'Resposta Rápida',
	'QUOTE'					=> 'Citação',

	'REPLY_TO_TOPIC'		=> 'Responder',
	'RESTORE'				=> 'Restaurar',
	'RESTORE_TOPIC'			=> 'Restaurar tópico',
	'RETURN_POST'			=> '%sVoltar à sua Mensagem%s',

	'SUBMIT_VOTE'			=> 'Votar',

	'TOPIC_TOOLS'			=> 'Ferramentas do Tópico',
	'TOTAL_VOTES'			=> 'Total de votos',

	'UNLOCK_TOPIC'			=> 'Destrancar',

	'VIEW_INFO'				=> 'Informações da mensagem',
	'VIEW_NEXT_TOPIC'		=> 'Exibir próximo tópico',
	'VIEW_PREVIOUS_TOPIC'	=> 'Exibir tópico anterior',
	'VIEW_RESULTS'			=> 'Exibir resultados',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d mensagem',
		2	=> '%d mensagens',
	),
	'VIEW_UNREAD_POST'		=> 'Primeira mensagem não lida',
	'VOTE_SUBMITTED'		=> 'O seu voto foi registrado.',
	'VOTE_CONVERTED'        => 'Mudanças de voto não são permitidas para enquetes convertidas.',

));
