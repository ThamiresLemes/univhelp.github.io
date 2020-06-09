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

// Database Backup/Restore 
$lang = array_merge($lang, array( 
	'ACP_BACKUP_EXPLAIN'	=> 'Aqui você pode realizar backup de todos os dados relacionados ao seu phpBB. Você pode salvar as informações em um arquivo na sua pasta <samp>/store</samp>. Dependendo das configurações de seu servidor, você poderá compactar o arquivo em diversos formatos.',
	'ACP_RESTORE_EXPLAIN'	=> 'Aqui você pode executar uma restauração total de todas as tabelas do seu phpBB a partir de um arquivo salvo. Se o seu servidor suportar a compressão de arquivos de texto gzip ou bzip2, ela será automaticamente descompactada. <strong>ATENÇÃO:</strong> Esta execução irá substituir qualquer informação existente. Dependendo do tamanho de seu banco de dados este processo poderá levar algum tempo. Não saia desta página para outra até que o processo seja finalizado. Os backups são armazenados na pasta <samp>store/</samp> e são assumidos a serem gerados pela funcionalidade de backups do phpBB. Restaurações de backups que não foram geradas pelo sistema podem ou não funcionar.', 

	'BACKUP_DELETE'				=> 'O backup foi excluído com sucesso.',
	'BACKUP_INVALID'			=> 'O arquivo selecionado para o backup é inválido.',
	'BACKUP_NOT_SUPPORTED'		=> 'O backup selecionado não é suportado',
	'BACKUP_OPTIONS'			=> 'Opções de backup',
	'BACKUP_SUCCESS'			=> 'O backup foi criado com sucesso.',
	'BACKUP_TYPE'				=> 'Tipo de backup',

	'DATABASE'			=> 'Ferramentas do banco de dados', 
	'DATA_ONLY'			=> 'Backup apenas dos dados', 
	'DELETE_BACKUP'		=> 'Excluir backup', 
	'DELETE_SELECTED_BACKUP'	=> 'Você deseja realmente excluir o backup selecionado?',
	'DESELECT_ALL'		=> 'De-selecionar todos', 
	'DOWNLOAD_BACKUP'	=> 'Download do backup', 

	'FILE_TYPE'			=> 'Tipo de arquivo', 
	'FILE_WRITE_FAIL'	=> 'Não foi possível escrever o arquivo para o diretório de armazenamento.',
	'FULL_BACKUP'		=> 'Completo', 

	'RESTORE_FAILURE'		=> 'O backup pode estar corrompido.',
	'RESTORE_OPTIONS'		=> 'Opções de restauração', 
	'RESTORE_SELECTED_BACKUP'	=> 'Você deseja realmente restaurar o backup selecionado?',
	'RESTORE_SUCCESS'		=> 'O banco de dados foi restaurado com sucesso.<br /><br />O seu painel deverá voltar agora ao estado em que se encontrava na época em que o backup foi realizado.', 

	'SELECT_ALL'			=> 'Selecionar todas', 
	'SELECT_FILE'			=> 'Selecionar o arquivo', 
	'START_BACKUP'			=> 'Iniciar backup', 
	'START_RESTORE'			=> 'Iniciar restauração', 
	'STORE_AND_DOWNLOAD'	=> 'Salvar e baixar', 
	'STORE_LOCAL'			=> 'Salvar o arquivo localmente', 
	'STRUCTURE_ONLY'		=> 'Backup apenas da estrutura', 

	'TABLE_SELECT'		=> 'Seleção de tabelas',
	'TABLE_SELECT_ERROR'=> 'Você deve selecionar pelo menos uma tabela.',	
));
