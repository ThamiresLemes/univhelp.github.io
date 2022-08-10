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
	'ALL_AVAILABLE'			=> 'Todos possíveis', 
	'ALL_RESULTS'			=> 'Todos os resultados', 

	'DISPLAY_RESULTS'		=> 'Exibir resultados como', 

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Pesquisa resultou em %d ocorrência',
		2	=> 'Pesquisa resultou em %d ocorrências',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Pesquisa resultou em mais de %d ocorrência',
		2	=> 'Pesquisa resultou em mais de %d ocorrências',
	),

	'GLOBAL'				=> 'Anúncio global', 

	'IGNORED_TERMS'			=> 'ignorados', 
	'IGNORED_TERMS_EXPLAIN'	=> 'As seguintes palavras foram ignoradas em sua pesquisa porque são termos muito comuns: <strong>%s</strong>',
	
	'JUMP_TO_POST'			=> 'Ir à mensagem',	

 	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Este painel exige que você esteja registrado e autenticado para ver as suas mensagens.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Este painel exige que você esteja registrado e autenticado para ver as suas mensagens não lidas.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Este painel exige que você esteja registrado e autenticado para ver as novas mensagens desde a sua última visita.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Você especificou muitas palavras em sua pesquisa. Por favor, não insira mais que %1$d palavra.',
		2	=> 'Você especificou muitas palavras em sua pesquisa. Por favor, não insira mais que %1$d palavras.',
	),
	
	'NO_KEYWORDS'			=> 'Você deve especificar pelo menos uma palavra para efetuar a pesquisa. Cada palavra deve ter no mínimo %s e não deve ultrapassar o limite de %s.', 
	'NO_RECENT_SEARCHES'	=> 'Nenhuma pesquisa tem sido realizada recentemente.',
	'NO_SEARCH'				=> 'Você não pode utilizar o sistema de pesquisas do fórum.', 
	'NO_SEARCH_RESULTS'		=> 'Nenhuma mensagem foi encontrada utilizando estes critérios', 
	'NO_SEARCH_LOAD'		=> 'Desculpe, você não pode usar o sistema de pesquisa neste momento. O servidor está sobrecarregado. Por favor, tente novamente mais tarde.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Você não pode utilizar o sistema de pesquisas agora. Por favor, tente novamente em %d segundo.',
		2	=> 'Você não pode utilizar o sistema de pesquisas agora. Por favor, tente novamente em %d segundos.',
	),
	'NO_SEARCH_UNREADS'		=> 'Desculpe, mas as pesquisas pelas mensagens não lidas está desativada neste fórum.',
	'WORD_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrada, pois a palavra %s não foi localizada em nenhuma ocorrência.', 
	'WORDS_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrada, pois as palavras %s não foram localizadas em nenhuma ocorrência.', 

	'POST_CHARACTERS'		=> 'caracteres das mensagens', 
	'PHRASE_SEARCH_DISABLED'	=> 'Não há suporte para a busca de frases exatas neste fórum.',

	'RECENT_SEARCHES'		=> 'Pesquisas recentes', 
	'RESULT_DAYS'			=> 'Limitar resultados anteriores', 
	'RESULT_SORT'			=> 'Classificar resultados por', 
	'RETURN_FIRST'			=> 'Voltar aos primeiros', 
	'GO_TO_SEARCH_ADV'	=> 'Pesquisa avançada',
	
	'SEARCHED_FOR'				=> 'Pesquisar por termo utilizado', 
	'SEARCHED_TOPIC'			=> 'Tópico pesquisado', 
	'SEARCHED_QUERY'			=> 'Termo pesquisado',
	'SEARCH_ALL_TERMS'			=> 'Pesquisar por todos os termos escritos', 
	'SEARCH_ANY_TERMS'			=> 'Pesquisar por qualquer termo', 
	'SEARCH_AUTHOR'				=> 'Pesquisar por autor', 
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * como complemento para palavras parciais.', 
	'SEARCH_FIRST_POST'			=> 'Apenas a primeira mensagem dos tópicos', 
	'SEARCH_FORUMS'				=> 'Pesquisar nos fóruns', 
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecione o fórum, ou os fóruns, no qual você deseja realizar a pesquisa. Todos os sub fóruns serão incluídos na pesquisa se você não desmarcar a opção “Pesquisar nos sub fóruns“ abaixo.', 
	'SEARCH_IN_RESULTS'			=> 'Pesquisar por estes resultados', 
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Você pode inserir <strong>+</strong> na frente de uma palavra que deve ser localizada na pesquisa e <strong>-</strong> na frente de uma palavra que não deve ser localizada. Escreva uma lista de palavras separadas por <strong>|</strong> se somente uma das palavras inseridas deva ser encontrada. Use * como complemento para resultados parciais.', 
	'SEARCH_MSG_ONLY'			=> 'Somente texto da mensagem', 
	'SEARCH_OPTIONS'			=> 'Opções da pesquisa', 
	'SEARCH_QUERY'				=> 'Termos da pesquisa', 
	'SEARCH_SUBFORUMS'			=> 'Pesquisar nos sub fóruns', 
	'SEARCH_TITLE_MSG'			=> 'Pesquisar nos títulos e mensagens', 
	'SEARCH_TITLE_ONLY'			=> 'Pesquisar apenas nos títulos', 
	'SEARCH_WITHIN'				=> 'Pesquisar com', 
	'SORT_ASCENDING'			=> 'Crescente', 
	'SORT_AUTHOR'				=> 'Autor', 
	'SORT_DESCENDING'			=> 'Decrescente', 
	'SORT_FORUM'				=> 'Fórum', 
	'SORT_POST_SUBJECT'			=> 'Título da mensagem', 
	'SORT_TIME'					=> 'Enviado em', 
	'SPHINX_SEARCH_FAILED'		=> 'A pesquisa falhou: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Desculpe, pesquisa não pôde ser executada. Para mais informações sobre esta falha, consulte o log de erros.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Você deve especificar pelo menos %d caractere no nome do autor.',
		2	=> 'Você deve especificar pelo menos %d caracteres no nome do autor.',
	),
));
