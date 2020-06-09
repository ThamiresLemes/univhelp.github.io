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

// Email settings 
$lang = array_merge($lang, array( 
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aqui você pode enviar um e-mail para todos os usuários do fórum ou usuários membros de um grupo específico <strong>possuindo a opção de receber e-mails ativada</strong>. Para isso, selecione o endereço de e-mail administrativo previamente configurado o qual receberá uma cópia da mensagem enviada. A configuração padrão inclui apenas 50 usuários por mensagem, sendo que para mais usuários, e-mails adicionais deverão ser enviados. Se estiver enviando um e-mail para um número elevado de pessoas, aguarde um pouco após enviar a sua mensagem, e não paralise a página durante o processo. É normal que o envio de e-mail em massa demore um pouco, mas você será devidamente avisado quando o processo for concluído.',
	'ALL_USERS'						=> 'Todos os Usuários', 

	'COMPOSE'				=> 'Escrever', 

	'EMAIL_SEND_ERROR'		=> 'Ocorreu um ou mais erros enquanto o e-mail estava sendo enviado. Por favor, confira o %sLog de Erros%s para uma informação detalhada.',
	'EMAIL_SENT'			=> 'O seu e-mail foi enviado com sucesso.', 
	'EMAIL_SENT_QUEUE'		=> 'O seu e-mail foi salvo na lista de envios pendentes.', 

	'LOG_SESSION'			=> 'Sessão de envio para erro crítico', 

	'SEND_IMMEDIATELY'		=> 'Enviar imediatamente',
	'SEND_TO_GROUP'			=> 'Enviar para grupo', 
	'SEND_TO_USERS'			=> 'Enviar para usuários', 
	'SEND_TO_USERS_EXPLAIN'	=> 'Escrevendo nomes de usuários aqui, você substituirá qualquer grupo selecionado acima. Insira cada nome em uma nova linha.', 
	
	'MAIL_BANNED'			=> 'Email para usuários banidos',
	'MAIL_BANNED_EXPLAIN'	=> 'Quando enviar um e-mail em massa para um grupo que você pode selecionar aqui, se um usuário banido partence ao grupo, ele também receberá o email',
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do e-mail',
	'MASS_MESSAGE'			=> 'Sua mensagem',
	'MASS_MESSAGE_EXPLAIN'	=> 'Esta mensagem será enviada em texto puro. Qualquer código ou caractere desconhecido será removido durante o envio.',	

	'NO_EMAIL_MESSAGE'		=> 'Você deve escrever uma mensagem.',
	'NO_EMAIL_SUBJECT'		=> 'Você deve especificar um título para a sua mensagem.',			
));
