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

// Board Settings 
$lang = array_merge($lang, array( 
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui você pode personalizar todas as opções gerais do seu phpBB e determinar as operações básicas do sistema.',
	'BOARD_INDEX_TEXT'				=> 'Texto do índice fórum',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Este texto será exibido nos links de navegação do fórum. Se nenhum texto for especificado, “Índice do fórum” será exibido por padrão.',
	'BOARD_STYLE'					=> 'Estilo do fórum',
	'CUSTOM_DATEFORMAT'				=> 'Personalizar…',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da data', 
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A sintaxe utilizada é idêntica à função <code><a href="https://secure.php.net/manual/function.date.php">date()</a></code> do PHP.', 
	'DEFAULT_LANGUAGE'				=> 'Língua padrão', 
	'DEFAULT_STYLE'					=> 'Estilo padrão', 
	'DEFAULT_STYLE_EXPLAIN'			=> 'Estilo padrão para novos usuários.',
	'DISABLE_BOARD'					=> 'Desativar painel', 
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto torna o fórum inacessível aos usuários. Você também pode escrever uma pequena mensagem (255 caracteres) para ser exibida se desejar.', 
	'DISPLAY_LAST_SUBJECT'			=> 'Exibir o título da última mensagem adicionada na lista de fóruns',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'O título da última mensagem será exibido na lista de fóruns com um link para mensagem. Os títulos em fóruns que são protegidos por uma senha e fóruns que são somente de leitura não são exibidos.',
	'GUEST_STYLE'					=> 'Estilo para visitantes',
	'GUEST_STYLE_EXPLAIN'			=> 'Estilo do fórum para os visitantes.',
	'OVERRIDE_STYLE'				=> 'Substituir estilo do usuário', 
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Os usuários (e visitantes) são obrigados a utilizar o estilo definido em "Estilo padrão".', 
	'SITE_DESC'						=> 'Descrição do site', 
	'SITE_HOME_TEXT'				=> 'Texto para página inicial do website',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Este texto será exibido como um link redirecionando para o seu website e será inserido em seus links de navegação do fórum. Se nenhum texto for especificado, “Página inicial” será exibido por padrão.',
	'SITE_HOME_URL'					=> 'Link para website',
	'SITE_HOME_URL_EXPLAIN'			=> 'Se for especificado, este link será exibido no inicio dos links de navegação do fórum e o logotipo do fórum vai redirecionar para este URL em vez do índice do fórum. Por favor insira um URL absoluto, por exemplo, <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Nome do site', 
	'SYSTEM_TIMEZONE'				=> 'Fuso horário para o visitante',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Fuso horário para ser mostrado para os usuários que não estão logados (visitantes, bots). Usuários logados escolherão seu fuso horário no ato do registro e poderá ser alterado no seu Painel de Controle do Usuário',
	'WARNINGS_EXPIRE'				=> 'Duração de advertência', 
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Número em dias que uma advertência deverá permanecer no registro do usuário. Defina o valor 0 para tornar advertência permanente.',
)); 

// Board Features 
$lang = array_merge($lang, array( 
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui você pode ativar/desativar diversos recursos de seu phpBB.',

	'ALLOW_ATTACHMENTS'			=> 'Permitir anexos',
	'ALLOW_BOOKMARKS'			=> 'Permitir favoritos',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O usuário poderá salvar os seus tópicos pessoais em seus favoritos.',
   	'ALLOW_BIRTHDAYS'			=> 'Permitir aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permite que as datas de aniversário sejam inseridas e a idade exibida no perfil. Por favor, note que a lista de aniversários exibida no índice é controlada por uma diferente configuração de carga.',
	'ALLOW_BBCODE'				=> 'Permitir BBCode', 
	'ALLOW_FORUM_NOTIFY'		=> 'Permitir subscrição de fóruns', 
	'ALLOW_NAME_CHANGE'			=> 'Permitir alteração do nome de usuário', 
	'ALLOW_NO_CENSORS'			=> 'Desativar a censura de palavras', 
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'O usuário poderá desativar a censura automática de palavras em mensagens normais e mensagens privadas.', 
	'ALLOW_PM_ATTACHMENTS'		=> 'Permitir anexos em mensagens privadas', 
	'ALLOW_PM_REPORT'			=> 'Permitir aos usuários denunciar mensagens privadas',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Caso esta configuração esteja ativa, os usuários terão a opção de denunciar mensagens privadas que eles tenham recebido ou enviado aos moderadores. Estas mensagens privadas estarão então visíveis no painel de controle do moderador.',
	'ALLOW_QUICK_REPLY'			=> 'Permitir resposta rápida',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Esta opção permite que a resposta rápida possa ser desativada em todo o fórum. Quando ativada, as configurações específicas do fórum serão usadas para determinar se a resposta rápida será exibida em fóruns individuais.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Enviar e ativar a resposta rápida em todos os fóruns',
	'ALLOW_SIG'					=> 'Permitir assinaturas', 
	'ALLOW_SIG_BBCODE'			=> 'Permitir BBCode na assinatura dos usuários', 
	'ALLOW_SIG_FLASH'			=> 'Permitir <code>[FLASH]</code> na assinatura dos usuários', 
	'ALLOW_SIG_IMG'				=> 'Permitir <code>[IMG]</code> na assinatura dos usuários', 
	'ALLOW_SIG_LINKS'			=> 'Permitir o uso de links na assinatura dos usuários',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se desativado, a tag <code>[URL]</code> e os links mágicos serão extintos da assinatura do usuário.',
	'ALLOW_SIG_SMILIES'			=> 'Permitir smilies na assinatura dos usuários', 
	'ALLOW_SMILIES'				=> 'Permitir smilies', 
	'ALLOW_TOPIC_NOTIFY'		=> 'Permitir subscrição de tópicos', 
	'BOARD_PM'					=> 'Mensagens privadas', 
	'BOARD_PM_EXPLAIN'			=> 'Ativar mensagens privadas para todos os usuários.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Permitir notificações',
)); 

// Avatar Settings 
$lang = array_merge($lang, array( 
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os avatares são pequenas imagens que o usuário pode associar a ele mesmo. Dependendo do estilo em uso, eles normalmente são exibidos abaixo do nome do usuário na visualização de tópicos. Aqui você pode determinar como os usuários poderão definir os seus avatares. Por favor, note que para enviar avatares você precisa já ter criado o respectivo diretório e estar certo de que ele aceita a permissão de escrita pelo servidor do painel. O limite do tamanho da imagem de avatar é válido apenas para avatares enviados, não se aplicando a imagens utilizadas de outros websites.',

	'ALLOW_AVATARS'					=> 'Permitir avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permite o uso geral de avatares;<br>Caso você desative os avatares de forma geral ou de um certo modo, os avatares desativados não serão mais exibidos no painel, mas os usuários ainda poderão baixar seus próprios avatares no painel de controle do usuário.',	
	'ALLOW_GRAVATAR'				=> 'Permitir imagens do Gravatar',
	'ALLOW_LOCAL'					=> 'Permitir galeria de avatares', 
	'ALLOW_REMOTE'					=> 'Permitir avatares remotos',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Os avatares utilizados a partir de outro website.<br><em><strong class="error">Aviso:</strong> A ativação desse recurso pode permitir que os usuários verifiquem a existência de arquivos e serviços que só podem ser acessados na rede local.</em>',
	'ALLOW_REMOTE_UPLOAD'			=> 'Permitir o envio de avatares remotos',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permite o envio de avatares de outros websites.<br><em><strong class="error">Aviso:</strong> A ativação desse recurso pode permitir que os usuários verifiquem a existência de arquivos e serviços que só podem ser acessados na rede local.</em>',
	'ALLOW_UPLOAD'					=> 'Permitir o envio de avatares',
	'AVATAR_GALLERY_PATH'			=> 'Pasta da galeria de avatares', 
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, exemplo <samp>images/avatars/gallery</samp>.<br> Dois pontos (<samp>../</samp>) será removido do caminho por razões de segurança.',
	'AVATAR_STORAGE_PATH'			=> 'Pasta dos avatares', 
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, exemplo <samp>images/avatars/upload</samp>.<br>O envio de avatares <strong>não estará disponível</strong> se este caminho não pode ser escrito.<br>Dois pontos (<samp>../</samp>) será removido do caminho por razões de segurança.',
	'MAX_AVATAR_SIZE'				=> 'Dimensões máxima dos avatares', 
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Largura x altura em pixels.',
	'MAX_FILESIZE'					=> 'Tamanho máximo do arquivo de avatar', 
	'MAX_FILESIZE_EXPLAIN'			=> 'Para arquivos de avatares enviados. Se este valor for 0, o tamanho do arquivo enviado é limitado somente pela sua configuração do PHP.',
	'MIN_AVATAR_SIZE'				=> 'Dimensões mínimas dos avatares', 
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Largura x altura em pixels.',
)); 
// Message Settings 
$lang = array_merge($lang, array( 
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aqui você poderá configurar todas opções gerais para as mensagens privadas do seu painel.',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode em mensagens privadas', 
	'ALLOW_FLASH_PM'			=> 'Permitir <code>[FLASH]</code> em mensagens privadas', 
    'ALLOW_FLASH_PM_EXPLAIN'    => 'Note que a habilidade de se utilizar flash em mensagens privadas, se ativa aqui, também dependerá das respectivas permissões.',
	'ALLOW_FORWARD_PM'			=> 'Permitir encaminhamento de mensagens privadas', 
	'ALLOW_IMG_PM'				=> 'Permitir <code>[IMG]</code> em mensagens privadas', 
	'ALLOW_MASS_PM'				=> 'Permitir envio de mensagens privadas para múltiplos usuários e grupos',
    'ALLOW_MASS_PM_EXPLAIN'		=> 'O envio para grupos pode ser ajustado a cada um existente de acordo com a página de configurações do grupo.',	
	'ALLOW_PRINT_PM'			=> 'Permitir impressão em mensagens privadas', 
	'ALLOW_QUOTE_PM'			=> 'Permitir citações em mensagens privadas', 
	'ALLOW_SIG_PM'				=> 'Permitir assinaturas em mensagens privadas', 
	'ALLOW_SMILIES_PM'			=> 'Permitir smilies em mensagens privadas', 
	'BOXES_LIMIT'				=> 'Número total de mensagens privadas por caixa', 
	'BOXES_LIMIT_EXPLAIN'		=> 'Os usuários podem receber não mais que este total de mensagens em cada uma de suas caixas de mensagens privadas, sendo 0 igual a um valor ilimitado.', 
	'BOXES_MAX'					=> 'Número máximo de pastas de mensagens privadas', 
	'BOXES_MAX_EXPLAIN'			=> 'Por padrão, os usuários podem criar este total de pastas pessoais para as suas mensagens privadas.', 
	'ENABLE_PM_ICONS'			=> 'Ativar ícones em mensagens privadas', 
	'FULL_FOLDER_ACTION'		=> 'Ação padrão para pastas cheias', 
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ação a ser executada se a pasta de mensagens privadas de um usuário estiver cheia, se definida para todas, não será aplicável. A única exceção será a pasta de "Mensagens enviadas", onde a ação padrão é sempre excluir as mensagens antigas.', 
	'HOLD_NEW_MESSAGES'			=> 'Segurar novas mensagens', 
	'PM_EDIT_TIME'				=> 'Limite do tempo de edição', 
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limita o tempo disponível para se editar uma mensagem privada ainda não enviada, escreva 0 para desativar este recurso.', 
    'PM_MAX_RECIPIENTS'			=> 'Número máximo de destinatários permitidos',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'O número máximo de destinatários permitidos em uma mensagem privada. Se definido 0, um número ilimitado será permitido. Esta configuração pode ser ajustada para cada grupo através da página de configurações do grupo.',
	
)); 

// Post Settings 
$lang = array_merge($lang, array( 
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aqui você pode configurar todas as opções gerais para o envio de novas mensagens.',
	'ALLOW_POST_LINKS'					=> 'Permitir links em mensagens/mensagens privadas',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Se desativado, a tag <code>[URL]</code> e os links mágicos serão extintos das mensagens do usuário.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Permitir esquema de links',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Os usuários só podem publicar esquema de links ou um dos esquemas de links permitidos neste campo, separados por vírgulas.',
	'ALLOW_POST_FLASH'                  => 'Permitir <code>[FLASH]</code> em mensagens',
    'ALLOW_POST_FLASH_EXPLAIN'          => 'Se desativado, o BBCode <code>[FLASH]</code> estará inativo nas mensagens em geral. De qualquer forma, o sistema de permissões pode ajudar no controle de quais usuários poderão utilizar a determinada tag.',

	'BUMP_INTERVAL'					=> 'Intervalo de ressurreição', 
	'BUMP_INTERVAL_EXPLAIN'			=> 'Tempo em minutos, horas ou dias entre a última mensagem de um tópico e a sua ressurreição. Defina o valor 0 para desativar completamente ressurreição.', 
	'CHAR_LIMIT'					=> 'Número máximo de caracteres por mensagem', 
	'CHAR_LIMIT_EXPLAIN'			=> 'O número de caracteres permitidos em uma mensagem, sendo 0 igual a um valor ilimitado.', 
	'DELETE_TIME'					=> 'Limite de tempo para exclusão',
	'DELETE_TIME_EXPLAIN'			=> 'Limita o tempo disponível para excluir uma nova mensagem. Escreva 0 para desativar esta configuração.',
	'DISPLAY_LAST_EDITED'			=> 'Exibir informação da data da última edição', 
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Selecione para exibir informações da última atualização da mensagem.',
	'EDIT_TIME'						=> 'Limite de tempo para edição', 
	'EDIT_TIME_EXPLAIN'				=> 'Limita o tempo disponível para editar uma nova mensagem, escreva 0 para desativar este recurso.',
	'FLOOD_INTERVAL'				=> 'Intervalo de novas mensagens', 
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Tempo em segundos que um usuário deve aguardar entre o envio de novas mensagens.', 
	'HOT_THRESHOLD'					=> 'Número de mensagens para um tópico popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de mensagens que um tópico deve possuir para ser tornar popular. Escreva 0 para desativar esta opção.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções de voto em enquetes', 
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte em mensagens', 
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamanho máximo da fonte em mensagens, sendo 0 igual a um valor ilimitado', 
	'MAX_POST_IMG_HEIGHT'			=> 'Altura máxima da imagem por mensagem', 
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dos arquivos de imagem/flash nas mensagens, sendo 0 igual a um valor ilimitado.', 
	'MAX_POST_IMG_WIDTH'			=> 'Largura máxima da imagem por mensagem', 
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura máxima dos arquivos de imagem/flash nas mensagens, sendo 0 igual a um valor ilimitado.', 
	'MAX_POST_URLS'					=> 'Número máximo de links por mensagem', 
	'MAX_POST_URLS_EXPLAIN'			=> 'Número máximo de links por mensagem, sendo 0 igual a um valor ilimitado.', 
	'MIN_CHAR_LIMIT'				=> 'Número mínimo de caracteres por mensagem',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'O número mínimo de caracteres que um usuário precisa escrever para enviar um novo post ou mensagem privada. O mínimo para essa configuração é 1.',
	'POSTING'						=> 'Enviando mensagens', 
	'POSTS_PER_PAGE'				=> 'Mensagens por página', 
	'QUOTE_DEPTH_LIMIT'				=> 'Número máximo de citações por mensagem', 
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Número máximo de citações por mensagem, sendo 0 igual a um valor ilimitado.', 
	'SMILIES_LIMIT'					=> 'Número máximo de smilies por mensagem', 
	'SMILIES_LIMIT_EXPLAIN'			=> 'Número máximo de smilies por mensagem, sendo 0 igual a um valor ilimitado.', 
	'SMILIES_PER_PAGE'				=> 'Smilies por página',
	'TOPICS_PER_PAGE'				=> 'Tópicos por página', 
)); 

// Signature Settings 
$lang = array_merge($lang, array( 
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as opções gerais para as assinaturas dos usuários.',

	'MAX_SIG_FONT_SIZE'				=> 'Tamanho máximo da fonte da assinatura', 
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamanho máximo da fonte permitido na assinatura dos usuários, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_IMG_HEIGHT'			=> 'Altura máxima da imagem na assinatura', 
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dos arquivos de imagem/flash na assinatura dos usuários, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_IMG_WIDTH'				=> 'Largura máxima de uma imagem na assinatura', 
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largura máxima dos arquivos de imagem/flash na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_LENGTH'				=> 'Comprimento máximo da assinatura', 
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Número máximo de caracteres na assinatura do usuário.', 
	'MAX_SIG_SMILIES'				=> 'Número máximo de smilies na assinatura', 
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Número máximo de smilies permitido na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_URLS'					=> 'Número máximo de links na assinatura', 
	'MAX_SIG_URLS_EXPLAIN'			=> 'Número máximo de links permitido na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
)); 

// Registration Settings 
$lang = array_merge($lang, array( 
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui você pode definir as opções gerais de registro e configurações relacionadas ao perfil dos usuários.',

	'ACC_ACTIVATION'			=> 'Ativação de registro', 
	'ACC_ACTIVATION_EXPLAIN'	=> 'Determina se o usuário terá acesso imediato ao fórum ou se deverá realizar uma confirmação para tal. Você também pode desativar novos registros completamente. <em>“Ativar os e-mails do painel” deve esta ativado para ser capaz de usar a ativação por um administrador ou pelo próprio usuário.</em>', 
	'ACC_ACTIVATION_WARNING'		=> 'Por favor, note que o método de ativação selecionado atualmente requer a ativação por e-mail, caso contrário, o registro será desativado. Recomendamos que você ative o envio de e-mail ou selecione um método de ativação diferente.', 
	'NEW_MEMBER_POST_LIMIT'			    => 'Limite de mensagem para novos membros',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	    => 'Novos usuários estarão inseridos na lista do grupo <em>Usuários recentemente registrados</em> até que alcancem o número de posts determinado. Você pode usar este grupo para privá-los do uso de MPs ou da revisão de suas mensagens. <strong>Um valor igual a 0 desativa esta ferramenta.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		    => 'Definir grupo de usuários recentemente registrados como padrão',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Caso escolha sim e um limite de mensagens para novos membros for especificado, usuários novatos não serão apenas inseridos no grupo <em>Usuários recentemente registrados</em>, como terão este definido enquanto seu grupo padrão. Caso você deseje assinalar um rank e/ou avatar padrão ao grupo, todos os usuários inseridos no mesmo deverão herdar as suas configurações.',

	'ACC_ADMIN'					=> 'Pelo Administrador', 
	'ACC_DISABLE'				=> 'Registro desativado', 
	'ACC_NONE'					=> 'Sem ativação (acesso imediato)', 
	'ACC_USER'					=> 'Pelo Usuário (e-mail de verificaçao)',
//	'ACC_USER_ADMIN'			=> 'User + Admin', 
	'ALLOW_EMAIL_REUSE'			=> 'Permitir a reutilização de e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Diferentes usuários poderão registrar-se com o mesmo endereço de e-mail.', 
	'COPPA'						=> 'COPPA', 
	'COPPA_FAX'					=> 'Fax para COPPA', 
	'COPPA_MAIL'				=> 'Endereço de e-mail para COPPA', 
	'COPPA_MAIL_EXPLAIN'		=> 'Este é o endereço de e-mail para o qual os pais ou responsáveis enviarão os formulários de registro da COPPA.',
	'ENABLE_COPPA'				=> 'Ativar COPPA', 
	'ENABLE_COPPA_EXPLAIN'		=> 'Exige uma declaração de idade que solicita que o usuário tenha mais de 13 anos de idade em atenção à COPPA. Esta lei vigora apenas nos Estados Unidos, sendo completamente inexistente aqui no Brasil. Se estiver inativo, os grupos específicos da COPPA não serão mais exibidos.', 
	'MAX_CHARS'					=> 'Máximo', 
	'MIN_CHARS'					=> 'Mínimo',
	'NO_AUTH_PLUGIN'			=> 'Nenhum módulo de segurança encontrado.',
	'PASSWORD_LENGTH'			=> 'Comprimento da senha', 
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres das senhas.', 
	'REG_LIMIT'					=> 'Tentativas de registro', 
	'REG_LIMIT_EXPLAIN'			=> 'Número de tentativas que o usuários poderá responder antes de sua sessão ser bloqueada.',
	'USERNAME_ALPHA_ONLY'		=> 'Alfanumérico apenas', 
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumérico e espaços', 
	'USERNAME_ASCII'			=> 'ASCII (nenhum padrão de codificação unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualquer letra ou número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualquer letra, número ou espaço',	
	'USERNAME_CHARS'			=> 'Limite de caracteres para o nome de usuário', 
	'USERNAME_CHARS_ANY'		=> 'Qualquer caractere', 
	'USERNAME_CHARS_EXPLAIN'	=> 'Tipo restrito de caracteres a serem aceitos ao nome de usuário, espaços como; -, +, _, [ e ].',
	'USERNAME_LENGTH'			=> 'Comprimento do nome de usuário', 
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres dos nomes de usuários.', 
)); 

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Configuração geral dos Feeds',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este módulo disponibiliza vários ATOM Feeds, analisando qualquer BBCode nas mensagens para torná-los legíveis a leitores de feeds externos.',

	'ACP_FEED_GENERAL'					=> 'Configurações Gerais dos Feeds',
	'ACP_FEED_POST_BASED'				=> 'Configurações de feed baseada na mensagem',
	'ACP_FEED_TOPIC_BASED'				=> 'Configurações de feed baseada no tópico',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Outros feeds e configurações',
	
	'ACP_FEED_ENABLE'					=> 'Ativar feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Define como ativo ou não os ATOM Feeds para o painel inteiro.<br>Desativando, todos os feeds deverão tornar-se inativos, não importando qual configuração abaixo seja definida.',
	'ACP_FEED_LIMIT'					=> 'Número de itens',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'O número máximo de itens feed que serão exibidos.',

	'ACP_FEED_OVERALL'					=> 'Ativar feed no fórum todo',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Novas mensagens de todo o fórum..',
	'ACP_FEED_FORUM'					=> 'Ativar feeds por fórum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Novas mensagens de um único fórum e sub fórum.',
	'ACP_FEED_TOPIC'					=> 'Ativar feeds por tópico',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Novas mensagens de um único tópico.',
	
	'ACP_FEED_TOPICS_NEW'				=> 'Ativar feeds para novos tópicos',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Ativa os feeds para "Novos Tópicos", que exibe os últimos tópicos criados incluindo a primeira mensagem.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Ativar feeds para tópicos ativos',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Ativa os feeds para "Tópicos Ativos", que exibe os últimos tópicos ativos incluindo a última mensagem.',
	'ACP_FEED_NEWS'						=> 'Feed de notícias',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Captura a primeira mensagem destes fóruns. Selecione nenhum fórum para desativar o feed de notícias.<br>Selecione múltiplos fóruns pressionando <samp>CTRL</samp> e clicando.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Ativar feeds para os fóruns',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Ative os feeds para "Todos os fóruns", que exibe a lista de fóruns.',

	'ACP_FEED_HTTP_AUTH'				=> 'Permitir autenticação HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Permitir autenticação HTTP, significa permitir aos usuários receber o conteúdo que está oculto aos visitantes adicionando o parâmetro <samp>auth=http</samp> a URL do feeds. Note que algumas configurações do PHP exigem mudanças adicionais no arquivo .htaccess. As instruções podem ser encontradas no arquivo.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Estatísticas do item',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Exibe estatísticas individuais abaixo dos itens do feed<br>(Enviado por, data e hora, Respostas, Exibições)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir estes fóruns',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'O conteúdo destes fóruns <strong>não será incluído nos feeds</strong>. Selecione nenhum para ocultar os dados de todos os fóruns.<br>Selecione ou desmarque múltiplos fóruns pressionando <samp>CTRL</samp> e clicando.',
));

// Visual Confirmation Settings 
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		        => 'Aqui você pode selecionar e configurar diversos plugins, que são designados com a função de bloquear envios automatizados de spam-bots. Esses plugins funcionam desafiando o usuário a decifrar números e letras embaralhados, o que dificulta a interpretação de um computador.', 
	'ACP_VC_EXT_GET_MORE'					=> 'Você pode obter plugins anti-spam adicionais (e provavelmente mais eficaz), visitando o <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. Para mais informações sobre prevenção de spam em seu fórum, visite o <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugins disponíveis',
	'CAPTCHA_UNAVAILABLE'					=> 'O plugin não pôde ser selecionado já que seus requerimentos não foram encontrados.',

	'CAPTCHA_GD'							=> 'Imagem GD',
	'CAPTCHA_GD_3D'							=> 'Imagem GD 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Embaralhamento',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilize GD para criar imagens anti-spam avançadas.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use o embaralhamento para criar uma imagem difícil para leitura.',
	'CAPTCHA_GD_X_GRID'						=> 'Eixo X do embaralhamento',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem difícil para leitura. Escreva 0 para desativar o embaralhamento no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'Eixo Y do embaralhamento',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem difícil para leitura. Escreva 0 para desativar o embaralhamento no eixo Y.',
	'CAPTCHA_GD_WAVE'						=> 'Onda de distorção',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Isto aplica uma onda de distorção à imagem.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Adicionar objetos 3D-noise',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Isto inclui objetos adicionais à imagem, acima das letras.',
	'CAPTCHA_GD_FONTS'						=> 'Usar fontes diferentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Esta configuração controla quantas aparências de letras diferentes serão utilizadas. Você pode utilizar apenas a aparência padrão ou introduzir letras alteradas. Também é possível adicionar letras minúsculas.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Padrão',
	'CAPTCHA_FONT_NEW'						=> 'Novas imagens',
	'CAPTCHA_FONT_LOWER'					=> 'Também utilizar minúsculas',
	
	'CAPTCHA_NO_GD'							=> 'Imagem simples',
	'CAPTCHA_PREVIEW_MSG'					=> 'As suas alterações não foram salvas. Isto é apenas uma demonstração.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O plugin parecerá com este. Use o botão de previsão para atualizar. Note que o código CAPTCHA é diferente e aleatório a cada visualização.',			

	'CAPTCHA_SELECT'						=> 'Plugins instalados',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'A barra possui os plugins  resincronizados pelo painel. Entradas em cinza não estão disponíveis no momento e podem necessitar de configurações prévias para que possam ser usadas.',
	'CAPTCHA_CONFIGURE'						=> 'Configurar plugins',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Defina as configurações para o plugin selecionado.',
	'CONFIGURE'								=> 'Configurar',
	'CAPTCHA_NO_OPTIONS'					=> 'Este plugin não possui opções de configuração.',	

	'VISUAL_CONFIRM_POST'					=> 'Ativar medidas de combate a spambots nas mensagens enviadas por visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Exige que os visitantes executem uma tarefa anti-spambot para ajudar a previnir o envio de mensagens automáticas.',
	'VISUAL_CONFIRM_REG'					=> 'Ativar medidas de combate a spambots para novos registros',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Exige que todos os novos usuários passem na tarefa anti-spambot para ajudar a previnir o envio de mensagens automáticas',
	'VISUAL_CONFIRM_REFRESH'				=> 'Permitir ao usuário recarregar a tarefa anti-spambot',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Permite aos usuários solicitarem uma nova tarefa anti-spambot caso não o consigam executar corretamente durante o registro.',
));

// Cookie Settings 
$lang = array_merge($lang, array( 
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Esses detalhes definem como os cookies serão enviados para os navegadores de seus usuários. Na maioria das vezes, os valores padrão para a configuração dos cookies deverão ser suficientes, mas caso necessite alterá-los, faça-o com cuidado, pois uma configuração incorreta poderá impedir o acesso dos usuários ao fórum. Se você tiver problemas que os usuários permaneçam conectados ao seu fórum, leia o artigo <strong><a href="https://www.phpbb.com/support/go/cookie-settings/">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></strong>.',

	'COOKIE_DOMAIN'			=> 'Domínio do cookie',
	'COOKIE_DOMAIN_EXPLAIN'	=> 'Na maioria dos casos, o domínio do cookie é opcional. Deixe em branco se você tiver quaisquer dúvidas.<br><br>No entanto, se seu fórum é integrado com outro software ou está hospedado em vários domínios, você vai precisar determinar o domínio do cookie. Se você tiver algo como <i>exemple.com</i> e <i>forums.exemple.com</i> ou <i>forums.exemple.com</i> e <i>blog.exemple.com</i>. Exclua os subdomínios para manter apenas o domínio comum, <i>exemple.com</i>. Em seguida, basta adicionar um ponto antes do domínio comum e o cookie será semelhante com .example.com (repare no ponto no início).',
	'COOKIE_NAME'			=> 'Nome do cookie',
	'COOKIE_NAME_EXPLAIN'	=> 'A escolha do nome é inteiramente livre, tente ser original. Sempre que as configurações de cookie são alteradas, você também deve alterar o nome do cookie.',
	'COOKIE_NOTICE'				=> 'Informações sobre cookies',
	'COOKIE_NOTICE_EXPLAIN'		=> 'Se esta opção for ativada, as informações sobre o uso de cookies será exibida aos usuários ao visitar o fórum. Esta informação é um requisito legal em alguns países, dependendo do conteúdo e extensões habilitado no seu fórum.',
	'COOKIE_PATH'			=> 'Caminho do cookie',
	'COOKIE_PATH_EXPLAIN'	=> 'O caminho geralmente é o mesmo que conduz a pasta onde se encontra o phpBB3 ou é simplesmente uma barra, permitindo que o cookie seja acessível em todo o domínio do site.',
	'COOKIE_SECURE'			=> 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN'	=> 'Se o seu servidor estiver executando através de SSL, ative esta opção, caso contrário, deixe desativada. Se ativar isto sem que funcione via SSL, poderá resultar em erros no servidor durante os redirecionamentos.', 
	'ONLINE_LENGTH'				=> 'Tempo online do usuário', 
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tempo em minutos após o qual os usuários inativos serão retirados da lista de usuários online. Quanto maior este valor, maior serão os recursos necessários para manter esta lista.', 
	'SESSION_LENGTH'			=> 'Tempo da sessão [ segundos ]', 
	'SESSION_LENGTH_EXPLAIN'	=> 'A sessão deverá encerrar após este tempo, em segundos.', 
)); 

// Contact Settings 
$lang = array_merge($lang, array( 
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Aqui você pode ativar e desativar a página de contato e adicionar o texto que será exibido.',

	'CONTACT_US_ENABLE'				=> 'Ativar página de contato',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Esta página permite aos usuários enviar emails para os administradores do fórum. Observe que a configuração de envio de e-mail no fórum deve estar habilitada. Você encontrará esta configuração em Geral &gt; Comunicação do Cliente &gt; Configurações de e-mail.',

	'CONTACT_US_INFO'				=> 'Informações da página de contato',
	'CONTACT_US_INFO_EXPLAIN'		=> 'A mensagem é exibida na página de contato',
	'CONTACT_US_INFO_PREVIEW'		=> 'Informações da página de contato - Prever',
	'CONTACT_US_INFO_UPDATED'		=> 'As informações da página de contato foram atualizadas.',
));

// Load Settings
$lang = array_merge($lang, array( 
	'ACP_LOAD_SETTINGS_EXPLAIN'				=> 'Aqui pode ativar e desativar certas funções do fórum que podem reduzir o total de processamento pedido. Para a maioria dos servidores não é necessário desativar nenhuma função. No entanto, em certos sistemas ou em ambientes de hospedagem compartilhada pode ser benéfico se desativar alguns recursos que não sejam realmente necessário. Pode também especificar limites para a carga do sistema e ativar sessões, além das quais o fórum sairá do ar.',

	'ALLOW_CDN'						=> 'Permitir o uso do conteúdo hospedado em servidores externos',
	'ALLOW_CDN_EXPLAIN'				=> 'Se essa opção for ativada, alguns arquivos serão distribuídos pelos servidores externos em vez de seu servidor. Este recurso irá reduzir a largura de banda do seu servidor, mas alguns administradores podem colocar questões de privacidade. Em uma instalação padrão do phpBB, a livraria javascript “jQuery” e a fonte “Open Sans” são distribuídos pela rede de distribuição de conteúdo do Google.',
	'ALLOW_LIVE_SEARCHES'			=> 'Permitir pesquisas ativas',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Se essa opção for ativada, os usuários receberão sugestões de palavras-chave à medida que digitam em determinados campos do fórum.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Campos de perfil personalizados', 
	'LIMIT_LOAD'					=> 'Limite de carga do sistema', 
	'LIMIT_LOAD_EXPLAIN'			=> 'Se o sistema de carga exceder o valor de 1 minuto, o fórum irá ficar offline. O valor 1.0 é igual a 100% de utilização de um processador. Isto somente funciona em servidores UNIX e onde esta mensagem é acessível.',
	'LIMIT_SESSIONS'				=> 'Limite de sessões', 
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o número de sessões exceder o valor de 1 minuto, o fórum irá ficar offline. Escreva 0 para sessões ilimitadas.', 
	'LOAD_CPF_MEMBERLIST'			=> 'Exibir os campos de perfil personalizados na lista dos membros', 
	'LOAD_CPF_PM'					=> 'Exibir os campos de perfil personalizados na visualização de mensagens privadas',
	'LOAD_CPF_VIEWPROFILE'			=> 'Exibir os campos de perfil personalizados no perfil de usuários', 
	'LOAD_CPF_VIEWTOPIC'			=> 'Exibir os campos de perfil personalizados na visualização de tópicos', 
	'LOAD_USER_ACTIVITY'			=> 'Exibir a atividade dos usuários', 
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Exibe o fórum/tópico ativos no perfil do usuário e no painel de controle do usuário. Recomenda-se desativar em fóruns com mais de um milhão de mensagens.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Limite de postagem de atividades do usuário',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'Os fóruns e tópicos onde os usuários estão ativos não serão exibidos para usuários que tenham publicados mais do que esse número de mensagens. Escreva 0 para desativar esse limite.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Expiração de notificação lida',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Número de dias que irá decorrer antes que as notificações lidas sejam automaticamente excluídas. Defina o valor 0 para tornar notificações permanentes.',
	'RECOMPILE_STYLES'				=> 'Redefinir componentes do estilo',	
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Verifica as atualizações nos arquivos do estilo do sistema de arquivos e os redefine.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Ativar permissão específica do botão de MP na visualização de tópicos',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'Se ativada, somente usuários com permissão para ler mensagens privadas terão um botão de mensagem privada.',
	'YES_ANON_READ_MARKING'			=> 'Permitir subscrição de tópicos por usuários anônimos', 
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Permite a seleção de lido/não-lido aos usuários anônimos. Se desativado, as mensagens aparecerão sempre como lidas para os anônimos.',
	'YES_BIRTHDAYS'					=> 'Exibir lista de aniversários',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se desativado, a lista de aniversários não será mais exibida. Para que esta configuração tenha efeito, o recurso de aniversários também deve ser ativo no painel.',
	'YES_JUMPBOX'					=> 'Ativar exibição da jumpbox',
	'YES_MODERATORS'				=> 'Ativar exibição de moderadores', 
	'YES_ONLINE'					=> 'Ativar lista de usuários online', 
	'YES_ONLINE_EXPLAIN'			=> 'Exibe a informação de usuários online nas páginas do índice, tópicos e fóruns.', 
	'YES_ONLINE_GUESTS'				=> 'Ativar lista de visitantes online na lista de usuários online', 
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permite a visualização de informações de visitantes na lista de usuários online.', 
	'YES_ONLINE_TRACK'				=> 'Ativar exibição da informação online/offline do usuário', 
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Exibe informação online para usuários em perfis e tópicos.',
	'YES_POST_MARKING'				=> 'Exibir tópicos pontilhados', 
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica se o usuário tem postado em um determinado tópico.', 
	'YES_READ_MARKING'				=> 'Ativar a subscrição de tópicos no servidor', 
	'YES_READ_MARKING_EXPLAIN'		=> 'Armazena a seleção de lido/não-lido no banco de dados ao invés de salvá-la em um cookie.',
	'YES_UNREAD_SEARCH'				=> 'Ativar pesquisa para mensagens não lidas',
)); 

// Auth settings 
$lang = array_merge($lang, array( 
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'O phpBB suporta a autenticação de plug-ins, ou módulos. Isto permite determinar como os usuários serão autenticados quando acessarem ao fórum. Por padrão, quatro plug-ins serão disponibilizados: DB, LDAP, Apache e OAuth. Nem todos os métodos necessitam de informação adicional, então apenas preencha os campos se forem relevantes para o método selecionado.', 

	'AUTH_METHOD'				=> 'Selecionar um método de autenticação', 

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Você deve fornecer a chave e a chave secreta para cada provedor de serviço ativado. Apenas um destes dados foi fornecido para um provedor de serviços OAuth.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Cada provedor de serviço OAuth deve ser informado por uma chave e uma chave secreta única, a fim de ser autenticado pelo servidor externo. Estes dados são fornecidos pelos serviços OAuth ao registrar o seu website e devem ser inseridos exatamente como fornecido.<br>Os serviços que não estejam com esses dados especificados não serão acessíveis aos usuários do fórum. Note que os usuários ainda podem se registrar e fazer login usando a autenticação via banco de dados.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Chave',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Chave Secreta',

	'APACHE_SETUP_BEFORE_USE'	=> 'Você tem que configurar a autenticação no Apache antes de selecionar este método de autenticação. O nome de usuário que você utiliza para a autenticação Apache tem de ser o mesmo que o seu nome de usuário no phpBB. A autenticação Apache pode apenas ser utilizada com o mod_php (não com uma versão CGI) e o safe_mode desativados.',

	'LDAP'						=> 'LDAP',
	'LDAP_DN'					=> 'LDAP base <var>dn</var>', 
	'LDAP_DN_EXPLAIN'			=> 'Este é o Nome Distinto (dn), localizando a informação do usuário, exemplo <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'				=> 'Atributo do e-mail LDAP', 
	'LDAP_EMAIL_EXPLAIN'		=> 'Escreva isto ao nome de seu atributo de entrada do e-mail do usuário (se existir um) para definir automaticamente o endereço de e-mail a novos usuários. Deixando em branco, resulta em um endereço de e-mail vazio para os usuários que acessarem ao fórum pela primeira vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'As ligações com o servidor LDAP falharam com o nome de usuário/senha especificados.',
	'LDAP_NO_EMAIL'				=> 'O atributo do e-mail especificado não existe.',
	'LDAP_NO_IDENTITY'			=> 'Não foi possível encontrar uma identificação de acesso para %s.',
	'LDAP_PASSWORD'					=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixe este campo em branco para utilizar um acesso anônimo, caso contrário preencha a senha ao usuário acima informado.<br><em><strong>ATENÇÃO:</strong> Esta senha será armazenada em texto no banco de dados, podendo ser visualizada por qualquer pessoa que tiver acesso a ele ou a esta página de configuração.</em>', 
	'LDAP_PORT'                    => 'Porta do servidor LDAP',
    'LDAP_PORT_EXPLAIN'            => 'Opcionalmente você pode especificar a porta a qual será utilizada para o servidor LDAP, diferente da porta padrão 389.',
	'LDAP_SERVER'				=> 'Nome do servidor de LDAP', 
	'LDAP_SERVER_EXPLAIN'		=> 'Se utilizando LDAP, este é o nome ou IP do servidor. Alternativamente você pode especificar uma URL como ldap://hostname:port/.', 
	'LDAP_UID'					=> 'LDAP <var>uid</var>', 
	'LDAP_UID_EXPLAIN'			=> 'Esta é a chave sob a qual será feita a pesquisa pela identidade de login escrita, ex. <var>uid</var>, <var>sn</var>, e etc.', 
	'LDAP_USER'						=> 'Nome de usuário LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Deixe este campo em branco para utilizar um acesso anônimo. Se preenchido, o phpBB irá conectar-se ao servidor LDAP com o nome de usuário escrito dentro do número de tentativas de login para encontrar o usuário correto, ex. <samp>uid=Usuário,ou=MinhaUnidade,o=MinhaCompanhia,c=BR</samp>. Requerido para servidores de diretório ativo.',
	'LDAP_USER_FILTER'              => 'Filtro de usuário LDAP',
    'LDAP_USER_FILTER_EXPLAIN'      => 'Opcionalmente você pode aumentar o limite de objetos pesquisados com filtros adicionais. Por exemplo, <samp>objectClass=posixGroup</samp> deve resultar na utilização de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>.',
)); 

// Server Settings 
$lang = array_merge($lang, array( 
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aqui você pode definir configurações gerais dependentes de seus servidores e domínios. Por favor, esteja certo da precisão dos dados que você digitar, pois erros resultarão em e-mails contendo informações incorretas. Quando digitar o nome do domínio, lembre-se de incluir o "http://" ou qualquer outro termo de protocolo. Apenas altere o numero da porta do servidor se você tiver certeza de que seu servidor utiliza um valor diferente, o qual normalmente é 80.',

	'ENABLE_GZIP'				=> 'Ativar compressão Gzip', 
	'ENABLE_GZIP_EXPLAIN'		=> 'O conteúdo gerado será comprimido e enviado ao navegador do usuário, se ele suportar. Isto poderá reduzir o tráfego da rede, mas aumentará o consumo da CPU do servidor e do computador do usuário. Requer a extensão PHP zlib para ser carregado.',
	'FORCE_SERVER_VARS'			=> 'Forçar configurações da URL do servidor', 
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se selecionado como sim, as configurações do servidor definidas aqui serão utilizadas no lugar dos valores escritos automaticamente.',
	'ICONS_PATH'				=> 'Pasta dos ícones', 
	'ICONS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Ativar reescrita de URL',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Se essa opção for ativada, links contendo ’app.php’ serão reescritos para remover o nome do arquivo (por exemplo, app.php/foo será /foo). <strong>O módulo mod_rewrite do Apache deve estar ativado. Se esta opção for ativada quando o mod_rewrite não estiver habilitado, poderá comprometer o funcionamento do seu fórum.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'O módulo <strong>mod_rewrite</strong> do servidor Apache está desativado. Se você quiser ativar esse recurso, você deve habilitar esse módulo ou solicitar ao seu provedor de hospedagem para fazer isso.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'É impossível determinar se o seu servidor suporta esse recurso. Você pode tentar ativar a reescrita de URL, mas se o seu servidor não é compatível com ele, os caminhos gerado pelo fórum podem não funcionar corretamente. Entre em contato com seu provedor de hospedagem para perguntar se você pode ativar esse recurso de forma segura.',
	'PATH_SETTINGS'				=> 'Configurações de pasta', 
	'RANKS_PATH'				=> 'Pasta dos ranks', 
	'RANKS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Pasta do sistema',
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde se encontra o phpBB em relação ao domínio, ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome do servidor', 
	'SERVER_NAME_EXPLAIN'		=> 'O nome do domínio onde este fórum está executando (por exemplo: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Porta do servidor', 
	'SERVER_PORT_EXPLAIN'		=> 'A porta em que o seu servidor está executando, normalmente 80. Altere somente se for diferente.',
	'SERVER_PROTOCOL'			=> 'Protocolo do servidor', 
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Será utilizado como o protocolo do servidor se essa configuração for forçada. Se vazio ou não forçado, o protocolo será determinado pelas configurações de segurança do cookie (<samp>http://</samp> ou <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Configurações da URL do servidor', 
	'SMILIES_PATH'				=> 'Pasta dos smilies', 
	'SMILIES_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Pasta dos ícones de grupos de extensões', 
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> 'Executar tarefas periódicas do sistema cron',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'Se esta opção estiver desativada, o phpBB irá garantir que as tarefas periódicas sejam executadas automaticamente. Se esta opção for ativada, o phpBB não irá planejar qualquer tarefa periódica por si só, um administrador do sistema deve certifique-se de executar <code>bin/phpbbcli.php cron:run</code> em intervalos regulares (a cada 5 minutos, por exemplo) pelo sistema cron.',
)); 

// Security Settings 
$lang = array_merge($lang, array( 
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aqui você pode configurar as opções gerais relacionadas às sessões e ao acesso.',

	'ALL'							=> 'Todos', 
	'ALLOW_AUTOLOGIN'				=> 'Permitir "Lembrar minhas informações"',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os usuários poderão fazer o login automaticamente ao visitarem o fórum.', 
	'ALLOW_PASSWORD_RESET'			=> 'Permitir redefinição de senha ("Esqueci a senha")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Determina se os usuários podem usar a opção "Esqueci a senha" na página de login para redefinir sua senha. Se você usa um método de autenticação externo, você deve desativar esse recurso.',
	'AUTOLOGIN_LENGTH'				=> 'Ativar expiração do login automático', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Tempo em que o login automático é válido em dias, se o usuário não visitar o painel. Escreva 0 para desativar a expiração.', 
	'BROWSER_VALID'					=> 'Validar o navegador', 
	'BROWSER_VALID_EXPLAIN'			=> 'Ativa a validação do navegador em cada sessão, aumentando a sua segurança.', 
	'CHECK_DNSBL'					=> 'Verificar se o IP está na lista de DNSs bloqueados',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se ativado, os endereços de IP dos usuários serão checados nos serviços DNSBL ao enviarem mensagens ou criarem novos registros de usuário: <a href="http://spamcop.net">spamcop.net</a> e <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Essa operação pode levar algum tempo, dependendo da configuração do servidor. Se essa operação ficar muito lenta ou acusar falsamente endereços de IP, é recomendado que seja desativada.',
	'CLASS_B'						=> 'A.B', 
	'CLASS_C'						=> 'A.B.C', 
	'EMAIL_CHECK_MX'				=> 'Verificar se o domínio é um registro MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se ativado, o domínio do e-mail quando informado nos registros ou alterações de perfil será verificado nos registros MX.',
	'FORCE_PASS_CHANGE'				=> 'Forçar a mudança de senha', 
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Solicita que o usuário altere a sua senha após o número de dias especificado. Escreva 0 para desativar esta opção.',
	'FORM_TIME_MAX'                 => 'Tempo máximo para submeter formulários',
    'FORM_TIME_MAX_EXPLAIN'         => 'O tempo que um usuário possui para submeter formulários. Use -1 para desativar. Note que um formulário pode vir a ser inválido se a sessão expirar, mas isso não depende desta configuração.',
	'FORM_SID_GUESTS'               => 'Link de formulários para sessões de visitantes',
    'FORM_SID_GUESTS_EXPLAIN'       => 'Se ativado, os formulários emitidos aos visitantes serão exclusivos de sua sessão. Isto pode causar problemas com alguns provedores de serviços de internet.',
	'FORWARDED_FOR_VALID'			=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessões somente continuarão se o cabeçalho <var>X_FORWARDED_FOR</var> enviado for igual ao enviado na última visita. Serão banidos os IPs que contiverem o mesmo cabeçalho <var>X_FORWARDED_FOR</var> validado.',
	'IP_VALID'						=> 'Validação do IP da sessão', 
	'IP_VALID_EXPLAIN'				=> 'Determina quantas IPs de usuários são utilizadas para validar uma sessão. <samp>Todos</samp> compara o endereço de IP completo, <samp>A.B.C</samp> os primeiros x.x.x, <samp>A.B</samp> os primeiros x.x. <samp>Nenhum</samp> desativa esta verificação.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Número máximo de tentativas de login por endereço de IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'O número máximo de tentativas de login permitido de um único endereço de IP antes da tarefa anti-spambot ser executada. Escreva 0 para impedir que a tarefa anti-spambot seja executada por endereço de IP.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Tempo de expiração de tentativas de login por endereço de IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Tentativas de login expiram após este prazo.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limite de tentativas de login do cabeçalho <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Como alternativa de limitação as tentativas de login por endereços de IP que são limitados por valores <var>X_FORWARDED_FOR</var>. <br><em><strong>Atenção:</strong> Apenas ative esta opção se está operando um servidor proxy que define o <var>X_FORWARDED_FOR</var> para valores confiáveis.</em>',	
	'MAX_LOGIN_ATTEMPTS'			=> 'Número máximo de tentativas de login por usuário', 
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'O número máximo de tentativas de login por uma única conta antes da tarefa anti-spambot ser executada. Escreva 0 para impedir que a tarefa anti-spambot seja executada para contas de usuários distintas.',
	'NO_IP_VALIDATION'				=> 'Nenhum',
	'NO_REF_VALIDATION'				=> 'Nenhum',
	'PASSWORD_TYPE'					=> 'Complexidade da senha', 
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o quanto complexa a senha deve ser quando criada ou alterada.', 
	'PASS_TYPE_ALPHA'				=> 'Deve conter alfanuméricos',
	'PASS_TYPE_ANY'					=> 'Sem requerimentos', 
	'PASS_TYPE_CASE'				=> 'Deve conter maiúsculas e minúsculas', 
	'PASS_TYPE_SYMBOL'				=> 'Deve conter símbolos',
	'REF_HOST'						=> 'Apenas validar servidor',
	'REF_PATH'						=> 'Também validar pasta',
	'REFERRER_VALID'				=> 'Validar referenciador',
	'REFERRER_VALID_EXPLAIN'		=> 'Se esta opção for ativada, o referenciador de requisição de POST será checada junto à configuração da pasta do servidor/script. Isto pode ocasionar erros em fóruns que utilizem diversos domínios e/ou logins externos.',
	'TPL_ALLOW_PHP'					=> 'Permitir php nas templates', 
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta opção for ativada, comandos <code>PHP</code> e <code>INCLUDEPHP</code> serão reconhecidos e inseridos nas templates.',
	'UPLOAD_CERT_VALID'				=> 'Validar envio de certificado',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Se esta opção for ativada, certificados de envio remoto serão validados. O pacote CA deve ser definido por meio da configuração <samp>openssl.cafile</samp> ou <samp>curl.cainfo</samp> no php.ini.',
)); 

// Email Settings 
$lang = array_merge($lang, array( 
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta informação é utilizada quando o sistema envia e-mails para os seus usuários. Por favor, certifique-se de que o e-mail que você especificou é válido, qualquer mensagem incorreta ou não entregue será encaminhada a este endereço. Se o seu servidor não suporta a função php mail(), então você pode enviar mensagens diretamente usando um servidor SMTP. Isto exige o endereço de um servidor apropriado (pergunte ao seu host se necessário). Se o servidor escrito requer autenticação, digite os nomes, senhas e métodos necessários.',

	'ADMIN_EMAIL'					=> 'Endereço de e-mail de origem',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Este endereço será usado como o endereço de e-mail de origem de todos os envios de e-mails pelo sistema phpBB.',
	'BOARD_EMAIL_FORM'				=> 'Envio de e-mails pelo painel',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Permite o envio de e-mails entre os usuários pelo sistema phpBB.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar endereços de e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta função mantém os endereços de e-mail completamente ocultos.',
	'CONTACT_EMAIL'					=> 'Endereço de e-mail para contato',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este endereço será usado sempre que um ponto de contato específico for necessário, ex. spam, erro de envio, e etc. Este será sempre utilizado como o endereço de envio e resposta nos e-mails.',
	'CONTACT_EMAIL_NAME'			=> 'Nome de contato',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Este é o nome do contato que os destinatários dos e-mails vão ver. Se não quer ter um nome de contato, deixe este campo em branco.',
	'EMAIL_FORCE_SENDER'			=> 'Forçar o endereço de e-mail de origem',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'O endereço de e-mail de origem usará a função <samp>Return-Path</samp> em vez de usar o usuário e o nome do host local do servidor. Observe que este parâmetro é ignorado se você estiver usando o protocolo SMTP.<br><em><strong>ATENÇÃO:</strong> Você deve garantir que no servidor seja adicionado um usuário confiável na configuração de envio de e-mails.</em>',
	
	'EMAIL_PACKAGE_SIZE'			=> 'Tamanho do pacote de e-mail', 
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de e-mails enviados em um pacote. Esta configuração é aplicada à lista de mensagens internas, escreva 0 se você tiver problemas com e-mails de notificação de mensagens não encaminhadas.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Número máximo de destinatários de e-mail permitidos',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'Se necessário, configure-o para que não exceda o número máximo de destinatários que o servidor de e-mail permitirá em uma mensagem de e-mail.',
	'EMAIL_SIG'						=> 'Assinatura do e-mail', 
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto será anexado a todos os e-mails enviados pelo painel.',
	'ENABLE_EMAIL'					=> 'Ativar os e-mails do painel', 
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se for desativado, os e-mails não serão enviados pelo painel. <em>Note que as configurações para ativação de registro por parte do administrador ou do usuário requerem que esta configuração esteja ativada. Caso esteja utilizando a ativação por parte do administrador ou do usuário em sua configuração, desativando esta ferramenta não será mais necessária a ativação de novos registros.</em>',
	'SEND_TEST_EMAIL'				=> 'Enviar um e-mail de teste',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'Isto irá enviar um e-mail de teste para o endereço de e-mail especificado na sua conta.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Permitir certificados SSL auto-assinados',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Permitir conexões com o servidor SMTP com certificado SSL auto-assinado. <br><em><strong>Nota:</strong> certificados SSL auto-assinado podem ter implicações de segurança.</em>',
	'SMTP_AUTH_METHOD'				=> 'Método de autenticação de SMTP', 
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Apenas utilizado se um nome/senha for especificado, pergunte ao seu provedor se não souber qual método usar.', 
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5', 
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5', 
	'SMTP_LOGIN'					=> 'LOGIN', 
	'SMTP_PASSWORD'					=> 'Senha do SMTP', 
	'SMTP_PASSWORD_EXPLAIN'			=> 'Só escreva a senha se o seu servidor de SMTP assim o exigir.<br><strong>ATENÇÃO:</strong> Esta senha será armazenada em texto no banco de dados, podendo ser visualizada por qualquer pessoa que tiver acesso a ele ou quem pode ver esta página de configuração.',  
	'SMTP_PLAIN'					=> 'PLAIN', 
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP', 
	'SMTP_PORT'						=> 'Porta do servidor de SMTP', 
	'SMTP_PORT_EXPLAIN'				=> 'Escreva apenas se você tiver certeza de que o seu servidor de SMTP está executando em uma porta diferente.', 
	'SMTP_SERVER'					=> 'Endereço do servidor de SMTP',
	'SMTP_SERVER_EXPLAIN'			=> 'Não forneça o protocolo (<samp>ssl://</samp> or <samp>tsl://</samp>) a menos que seu servidor de e-mail solicite que você faça isso.',
	'SMTP_SETTINGS'					=> 'Configurações de SMTP', 
	'SMTP_USERNAME'					=> 'Nome de usuário do SMTP', 
	'SMTP_USERNAME_EXPLAIN'			=> 'Só escreva o nome de usuário se o seu servidor de SMTP assim o exigir.',
	'SMTP_VERIFY_PEER'				=> 'Verificar o certificado SSL',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Força a verificação do certificado SSL usado pelos servidores SMTP. <br><em><strong>Nota:</strong> conexão pares com certificados SSL que não são verificados podem ter implicações de segurança.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Verificar o nome de usuario SMTP',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Força a verificação do nome de usuário para servidores SMTP que usam conexões SSL / TLS. <br><em><strong>Nota:</strong> conexão pares com certificados não são verificados podem ter implicações de segurança.</em>',
	'TEST_EMAIL_SENT'				=> 'O e-mail de teste foi enviado.<br>Se você não recebeu, por favor, verifique a configuração de e-mail.<br><br>Se você precisar de ajuda, por favor, visite <a href="https://www.phpbb.com/community/">fóruns de suporte ao phpBB(em inglês)</a>.',

	'USE_SMTP'						=> 'Usar um servidor de SMTP para enviar e-mails', 
	'USE_SMTP_EXPLAIN'				=> 'Selecione "Sim" se você deseja ou precisa enviar e-mails através de um servidor de SMPT ao invés de uma função de e-mail local.',
)); 

// Jabber settings 
$lang = array_merge($lang, array( 
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aqui você pode ativar e controlar o uso de Jabber para mensagens instantâneas e notícias. O Jabber é um protocolo de código livre, sendo disponível a qualquer pessoa interessada. Alguns servidores de Jabber incluem gateways ou transportes, os quais permitem a você contatar usuários em outras redes. Nem todos os servidores oferecem todos os transportes, e alterações no protocolo podem evitar as operações destes transportes. Por favor, certifique-se de escrever informações de contas já registradas - o phpBB irá se utilizar das informações fornecidas aqui.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Permitir certificados SSL auto-assinados',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Permitir conexões com o servidor Jabber com certificado SSL auto-assinado. <br><em><strong>Nota:</strong> certificados SSL auto-assinado podem ter implicações de segurança.</em>',
	'JAB_ENABLE'				=> 'Ativar Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Ativa o uso de mensagens e notícias do jabber.',
	'JAB_GTALK_NOTE'            => 'Por favor, note que o GTalk não irá funcionar porque a função <samp>dns_get_record</samp> não pôde ser encontrada. Esta função não se encontra disponível no PHP4, e não é implementada nas plataformas do windows. Isto não é executável atualmente em sistemas BSD-based, incluindo o Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamanho do pacote de jabber', 
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de mensagens enviadas em um pacote. Se escrever 0, a mensagem será enviada imediatamente e não será salva para um envio posterior.', 
	'JAB_PASSWORD'				=> 'Senha jabber', 
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>ATENÇÃO:</strong> Esta senha será armazenada em texto no banco de dados, podendo ser visualizada por qualquer pessoa que tiver acesso a ele ou quem pode ver esta página de configuração.</em>',
	'JAB_PORT'					=> 'Porta jabber', 
	'JAB_PORT_EXPLAIN'			=> 'Deixe em branco, a menos que você saiba que não é a porta 5222.',
	'JAB_SERVER'				=> 'Servidor jabber', 
	'JAB_SERVER_EXPLAIN'		=> 'Veja em %sjabber.org%s uma lista completa de servidores.',
	'JAB_SETTINGS_CHANGED'      => 'Configurações de jabber alteradas com sucesso.', 
	'JAB_USE_SSL'               => 'Usar SLL para conexão',
    'JAB_USE_SSL_EXPLAIN'       => 'Se ativo, uma conexão segura tentará ser estabilizada. A porta Jabber será alterada para 5223 se a porta 5222 tiver sido especificada.',
	'JAB_USERNAME'				=> 'Usuário jabber ou JID', 
	'JAB_USERNAME_EXPLAIN'		=> 'Escreva um nome de usuário registrado ou um JID válido. O usuário não será checado para uma devida validação. Se você apenas especificar um nome de usuário, então seu JID será o seu nome de usuário junto ao servidor especificado acima. Especifique um JID válido, por exemplo user@jabber.org.',
	'JAB_VERIFY_PEER'				=> 'Verificar o certificado SSL',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Força a verificação do certificado SSL usado pelos servidores Jabber. <br><em><strong>Nota:</strong> conexão pares com certificados SSL que não são verificados podem ter implicações de segurança.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Verificar o nome de usuario Jabber',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Força a verificação do nome de usuário para servidores Jabber que usam conexões SSL / TLS. <br><em><strong>Nota:</strong> conexão pares com certificados não são verificados podem ter implicações de segurança.</em>',
));
