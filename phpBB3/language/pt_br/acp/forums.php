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

// Forum Admin 
$lang = array_merge($lang, array( 
	'AUTO_PRUNE_DAYS'			=> 'Dias para a limpeza', 
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de dias desde a última mensagem depois que cada tópico é excluído.', 
	'AUTO_PRUNE_FREQ'			=> 'Frequência da auto-limpeza', 
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo em dias entre a execução de uma limpeza e outra.', 
	'AUTO_PRUNE_VIEWED'			=> 'Dias para a limpeza pela data de visualização', 
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de dias desde a última visualização depois que cada tópico é excluído.', 
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Frequência da auto-limpeza de tópicos fantasma',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Idade de tópicos fantasma para auto-limpeza',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Número de dias após o qual tópico fantasma é excluído.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Tempo em dias entre a execução de uma limpeza e outra.',

	'CONTINUE'						=> 'Continuar',
	'COPY_PERMISSIONS'				=> 'Copiar permissões de', 
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitar a configuração de permissões para o seu novo fórum, você pode copiar as permissões de um já existente.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Quando criado, este fórum possuirá as mesmas permissões do qual você selecionar aqui. Se nenhum fórum for selecionado, o fórum recentemente criado não será visível até que as suas permissões sejam atribuídas.', 
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se você desejar copiar as permissões, este fórum possuirá as mesmas permissões do qual você selecionar aqui. Isto irá substituir quaisquer permissões que você tenha previamente atribuído à este fórum com as permissões do fórum que você selecionou aqui. Se nenhum fórum for selecionado, as permissões atuais serão salvas.', 
	'COPY_TO_ACL'					=> 'Alternativamente, você também pode %sdefinir novas permissões%s para este fórum.',
	'CREATE_FORUM'					=> 'Criar novo fórum', 

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Excluir mensagens ou mover para fórum', 
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Excluir sub fóruns ou mover para fórum', 
	'DEFAULT_STYLE'						=> 'Estilo padrão', 
	'DELETE_ALL_POSTS'					=> 'Excluir mensagens', 
	'DELETE_SUBFORUMS'					=> 'Excluir sub fóruns e mensagens', 
	'DISPLAY_ACTIVE_TOPICS'				=> 'Permitir exibição de tópicos ativos:',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se você selecionar sim, serão exibidos os tópicos ativos abaixo desta categoria.',

	'EDIT_FORUM'					=> 'Editar fórum', 
	'ENABLE_INDEXING'				=> 'Ativar atributos da pesquisa', 
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se você selecionar sim, mensagens escritas à este fórum serão indexadas para pesquisas.', 
	'ENABLE_POST_REVIEW'			=> 'Ativar revisão das mensagens', 
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se você selecionar sim, os usuários poderão fazer uma revisão nas mensagens enviadas ao tópico, enquanto eles escreveram as deles. Isto deveria ser desativado para fóruns de chat geral.', 
	'ENABLE_QUICK_REPLY'			=> 'Ativar resposta rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Ativar resposta rápida nesse fórum. Essa configuração não será considerada se a resposta rápida estiver desativada no fórum em geral. A resposta rápida só será mostrada para usuários que possuírem permissão para postar no fórum.',
	'ENABLE_RECENT'					=> 'Exibir tópicos ativos', 
	'ENABLE_RECENT_EXPLAIN'			=> 'Se você selecionar sim, tópicos escritos à este fórum serão exibidos na lista de tópicos ativos.', 
	'ENABLE_TOPIC_ICONS'			=> 'Ativar ícones de tópicos', 

	'FORUM_ADMIN'						=> 'Administração de fóruns', 
	'FORUM_ADMIN_EXPLAIN'				=> 'No phpBB3 tudo é baseado em fóruns. Uma categoria é apenas um tipo especial de fórum. Cada fórum pode obter ilimitados números de sub fóruns e você pode determinar o que poderá ser enviado à cada um ou não. Aqui você pode adicionar, editar, excluir, trancar, destrancar fóruns individuais assim como incluir controles adicionais. Se as suas mensagens e tópicos estiverem fora de sincronização, você também pode re-sincronizar os seus fóruns. <strong>Você deve copiar ou atribuir as permissões necessárias para que os fóruns recentemente criados sejam exibidos.</strong>', 
	'FORUM_AUTO_PRUNE'					=> 'Ativar auto-limpeza', 
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Limpeza dos tópicos do fórum, determinando os parâmetros de frequência/tempo abaixo.', 
	'FORUM_CREATED'						=> 'O fórum foi criado com sucesso.', 
	'FORUM_DATA_NEGATIVE'				=> 'Os parâmetros da limpeza não podem ser negativos.', 
	'FORUM_DESC_TOO_LONG'				=> 'A sua descrição é muito grande. Ela deve ser menor que 4000 caracteres.', 
	'FORUM_DELETE'						=> 'Excluir fórum', 
	'FORUM_DELETE_EXPLAIN'				=> 'Esta ferramenta lhe permite excluir uma determinado fórum. Se este for um fórum de grande número de mensagens, você pode decidir para onde deseja mover todas as suas mensagens (ou fóruns) incluídas,', 
	'FORUM_DELETED'						=> 'O fórum selecionado foi excluído com sucesso.', 
	'FORUM_DESC'						=> 'Descrição', 
	'FORUM_DESC_EXPLAIN'				=> 'As tags HTML inseridas neste campo serão exibidas como tal. Se o tipo de fórum selecionado for uma categoria, a descrição não será exibida.',
	'FORUM_EDIT_EXPLAIN'				=> 'Esta ferramenta lhe permitirá customizar o seu fórum. Por favor, note que a moderação e o controle do contador de mensagens são determinados pelas permissões de fóruns para cada usuário ou grupo.', 
	'FORUM_IMAGE'						=> 'Imagem do fórum', 
	'FORUM_IMAGE_EXPLAIN'				=> 'Local da imagem (relativo à pasta raíz do phpBB), para uma imagem adicional associada a este fórum.', 
	'FORUM_IMAGE_NO_EXIST'				=> 'A imagem do fórum especificada não existe.',
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incluindo o protocolo, ex. <samp>http://</samp>) para o local em que o usuário será redirecionado ao clicar, ex. <samp>http://www.phpbb.com/</samp> ou <samp>http://www.suportephpbb.com.br/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Salvar redirecionamento de links', 
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Salva o número de vezes em que o link de um fórum foi clicado.', 
	'FORUM_NAME'						=> 'Nome do fórum', 
	'FORUM_NAME_EMPTY'					=> 'Você deve escrever um nome para este fórum.',
	'FORUM_NAME_EMOJI'					=> 'O nome do fórum que você digitou é inválido.<br>Contém os seguintes caracteres não suportados:<br>%s',
	'FORUM_PARENT'						=> 'Fórum pai', 
	'FORUM_PASSWORD'					=> 'Senha do fórum', 
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar senha do fórum', 
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Apenas precisa ser preenchido se uma senha for atribuída ao fórum.', 
	'FORUM_PASSWORD_EXPLAIN'			=> 'Define uma senha para este fórum. Utilize o sistema de permissões de sua preferência.', 
	'FORUM_PASSWORD_UNSET'              => 'Excluir senha do fórum',
    'FORUM_PASSWORD_UNSET_EXPLAIN'      => 'Selecione aqui se você deseja excluir a senha do fórum.',
    'FORUM_PASSWORD_OLD'				=> 'A senha do fórum está utilizando um método de criptografia antigo e deve ser modificada.',
	'FORUM_PASSWORD_MISMATCH'			=> 'As senhas escritas aqui não coincidem entre si.', 
	'FORUM_PRUNE_SETTINGS'				=> 'Configuração da limpeza de fóruns', 
	'FORUM_PRUNE_SHADOW'				=> 'Ativar auto-limpeza de tópicos fantasma',
	'FORUM_PRUNE_SHADOW_EXPLAIN'		=> 'Limpeza dos tópicos fantasma do fórum, determinando os parâmetros de frequência/tempo abaixo.',
	'FORUM_RESYNCED'					=> 'O fórum "%s" foi re-sincronizado com sucesso.', 
	'FORUM_RULES_EXPLAIN'				=> 'As regras do fórum são exibidas em qualquer página com o fórum selecionado.', 
	'FORUM_RULES_LINK'					=> 'Link para as Regras do Fórum', 
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Você pode escrever a URL da página/mensagem contendo as regras de seu fórum aqui. Esta configuração irá substituir o texto de regras do fórum que você especificou.', 
	'FORUM_RULES_PREVIEW'				=> 'Previsão das regras do fórum', 
	'FORUM_RULES_TOO_LONG'				=> 'As regras do fórum são muito grandes. Elas devem ser menores que 4000 caracteres.', 
	'FORUM_SETTINGS'					=> 'Configurações do fórum', 
	'FORUM_STATUS'						=> 'Estado do fórum', 
	'FORUM_STYLE'						=> 'Estilo do fórum', 
	'FORUM_TOPICS_PAGE'					=> 'Número máximo de tópicos por página', 
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se não zero, este valor irá substituir a configuração padrão de tópicos por página.', 
	'FORUM_TYPE'						=> 'Tipo de fórum', 
	'FORUM_UPDATED'						=> 'A configuração do fórum foi atualizada com sucesso.',

    'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Você está tentando modificar um fórum contendo sub fóruns para um link. Por favor, mova todos os seus sub fóruns antes de prosseguir, porque depois de alterá-lo para um link você não poderá mais visualizar os sub fóruns conectados a este fórum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Configuração geral dos fóruns', 

	'LINK'					=> 'Link', 
	'LIST_INDEX'			=> 'Listar sub fórum na legenda do fórum pai', 
	'LIST_INDEX_EXPLAIN'	=> 'Exibe este fórum no índice e qualquer lugar do painel como um link na legenda de seu fórum pai se a opção "Listar sub fóruns na legenda" estiver ativada.', 
	'LIST_SUBFORUMS'            => 'Listar sub fóruns na legenda',
    'LIST_SUBFORUMS_EXPLAIN'    => 'Exibe os sub fóruns deste fórum no índice e qualquer lugar do painel como um link na legenda de seu fórum pai se a opção "Listar sub fórum na legenda do fórum pai" estiver ativada.',
	'LOCKED'				=> 'Trancado', 

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'O fórum escolhido para mover as mensagens não pode receber mensagens. Selecione um fórum que possa receber mensagens novas.',
	'MOVE_POSTS_TO'					=> 'Mover mensagens para', 
	'MOVE_SUBFORUMS_TO'				=> 'Mover sub fóruns para', 

	'NO_DESTINATION_FORUM'			=> 'Você não especificou um fórum para mover o conteúdo.', 
	'NO_FORUM_ACTION'				=> 'Sem ações definidas para o conteúdo do fórum.', 
	'NO_PARENT'						=> 'Sem pai', 
	'NO_PERMISSIONS'				=> 'Não copiar permissões', 
	'NO_PERMISSION_FORUM_ADD'		=> 'Você não possui as permissões necessárias para adicionar fóruns.', 
	'NO_PERMISSION_FORUM_DELETE'	=> 'Você não possui as permissões necessárias para excluir fóruns.', 

	'PARENT_IS_LINK_FORUM'		=> 'O fórum pai especificado é um fórum em forma de link. Fóruns em forma de links não podem possuir sub fóruns, por favor, selecione outro fórum ou categoria.',
	'PARENT_NOT_EXIST'			=> 'O pai selecionado não existe.', 
	'PRUNE_ANNOUNCEMENTS'		=> 'Limpar anúncios', 
	'PRUNE_STICKY'				=> 'Limpar tópicos fixos', 
	'PRUNE_OLD_POLLS'			=> 'Limpar enquetes antigas', 
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Exclui tópicos com enquetes que não tenham sido votadas dentro de um determinado período.', 

	'REDIRECT_ACL'	=> 'Agora você pode %satribuir permissões%s para este fórum.', 

	'SYNC_IN_PROGRESS'			=> 'Sincronizando fórum', 
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Atualmente re-sincronizando a ordem dos tópicos %1$d/%2$d.', 

	'TYPE_CAT'			=> 'Categoria', 
	'TYPE_FORUM'		=> 'Fórum', 
	'TYPE_LINK'			=> 'Link', 
	'UNLOCKED'			=> 'Destrancado', 
));
