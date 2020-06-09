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

// Bot settings 
$lang = array_merge($lang, array( 
	'BOTS'				=> 'Administração de BOTs', 
	'BOTS_EXPLAIN'		=> 'Os bots ou espiões são agentes autômatos utilizados pelas ferramentas de pesquisa para atualizar os seus bancos de dados. Estes podem assim realizar uma distorção nas estatísticas do número de visitas do fórum, aumentando a carga e algumas vezes causando erros no índice de websites e outros. Aqui você pode definir um tipo de usuário especial para superar estes problemas.', 
	'BOT_ACTIVATE'		=> 'Ativar',
	'BOT_ACTIVE'		=> 'Bot ativo',
	'BOT_ADD'			=> 'Adicionar um bot',
	'BOT_ADDED'			=> 'Novo bot adicionado com sucesso.',
	'BOT_AGENT'			=> 'Agente de partida',
	'BOT_AGENT_EXPLAIN'	=> 'Uma sequência iniciando os agentes de navegadores de bots, partidas parciais são permitidas.',
	'BOT_DEACTIVATE'	=> 'Desativar',
	'BOT_DELETED'		=> 'O bot foi excluído com sucesso.',
	'BOT_EDIT'			=> 'Editar bots',
	'BOT_EDIT_EXPLAIN'	=> 'Aqui você pode editar qualquer entrada de bots existente. Você pode definir qualquer sequência de agentes e/ou um ou mais endereços de IP (ou grupo de endereços) para coincidir. Cuidado ao definir os parâmetros dos agentes ou endereços. Você pode especificar um estilo ou língua com os quais o bot visualizará o seu fórum. Isto pode reduzir o tráfego de seu site especificando um estilo simples para bots. Lembre-se de especificar permissões para o grupo especial de bots.', 
	'BOT_LANG'			=> 'Língua do bot', 
	'BOT_LANG_EXPLAIN'	=> 'O idioma aplicado ao bot enquanto ele navegar no fórum.', 
	'BOT_LAST_VISIT'	=> 'Última visita', 
	'BOT_IP'			=> 'Endereço de IP do bot', 
	'BOT_IP_EXPLAIN'	=> 'Combinações parciais são permitidas, desde que separadas por vírgula.', 
	'BOT_NAME'			=> 'Nome do bot', 
	'BOT_NAME_EXPLAIN'	=> 'Usado apenas para a sua própria informação.', 
	'BOT_NAME_TAKEN'	=> 'Este nome de usuário já está sendo utilizado e não pode ser atribuído a este bot.',
	'BOT_NEVER'			=> 'Nunca', 
	'BOT_STYLE'			=> 'Estilo do bot', 
	'BOT_STYLE_EXPLAIN'	=> 'O estilo aplicada ao bot enquanto ele navegar no fórum.', 
	'BOT_UPDATED'		=> 'O bot foi atualizado com sucesso.', 

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'O agente do bot que você escolheu é semelhante ao que você está utilizando atualmente. Por favor, ajuste novamente o agente para esse bot.',
	'ERR_BOT_NO_IP'			    => 'O endereço de IP que você forneceu era inválido ou o hostname não pôde ser solucionado.', 
	'ERR_BOT_NO_MATCHES'	    => 'Você deve indicar pelo menos um agente ou endereço de IP para o parâmetro deste bot.', 

	'NO_BOT'	=> 'O bot selecionado não existe.', 
	'NO_BOT_GROUP'	=> 'Não foi possível encontrar o grupo de bots especial.',
));
