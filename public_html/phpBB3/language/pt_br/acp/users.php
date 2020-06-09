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
	'ADMIN_SIG_PREVIEW'		=> 'Previsão da assinatura', 
	'AT_LEAST_ONE_FOUNDER'	=> 'Você não pode alterar este fundador para um usuário normal. É necessário ter no mínimo um fundador para este painel. Se você deseja alterar os status deste fundador, deverá promover outro usuário para esta condição primeiro.', 

	'BAN_ALREADY_ENTERED'	=> 'O banimento já havia sido previamente informado. A lista de banimentos não foi atualizada.',
	'BAN_SUCCESSFUL'		=> 'O banimento foi enviado com sucesso.',
	
	'CANNOT_BAN_ANONYMOUS'			=> 'Você não tem permissão de banir uma conta anônima. Permissões para usuários anônimos podem ser definidas na guia Permissões.',
	'CANNOT_BAN_FOUNDER'			=> 'Você não está autorizado a banir registros de fundador.',
	'CANNOT_BAN_YOURSELF'			=> 'Você não está autorizado a banir a si próprio.', 
	'CANNOT_DEACTIVATE_BOT'			=> 'Você não está autorizado a desativar registros de bots. Por favor, desative o bot com a respectiva página de gerenciamento dos bots.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Você não está autorizado a desativar registros de fundador.',	
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Você não está autorizado a desativar a si próprio.', 
	'CANNOT_FORCE_REACT_BOT'		=> 'Você não está autorizado a forçar a reativação de registros de bots. Por favor, reative o bot com a respectiva página de gerenciamento dos bots.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Você não está autorizado a forçar a reativação de uma conta de fundador.',		
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Você não está autorizado a forçar a sua própria reativação.', 
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Você não está autorizado a excluir o registro do usuário convidado.', 
	'CANNOT_REMOVE_FOUNDER'			=> 'Você não está autorizado a excluir contas de fundador.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Você não está autorizado a excluir a si próprio.', 
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Você não está autorizado a promover usuários ignorados a serem fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Você precisa ativar os usuários antes de você os promover a fundadores. Somente usuários ativos podem ser promovidos.',	
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Você apenas deve especificar isto se você estiver alterando o endereço de e-mail dos usuários.', 
	 
	'DELETE_POSTS'			=> 'Excluir mensagens', 
	'DELETE_USER'			=> 'Excluir usuário', 
	'DELETE_USER_EXPLAIN'	=> 'Atenção: Se você excluir o usuário selecionado, não poderá restaurá-lo novamente. Mensagens privadas não lidas enviadas por este usuário serão excluídas e não estarão disponíveis aos seus destinatários.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'A reativação foi forçada com sucesso.',
	'FOUNDER'						=> 'Fundador', 
	'FOUNDER_EXPLAIN'				=> 'Os fundadores não podem ser banidos, excluídos ou alterados por membros não-fundadores.',

	'GROUP_APPROVE'					=> 'Aprovar membro',
	'GROUP_DEFAULT'					=> 'Tornar grupo padrão ao membro', 
	'GROUP_DELETE'					=> 'Excluir membro do grupo', 
	'GROUP_DEMOTE'					=> 'Demitir líder do grupo', 
	'GROUP_PROMOTE'					=> 'Promover a líder do grupo', 

	'IP_WHOIS_FOR'			=> 'Qual é o IP para %s', 

	'LAST_ACTIVE'			=> 'Últimos ativos', 

	'MOVE_POSTS_EXPLAIN'	=> 'Selecione o fórum para o qual você deseja mover todas as mensagens que este usuário enviou.', 

	'NO_SPECIAL_RANK'		=> 'Não foi especificado nenhum rank especial', 
	'NO_WARNINGS'			=> 'Não há advertências.',
	'NOT_MANAGE_FOUNDER'	=> 'Você tentou gerenciar um usuário com status de fundador. Apenas fundadores podem gerenciar outros fundadores.', 

	'QUICK_TOOLS'			=> 'Ferramentas rápidas', 

	'REGISTERED'			=> 'Registrado em', 
	'REGISTERED_IP'			=> 'Registrado a partir do IP', 
	'RETAIN_POSTS'			=> 'Reter mensagens', 

	'SELECT_FORM'			=> 'Selecionar um formulário', 
	'SELECT_USER'			=> 'Selecionar um usuário', 

	'USER_ADMIN'					=> 'Administração de usuários', 
	'USER_ADMIN_ACTIVATE'			=> 'Ativar registro', 
	'USER_ADMIN_ACTIVATED'			=> 'O usuário foi ativado com sucesso.', 
	'USER_ADMIN_AVATAR_REMOVED'		=> 'O avatar foi excluído com sucesso.', 
	'USER_ADMIN_BAN_EMAIL'			=> 'Banir por e-mail', 
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Endereço de e-mail banido pelo gerenciamento de usuários.',
	'USER_ADMIN_BAN_IP'				=> 'Banir por IP', 
	'USER_ADMIN_BAN_IP_REASON'		=> 'Endereço de IP banido pelo gerenciamento de usuários.', 
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nome de usuário banido pelo gerenciamento de usuários.', 
	'USER_ADMIN_BAN_USER'			=> 'Banir por nome de usuário', 
	'USER_ADMIN_DEACTIVATE'			=> 'Desativar registro', 
	'USER_ADMIN_DEACTIVED'			=> 'O usuário foi desativado com sucesso.', 
	'USER_ADMIN_DEL_ATTACH'			=> 'Excluir todos os anexos', 
	'USER_ADMIN_DEL_AVATAR'			=> 'Excluir avatar', 
	'USER_ADMIN_DEL_OUTBOX'			=> 'Esvaziar caixa de saída de MPs',
	'USER_ADMIN_DEL_POSTS'			=> 'Excluir todas as mensagens', 
	'USER_ADMIN_DEL_SIG'			=> 'Excluir assinatura', 
	'USER_ADMIN_EXPLAIN'			=> 'Aqui você pode alterar as informações de seus usuários e determinadas opções específicas.', 
	'USER_ADMIN_FORCE'				=> 'Forçar a reativação',
	'USER_ADMIN_LEAVE_NR'			=> 'Remover do grupo de usuários registrados recentemente',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todas as mensagens', 
	'USER_ADMIN_SIG_REMOVED'		=> 'A assinatura foi excluída com sucesso.', 
	'USER_ATTACHMENTS_REMOVED'		=> 'Os anexos foram excluídos com sucesso.', 
	'USER_AVATAR_NOT_ALLOWED'		=> 'O avatar não pode ser exibido porque o sistema de avatares foi desativado.',
	'USER_AVATAR_UPDATED'			=> 'As informações do avatar foram atualizadas com sucesso.', 
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'O avatar atual não pode ser exibido porque o seu tipo de arquivo foi desativado.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil customizados', 
	'USER_DELETED'					=> 'O usuário selecionado foi excluído com sucesso.', 
	'USER_GROUP_ADD'				=> 'Adicionar usuário ao grupo', 
	'USER_GROUP_NORMAL'				=> 'Grupos normais aos quais o usuário é membro', 
	'USER_GROUP_PENDING'			=> 'Grupos aos quais o usuário está com sua a inscrição pendente', 
	'USER_GROUP_SPECIAL'            => 'Grupos pré-definidos aos quais o usuário é membro',
	'USER_LIFTED_NR'				=> 'Os status de usuário recentemente registrado foram removidos com sucesso.',
	'USER_NO_ATTACHMENTS'           => 'Não há arquivos anexos para exibição.',
	'USER_NO_POSTS_TO_DELETE'		=> 'O usuário não possui mensagens para reter ou excluir.',
	'USER_OUTBOX_EMPTIED'			=> 'A caixa de saída do usuário foi esvaziada com sucesso.',
	'USER_OUTBOX_EMPTY'				=> 'A caixa de saída do usuário já encontra-se esvaziada.',
	'USER_OVERVIEW_UPDATED'			=> 'As informações do usuário selecionado foram atualizadas com sucesso.', 
	'USER_POSTS_DELETED'			=> 'As mensagens do usuário foram excluídas com sucesso.', 
	'USER_POSTS_MOVED'				=> 'As mensagens dos usuários foram movidas com sucesso.', 
	'USER_PREFS_UPDATED'			=> 'As preferências do usuário foram atualizadas com sucesso.', 
	'USER_PROFILE'					=> 'Perfil do usuário', 
	'USER_PROFILE_UPDATED'			=> 'O perfil do usuário foi atualizado com sucesso.', 
	'USER_RANK'						=> 'Rank do usuário', 
	'USER_RANK_UPDATED'				=> 'O rank do usuário foi atualizado com sucesso.', 
	'USER_SIG_UPDATED'				=> 'A assinatura do usuário foi atualizada com sucesso.', 
	'USER_WARNING_LOG_DELETED'		=> 'Não há informação disponível. Possivelmente as entradas do log tenham sido excluídas.',
	'USER_TOOLS'					=> 'Ferramentas básicas',
));
