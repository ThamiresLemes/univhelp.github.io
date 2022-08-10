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
	$lang = []; 
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'	=> 'Aqui você pode gerenciar os estilos disponíveis no seu fórum. Note que você não pode desinstalar o estilo “<strong>prosilver</strong>”, que é o estilo primário e padrão do phpBB.',

	'CANNOT_BE_INSTALLED'			=> 'Não pode ser instalado',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Você deseja realmente desinstalar os estilos selecionados?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Você não pode desativar o estilo padrão do painel.', 
	'DELETE_FROM_FS'			=> 'Excluir do sistema de arquivos', 
	'DELETE_STYLE_FILES_FAILED'	=> 'Ocorreu um erro ao excluir os arquivos do estilo "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Os arquivos do estilo "%s" foram excluidos.',
	'DETAILS'						=> 'Detalhes',

	'INHERITING_FROM'				=> 'Heranças de',
	'INSTALL_STYLE'					=> 'Instalar estilo',
	'INSTALL_STYLES'				=> 'Instalar estilos',
	'INSTALL_STYLES_EXPLAIN'		=> 'Aqui pode instalar um novo Estilo e elementos correspondentes. Se já tem instalados os elementos relevantes do Estilo serão substituídos. Alguns Estilos necessitam que os elementos do Estilo já estejam instalados. Se tentar instalar um Estilo e os seus elementos ainda não estiverem instalados será avisado.',
	'INVALID_STYLE_ID'				=> 'O ID do estilo é inválido.',

	'NO_MATCHING_STYLES_FOUND'		=> 'Nenhum estilo corresponde à sua consulta.',
	'NO_UNINSTALLED_STYLE'			=> 'Nenhum estilo desinstalado.',

	'PURGED_CACHE'					=> 'O cache foi limpo.',

	'REQUIRES_STYLE'				=> 'Este estilo requer o estilo "%s" para ser instalado.',

	'STYLE_ACTIVATE'			=> 'Ativar',
	'STYLE_ACTIVE'				=> 'Ativo',
	'STYLE_DEACTIVATE'			=> 'Desativar', 
	'STYLE_DEFAULT'				=> 'Tornar estilo padrão', 
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Você deve ativar o estilo antes que possa torná-lo o estilo padrão.',
	'STYLE_ERR_INVALID_PARENT'		=> 'O estilo pai é inválido.',
	'STYLE_ERR_NAME_EXIST'			=> 'O nome do estilo selecionado já encontra-se em uso.',
	'STYLE_ERR_STYLE_NAME'			=> 'Você deve especificar o nome deste estilo.',
	'STYLE_INSTALLED'				=> 'O estilo "%s" foi instalado.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Voltar à lista estilos instalados',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instalar mais estilos',
	'STYLE_NAME'					=> 'Nome do estilo',
	'STYLE_NAME_RESERVED'			=> 'O estilo "%s" não pode ser instalado porque o nome é reservado.',
	'STYLE_NOT_INSTALLED'			=> 'O estilo "%s" não foi instalado.',
	'STYLE_PATH'					=> 'Caminho do estilo:',
	'STYLE_UNINSTALL'				=> 'Desinstalar',
	'STYLE_UNINSTALL_DEPENDENT'		=> 'O estilo "%s" não pode ser desinstalado porque um ou mais estilos são dependentes dele.',
	'STYLE_UNINSTALLED'				=> 'O estilo "%s" foi desinstalado com sucesso.',
	'STYLE_PHPBB_VERSION'			=> 'Versão do phpBB',
	'STYLE_USED_BY'					=> 'Usado por (incluindo bots)',
	'STYLE_VERSION'					=> 'Versão do estilo',

	'UNINSTALL_PROSILVER'						=> 'Você não pode desinstalar o estilo “prosilver”.',
	'UNINSTALL_DEFAULT'							=> 'Você não pode desinstalar o estilo padrão.',

	'BROWSE_STYLES_DATABASE'	=> 'Navegue no banco de dados de estilos',
]);
