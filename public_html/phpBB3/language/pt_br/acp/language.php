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
	'ACP_FILES'						=> 'Administração de Idiomas', 
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aqui você pode instalar/desinstalar pacotes de idiomas para o seu painel. O pacote de idioma padrão está marcado com um asterisco (*).', 

	'DELETE_LANGUAGE_CONFIRM'		=> 'Você deseja realmente excluir “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Pacotes de idiomas instalados', 

	'LANGUAGE_DETAILS_UPDATED'			=> 'A configuração de idiomas foi atualizada com sucesso.', 
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'O pacote de idiomas já se encontra instalado.', 
	'LANGUAGE_PACK_DELETED'				=> 'O pacote de idiomas “%s” foi excluído com sucesso. Todos os usuários que utilizavam este idioma foram atualizados para o idioma padrão do painel.', 
	'LANGUAGE_PACK_DETAILS'				=> 'Informações do pacote de idiomas', 
	'LANGUAGE_PACK_INSTALLED'			=> 'O pacote de idiomas “%s” foi instalado com sucesso.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'As sequências de idioma dos campos de perfil personalizados foram copiados do idioma padrão. Por favor, altere-os caso necessário.',
	'LANGUAGE_PACK_ISO'					=> 'ISO', 
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome local', 
	'LANGUAGE_PACK_NAME'				=> 'Nome', 
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O pacote de idiomas selecionado não existe.', 
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizado por (incluindo bots)', 
	'LANGUAGE_VARIABLE'					=> 'Variável de linguagem', 
	'LANG_AUTHOR'						=> 'Autor do pacote de idiomas', 
	'LANG_ENGLISH_NAME'					=> 'Nome em inglês', 
	'LANG_ISO_CODE'						=> 'Código ISO', 
	'LANG_LOCAL_NAME'					=> 'Nome local', 

	'MISSING_LANG_FILES'		=> 'Arquivos de linguagem ausentes', 
	'MISSING_LANG_VARIABLES'	=> 'Variáveis de linguagem ausentes', 

	'NO_FILE_SELECTED'				=> 'Você não especificou o arquivo de linguagem.', 
	'NO_LANG_ID'					=> 'Você não especificou um pacote de idiomas.', 
	'NO_REMOVE_DEFAULT_LANG'		=> 'Você não pode excluir o pacote de idiomas padrão.<br />Se você deseja excluir este pacote, primeiro altere o idioma padrão do seu painel.', 
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Não há pacotes de idiomas desinstalados', 

	'THOSE_MISSING_LANG_FILES'			=> 'Os arquivos seguintes estão ausentes da pasta “%s” de idiomas', 
	'THOSE_MISSING_LANG_VARIABLES'		=> 'As variáveis seguintes estão ausentes do pacote de idiomas “%s”', 

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacotes de idiomas desinstalados',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Navegue no banco de dados de pacotes de idiomas',
));
