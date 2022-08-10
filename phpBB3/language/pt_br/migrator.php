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
	'CONFIG_NOT_EXIST'					=> 'Inesperadamente a opção de configuração "%s" não existe.',

	'GROUP_NOT_EXIST'					=> 'Inesperadamente o grupo "%s" não existe.',

	'MIGRATION_DATA_DONE'				=> 'Dados instalados: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalando dados: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migração já está efetivamente instalada (saltar): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Algo correu mal durante a execução do pedido e foi criada uma exceção. As alterações feitas antes de ocorrer o erro foram revertidas da melhor forma possível. No entanto, deve verificar se existem erros no fórum.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'A migração "%1$s" não pode ser preenchida completamente, migração faltando "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'A migração "%s" não foi instalada.',
	'MIGRATION_SCHEMA_DONE'				=> 'Esquema instalado: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instalando esquema: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_APPLY_DEPENDENCIES'      => 'Aplicar dependencias de %s.',
	'MIGRATION_DATA_RUNNING'         	=> 'Instalando dados: %s.',
	'MIGRATION_NOT_VALID'           	=> '%s não é uma migração válida.',
	'MIGRATION_SCHEMA_RUNNING'         	=> 'Instalando esquema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Dados revertidos: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Revertendo dados: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Revertendo dados: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Esquema revertido: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Revertendo esquema: %1$s; Duração: %2$.2f segundos',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Revertendo esquema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'A migração é inválida. Uma condição em uma declaração utilizando « IF » está faltando.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'A migração é inválida. Um callback válida para uma etapa de migração em uma instrução de auxílio « IF » está faltando.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'A migração é inválida. Uma função personalizada exigível não pode ser executada.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'A migração é inválida. Um tipo de ferramenta de migração desconhecida foi encontrada.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'A migração é inválida. Uma ferramenta de migração indefinida foi encontrada.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'A migração é inválida. Um método de ferramenta de migração indefinido foi encontrado.',

	'MODULE_ERROR'						=> 'Ocorreu um erro durante a criação de um módulo: %s',
	'MODULE_EXISTS'						=> 'Um módulo já existe: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Vários módulos com o nome do idioma do módulo pai já existem: %s. Tente usar as chaves antes/depois para posicionar o módulo.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Um arquivo com informações do módulo necessário está faltando: %2$s',
	'MODULE_NOT_EXIST'					=> 'Um módulo requerido não existe: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Não é possível determinar a identificação do módulo pai: %s',
	'PERMISSION_NOT_EXIST'				=> 'Inesperadamente a configuração de permissão "%s" não existe.',

	'ROLE_NOT_EXIST'					=> 'Inesperadamente a permissão "%s" não existe.',
));
