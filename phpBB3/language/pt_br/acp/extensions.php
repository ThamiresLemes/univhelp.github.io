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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Extensão',
	'EXTENSIONS'				=> 'Extensões',
	'EXTENSIONS_ADMIN'			=> 'Administrar Extensões',
	'EXTENSIONS_EXPLAIN'		=> 'O Administrador de Extensões é uma ferramenta do phpBB que permite administrar todas as suas extensões e exibir as respectivas informações.',
	'EXTENSION_INVALID_LIST'	=> 'A extensão “%s” não é válida.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'A extensão selecionada não está disponível para este Fórum, por favor, verifique versões do phpBB e PHP permitidas (veja a página de detalhes).',
	'EXTENSION_DIR_INVALID'		=> 'A extensão selecionada não pode ser ativada porque tem uma estrutura de diretórios inválida.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'A extensão selecionada não pode ser ativada, por favor, verifique os requisitos da extensão.',
	'EXTENSION_NOT_INSTALLED'	=> 'A extensão %s não está disponível. Por favor, verifique se ela foi instalada corretamente.',

	'DETAILS'				=> 'Detalhes',

	'EXTENSIONS_DISABLED'	=> 'Extensões desativadas',
	'EXTENSIONS_ENABLED'	=> 'Extensões ativadas',

	'EXTENSION_DELETE_DATA'	=> 'Excluir dados',
	'EXTENSION_DISABLE'		=> 'Desativar',
	'EXTENSION_ENABLE'		=> 'Ativar',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Excluir dados de uma extensão remove todos os dados e configurações. Os arquivos da extensão são mantidas para que possa ser ativada novamente.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Desativar uma extensão mantém arquivos, dados e configurações, mas remove qualquer funcionalidade adicional da extensão.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Ativar uma extensão permite usá-la no seu Fórum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Os dados da extensão estão sendo excluídos. Por favor não deixe ou atualize esta página até a tarefa estar concluída.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'A extensão está sendo desativada. Por favor não deixe ou atualize esta página até a tarefa estar concluída.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'A extensão está sendo ativada. Por favor não deixe ou atualize esta página até a tarefa estar concluída.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Os dados da extensão foram excluídos com sucesso',
	'EXTENSION_DISABLE_SUCCESS'		=> 'A extensão foi desativada com sucesso',
	'EXTENSION_ENABLE_SUCCESS'		=> 'A extensão foi ativada com sucesso',

	'EXTENSION_NAME'			=> 'Nome da Extensão',
	'EXTENSION_ACTIONS'			=> 'Ações',
	'EXTENSION_OPTIONS'			=> 'Opções',
	'EXTENSION_INSTALL_HEADLINE'=> 'Instalando uma extensão',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Baixe uma extensão do banco de dados de extensões do phpBB</li>
			<li>Descompacte a extensão e a envie para o diretório <samp>ext/</samp> do seu fórum phpBB</li>
			<li>Ative a extensão, aqui no gerenciador de Extensões</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Atualizar extensões',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Desative a extensão</li>
			<li>Exclua os arquivos da extensão do sistema de arquivos</li>
			<li>Envie os novos arquivos</li>
			<li>Ative a extensão</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Remover completamente uma extensão',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Desative a extensão</li>
			<li>Exclua os dados da extensão</li>
			<li>Exclua os arquivos da extensão do sistema de arquivos</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'		=> 'Tem certeza que deseja excluir os dados associados à “%s”?<br /><br />Se continuar removerá todos os dados e configurações. Esta ação é irreversível!',
	'EXTENSION_DISABLE_CONFIRM'			=> 'Tem certeza que deseja desativar a extensão “%s”?',
	'EXTENSION_ENABLE_CONFIRM'			=> 'Tem certeza que deseja ativar a extensão “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Tem certeza que deseja forçar o uso de versões instáveis?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Voltar à lista de extensões',

	'EXT_DETAILS'			=> 'Detalhes da extensão',
	'DISPLAY_NAME'			=> 'Nome',
	'CLEAN_NAME'			=> 'Localização',
	'TYPE'					=> 'Tipo',
	'DESCRIPTION'			=> 'Descrição',
	'VERSION'				=> 'Versão',
	'HOMEPAGE'				=> 'Homepage',
	'PATH'					=> 'Caminho do arquivo',
	'TIME'					=> 'Data de lançamento',
	'LICENSE'				=> 'Licença',

	'REQUIREMENTS'			=> 'Requisitos',
	'PHPBB_VERSION'			=> 'Versão phpBB',
	'PHP_VERSION'			=> 'Versão PHP',
	'AUTHOR_INFORMATION'	=> 'Detalhes do autor',
	'AUTHOR_NAME'			=> 'Nome',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Homepage',
	'AUTHOR_ROLE'			=> 'Função',

	'NOT_UP_TO_DATE'		=> '%s não está atualizado',
	'UP_TO_DATE'			=> '%s está atualizado',
	'ANNOUNCEMENT_TOPIC'	=> 'Anúncio de lançamento',
	'DOWNLOAD_LATEST'		=> 'Versão para download',
	'NO_VERSIONCHECK'		=> 'Não foi obtida de nenhuma informação de versão.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Verificar novamente todas as versões',
	'FORCE_UNSTABLE'					=> 'Verifique sempre se há versões instáveis',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Configurações de verificação de versão',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Navegue no banco de dados de extensões',

	'META_FIELD_NOT_SET'	=> 'O Meta Campo obrigatório %s não foi definido.',
	'META_FIELD_INVALID'	=> 'O Meta Campo %s é inválido.',
));
