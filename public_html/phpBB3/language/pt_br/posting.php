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
	'ADD_ATTACHMENT'			=> 'Adicionar um anexo',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se você deseja adicionar um anexo à sua mensagem, preencha os espaços abaixo corretamente.',
	'ADD_FILE'					=> 'Adicionar um anexo',
	'ADD_POLL'					=> 'Adicionar uma enquete',
	'ADD_POLL_EXPLAIN'			=> 'Se você não pretende adicionar uma enquete ao seu tópico, deixe os espaços abaixo em branco.',
	'ALREADY_DELETED'			=> 'Desculpe, mas a mensagem selecionada já foi excluída.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'O comentário do anexo contém caracteres proibidos (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Não há espaço livre suficiente no disco para postar este anexo.',
	'ATTACH_QUOTA_REACHED'		=> 'Desculpe, o limite de quota de anexos foi alcançado.',
	'ATTACH_SIG'				=> 'Anexar assinatura (assinaturas podem ser alteradas em UCP)',

	'BBCODE_A_HELP'				=> 'Anexo: [attachment=]arquivo.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Negrito: [b]texto[/b]',
	'BBCODE_C_HELP'				=> 'Código: [code]código[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Fonte: [size=85]texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s está <em>Inativo</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s está <em>Ativo</em>',
	'BBCODE_I_HELP'				=> 'Itálico: [i]texto[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]lista[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listar Itens: [*]texto',
	'BBCODE_O_HELP'				=> 'Lista Ordenada: isto é [list=1][*]Primeiro Item[/list] ou [list=a][*]Item a[/list]',
	'BBCODE_P_HELP'				=> 'Imagem: [img]http://url_da_imagem[/img]',
	'BBCODE_Q_HELP'				=> 'Citação: [quote]citação[/quote]',
	'BBCODE_S_HELP'				=> 'Cor: [color=red]texto[/color] ou [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Sublinhado: [u]texto[/u]',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]texto da URL[/url]  (alt+w)',
	'BBCODE_Y_HELP'				=> 'Lista: Adicionar um elemento à lista',
	'BUMP_ERROR'				=> 'Você não pode ressuscitar este tópico logo após uma última mensagem recente.',

	'CANNOT_DELETE_REPLIED'		=> 'Você pode apenas excluir mensagens que não tenham recebido respostas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Esta mensagem está trancada. Você não pode mais editar a mensagem.',
	'CANNOT_EDIT_TIME'			=> 'Você não pode mais editar ou excluir esta mensagem.',
	'CANNOT_POST_ANNOUNCE'		=> 'Desculpe, mas você não pode enviar anúncios',
	'CANNOT_POST_STICKY'		=> 'Desculpe, mas você não pode enviar tópico fixos',
	'CHANGE_TOPIC_TO'			=> 'Marcar tópico como',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Sua mensagem contém %1$d caractere.',
		2	=> 'Sua mensagem contém %1$d caracteres.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Sua assinatura contém %1$d caractere.',
		2	=> 'Sua assinatura contém %1$d caracteres.',
	),
	'CLOSE_TAGS'				=> 'Fechar todas as marcas de BBCode',
	'CURRENT_TOPIC'				=> 'Tópico atual',

	'DELETE_FILE'				=> 'Excluir arquivo',
	'DELETE_MESSAGE'			=> 'Excluir esta mensagem',
	'DELETE_MESSAGE_CONFIRM'	=> 'Você deseja realmente excluir esta mensagem?',
	'DELETE_OWN_POSTS'			=> 'Você não pode excluir mensagens de outros usuários.',
	'DELETE_PERMANENTLY'		=> 'Excluir permanentemente',
	'DELETE_POST_CONFIRM'		=> 'Você deseja realmente excluir esta mensagem?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Você deseja realmente excluir <strong>permanentemente</strong> esta mensagem?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Esta mensagem será excluída permanentemente e não poderá ser restaurada',
		2	=> '%1$d mensagens serão excluídas permanentemente e não poderão ser restauradas',
	),
	'DELETE_POSTS_CONFIRM'				=> 'Você deseja realmente excluir estas mensagens?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Você deseja realmente excluir <strong>permanentemente</strong> estas mensagens?',
	'DELETE_REASON'						=> 'Razão para a exclusão',
	'DELETE_REASON_EXPLAIN'				=> 'O motivo da exclusão será visível para moderadores.',
	'DELETE_POST_WARN'					=> 'Excluir esta mensagem',
	'DELETE_TOPIC_CONFIRM'				=> 'Você deseja realmente excluir este tópico?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Este tópico será excluído permanentemente e não poderá ser restaurado',
		2	=> '%1$d tópicos serão excluídos permanentemente e não poderão ser restaurados',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Você deseja realmente excluir <strong>permanentemente</strong> este tópico?',
	'DELETE_TOPICS_CONFIRM'				=> 'Você deseja realmente excluir estes tópicos?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Você deseja realmente excluir <strong>permanentemente</strong> estes tópicos?',
	'DISABLE_BBCODE'			=> 'Desativar BBCode nesta mensagem',
	'DISABLE_MAGIC_URL'			=> 'Desativar as URLs automáticas nesta mensagem',
	'DISABLE_SMILIES'			=> 'Desativar smilies nesta mensagem',
	'DISALLOWED_CONTENT'		=> 'O envio foi rejeitado porque o anexo foi identificado como um possível vetor de ataque.',
	'DISALLOWED_EXTENSION'		=> 'A extensão %s não é permitida.',
	'DRAFT_LOADED'				=> 'O rascunho foi carregado com sucesso. Você pode terminar a sua mensagem agora. O seu rascunho será excluído ao enviar esta mensagem.',
	'DRAFT_LOADED_PM'			=> 'O rascunho foi carregado com sucesso. Você pode terminar a sua mensagem agora. O seu rascunho será excluído ao enviar esta mensagem privada.',
	'DRAFT_SAVED'				=> 'O rascunho foi salvo com sucesso.',
	'DRAFT_TITLE'				=> 'Título do rascunho',

	'EDIT_REASON'				=> 'Razão para editar esta mensagem',
	'EMPTY_FILEUPLOAD'			=> 'O arquivo enviado encontra-se vazio.',
	'EMPTY_MESSAGE'				=> 'Você deve escrever uma mensagem.',
	'EMPTY_REMOTE_DATA'			=> 'O arquivo não pôde ser enviado, tente enviá-lo manualmente.',

	'FLASH_IS_OFF'				=> 'Flash está <em>inativo</em>',
	'FLASH_IS_ON'				=> 'Flash está <em>ativo</em>',
	'FLOOD_ERROR'				=> 'Você não pode enviar uma mensagem nova tão rapidamente após o seu último envio.',
	'FONT_COLOR'				=> 'Cor do texto',
	'FONT_COLOR_HIDE'			=> 'Ocultar cor do texto',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Fonte',
	'FONT_SMALL'				=> 'Pequena',
	'FONT_TINY'					=> 'Minúscula',

	'GENERAL_UPLOAD_ERROR'		=> 'Não foi possível enviar o anexo para %s.',

	'IMAGES_ARE_OFF'			=> 'Imagens estão <em>inativas</em>',
	'IMAGES_ARE_ON'				=> 'Imagens estão <em>ativas</em>',
	'INVALID_FILENAME'			=> '%s é um nome de arquivo inválido.',

	'LOAD'						=> 'Carregar',
	'LOAD_DRAFT'				=> 'Carregar rascunho',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aqui você pode selecionar o rascunho que deseja carregar. Sua mensagem atual será cancelada, e todo o conteúdo atual será perdido. Você pode visualizar, editar e excluir rascunhos no painel de controle do usuário.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Você precisa se autenticar para ressuscitar mensagens neste fórum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Você precisa se autenticar para excluir mensagens neste fórum.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Você precisa se autenticar para excluir permanentemente mensagens neste fórum.',
	'LOGIN_EXPLAIN_POST'		=> 'Você precisa se autenticar para enviar mensagens neste fórum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Você precisa se autenticar para citar mensagens neste fórum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Você precisa se autenticar para responder mensagens neste fórum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Você pode utilizar fontes apenas até o tamanho %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Você apenas pode utilizar arquivos flash com o tamanho máximo de %d pixel de altura.',
		2	=> 'Você apenas pode utilizar arquivos flash com o tamanho máximo de %d pixels de altura.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Você apenas pode utilizar arquivos flash com o tamanho máximo de %d pixel de largura.',
		2	=> 'Você apenas pode utilizar arquivos flash com o tamanho máximo de %d pixels de largura.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Você apenas pode utilizar imagens com o tamanho máximo de %1$d pixel de altura.',
		2	=> 'Você apenas pode utilizar imagens com o tamanho máximo de %1$d pixels de altura.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Você apenas pode utilizar imagens com o tamanho máximo de %d pixel de largura.',
		2	=> 'Você apenas pode utilizar imagens com o tamanho máximo de %d pixels de largura.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Escreva sua mensagem aqui, ela não pode ultrapassar o número de <strong>%d</strong> caractere.',
		2	=> 'Escreva sua mensagem aqui, ela não pode ultrapassar o número de <strong>%d</strong> caracteres.',
	),
	'MESSAGE_DELETED'			=> 'A mensagem foi excluída com sucesso.',
	'MORE_SMILIES'				=> 'Ver mais Smilies',

	'NOTIFY_REPLY'				=> 'Notificar-me quando for respondida',
	'NOT_UPLOADED'				=> 'O arquivo selecionado não pôde ser enviado.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Você não pode excluir opções de voto existentes.',
	'NO_PM_ICON'				=> 'Sem ícone de MP',
	'NO_POLL_TITLE'				=> 'Você deve escrever um título para a enquete.',
	'NO_POST'					=> 'A mensagem selecionada não existe.',
	'NO_POST_MODE'				=> 'Não foi selecionada a ação para esta mensagem.',
	'NO_TEMP_DIR'				=> 'A pasta temporára não foi encontrada ou não pode ser escrita.',

	'PARTIAL_UPLOAD'			=> 'O arquivo foi parcialmente enviado.',
	'PHP_UPLOAD_STOPPED'		=> 'Uma extensão do PHP interrompeu o envio do arquivo.',
	'PHP_SIZE_NA'				=> 'O anexo é muito grande.<br />Não foi possível estabelecer o tamanho máximo definido no php.ini do PHP.',
	'PHP_SIZE_OVERRUN'			=> 'O anexo é muito grande. O tamanho máximo permitido é de %1$d %2$s.<br />Esse tamanho é configurado no php.ini e não pode ser substituído.',
	'PLACE_INLINE'				=> 'Insira na linha',
	'POLL_DELETE'				=> 'Excluir esta enquete',
	'POLL_FOR'					=> 'Duração da enquete',
	'POLL_FOR_EXPLAIN'			=> '[Escreva 0 para uma enquete sem tempo limite]',
	'POLL_MAX_OPTIONS'			=> 'Opções por usuário',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este é o número de opções que cada usuário pode selecionar ao votar.',
	'POLL_OPTIONS'				=> 'Opções de voto',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Escreva cada opção em uma nova linha. Você pode adicionar <strong>%d</strong> opção de voto.',
		2	=> 'Escreva cada opção em uma nova linha. Você pode adicionar mais de <strong>%d</strong> opções de voto.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Escreva cada opção em uma nova linha. Você pode adicionar <strong>%d</strong> opção. Se você excluir ou adicionar opções, todos os votos anteriores serão resetados.',
		2	=> 'Escreva cada opção em uma nova linha. Você pode adicionar mais de <strong>%d</strong> opções. Se você excluir ou adicionar opções, todos os votos anteriores serão resetados.',
	),
	'POLL_QUESTION'				=> 'Título para a enquete',
	'POLL_TITLE_TOO_LONG'		=> 'O título para a enquete é muito grande. Ele deve possuir no máximo 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O título para a enquete é muito grande. Você deve excluir BBCodes e smilies.',
	'POLL_VOTE_CHANGE'			=> 'Ativar mudança de voto',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se ativado, os usuários poderão alterar o seu voto.',
	'POSTED_ATTACHMENTS'		=> 'Anexos adicionados',
 	'POST_APPROVAL_NOTIFY'		=> 'Você será notificado quando a sua mensagem for aprovada.',
	'POST_CONFIRMATION'			=> 'Confirmação da mensagem',
	'POST_CONFIRM_EXPLAIN'		=> 'Para evitar mensagens automáticas, o painel exige que você informe o código de confirmação. O código será exibido na imagem abaixo. Se você possui qualquer problema visual, contate o %sadministrador%s do fórum para solicitar ajuda.',
	'POST_DELETED'				=> 'A mensagem foi excluída com sucesso',
	'POST_EDITED'				=> 'A mensagem foi editada com sucesso',
	'POST_EDITED_MOD'			=> 'A mensagem foi editada com sucesso, mas ainda precisa ser aprovada por um moderador antes de se tornar publicamente visível.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Ícone da mensagem',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisão da mensagem',
	'POST_REVIEW_EDIT'			=> 'Revisão da mensagem',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensagem foi alterada por outro usuário enquanto você a estava editando. Você deve revisar a versão atual de seu post e ajustar suas informações.',
	'POST_REVIEW_EXPLAIN'		=> 'Pelo menos uma mensagem nova foi enviada a este tópico. Você pode desejar revisar a sua mensagem levando isso em conta.',
	'POST_STORED'				=> 'A mensagem foi enviada com sucesso',
	'POST_STORED_MOD'			=> 'A mensagem foi enviada com sucesso, mas ainda precisa ser aprovada por um moderador antes de se tornar publicamente visível.',
	'POST_TOPIC_AS'				=> 'Tipo de tópico',
	'PROGRESS_BAR'				=> 'Barra de progresso',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Você pode inserir apenas %d citação dentro de outras mais.',
		2	=> 'Você pode inserir apenas %d citações dentro de outras mais.',
	),
	'QUOTE_NO_NESTING'				=> 'Não é possível inserir citações dentro de outra citação.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'O arquivo não pôde ser enviado porque a solicitação expirou.',
	'SAVE'						=> 'Salvar',
	'SAVE_DATE'					=> 'Salvo em',
	'SAVE_DRAFT'				=> 'Salvar rascunho',
	'SAVE_DRAFT_CONFIRM'		=> 'Por favor, note que os rascunhos salvos apenas incluem o título e a mensagem, qualquer outro elemento será excluído. Você deseja realmente salvar o seu rascunho agora?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies estão <em>inativos</em>',
	'SMILIES_ARE_ON'			=> 'Smilies estão <em>ativos</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tempo limite do Anúncio/Tópico fixo/Anúncio global',
	'STICK_TOPIC_FOR'			=> 'Fixar tópico por',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Escreva 0 para um Anúncio/Tópico fixo/Anúncio global sem tempo limite. Por favor, note que este número é relativo a data da mensagem.',
	'STYLES_TIP'				=> 'Dica: Estilos podem ser aplicados rapidamente ao texto selecionado.',

	'TOO_FEW_CHARS'				=> 'A mensagem possui poucos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'A sua mensagem contém %1$d caractere.',
		2	=> 'A sua mensagem contém %1$d caracteres.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Você deverá escrever pelo menos duas opções de voto para a enquete.',
	'TOO_MANY_ATTACHMENTS'		=> 'O anexo não pôde ser adicionado, pois o número máximo de %d anexos neste tópico já foi alcançado.',
	'TOO_MANY_CHARS'			=> 'A mensagem possui muitos caracteres.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'O número máximo de caracteres permitidos é %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Você tentou adicionar muitas opções de voto para a enquete.',
	'TOO_MANY_SMILIES'			=> 'A mensagem possui muitos smilies. O número máximo permitido é de %d smilies.',
	'TOO_MANY_URLS'				=> 'A mensagem possui muitas URLs. O número máximo permitido é de %d URLs.',
	'TOO_MANY_USER_OPTIONS'		=> 'Você não pode selecionar mais opções por usuário do que na enquete existente.',
	'TOPIC_BUMPED'				=> 'O tópico foi ressuscitado com sucesso.',

	'UNAUTHORISED_BBCODE'		=> 'Você não pode utilizar determinados BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'Para exibir um anúncio como um tópico normal, você precisa informar o fórum aonde ele será exibido.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Sua mensagem contém os seguintes caracteres não suportados:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Seu tópico contém os seguintes caracteres não suportados:<br />%s',
	'UPDATE_COMMENT'			=> 'Atualizar descrição',
	'URL_INVALID'				=> 'A URL especificada está inválida.',
	'URL_NOT_FOUND'				=> 'O arquivo selecionado não foi encontrado.',
	'URL_IS_OFF'				=> 'URLs estão <em>inativas</em>',
	'URL_IS_ON'					=> 'URLs estão <em>ativas</em>',
	'USER_CANNOT_BUMP'			=> 'Você não pode ressuscitar tópicos neste fórum.',
	'USER_CANNOT_DELETE'		=> 'Você não pode excluir mensagens neste fórum.',
	'USER_CANNOT_EDIT'			=> 'Você não pode editar mensagens neste fórum.',
	'USER_CANNOT_REPLY'			=> 'Você não pode responder mensagens neste fórum.',
	'USER_CANNOT_FORUM_POST'	=> 'Você não pode utilizar estas operações porque este tipo de fórum não as suporta.',

	'VIEW_MESSAGE'				=> '%sVer sua mensagem enviada%s',
    'VIEW_PRIVATE_MESSAGE'      => '%sVer a sua mensagem privada enviada%s',

	'WRONG_FILESIZE'			=> 'O arquivo é muito grande. O tamanho máximo permitido é de %1$d %2$s.',
	'WRONG_SIZE'				=> 'A imagem não deve ser inferior a %1$s pixels de largura e %2$s pixels de altura, e superior a %3$s pixels de largura e %4$s pixels de altura. A imagem enviada possui %5$s pixels de largura e %6$s pixels de altura.',
));
