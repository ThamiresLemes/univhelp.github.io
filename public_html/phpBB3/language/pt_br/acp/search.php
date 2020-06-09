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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui você pode gerenciar todos os índices de pesquisa de seu fórum. Desde que você normalmente utilize apenas um modo de pesquisa, você deve excluir todos os outros os quais não utilizará. Depois de alterar algumas das configurações da pesquisa (ex. o número mínimo/máximo de caracteres), é preciso recriar o índice para que então tais configurações sejam refletidas.', 
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui você pode definir o modo de pesquisa que será utilizado para a execução deste sistema. Você pode determinar várias opções que podem influir em quantos processos estas ações serão solicitadas. Algumas destas configurações são as mesmas para todos os modos de pesquisa.', 

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns', 
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que estão contidas em uma grande porcentagem de mensagens serão consideradas comuns. Palavras comuns serão ignoradas nas pesquisas. Escreva zero para desativar. Apenas terá efeito se elas estiverem em mais de 100 mensagens. Se você deseja que palavras que estejam atualmente sendo consideradas comuns sejam reconsideradas, você deve recriar o índice.', 
	'CONFIRM_SEARCH_BACKEND'				=> 'Você deseja realmente alterar o modo de pesquisa para outro diferente? Depois de modificar o seu modo de pesquisa, você deverá criar um novo índice para o novo modo selecionado. Se você não planeja voltar ao seu modo de pesquisa antigo, poderá excluí-lo se achar necessário.', 
	'CONTINUE_DELETING_INDEX'				=> 'Continuar processo de exclusão de índice',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de exclusão de índice foi iniciado. Em ordem para acessar a página do índice da pesquisa novamente, você deve completar o processo ou cancelá-lo.',
	'CONTINUE_INDEXING'						=> 'Continuar processo de criação de índice', 
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de criação de índice foi iniciado. Em ordem para acessar a página do índice da pesquisa novamente, você deve completar o processo ou cancelá-lo.',
	'CREATE_INDEX'							=> 'Criar índice', 

	'DELETE_INDEX'							=> 'Excluir índice', 
	'DELETING_INDEX_IN_PROGRESS'			=> 'Excluindo o índice em progresso', 
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O modo de pesquisa está atualmente limpando os seus índices. Isto pode levar alguns minutos.', 

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'O modo de pesquisa de textos completos do MySQL somente pode ser usado com MySQL4 e superior.', 
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Índices de textos completos do MySQL podem apenas ser utilizados com tabelas do MyISAM ou do InnoDB. MySQL 5.6.8 ou versão anterior é necessário para índices de textos completos em tabelas InnoDB.', 
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número total de mensagens indexadas', 
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Palavras com pelo menos essa quantidade de caracteres serão indexadas na pesquisa. Você ou seu servidor só poderão alterar essa configuração se a configuração do mysql for alterada.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Palavras com no máximo esse número de caracteres serão indexadas na pesquisa. Você ou seu servidor só poderão alterar essa configuração se a configuração do mysql for alterada.',
	
	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'O modo de pesquisa de textos completos do PostgreSQL somente pode ser usado com PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'				=> 'Número total de mensagens indexadas',
	'FULLTEXT_POSTGRES_VERSION_CHECK'			=> 'Versão do PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'					=> 'Perfil de configuração de pesquisa de texto:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Número mínimio de palavras-chave permitido',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Número máximo de palavras-chave permitido',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'Este modo de pesquisa precisa de PostgreSQL versão 8.3 e posterior.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'			=> 'Perfil de configuração de pesquisa de texto usado para definir o analisador e o dicionário.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'Palavras com pelo menos essa quantidade de caracteres serão incluídas na consulta ao banco de dados.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'Palavras com no máximo esse número de caracteres serão incluídas na consulta ao banco de dados.',

	'FULLTEXT_SPHINX_CONFIGURE'					=> 'Defina as seguintes configurações para gerar o arquivo de configuração do Sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'					=> 'Caminho para o diretório de dados',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'			=> 'O diretório de dados é usado para armazenar índices e arquivos de logs. Você deve criar este diretório, tomando cuidado para que ele não esteja acessível on-line. Por favor, não se esqueça de adicionar uma barra no final do nome do diretório.',
	'FULLTEXT_SPHINX_DELTA_POSTS'				=> 'Número de mensagens atualizadas frequentemente no índice delta',
	'FULLTEXT_SPHINX_HOST'						=> 'Servidor do programa de pesquisa do Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'				=> 'Servidor onde funciona o programa de pesquisa do Sphinx. Deixe em branco para usar localhost como padrão',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'			=> 'Limite de memória do indexador',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Deve ser sempre inferior à memória RAM disponível no seu servidor. Se você tiver problemas regulares de desempenho, é provável que o indexador esteja consumindo muitos recursos. Diminuia a quantidade de memória disponível para o indexador.',
	'FULLTEXT_SPHINX_MAIN_POSTS'				=> 'Número de mensagens do índice principal',
	'FULLTEXT_SPHINX_PORT'						=> 'Porta do programa de pesquisa do Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'				=> 'Porta usada pela servidor onde funciona o programa de pesquisa do Sphinx. Deixe em branco para usar a porta padrão 9312 do Sphinx',
	'FULLTEXT_SPHINX_WRONG_DATABASE'			=> 'A pesquisa Sphinx para phpBB apenas suporta MySQL e PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'				=> 'Arquivo de configuração do Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'		=> 'O conteúdo do arquivo de configuração do Sphinx. Este conteúdo deve ser transcrito no arquivo sphinx.conf que é usado pelo programa de pesquisa do Sphinx. Substitua os espaços em [dbuser] e [dbpassword] por suas credenciais de banco de dados.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'			=> 'O caminho para o diretório de dados do sphinx não está definido. Por favor defina o caminho e envie para gerar o arquivo de configuração.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configurações gerais da pesquisa', 
	'GO_TO_SEARCH_INDEX'					=> 'Ir à página inicial da pesquisa', 

	'INDEX_STATS'							=> 'Índice de estatísticas', 
	'INDEXING_IN_PROGRESS'					=> 'Indexação em progresso', 
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O modo de pesquisa está atualmente indexando todas as mensagens do fórum. Isto pode levar de alguns minutos a algumas horas, dependendo do tamanho de seu painel.', 

	'LIMIT_SEARCH_LOAD'						=> 'Limite de tempo para carregar as pesquisas', 
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto exceder este valor, a página de pesquisa irá ficar offline, sendo 1.0 equivalente 100% de utilização de um processador. Isto apenas funciona em servidores baseados em UNIX.', 

	'MAX_SEARCH_CHARS'						=> 'Número máximo de caracteres indexados por pesquisa', 
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que não possuam mais caracteres que este número serão indexadas pela pesquisa.', 
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo de palavras-chave permitido',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palavras que o usuário pode pesquisar. Um valor como 0 permite um número ilimitado de palavras.',	
	'MIN_SEARCH_CHARS'						=> 'Número mínimo de caracteres indexados por pesquisa', 
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que possuam menos caracteres que este número não serão indexadas pela pesquisa.', 
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Núm. mín. de caracteres do nome do autor', 
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usuários terão de escrever ao menos este número de caracteres enquanto executando uma pesquisa por autor. Se o nome do autor for menor que este número, você ainda poderá pesquisar pelas mensagens do mesmo, escrevendo o nome do usuário completo.', 

	'PROGRESS_BAR'							=> 'Barra de progresso', 

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de pesquisas para visitantes', 
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número em segundos que um visitante deverá aguardar entre uma pesquisa e outra. Se um visitante realizar uma pesquisa, todos os outros devem aguardar até que este intervalo seja concluído.', 
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Todas as mensagens com id superior a %1$d serão indexadas agora, das quais %2$d mensagens foram geradas nesta etapa.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'A taxa atual de indexação é de aproximadamente %1$.1f mensagens por segundo.<br />Indexação em progresso…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Todas as mensagens com id superior a %1$d serão excluídas do sistema de pesquisas, das quais %1$d mensagens foram excluídas nesta etapa.',
	),
		'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'A taxa atual de exclusão é de aproximadamente %1$.1f mensagens por segundo.<br />Exclusão em progresso…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Todas as mensagens foram indexadas no banco de dados com sucesso.', 
	'SEARCH_INDEX_REMOVED'					=> 'O índice de pesquisa para este módulo foi excluído com sucesso.', 
	'SEARCH_INTERVAL'						=> 'Intervalo de pesquisas para usuários', 
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número em segundos que os usuários devem aguardar entre uma pesquisa e outra. Este intervalo é realizado independentemente para cada usuário.', 
	'SEARCH_STORE_RESULTS'					=> 'Tamanho do cache de resultados da pesquisa', 
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'O cache dos resultados da pesquisa irá expirar após este tempo, em segundos. Escreva 0 se você deseja desativar esta opção.', 
	'SEARCH_TYPE'							=> 'Modo de pesquisa', 
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB lhe permite selecionar o modo que será utilizado para as suas pesquisas no conteúdo das mensagens. Por padrão, será utilizado apenas o próprio sistema de pesquisas por textos completos.', 
	'SWITCHED_SEARCH_BACKEND'				=> 'O modo de pesquisa foi selecionado com sucesso. Agora, para utilizá-lo você terá de certificar-se da existência de um índice para o modo escolhido.', 

	'TOTAL_WORDS'							=> 'Número total de palavras indexadas', 
	'TOTAL_MATCHES'							=> 'Número total de palavras relacionadas à mensagens indexadas', 

	'YES_SEARCH'							=> 'Ativar ferramentas de pesquisa', 
	'YES_SEARCH_EXPLAIN'					=> 'Ativa a funcionalidade da pesquisa, incluindo a pesquisa de usuários.', 
	'YES_SEARCH_UPDATE'						=> 'Ativar a atualização de textos completos', 
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Os índices de texto completo são atualizados ao enviar uma mensagem, mesmo se a pesquisa estiver desativada.', 
));
