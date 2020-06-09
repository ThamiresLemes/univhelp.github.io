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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta pergunta é uma maneira de  prevenir submissões automáticas de spambots.',
	'CONFIRM_QUESTION_WRONG'	=> 'Você escreveu uma resposta inválida para a pergunta de confirmação.',
	'CONFIRM_QUESTION_MISSING'	=> 'As perguntas para o CAPTCHA não foram encontrados. Entre em contato com o administrador do fórum.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Por favor, escreva respostas válidas para a pergunta, uma por linha.',
	'CONFIRM_QUESTION'			=> 'Pergunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar Pergunta',
	'QUESTIONS'					=> 'Perguntas',
	'QUESTIONS_EXPLAIN'			=> 'Para cada requisição do formulário onde o plugin Q&amp;A estiver ativado, os usuários serão abordados com uma das perguntas especificadas aqui. Para usar este plugin, ao menos uma questão deve ser especificada com o idioma padrão. Estas perguntas devem ser de fácil resposta ao público alvo, mas além das capacidades de um bot que consiga usar a pesquisa do Google™. Apenas uma questão apropriada é necessária. Se você começar a receber registros de spam, a questão deve ser alterada. Ative a configuração strict caso a sua pergunta necessitar de maiúsculas e minúsculas, pontuação e espaços em branco.',
	'QUESTION_DELETED'			=> 'Pergunta excluída',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma em que esta pergunta e suas respostas devem ser escritas.',
	'QUESTION_STRICT'			=> 'Verificação Strict',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ativar mistura de maiúsculas e minusculas, pontuação e espaços em branco',

	'QUESTION_TEXT'				=> 'Pergunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'A pergunta apresentada ao usuário.',

	'QA_ERROR_MSG'				=> 'Por favor, preencha todos os campos e escreva ao menos uma resposta.',
	'QA_LAST_QUESTION'			=> 'Você não pode excluir todas as perguntas quando o plugin estiver ativo.',

));
