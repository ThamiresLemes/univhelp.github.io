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
	'ACP_PERMISSIONS_EXPLAIN'	=> ' 
		<p>As permissões gerais em seu phpBB3 são bastante abrangentes e agrupadas em quatro grandes grupos, que são:</p> 

		<h2>1 - Permissões Globais</h2>
		<p>Aqui você pode controlar o acesso em um nível global e aplicar ao fórum inteiro. As permissões aqui ainda são dividias em permissões de usuário, permissões de grupo, administradores e moderadores globais.</p>

		<h2>2 - Permissões Baseadas em Fóruns</h2>
		<p>Aqui você pode controlar o acesso por bases de fóruns. As permissões aqui ainda são dividias em permissões de fóruns, moderadores de fóruns, permissões de usuário em fóruns e permissões de grupo em fóruns.</p>

		<h2>3 - Tarefas de Permissão</h2>
		<p>Aqui você pode criar diferentes termos de permissão para os diversos tipos de permissões existentes. As configurações padrão devem acobertar a administração do fórum, entretanto com uma das quatro divisões, você ainda pode adicionar/editar/excluir configurações se assim desejar ou achar necessário.</p>

		<h2>Máscaras de Permissão</h2>
		<p>Aqui você pode visualizar as permissões efetivas atribuídas a usuários, moderadores (locais e globais), administradores ou fóruns.</p> 
	 
		<br /> 

		<p>Para maiores informações sobre as suas configurações e o gerenciamento de permissões em seu phpBB3, veja a seção em <a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/permissions/">Setting permissions of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Nunca', 
	'ACL_SET'				=> 'Permissões configuradas', 
	'ACL_SET_EXPLAIN'		=> 'Permissões são baseadas em um simples sistema de <strong>SIM</strong>/<strong>NÃO</strong>. Configurando qualquer opção em <strong>Nunca</strong> para um usuário ou grupo irá substituir qualquer valor atribuído aos mesmos. Se você não deseja atribuir um valor de qualquer opção para este usuário ou grupo, selecione <strong>NÃO</strong>. Se valores são atribuídos para esta opção ou em outra qualquer, eles serão preferencialmente utilizados, senão o <strong>NUNCA</strong> assumirá este valor. Todos os objetos selecionados (com a checkbox em frente a eles) irão copiar as permissões que você definiu.', 
	'ACL_SETTING'			=> 'Configuração', 

	'ACL_TYPE_A_'			=> 'Permissões de administrador', 
	'ACL_TYPE_F_'			=> 'Permissões de fóruns', 
	'ACL_TYPE_M_'			=> 'Permissões de moderador', 
	'ACL_TYPE_U_'			=> 'Permissões de usuário', 

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissões de administrador', 
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissões de usuário', 
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissões de moderador global', 
	'ACL_TYPE_LOCAL_M_'		=> 'Permissões de moderador de fórum', 
	'ACL_TYPE_LOCAL_F_'		=> 'Permissões de fóruns', 
	 
	'ACL_NO'				=> 'Não', 
	'ACL_VIEW'				=> 'Vendo as permissões', 
	'ACL_VIEW_EXPLAIN'		=> 'Aqui você pode ver as permissões efetivas que os usuários/grupos estão possuindo. Um quadrado vermelho indica que o usuário/grupo não possui a permissão, um quadrado verde indica que o usuário/grupo possui a permissão.', 
	'ACL_YES'				=> 'Sim', 

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqui você pode determinar permissões administrativas para usuários e grupos. Todos os usuários com permissões administrativas podem entrar no painel de administração.', 
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqui você pode determinar usuários e grupos como moderadores do fórum. Para determinar permissões de usuário, para definir permissões de moderadores globais ou administradores, por favor, use a página apropriada.', 
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqui você pode alterar o quê usuários e Grupos poderão acessar a cada fórum. Para determinar moderadores ou administradores, por favor, use a página apropriada.', 
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Aqui você pode copiar as permissões de um fórum para outro ou mais fóruns.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqui você pode determinar permissões de moderadores globais para usuários e grupos. Estes moderadores são como moderadores usuais, exceto se eles tiverem acesso a todos os fóruns do painel.', 
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode determinar permissões de fóruns para grupos.', 
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqui você pode determinar permissões globais para grupos - permissões de usuário, permissões globais e permissões administrativas. As permissões de usuário incluem capacidades de uso de avatares, envio de mensagens privadas e etc; Permissões globais incluem a aprovação de mensagens, gerenciamento de tópicos, gerenciamento de banimentos e etc; Por último, as permissões administrativas incluem a alteração de permissões, definição de BBCodes, gerenciamento de fóruns e etc. Permissões de usuário individuais devem apenas ser alteradas em ocasiões raras, e o método mais apropriado é adicionando os usuários em grupos e alterando as permissões destes grupos.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqui você pode gerenciar as tarefas para permissões administrativas. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuídos a mesma terão suas permissões alteradas também.', 
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqui você pode gerenciar as tarefas para permissões dos fóruns. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuídos a mesma terão suas permissões alteradas também.', 
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqui você pode gerenciar as tarefas para permissões de moderador. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuídos a mesma terão suas permissões alteradas também.', 
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqui você pode gerenciar as tarefas para permissões de usuários. Tarefas são permissões efetivas. Se você alterar uma tarefa, os itens atribuídos a mesma terão suas permissões alteradas também.', 
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode determinar permissões de fóruns para usuários.', 
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqui você pode determinar permissões globais para usuário - As permissões de usuário incluem capacidades de uso de avatares, envio de mensagens privadas e etc; Permissões globais incluem a aprovação de mensagens, gerenciamento de tópicos, gerenciamento de banimentos etc; Por último, as permissões administrativas como a alteração de permissões, definição de BBCodes, gerenciamento de fóruns e etc. Para alterar estas configurações à um grande número de usuários, o sistema de permissões de grupo é o método mais aconselhável. Permissões de usuário individuais devem apenas ser alteradas em ocasiões raras, e o método mais apropriado é adicionando os usuários em grupos e alterando as permissões destes grupos.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode ver as permissões administrativas efetivas determinadas aos usuários/grupos selecionados.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui você pode ver as permissões globais determinadas aos usuários/grupos selecionados.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode ver as permissões de fóruns determinadas aos usuários/grupos e fóruns selecionadas.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui você pode ver as permissões de moderador de fóruns determinadas aos usuários/grupos e fóruns selecionadas.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aqui você pode ver as permissões de usuários efetivas determinadas aos usuários/grupos selecionados.',

	'ADD_GROUPS'				=> 'Adicionar grupos', 
	'ADD_PERMISSIONS'			=> 'Adicionar permissões', 
	'ADD_USERS'					=> 'Adicionar usuários', 
	'ADVANCED_PERMISSIONS'		=> 'Permissões avançadas', 
	'ALL_GROUPS'				=> 'Selecionar todos os grupos', 
	'ALL_NEVER'					=> 'Tudo <strong>Nunca</strong>', 
	'ALL_NO'					=> 'Tudo <strong>Não</strong>', 
	'ALL_USERS'					=> 'Selecionar todos os usuários', 
	'ALL_YES'					=> 'Tudo <strong>Sim</strong>', 
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar todas as permissões', 
	'APPLY_PERMISSIONS'			=> 'Aplicar permissões', 
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'As permissões e tarefas definidas para este item serão apenas aplicadas a ele e todos os outros selecionados.', 
	'AUTH_UPDATED'				=> 'As permissões foram atualizadas com sucesso.', 

	'COPY_PERMISSIONS_CONFIRM'				=> 'Você deseja realmente prosseguir com esta operação? Por favor, esteja ciente de que isto irá substituir quaisquer permissões existentes nos alvos selecionados.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'O fórum a partir do qual você deseja copiar as permissões.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Os fóruns de destino para os quais você deseja aplicar as permissões.',
	'COPY_PERMISSIONS_FROM'					=> 'Copiar permissões de',
	'COPY_PERMISSIONS_TO'					=> 'Aplicar permissões para',
	
	'CREATE_ROLE'				=> 'Criar tarefa', 
	'CREATE_ROLE_FROM'			=> 'Usar configurações de…', 
	'CUSTOM'					=> 'Personalizar', 

	'DEFAULT'					=> 'Padrão', 
	'DELETE_ROLE'				=> 'Excluir tarefa', 
	'DELETE_ROLE_CONFIRM'		=> 'Você deseja realmente excluir esta tarefa? Itens atribuídos a esta tarefa <strong>não</strong> perderão a sua configuração de permissões.', 
	'DISPLAY_ROLE_ITEMS'		=> 'Ver itens utilizando esta tarefa', 

	'EDIT_PERMISSIONS'			=> 'Editar permissões', 
	'EDIT_ROLE'					=> 'Editar tarefa', 

	'GROUPS_NOT_ASSIGNED'		=> 'Nenhum grupo foi atribuído a esta tarefa', 

	'LOOK_UP_GROUP'				=> 'Encontrar um grupo', 
	'LOOK_UP_USER'				=> 'Encontrar um usuário', 

	'MANAGE_GROUPS'		=> 'Administrar grupos', 
	'MANAGE_USERS'		=> 'Administrar usuários', 

	'NO_AUTH_SETTING_FOUND'		=> 'A configuração de permissões não foi definida.', 
	'NO_ROLE_ASSIGNED'			=> 'Nenhuma tarefa atribuída…', 
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'A configuração para esta tarefa não alterou as permissões na direita. Se você deseja desativar/excluir todas as permissões você deve utilizar o link "Tudo <strong>Não</strong>".', 
	'NO_ROLE_AVAILABLE'			=> 'Não há tarefas disponíveis', 
	'NO_ROLE_NAME_SPECIFIED'	=> 'Por favor, nomeie a tarefa.', 
	'NO_ROLE_SELECTED'			=> 'A tarefa não foi encontrada.', 
	'NO_USER_GROUP_SELECTED'	=> 'Você não selecionou nenhum usuário ou grupo.', 

	'ONLY_FORUM_DEFINED'	=> 'Você apenas definiu fóruns em sua seleção. Por favor, selecione também pelo menos um usuário ou um grupo.', 

	'PERMISSION_APPLIED_TO_ALL'		=> 'As tarefas e permissões também serão aplicadas a todos os objetos selecionados', 
	'PLUS_SUBFORUMS'				=> '+ Sub fóruns', 

	'REMOVE_PERMISSIONS'			=> 'Excluir permissões', 
	'REMOVE_ROLE'					=> 'Excluir tarefa', 
	'RESULTING_PERMISSION'			=> 'Resultando permissão',
	'ROLE'							=> 'Tarefa', 
	'ROLE_ADD_SUCCESS'				=> 'A tarefa foi adicionada com sucesso.', 
	'ROLE_ASSIGNED_TO'				=> 'Os usuários/grupos foram atribuídos a %s', 
	'ROLE_DELETED'					=> 'A tarefa foi excluída com sucesso.', 
	'ROLE_DESCRIPTION'				=> 'Descrição da tarefa', 

	'ROLE_ADMIN_FORUM'			=> 'Administração de fóruns', 
	'ROLE_ADMIN_FULL'			=> 'Administração completa', 
	'ROLE_ADMIN_STANDARD'		=> 'Administração padrão', 
	'ROLE_ADMIN_USERGROUP'		=> 'Administração de usuários e grupos', 
	'ROLE_FORUM_BOT'			=> 'Acesso de Bot', 
	'ROLE_FORUM_FULL'			=> 'Acesso completo', 
	'ROLE_FORUM_LIMITED'		=> 'Acesso limitado', 
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acesso limitado + enquetes', 
	'ROLE_FORUM_NOACCESS'		=> 'Sem acesso', 
	'ROLE_FORUM_ONQUEUE'		=> 'Na lista de moderação', 
	'ROLE_FORUM_POLLS'			=> 'Acesso + enquetes padrão', 
	'ROLE_FORUM_READONLY'		=> 'Acesso de leitura apenas', 
	'ROLE_FORUM_STANDARD'		=> 'Acesso padrão', 
	'ROLE_FORUM_NEW_MEMBER'		=> 'Acesso de Usuário registrado recentemente',
	'ROLE_MOD_FULL'				=> 'Moderador completo', 
	'ROLE_MOD_QUEUE'			=> 'Moderador da lista', 
	'ROLE_MOD_SIMPLE'			=> 'Moderador simples', 
	'ROLE_MOD_STANDARD'			=> 'Moderador padrão', 
	'ROLE_USER_FULL'			=> 'Todas as permissões', 
	'ROLE_USER_LIMITED'			=> 'Permissões limitadas', 
	'ROLE_USER_NOAVATAR'		=> 'Sem avatar', 
	'ROLE_USER_NOPM'			=> 'Sem mensagens privadas', 
	'ROLE_USER_STANDARD'		=> 'Permissões padrão', 
	'ROLE_USER_NEW_MEMBER'		=> 'Recursos de Usuário registrado recentemente',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pode acessar as configurações de gerenciamento e permissões de fóruns.', 
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Pode acessar à todas as funções administrativas neste fórum.<br />Não recomendado.', 
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Pode acessar à maior parte das funções administrativas, mas não está autorizado a utilizar ferramentas relacionadas ao servidor ou ao sistema.', 
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Pode gerenciar grupos e usuários: Pode alterar permissões, configurações, gerenciar banimentos e ranks.', 
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Esta tarefa é recomendada para BOTs de pesquisa.', 
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode utilizar todas as funções de fóruns, incluindo o envio de anúncios e tópicos fixos. Pode também ignorar o limite de flood.<br />Não recomendado para usuários normais.', 
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode utilizar algumas funções de fóruns, mas não anexar arquivos ou utilizar ícones de mensagens.', 
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Como o acesso limitado, mas também pode criar enquetes.', 
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Não pode ver ou acessar o fórum.', 
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode utilizar a maior parte das funções de fóruns, incluindo os anexos, mas tópicos e mensagens precisam ser aprovadas por um moderador.', 
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Como o acesso padrão, mas pode criar enquetes.', 
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode ler o fórum, mas não pode criar novos tópicos ou responder mensagens.', 
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode utilizar a maior parte das funções de fóruns, incluindo os anexos, mas não pode trancar ou excluir os próprios tópicos, e não pode criar enquetes.', 
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Uma tarefa para os membros do grupo especial de usuários registrados recentemente; contém as permissões <strong>NUNCA</strong> para privar o uso de determinadas ferramentas por novos usuários.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode utilizar todas as funções de moderador, incluindo os banimentos.', 
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode utilizar a lista de moderação para validar e editar mensagens, porém nada mais.', 
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode utilizar apenas opções básicas de tópicos. Não pode enviar advertências ou utilizar a lista de moderação.', 
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode utilizar a maior parte das ferramentas de moderador, mas não pode banir usuários ou alterar o autor da mensagem.', 
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode utilizar todas as funções do fórum disponíveis para usuários, incluindo a alteração do nome de usuário ou ignorar o limite de flood.<br />Não recomendado.', 
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode acessar algumas das funções de usuários. Anexos, e-mails, ou mensagens instantâneas não são permitidos.', 
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ter funções limitadas e não está permitido a utilizar avatares.', 
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ter funções limitadas e não está permitido a utilizar mensagens privadas.', 
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode ter acesso à maior parte das funções, mas não todas as ferramentas do usuário. Não pode alterar o nome de usuário ou ignorar o limite de flood, por exemplo.', 
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Uma tarefa para os membros do grupo especial de usuários registrados recentemente; contém as permissões <strong>NUNCA</strong> para privar o uso de determinadas ferramentas por novos usuários.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Você pode escrever uma pequena explicação sobre o quê a tarefa está realizando ou sobre qual o objetivo da mesma. O texto escrito aqui será exibido com as telas de permissão também.', 
	'ROLE_DESCRIPTION_LONG'			=> 'A descrição da tarefa é muito grande. Por favor, limite seu texto a 4000 caracteres', 
	'ROLE_DETAILS'					=> 'Informações da tarefa', 
	'ROLE_EDIT_SUCCESS'				=> 'A tarefa foi editada com sucesso.', 
	'ROLE_NAME'						=> 'Nome da tarefa', 
	'ROLE_NAME_ALREADY_EXIST'		=> 'Uma tarefa nomeada <strong>%s</strong> já existe para o tipo de permissão especificado.', 
	'ROLE_NOT_ASSIGNED'				=> 'A tarefa ainda não foi atribuída.', 

	'SELECTED_FORUM_NOT_EXIST'		=> 'Os fóruns selecionados não existem.', 
	'SELECTED_GROUP_NOT_EXIST'		=> 'Os grupos selecionados não existem.', 
	'SELECTED_USER_NOT_EXIST'		=> 'Os usuários selecionados não existem.', 
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'O fórum selecionado aqui irá incluir todas os seus subfóruns nesta seleção.', 
	'SELECT_ROLE'					=> 'Selecionar tarefa…', 
	'SELECT_TYPE'					=> 'Selecionar tipo', 
	'SET_PERMISSIONS'				=> 'Atribuir permissões', 
	'SET_ROLE_PERMISSIONS'			=> 'Atribuir permissões da tarefa', 
	'SET_USERS_PERMISSIONS'			=> 'Atribuir permissões de usuário',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Atribuir permissões de usuário no fórum',

	'TRACE_DEFAULT'					=> 'Por padrão, todas as opções estão assinaladas como <strong>NÃO</strong> (desativadas). Então, a permissão pode ser substituída por outras configurações.', 
	'TRACE_FOR'						=> 'Copiar para', 
	'TRACE_GLOBAL_SETTING'			=> '%s (global)', 
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'A permissão do grupo está assinalada como <strong>NUNCA</strong> como o resultado total, então o resultado antigo foi salvo.', 
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>NUNCA</strong>, então o antigo resultado total foi salvo.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'A permissão do grupo está assinalada como <strong>NUNCA</strong> que torna-se o novo valor total pois ainda não havia sido definido (assinale <strong>NÃO</strong>).', 
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>NUNCA</strong> que vem a ser o novo valor total porque isto ainda não havia sido determinado (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'A permissão do grupo está assinalada como <strong>NUNCA</strong> que substitui o total <strong>SIM</strong> para um <strong>NUNCA</strong> para este usuário.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>NUNCA</strong> que substitui o total <strong>SIM</strong> para um <strong>NUNCA</strong> a este usuário.',
	'TRACE_GROUP_NO'				=> 'A permissão do grupo está assinalada como <strong>NÃO</strong>, o antigo valor total foi salvo.',
	'TRACE_GROUP_NO_LOCAL'			=> 'A permissão do grupo está assinalada como <strong>NÃO</strong>, o antigo valor total foi salvo.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'A permissão do grupo está assinalada como <strong>SIM</strong>, mas o total <strong>NUNCA</strong> não pode ser substituído.', 
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>SIM</strong>, mas o total <strong>NUNCA</strong> não pode ser substítuido.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'A permissão do grupo está assinalada como <strong>SIM</strong> que torna-se o novo valor total porque ainda não estava assinalado (assinale <strong>NÃO</strong>).', 
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>SIM</strong> que se torna um novo valor total pois ainda não havia sido definido (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'A permissão do grupo está assinalada como <strong>SIM</strong> e a permissão total já está assinalada como <strong>SIM</strong>, então o antigo resultado total foi salvo.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'A permissão do grupo para este fórum está assinalada como <strong>SIM</strong> e a permissão total já está assinalada como <strong>SIM</strong>, então o antigo resultado total foi salvo.',
	'TRACE_PERMISSION'				=> 'Traçar permissão - %s', 
	'TRACE_RESULT'					=> 'Traçar resultado',
	'TRACE_SETTING'					=> 'Traçar configuração', 

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A permissão de usuário independente do fórum está assinalada como <strong>SIM</strong>, mas a permissão total já estava definida como <strong>SIM</strong>, então o antigo resultado total será salvo. %sTraçar Permissão Global%s', 
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A permissão de usuário independente do fórum está assinalada como <strong>SIM</strong> que substitui o resultado local atual <strong>NUNCA</strong>. %sTraçar Permissão Global%s', 
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A permissão de usuário independente do fórum está assinalada como <strong>NUNCA</strong> que não influencia na permissão local. %sTraçar Permissão Global%s', 

	'TRACE_USER_FOUNDER'					=> 'O usuário é um fundador, por isso as permissões administrativas estão sempre assinaladas como <strong>SIM</strong>.', 
	'TRACE_USER_KEPT'						=> 'A permissão dos usuário para este fórum está assinalada como <strong>NÃO</strong>, então o antigo valor total será salvo.', 
	'TRACE_USER_KEPT_LOCAL'			        => 'A permissão do usuário está assinalada como <strong>NUNCA</strong> e o valor total está assinalado como <strong>NUNCA</strong>, então nada será alterado.', 
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A permissão do usuário para este fórum está assinalada como <strong>NUNCA</strong> e o valor total já está assinalado como <strong>NUNCA</strong>, então nada será alterado.', 
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A permissão do usuário para este fórum está assinalada como <strong>NUNCA</strong> e substitui o valor <strong>SIM</strong> prévio.', 
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A permissão do usuário está assinalada como <strong>NUNCA</strong> que torna-se o valor total pois havia sido definido como <strong>NÃO</strong>.', 
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A permissão do usuário está assinalada como <strong>SIM</strong>, mas o total <strong>NUNCA</strong> não pode ser substituido.', 
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A permissão do usuário está assinalada como <strong>SIM</strong> que torna-se o valor total porque estava assinalado como <strong>NÃO</strong>.', 
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A permissão do usuário está assinalada como <strong>SIM</strong> e o valor total é assinalado como <strong>SIM</strong>, então nada será alterado.', 
	'TRACE_USER_NO_TOTAL_NO'				=> 'A permissão do usuário está assinalada como <strong>NÃO</strong>, mas o valor total estava definido como <strong>NÃO</strong> que torna-se pré-definido para <strong>NUNCA</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A permissão deste usuário para este fórum é <strong>NÃO</strong> and the total e o valor total estava definido como NÃO então é pré-definido para <strong>NUNCA</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A permissão do usuário está assinalada como <strong>SIM</strong>, mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A permissão do usuário está assinalada como <strong>SIM</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A permissão do usuário está assinalada como <strong>SIM</strong> que torna-se o valor total pois havia sido definido como <strong>NÃO</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A permissão do usuário está assinalada como <strong>SIM</strong> que se torna o valor total porque estava definido como <strong>NÃO</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A permissão do usuário está assinalada como <strong>SIM</strong> e o valor total já está assinalado como <strong>SIM</strong>, então nada será alterado.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A permissão do usuário para este fórum está assinalada como <strong>SIM</strong> e o valor total está assinalado como <strong>SIM</strong>, então nada será alterado.',
	'TRACE_WHO'								=> 'Quem', 
	'TRACE_TOTAL'							=> 'Total', 

	'USERS_NOT_ASSIGNED'			=> 'Nenhum usuário foi atribuído para esta tarefa.', 
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'é um membro dos seguintes grupos pré-definidos.', 
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'é um membro dos seguintes grupos personalizados.', 

	'VIEW_ASSIGNED_ITEMS'	=> 'Ver itens atribuídos', 
	'VIEW_LOCAL_PERMS'		=> 'Permissões locais', 
	'VIEW_GLOBAL_PERMS'		=> 'Permissões globais', 
	'VIEW_PERMISSIONS'		=> 'Ver permissões', 

	'WRONG_PERMISSION_TYPE'	            => 'Tipo de permissão falha selecionado.', 
	'WRONG_PERMISSION_SETTING_FORMAT'   => 'A configuração das permissões está em um formato inválido, e o phpBB não pode processá-lo corretamente.', 
));
