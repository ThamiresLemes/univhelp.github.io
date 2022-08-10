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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aqui você pode gerenciar todos os tipos de módulos. Por favor, note que o ACP possui uma estrutura de menu de três níveis (Categoria -> Categoria -> Módulo) diferente de outros que possuem uma estrutura de menu de dois níveis (Categoria -> Módulo) que precisam ser salvos. Além disso, fique atento que você pode bloquear a si mesmo se desativar ou excluir os módulos responsáveis pelo gerenciamento do painel. Cuidado ao utilizar esta ferramenta!', 
	'ADD_MODULE'					=> 'Adicionar um módulo', 
	'ADD_MODULE_CONFIRM'			=> 'Você deseja realmente adicionar este módulo sob o modo selecionado?', 
	'ADD_MODULE_TITLE'				=> 'Adicionar módulos', 

	'CANNOT_REMOVE_MODULE'	=> 'Não é possível excluir este módulo, pois ele está assinalado como criança. Por favor, exclua ou mova todas as crianças antes de efetivar esta ação.', 
	'CATEGORY'				=> 'Categoria', 
	'CHOOSE_MODE'			=> 'Escolher modo do módulo', 
	'CHOOSE_MODE_EXPLAIN'	=> 'Escolher o modo dos módulos a ser utilizado.', 
	'CHOOSE_MODULE'			=> 'Escolher módulo', 
	'CHOOSE_MODULE_EXPLAIN'	=> 'Escolher o arquivo chamado por este módulo.', 
	'CREATE_MODULE'			=> 'Criar novo módulo', 

	'DEACTIVATED_MODULE'	=> 'Módulo desativado', 
	'DELETE_MODULE'			=> 'Excluir módulo', 
	'DELETE_MODULE_CONFIRM'	=> 'Você deseja realmente excluir o módulo selecionado?', 

	'EDIT_MODULE'			=> 'Editar módulo', 
	'EDIT_MODULE_EXPLAIN'	=> 'Aqui você pode escrever configurações específicas para os seus módulos.', 

	'HIDDEN_MODULE'			=> 'Módulo oculto', 

	'MODULE'					=> 'Módulo', 
	'MODULE_ADDED'				=> 'O módulo selecionado foi adicionado com sucesso.', 
	'MODULE_DELETED'			=> 'O módulo selecionado foi excluído com sucesso.', 
	'MODULE_DISPLAYED'			=> 'Módulos exibidos', 
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Se você não deseja exibir este módulo, mas gostaria de utilizá-lo, selecione não.', 
	'MODULE_EDITED'				=> 'O módulo selecionado foi editado com sucesso.', 
	'MODULE_ENABLED'			=> 'Módulo ativado', 
	'MODULE_LANGNAME'			=> 'Nome de linguagem do módulo', 
	'MODULE_LANGNAME_EXPLAIN'	=> 'Escreva o nome do módulo exibido. Utilize a constante da língua se o nome for oferecido pelo arquivo de linguagem.', 
	'MODULE_TYPE'				=> 'Tipo de módulo', 

	'NO_CATEGORY_TO_MODULE'	=> 'Não é possível transformar esta categoria em módulo. Por favor, exclua ou mova todas as crianças antes de efetivar esta ação.', 
	'NO_MODULE'				=> 'Nenhum módulo foi encontrado.', 
	'NO_MODULE_ID'			=> 'A ID do módulo não foi especificada.', 
	'NO_MODULE_LANGNAME'	=> 'O nome da língua do módulo não foi especificado.', 
	'NO_PARENT'				=> 'Não há pais no momento.', 

	'PARENT'				=> 'Pais', 
	'PARENT_NO_EXIST'		=> 'O pai selecionado não existe.', 

	'SELECT_MODULE'			=> 'Selecionar um módulo', 
));
