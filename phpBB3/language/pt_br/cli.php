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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Defina esta opção se a opção de configuração muda com muita frequência para ser eficiente em cache.',
	'CLI_CONFIG_CURRENT'				=> 'Valor atual configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Configuração eliminada com sucesso %s.',
	'CLI_CONFIG_NEW'					=> 'Novo valor de configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Configuração %s não existe',
	'CLI_CONFIG_OPTION_NAME'			=> 'O nome da opção de configuração',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Defina esta opção se o valor deve ser impresso sem uma nova linha no final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Valor de incrementar de',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Configuração %s incrementada com sucesso',
	'CLI_CONFIG_SET_FAILURE'			=> 'Não foi possível definir a configuração %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Configuração definida com sucesso %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprime a lista de tarefas Cron agendadas prontas e não prontas.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Executa todas as tarefas Cron prontas agendadas.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nome da tarefa a ser executada',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Listar todas as migrações instalados e disponíveis.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Atualiza o Banco de Dados através da aplicação de migrações.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Reverter uma migração.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina uma opção de configuração',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Desativa a extensão especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Ativa a extensão especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encontra migrações não dependentes.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Repara a árvore de estrutura dos fóruns e módulos.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtém o valor de uma opção de configuração',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Aumenta o valor inteiro de uma opção de configuração',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista todas as Extensões no Banco de Dados e no sistema de arquivos.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'O nome do ambiente.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Executar em modo de segurança (sem extensões).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar o modo shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Limpa a extensão especificada.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Listas de tipos de texto que podem ser reanalisados.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Reanalisados disponíveis:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Textos reanalisados armazenado com serviços text_formatter atuais.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'O tipo de texto para reanalisar. Deixe em branco para reanalisar tudo.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Não salve as alterações; apenas imprima o que ocorreu',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'ID de registro mais baixo para processar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'ID de registro mais alto para processar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Número aproximado de registros para processar de cada vez',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Comece a reanalisar de onde a última execução parou',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula a coluna user_email_hash da tabela de usuários.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Define o valor de uma opção de configuração só se o anterior corresponde ao valor atual',

	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Define o valor de uma opção de configuração',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Excluir todas as miniaturas existentes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Gerar todas as miniaturas ausentes.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Recriar todas as miniaturas',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Verificar se o fórum está atualizado.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nome da extensão para verificar (se todos, irá verificar todas as extensões)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Execute o comando de verificação com o cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Execute o comando optando por verificar somente por versões estáveis ou instáveis.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Atualiza hashes de senhas obsoletos para codificar com bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" precisa ser definido como "estável" ou "instável".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Ativar (ou desativar) a conta de um usuário.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Nome de usuário da conta para ativar.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Desativar a conta de um usuário',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'O usuário já está ativado.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'O usuário já está desativado.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Adicionar um novo usuário.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Nome de usuário do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Senha do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Endereço de e-mail do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Enviar o e-mail de ativação de conta para o novo usuário (não enviado por padrão)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Excluir conta de usuário.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Nome de usuário do usuário para excluir',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Excluir todas as mensagens do usuário. Sem esta opção, as mensagens do usuário serão mantidas.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Re-limpar nome de usuários.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Não foi possível desativar a extensão %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'A extensão %s foi desativada com sucesso',
	'CLI_EXTENSION_DISABLED'			=> 'A extensão %s não foi ativada',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Não foi possível ativar a extensão %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensão %s ativada com sucesso',
	'CLI_EXTENSION_ENABLED'				=> 'A extensão %s já está ativada',
	'CLI_EXTENSION_NOT_EXIST'			=> 'A extensão %s não existe',
	'CLI_EXTENSION_NAME'				=> 'Nome da extensão',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Não foi possível limpar a extensão %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'A extensão %s foi limpa com sucesso',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Não foi possível atualizar a extensão %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Extensão %s atualizada com sucesso',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Não foram encontradas extensões.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'A extensão %s não pode ser ativada.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponível',
	'CLI_EXTENSIONS_DISABLED'			=> 'Desativado',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ativado',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Successfully repaired the tree structure of the forums and modules.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Recalculado com sucesso todos os hashes de e-mail.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Successfully updated outdated password hashes to bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Nome da migração, incluindo o namespace (use barras em vez de barras invertidas para evitar complicações).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrações disponíveis´',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrações instaladas',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Exibir somente migrações disponíveis',
	'CLI_MIGRATIONS_EMPTY'                  => 'Não há migrações.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reanalisando %1$s (linha %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reanalisando %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'A reanálise foi realizada com sucesso',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) excluída.',
	'CLI_THUMBNAIL_DELETING'	=> 'Excluindo miniaturas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) ignorada.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) gerada.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Gerando miniaturas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Todas as miniaturas foram regeradas.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Todas as miniaturas foram excluídas.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Não há miniaturas para gerar.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Não há miniaturas para excluir.',

	'CLI_USER_ADD_SUCCESS'		=> 'O usuário %s foi adicionado com sucesso.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Você deseja realmente excluir ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Re-limpando nome de usuários',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Re-limpeza completa. Não há nome de usuários para limpar.',
		1	=> 'Re-limpeza completa. %d nome de usuário foi limpo.',
		2	=> 'Re-limpeza completa. %d nomes de usuários foram limpos.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcionalmente, você pode especificar um nome de uma tarefa cron para executar apenas a tarefa cron especificada.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Ative ou desative uma conta de usuário usando a opção <info>--deactivate</info>.
Se você quiser enviar um e-mail de ativação para o usuário, você deve usar a opção <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'O comando <info>%command.name%</info> adiciona um novo usuário:
Se esse comando é executado sem opções, você será solicitado a inseri-las.
Se você quiser enviar um e-mail para o usuário, você deve usar a opção <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'A re-limpeza de nomes de usuários irá verificar todos os nomes de usuários para garantir que as versões limpas também possam ser armazenados. Os nomes de usuários limpos não diferem de maiúsculas e minúsculas, são normalizadas com NFC e são transformados em ASCII.',
));
