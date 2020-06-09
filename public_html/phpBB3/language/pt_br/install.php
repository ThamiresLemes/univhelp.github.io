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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Painel de Instalação',
	'SELECT_LANG'	=> 'Selecionar idioma',

	'STAGE_INSTALL'	=> 'Instalando o phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introdução',
	'INTRODUCTION_BODY'		=> 'Bem-vindo ao phpBB3!<br /><br />phpBB® é o software de fórum de discussão livre e gratuito mais utilizado no mundo. É o resultado de um longo processo que começou em 2000. Assim como em suas versões anteriores, o phpBB3 é rico em recursos, de fácil acesso e totalmente suportado pelo phpBB Team. Ele melhora muito o que se tornou popular no phpBB2 e adiciona recursos que estavam faltando em versões anteriores. Esperamos ter cumprido adequadamente suas expectativas.<br /><br />Este sistema de instalação irá guiá-lo através da instalação do phpBB3, na atualização de versões obsoletas ou na conversão de diferentes sistemas de fóruns (incluindo phpBB2). Para mais informações, nós encorajamos você a ler <a href="../docs/INSTALL.html">o guia de instalação</a>.<br /><br />Para ler a licença do phpBB3 ou aprender sobre a obtenção de suporte e nossa posição sobre isso, por favor selecione a opção apropriada localizado na barra lateral esquerda. Para continuar, selecione a guia apropriada localizado acima.',

	// Support page
	'SUPPORT_TITLE'		=> 'Suporte',
	'SUPPORT_BODY'		=> 'Suporte completo será oferecido gratuitamente para a mais recente versão estável do phpBB3. Em nossa página você encontrará suporte para:</p><ul><li>instalação</li><li>configuração</li><li>questões técnicas</li><li>problemas relacionados a bugs em potencial no software</li><li>atualização das versões Release Candidate (RC) para o mais novo lançamento</li><li>conversão do phpBB3 para phpBB3</li><li>conversão de outros sistemas de fóruns para o phpBB3</li></ul><p>Nós aconselhamos a usuários que ainda estão utilizando versões beta do phpBB3 para substituir a sua instalação com a mais nova versão do sistema.</p><h2>Extensões / Estilos</h2><p>Para questões relativas a Extensões, visite o <a href="https://www.phpbb.com/community/viewforum.php?f=451">fórum de Extensões</a>.<br />Para questões de Estilos estilos, templates e temas, visite o <a href="https://www.phpbb.com/community/viewforum.php?f=471">fórum de Estilos</a>.<br /><br />Se a sua questão é sobre um pacote específico, por favor poste diretamente a sua mensagem no tópico dedicado a este pacote.</p><h2>Obtendo Suporte</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">O Pacote de Boas-Vindas do phpBB</a><br /><a href="https://www.phpbb.com/support/">Seção de Suporte</a><br /><a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/">Guia Rápido</a><br /><br />Se você quiser garantir que está a par das últimas versões do nosso software, por que não <a href="https://www.phpbb.com/support/">subscrever a nossa lista de e-mail</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'				=> 'Bem-vindo à Instalação',
	'INSTALL_INTRO_BODY'		=> 'Aqui você poderá instalar o phpBB em seu servidor.</p><p>Para prosseguir, você irá precisar das configurações de seu banco de dados. Se você não souber de suas configurações, por favor, contate o seu servidor e pergunte a respeito. Não será possível prosseguir sem as devidas informações. Você precisará de:</p>

	
	<ul>
		<li>Tipo de banco de dados - o banco de dados que você estará utilizando em seu painel.</li>
		<li>Nome do servidor do banco de dados ou DSN - o endereço do servidor de seu banco de dados.</li>
		<li>Porta do servidor do banco de dados - a porta do servidor de seu banco de dados (na maioria das vezes isso não é necessário).</li>
		<li>Nome do banco de dados - o nome do banco de dados em seu servidor.</li>
		<li>Nome do usuário e senha do banco de dados - os dados de autenticação para acessar o seu banco de dados.</li>
	</ul>

	<p><strong>Nota:</strong> se você está utilizando SQLite em sua instalação, você precisará informar o endereço completo do arquivo do banco de dados no campo DNS e deixar em branco o nome de usuário e senha. Por razões de segurança, você deve certificar-se de que este arquivo do banco de dados não esteja em locais acessíveis através da web.</p>

	<p>O phpBB3 suporta os seguintes bancos de dados:</p>
	<ul>
		<li>MySQL 3.23 ou superior (suporte a MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Somente os banco de dados suportados pelo seu servidor serão exibidos.',

	'ACP_LINK'	=> 'Ir para o <a href="%1$s">ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'O phpBB já está instalado.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'O phpBB não está instalado.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'O arquivo seleciona não existe',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Para instalar o phpBB, o arquivo %1$s deve existir.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o arquivo %1$s exista para obter uma melhor experiência do usuário.',
	'FILE_NOT_WRITABLE'						=> 'O arquivo não pode ser escrito',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Para instalar o phpBB, o arquivo %1$s deve ser gravável.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o arquivo %1$s seja gravável para obter uma melhor experiência do usuário.',

	'DIRECTORY_NOT_EXISTS'						=> 'O diretório selecionado não existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Para instalar o phpBB, o diretório %1$s deve existir.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o diretório %1$s exista para obter uma melhor experiência do usuário.',
	'DIRECTORY_NOT_WRITABLE'					=> 'O diretório não pode ser escrito',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Para instalar o phpBB, o diretório %1$s deve ser gravável.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o diretório %1$s seja gravável para obter uma melhor experiência do usuário.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versão do PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'O phpBB requer a versão 5.4.0 ou superior do PHP.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'A função getimagesize() do PHP é exigida',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para o funcionamento correto do phpBB, é necessário que a função getimagesize esteja disponível.',
	'PCRE_UTF_SUPPORT'					=> 'Suporte ao PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'O phpBB não irá funcionar se a sua instalação PHP não for compilada com suporte a UTF-8 na extensão PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Para o funcionamento correto do phpBB, é necessário que a extensão PHP JSON esteja disponível.',
	'PHP_XML_SUPPORT'					=> 'Suporte PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Para o funcionamento correto do phpBB, é necessário que a extensão PHP XML/DOM esteja disponível.',
	'PHP_SUPPORTED_DB'					=> 'Bancos de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Você deve possuir ao menos um banco de dados compatível com PHP. Caso nenhum tipo de banco de dados seja exibido como disponível, contate o seu servidor ou reveja a documentação do PHP relevante para obter ajuda.',

	'RETEST_REQUIREMENTS'	=> 'Verificar novamente requerimentos',

	'STAGE_REQUIREMENTS'	=> 'Verificar requerimentos',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Você deve preencher todos os campos deste bloco.',

	'TIMEOUT_DETECTED_TITLE'	=> 'O instalador parou de funcionar',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'O instalador parou de funcionar, você pode tentar atualizar a página, mas isso pode corromper os dados. Sugerimos que aumente o período de limite de tempo nas configurações ou use a interface de linha de comando (CLI).',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Definir dados da instalação',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Informações do administrador',

	// Form labels
	'ADMIN_CONFIG'				=> 'Configuração de administração',
	'ADMIN_PASSWORD'			=> 'Senha do administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmar senha do administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor, escreva uma senha que tenha entre 6 e 30 caracteres.',
	'ADMIN_USERNAME'			=> 'Nome de usuário do administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, escreva um nome de usuário que tenha entre 3 e 20 caracteres.',

	// Errors
	'INST_ERR_DB'					=> 'Erro na instalação do banco de dados',
	'INST_ERR_EMAIL_INVALID'		=> 'O endereço de e-mail informado é inválido.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'As senhas informadas não coincidem.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A senha digitada é muito grande. O tamanho máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha digitada é muito curta. O tamanho mínimo é de 6 caracteres.',
	'INST_ERR_USER_TOO_LONG'		=> 'O nome de usuário informado é muito grande. O comprimento máximo é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'		=> 'O nome de usuário informado é muito curto. O comprimento mínimo é de 3 caracteres.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Configuração do fórum',
	'DEFAULT_LANGUAGE'	=> 'Idioma padrão',
	'BOARD_NAME'		=> 'Título do fórum',
	'BOARD_DESCRIPTION'	=> 'Pequena descrição do fórum',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Configuração do banco de dados',

	// Form labels
	'DB_CONFIG'				=> 'Configuração do banco de dados',
	'DBMS'					=> 'Tipo de banco de dados',
	'DB_HOST'				=> 'Nome do servidor do banco de dados ou DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN significa Data Source Name e é relevante apenas para instalações ODBC. No PostgreSQL, use localhost para conectar no servidor local via domínio socket UNIX e 127.0.0.1 para conectar via TCP. Para o SQLite, insira o caminho completo para o seu arquivo de banco de dados.',
	'DB_PORT'				=> 'Porta do servidor do banco de dados',
	'DB_PORT_EXPLAIN'		=> 'Deixe em branco a menos que você saiba se o servidor utiliza outra porta que não seja a padrão.',
	'DB_PASSWORD'			=> 'Senha do banco de dados',
	'DB_NAME'				=> 'Nome do banco de dados',
	'DB_USERNAME'			=> 'Nome de usuário do banco de dados',
	'DATABASE_VERSION'		=> 'Versão do banco de dados',
	'TABLE_PREFIX'			=> 'Prefixo das tabelas no banco de dados',
	'TABLE_PREFIX_EXPLAIN'	=> 'O prefixo deve iniciar com uma letra e deve conter somente letras, números e espaços.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativo ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL com extensão MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Não foi possível carregar o módulo PHP para o tipo de banco de dados selecionado.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'O prefixo informado é inválido. Deve iniciar com uma letra e deve conter somente letras, números e espaços.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'O prefixo informado é muito grande. O comprimento máximo é de %d caracteres',
	'INST_ERR_DB_NO_NAME'			=> 'O nome do banco de dados deve ser especificado.',
	'INST_ERR_DB_FORUM_PATH'		=> 'O arquivo do banco de dados informado está dentro da estrutura de diretórios do painel. Você deveria inserir este arquivo em um local não acessível através da internet.',
	'INST_ERR_DB_CONNECT'			=> 'Não foi possível conectar-se ao banco de dados, veja a mensagem de erro abaixo.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'O banco de dados e o diretório de contéudo não podem ser escritos.',
	'INST_ERR_DB_NO_ERROR'			=> 'Nenhuma mensagem de erro foi exibida.',
	'INST_ERR_PREFIX'				=> 'Já existem tabelas com o prefixo especificado, por favor, escolha um alternativo.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'A versão do Mysql instalada nesta máquina é incompatível com a opção “MySQL with MySQLi Extension” selecionada. Por favor, tente com uma outra opção do “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'A versão da extensão SQLite instalada é muito antiga, você precisa atualizá-la para uma superior a 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'A versão do Oracle instalada nesta máquina exige que você sete a variável <var>NLS_CHARACTERSET</var> para o parâmetro <var>UTF-8</var>. Você pode atualizar a sua instalação para uma superior a 9.2+ ou alterar o seu parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'O banco de dados selecionado não foi criado na codificação <var>UNICODE</var> ou <var>UTF-8</var>. Tente instalar com um banco de dados de codificação <var>UNICODE</var> ou <var>UTF-8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'O arquivo de esquema de banco de dados não pode ser escrito',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Configuração de e-mail',

	// Package info
	'PACKAGE_VERSION'				=> 'Versão do pacote instalado',
	'UPDATE_INCOMPLETE'				=> 'Sua instalação do phpBB não foi atualizada corretamente.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Por favor, veja as informações abaixo para corrigir o erro.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Atualização incompleta</h1>

		<p>Notamos que a última atualização da sua instalação do phpBB não foi finalizada. Visite a <a href="%1$s" title="%1$s">página de atualização do banco de dados</a>, certifique-se de que <em>Atualizar somente banco de dados</em> esteja marcado e clique em <strong>Enviar</strong>. Não se esqueça de excluir o diretório "install" depois de atualizar o banco de dados.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'		=> 'A versão <strong>%1$s</strong>, incluindo novos recursos, está disponível. Por favor, leia <a href="%2$s" title="%2$s"><strong>o anúncio de lançamento</strong></a> para aprender sobre tudo o que ela traz e como atualizar seu fórum.',
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SCRIPT_PATH'				=> 'Pasta do sistema',
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde os arquivos do phpBB estão localizados em seu servidor, ex. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Atenciosamente, a Administração.',
	'CONFIG_SITE_DESC'				=> 'Um pequeno texto para descrever o seu painel',
	'CONFIG_SITENAME'				=> 'seudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Esta é apenas uma mensagem de exemplo em sua instalação do phpBB3. Tudo parece estar funcionando normalmente. Você pode excluir esta mensagem se desejar e continuar a configurar o seu painel. Durante o processo de instalação, a sua primeira categoria e o seu primeiro fórum foram assinalados em um set de permissões apropriado aos grupos de usuários pré-definidos, como administradores, bots, moderadores globais, visitantes, usuários registrados e usuários registrados da COPPA. Se você optar por excluir sua primeira categoria e o seu primeiro fórum, não se esqueça de atribuir as permissões para todos estes grupos em relação a todas as novas categorias e fóruns que criar. É recomendável que você renomeie a sua primeira categoria e o seu primeiro fórum e apenas copie as permissões destes enquanto criar suas novas categorias e fóruns. Divirta-se!',

	'FORUMS_FIRST_CATEGORY'			=> 'Sua primeira categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrição de seu primeiro fórum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Seu primeiro fórum',
	
	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador',
	'REPORT_WAREZ'					=> 'A mensagem denunciada possui endereços ilegais ou softwares pirateados.',
	'REPORT_SPAM'					=> 'A mensagem denunciada possui apenas o propósito de anunciar algum outro website ou produto.',
	'REPORT_OFF_TOPIC'				=> 'A mensagem denunciada encontra-se fora de discussão no tópico.',
	'REPORT_OTHER'					=> 'A mensagem denunciada não se encaixa em qualquer outra categoria. Por favor, utilize o campo de informações adicionais.',

	'SMILIES_ARROW'					=> 'Seta',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Chorando ou Muito Triste',
	'SMILIES_EMARRASSED'			=> 'Envergonhado',
	'SMILIES_EVIL'					=> 'Mal ou Muito Nervoso',
	'SMILIES_EXCLAMATION'			=> 'Exclamação',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Nervoso',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutro',
	'SMILIES_QUESTION'				=> 'Questão',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Virando os olhos',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Chocado',
	'SMILIES_SMILE'					=> 'Sorridente',
	'SMILIES_SURPRISED'				=> 'Surpreso',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Muito Feliz',
	'SMILIES_WINK'					=> 'Piscar os olhos',

	'TOPICS_TOPIC_TITLE'			=> 'Bem-vindo ao phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Geral',
	'MENU_INTRO'		=> 'Introdução',
	'MENU_LICENSE'		=> 'Licença',
	'MENU_SUPPORT'		=> 'Suporte',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Criando arquivo de configuração',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adicionando definições de configuração',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adicionando definições padrões para o banco de dados',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Criando o arquivo de esquema para o banco de dados',
	'TASK_SETUP_DATABASE'				=> 'Configurando o banco de dados',
	'TASK_CREATE_TABLES'				=> 'Criando tabelas',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registrando bots',
	'TASK_ADD_LANGUAGES'	=> 'Instalando idiomas disponíveis',
	'TASK_ADD_MODULES'		=> 'Instalando módulos',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Criando índice de pesquisa',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalando pacotes de extensões',
	'TASK_NOTIFY_USER'			=> 'Enviando e-mail de notificação',
	'TASK_POPULATE_MIGRATIONS'	=> 'Preenchendo migrações',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'A instalação foi finalizada com sucesso',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'O módulo selecionado não existe',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Um módulo não pôde ser encontrado porque o serviço %s, não foi definido.',

	'TASK_NOT_FOUND'				=> 'A tarefa selecionada não existe',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Uma tarefa não pôde ser encontrado porque o serviço %s, não foi definida.',

	'SKIP_MODULE'	=> 'Ignorar módulo “%s”',
	'SKIP_TASK'		=> 'Ignorar tarefa “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Todas as tarefas de serviços de instalação devem iniciar com “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'A definição da tarefa de serviço de instalação é inválido. O nome de serviço fornecido “%1$s”, a classe do namespace para isso é “%2$s”. Para mais informações, consulte a documentação do task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'O arquivo de configuração de instalação não pode ser escrito.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalar phpBB',
	'CLI_UPDATE_BOARD'				=> 'Atualizar phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Exibir a configuração que será usada',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validar um arquivo de configuração',
	'CLI_CONFIG_FILE'				=> 'Arquivo de configuração para usar',
	'MISSING_FILE'					=> 'Não foi possível acessar o arquivo %1$s',
	'MISSING_DATA'					=> 'O arquivo de configuração não contém quaisquer dados ou eles são inválidos.',
	'INVALID_YAML_FILE'				=> 'Não foi possível analisar o arquivo YAML %1$s',
	'CONFIGURATION_VALID'			=> 'O arquivo de configuração é válido',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Atualizar instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Aqui você pode atualizar a instalação do seu phpBB para a última versão.<br />Durantes este processo, todos os seus arquivos serão devidamente checados em sua integridade. Você pode revisar todas as diferenças e arquivos antes da atualização.<br /><br />A própria atualização do arquivo pode ser realizada de duas maneiras.</p><h2>Atualização Manual</h2><p>Com esta atualização, você pode baixar uma seleção pessoal de arquivos modificados para ter certeza de que você não perderá as modificações realizadas nestes. Depois de ter baixado este pacote, você deve manualmente enviar os arquivos para o diretório raíz do phpBB. Em seguida, você pode fazer o estágio da verificação do arquivo novamente para ver se você moveu corretamente os seus arquivos.</p><h2>Atualização Automática com FTP</h2><p>Este método é similar ao primeiro, mas você não precisa baixar os arquivos modificados e enviá-los ao seu servidor. Isto será executado para você. Em ordem para utilizar este método, você precisa saber as informações de seu registro de FTP desde que você seja exigido para isso. Depois de finalizado, você será redirecionado para a verificação dos arquivos novamente para ter a certeza de que tudo foi atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de lançamento</h1>

		<p>Por favor, leia o anúncio de lançamento da mais nova versão antes de continuar com o processo de atualização, pois aqui poderá conter informações importantes. E também estarão disponíveis os links para download do pacote oficial e o registro de mudanças.</p>

		<br />


		<h1>Como atualizar a sua instalação com o Pacote Completo (Full Package)</h1>

		<p>A maneira recomendada de atualizar sua instalação é usando o pacote completo. Se os arquivos principais do phpBB foram modificados na sua instalação, você pode querer usar o pacote de atualização automática para evitar perder essas alterações. Você também pode atualizar sua instalação usando os outros métodos listados no INSTALL.html. As etapas para atualizar o phpBB3 usando o pacote completo são as seguintes:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Backup de todos os arquivos e do banco de dados.</strong></li>
			<li>Vá até a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de downloads do phpBB.com</a> e baixe o arquivo do "Full Package".</li>
			<li>Descompacte o arquivo.</li>
			<li>Exclua o arquivo <code class="inline">config.php</code> e as pastas <code class="inline">/images</code>, <code class="inline">/store</code> e <code class="inline">/files</code> <em>do pacote</em> (não do seu site).</li>
			<li>Vá para o ACP, Configurações do Fórum e certifique-se de que o prosilver é o estilo padrão. Se não for, defina o prosilver como padrão.</li>
			<li>Exclua as pastas <code class="inline">/vendor</code> e <code class="inline">/cache</code> da pasta raiz do fórum, no seu servidor.</li>
			<li>Usando FTP ou SSH envie os arquivos e pastas restantes (isto é, o CONTEÚDO restante da pasta phpBB3) para a pasta raiz da instalação do fórum no servidor, sobrescrevendo os arquivos existentes. (Nota: tenha cuidado para não excluir nenhuma extensão na pasta <code class="inline">/ext</code> quando fizer o envio do novo conteúdo do phpBB3.)</li>
			<li><strong><a href="%1$s" title="%1$s">Agora inicie o processo de atualização, apontando seu navegador para a pasta de instalação</a>.</strong></li>
			<li>Siga as etapas para atualizar o banco de dados e deixe que seja executado até a conclusão.</li>
			<li>Usando FTP ou SSH exclua a pasta <code class="inline">/install</code> da pasta raiz da instalação do fórum no servidor.<br><br></li>
		</ol>
		
		<p>Agora você tem um novo fórum atualizado que contém todos os seus usuários e mensagens. Tarefas complementares:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Atualize seu pacote de idioma</li>
			<li>Atualize seu estilo<br><br></li>
		</ul>

		<h1>Como atualizar a sua instalação com o Pacote de Atualização Automática (Automatic Update Package)</h1>

		<p>O pacote de atualização automática é recomendado somente se os arquivos principais do phpBB foram modificados na sua instalação. Você também pode atualizar sua instalação usando os outros métodos listados no INSTALL.html. As etapas para atualizar o phpBB3 usando o pacote de atualização automática são as seguintes:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vá até a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de downloads do phpBB.com</a> e baixe o arquivo do "Automatic Update Package".</li>
			<li>Descompacte o arquivo.</li>
			<li>Envie os diretórios "install" e "vendor" completamente descompactados para o diretório raiz do seu phpBB (onde encontra-se o arquivo config.php).<br><br></li>
		</ul>

		<p>Depois de enviado, o seu fórum se encontrará offline para os usuários normais conforme o diretório de instalação que você enviou agora estiver presente.<br><br>
		<strong><a href="%1$s" title="%1$s">Agora inicie o processo de instalação inserindo em seu navegador o endereço do diretório install</a>.</strong><br />
		<br />
		Você será levado em seguida ao processo de atualização. Você será devidamente avisado quando a atualização estiver completa.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tipo de atualização para executar',

	'UPDATE_TYPE_ALL'		=> 'Atualizar sistema de arquivos e banco de dados',
	'UPDATE_TYPE_DB_ONLY'	=> 'Atualizar somente banco de dados',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Métodos de atualização de arquivos',

	'UPDATE_FILE_METHOD'			=> 'Método de atualização arquivo',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Baixar o arquivo de modificações',
	'UPDATE_FILE_METHOD_FTP'		=> 'Atualizar via envio de FTP (Automático)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Atualizar por acesso direto aos arquivos (Automático)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar formato do arquivo para download',

	// FTP settings
	'FTP_SETTINGS'			=> 'Configurações de FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nenhum diretório de atualização foi encontrado, por favor, certifique-se de ter enviado os arquivos necessários.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A sua versão está atualizada. Não é necessário executar esta ferramenta de atualização. Se você quiser inspecionar todos os arquivos, certifique-se de ter enviado os arquivos de atualização necessários.',
	'OLD_UPDATE_FILES'				=> 'Os arquivos de atualização estão desatualizados. Os arquivos de atualização encontrados são do phpBB %1$s para %2$s, mas a última versão do phpBB é a %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos de atualização encontrados são incompatíveis com a sua versão do phpBB instalada. A sua versão do phpBB é %1$s e o arquivo de atualização é da versão %2$s para %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Verificar arquivos para atualizar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'O arquivo %s não pode ser aberto no diferenciador.',

	'UPDATE_FILE_DIFF'		=> 'Diferenciação de arquivos alterados',
	'ALL_FILES_DIFFED'		=> 'Todos os arquivos modificados foram diferenciados.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Arquivos de atualização',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Baixar conflitos para este arquivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Pesquisar por &lt;&lt;&lt; para reconhecer conflitos',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Baixar os arquivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez baixados, você deve descompactar os arquivos. Você encontrará os arquivos modificados que deverá enviar para o diretório raiz do seu phpBB. Por favor, envie os arquivos para os seus respectivos diretórios. Após você ter enviado todos os arquivos, poderá continuar com o processo de atualização.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O arquivo já foi atualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'O arquivo não se encontra disponível para ser diferenciado.',
	'FILE_USED'						=> 'Informação utilizada de',			// Single file
	'FILES_CONFLICT'				=> 'Arquivos em conflito',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os arquivos seguintes são alterados e não representam os seus respectivos arquivos originais da versão anterior. O phpBB determinou que estes arquivos criassem conflitos se eles tentarem ser fundidos. Por favor, investigue os conflitos e tente resolvê-los manualmente ou continue a atualização selecionando o método desejado. Se você resolver os conflitos manualmente, verifique os arquivos novamente depois de modificados. Você pode também selecionar entre o método desejado para todos os arquivos. O primeiro irá resultar em um arquivo onde as linhas em conflito de seu arquivo anterior serão perdidas e o outro irá resultar na perda das modificações do novo arquivo criado.',
	'FILES_DELETED'					=> 'Arquivos excluídos',
	'FILES_DELETED_EXPLAIN'			=> 'Os seguintes arquivos não existem na nova versão. Esses arquivos devem ser excluídos de sua instalação.',
	'FILES_MODIFIED'				=> 'Arquivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os arquivos seguintes são alterados e não representam os seus respectivos arquivos originais da versão anterior. O arquivo atualizado será fundido entre suas modificações e o seu novo arquivo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Os arquivos seguintes atualmente não existem em sua instalação. Estes arquivos serão adicionados em sua instalação.',
	'FILES_NEW_CONFLICT'			=> 'Novos arquivos em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os arquivos seguintes são novos na nova versão do phpBB, mas foi determinado que já exista um arquivo com o mesmo nome e mesma posição. Este arquivo será substituído por um novo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os arquivos seguintes não foram alterados e representam os seus respectivos arquivos originais da versão a qual você deseja atualizar.',
	'FILES_UP_TO_DATE'				=> 'Arquivos já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os arquivos seguintes já se encontram prontos e não precisam ser atualizados.',
	'FILES_VERSION'					=> 'Versão dos arquivos',
	'TOGGLE_DISPLAY'				=> 'Exibir/Ocultar lista de arquivos',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Atualizando arquivos',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'A atualização do arquivo “%1$s“ falhou. O instalador irá tentar retornar ao “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'A atualização de arquivo falhou. Não há métodos alternativos disponíveis.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continuar o processo de atualização',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Verificar arquivos novamente',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Atualizar banco de dados',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'A atualização do banco de dados foi realizada com sucesso.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Atualizando extensões',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'O conversor selecionado não existe.',
	'DEV_NO_TEST_FILE'			=> 'Não foi especificado um valor para a variável test_file no conversor. Se você é usuário deste conversor, e não deveria estar vendo este erro, por favor, contate o autor do conversor. Se você é o autor deste conversor, você deve especificar o nome de um arquivo que exista no fórum de destino para que seja possível a verificação de um diretório.',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível encontrar o local para o seu fórum anterior. Por favor, verifique as suas configurações e tente novamente.<br />» O local especificado foi %s.',
	'CONFIG_PHPBB_EMPTY'		=> 'A variável de configuração do phpBB3 para “%s” está vazia.',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, certifique-se de que esta pasta existe e pode ser escrita pelo servidor e tente novamente:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, certifique-se de que estas pastas existem e podem ser escritas pelo servidor e tente novamente:<br />»<strong>%s</strong>',

	'INSTALL_TEST'				=> 'Testar novamente',

	'NO_TABLES_FOUND'			=> 'Nenhuma tabela foi encontrada.',
	'TABLES_MISSING'			=> 'Não foi possível encontrar estas tabelas<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Por favor, verifique o prefixo das tabelas e tente novamente.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentativa de conversão prévia foi encontrada. Você deve escolher entre iniciar uma nova conversão ou continuar a previamente interrompida.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar conversão previamente interrompida',

	// Start conversion
	'SUB_INTRO'					=> 'Introdução',
	'CONVERT_INTRO'				=> 'Bem-vindo à Conversão Unificada do phpBB',
	'CONVERT_INTRO_BODY'		=> 'Aqui você pode importar os dados de outros sistemas de fóruns instalados. A lista abaixo exibe todos os módulos de conversão disponíveis. Se não existe um conversor na lista para o código de fórum que você deseja converter, por favor, verifique em nosso website onde outros conversores podem estar disponíveis para download.',
	'AVAILABLE_CONVERTORS'		=> 'Conversores disponíveis',
	'NO_CONVERTORS'				=> 'Nenhum conversor disponível para uso.',
	'CONVERT_OPTIONS'			=> 'Opções',
	'SOFTWARE'					=> 'Software do painel',
	'VERSION'					=> 'Versão',
	'CONVERT'					=> 'Converter',

	// Settings
	'STAGE_SETTINGS'			=> 'Configurações',
	'TABLE_PREFIX_SAME'			=> 'O prefixo das tabelas precisa ser aquele usado pelo software que você está convertendo.<br />» O prefixo das tabelas especificado foi %s.',
	'DEFAULT_PREFIX_IS'			=> 'O conversor não pôde encontrar tabelas com o prefixo especificado. Por favor, verifique se você escreveu as informações corretas do painel que está convertendo. O prefixo padrão para a tabela %1$s é <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Escolha as opções de conversão',
	'FORUM_PATH'				=> 'Diretório do fórum',
	'FORUM_PATH_EXPLAIN'		=> 'Este é o caminho <strong>relativo</strong> em disco para o seu fórum anterior a <strong>esta instalação do phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Atualize a página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se clicar em sim, o conversor irá atualizar a página para continuar a conversão até o estágio final. Se esta é a sua primeira conversão com propósitos de teste e detectar erros, nós sugerimos que clique em Não.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversão em progresso',

	'AUTHOR_NOTES'				=> 'Notas do autor<br />» %s',
	'STARTING_CONVERT'			=> 'Iniciando o processo da conversão',
	'CONFIG_CONVERT'			=> 'Convertendo a configuração',
	'DONE'						=> 'Pronto',
	'PREPROCESS_STEP'			=> 'Executando as funções de pré-processamento',
	'FILLING_TABLE'				=> 'Preenchendo a tabela <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Preenchendo as tabelas',
	'DB_ERR_INSERT'				=> 'Erro ao processar a query <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro ao executar <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Erro ao executar a query <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'FINAL_STEP'				=> 'Etapa final do processo',
	'SYNC_FORUMS'				=> 'Iniciando a sincronização de fóruns',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts de <var>entrada</var> %1$s para %2$s.',
	'SYNC_TOPICS'				=> 'Iniciando a sincronização de tópicos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos a partir do topic_id $1%s ao $2%s.',
	'PROCESS_LAST'					=> 'Processando as últimas instruções',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando informações de tópicos enviados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Algum erro ocorreu enquanto as informações de tópicos eram geradas. Você pode tentar novamente esta etapa no ACP depois que a conversão for concluída.',
	'CONTINUE_LAST'				=> 'Continuar com as últimas atualizações',
	'CLEAN_VERIFY'				=> 'Limpando e verificando a estrutura final',
	'NOT_UNDERSTAND'			=> 'Não foi possível entender %s #%d, tabela %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Conflito de nomes: %s e %s são pseudônimos<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversão concluída',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Você converteu o seu fórum para o phpBB 3.2 com sucesso. Você pode já pode efetuar o login e <a href="../">acessar o seu painel</a>. Por favor, certifique-se de que as suas configurações foram transferidas corretamente antes de ativar o seu fórum excluindo o diretório de instalação do sistema. E ainda, lembre-se de que você pode solicitar ajuda online através da <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">Documentação do phpBB3</a> e no <a href="https://www.phpbb.com/community/viewforum.php?f=466">fórum de suporte phpBB.com</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O envio de anexos por FTP está ativo no seu painel antigo. Desative a opção de envio por FTP, crie um diretório válido e envie todos os arquivos de anexos para este novo diretório acessível. Após concluir esta operação, reinicie o seu conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não foram encontradas informações de configuração válidas para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível adquirir as informações do fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não foi possível adquirir as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível adquirir a configuração do fórum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não foi possível acessar/ler “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos grupos.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Foi encontrada uma inconsistência na tabela de grupos em add_bots() - você precisa adicionar todos os grupos especiais manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o bot na tabela de usuários.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o bot na tabela de bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não foi possível inserir o usuário na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de erro',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_path\'] para utilizar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O local relativo aos arquivos do fórum não foi especificado.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_gallery_path\'] para utilizar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo “%1$s” não foi encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'ranks_path\'] para utilizar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'smilies_path\'] para utilizar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'upload_path\'] para utilizar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir ou atualizar as configurações de permissões.',
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível selecionar as pastas de mensagens privadas.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo fórum substituindo uma categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo fórum substituindo um fórum antigo.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos usuários.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no grupo “%1$s” definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página recebe as informações necessárias para acessar a fonte do painel. Escreva as informações do banco de dados de seu fórum anterior; a conversão não irá alterar nenhuma informação no banco de dados informado abaixo. A fonte do painel deverá ser desativada para permitir uma conversão consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens salvas',

	'PRE_CONVERT_COMPLETE'			=> 'Todos os passos da pré-conversão foram concluídos com sucesso. Você pode agora iniciar o processo de conversão. Por favor, note que você deve ajustar algumas informações manualmente. Depois da conversão, verifique as permissões atribuídas, reconstrua o índice de sua pesquisa que não está convertido e também verifique se os arquivos foram copiados corretamente, como por exemplo os avatares e smilies.',
));
