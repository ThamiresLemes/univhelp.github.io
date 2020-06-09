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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array( 
	'ACP_BBCODES_EXPLAIN'		=> 'O BBCode é uma implementação especial do HTML oferecendo um maior controle sobre o quê e como será exibido. Aqui você pode adicionar, editar e excluir os BBCodes existentes.', 
	'ADD_BBCODE'				=> 'Adicionar um novo BBCode', 
	'BBCODE_DANGER'				=> 'O BBCode que você está tentando adicionar parece usar o símbolo {TEXT} dentro de um atributo HTML. Isso é uma possível questão de segurança XSS. Tente usar, de preferência, tipos alternativos como {SIMPLETEXT} ou {INTTEXT}. Prossiga somente se você entende os riscos envolvidos e você considera o uso do {TEXT} absolutamente indispensável.',
	'BBCODE_DANGER_PROCEED'		=> 'Proceder', //'I understand the risk',
	
	'BBCODE_ADDED'				=> 'O BBCode foi adicionado com sucesso.', 
	'BBCODE_EDITED'				=> 'O BBCode foi editado com sucesso.', 
	'BBCODE_DELETED'			=> 'O BBCode foi excluído com sucesso.',
	'BBCODE_NOT_EXIST'			=> 'O BBCode selecionado não existe.', 
	'BBCODE_HELPLINE'			=> 'Linha de ajuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contém o texto a ser exibido quando o usuário passar o mouse acima do BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto da linha de ajuda',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A linha de ajuda que você escreveu é muito longa.',

	'BBCODE_INVALID_TAG_NAME'	=> 'O nome da tag de BBCode selecionado já existe.',
	'BBCODE_INVALID'            => 'O seu BBCode está construído em uma forma inválida.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'O seu BBCode personalizado deve conter um código de início e outro de fim.', 
	'BBCODE_TAG'				=> 'Tag', 
	'BBCODE_TAG_TOO_LONG'		=> 'O nome da tag selecionado é muito grande.', 
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'A definição da tag escrita é muito grande. Por favor, reescreva de forma mais curta.', 
	'BBCODE_USAGE'				=> 'Uso do BBCode', 
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]', 
	'BBCODE_USAGE_EXPLAIN'		=> 'Aqui você pode definir como utilizar o BBCode. Substitua qualquer variável inserida pelo símbolo correspondente (%sveja abaixo%s).',

	'EXAMPLE'						=> 'Exemplo:', 
	'EXAMPLES'						=> 'Exemplos:', 

	'HTML_REPLACEMENT'				=> 'Substituição do HTML', 
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;', 
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aqui você pode definir a substituição padrão do HTML. Não esqueça de inserir os símbolos utilizados acima!',

	'TOKEN'					=> 'Símbolo', 
	'TOKENS'				=> 'Símbolos', 
	'TOKENS_EXPLAIN'		=> 'Os símbolos são campos especiais a serem preenchidos pelos usuários. Mas estes serão apenas válidos se igualmente estiverem com as suas definições correspondentes. Se necessário, você pode numerá-las adicionando um número como o último caractere entre os braços, ex. {TEXT1}, {TEXT2}.<br /><br />Adicionalmente, você pode utilizar estes símbolos com qualquer sequência de linguagem presente em seu diretório /language como este: {L_<em>&lt;STRINGNAME&gt;</em>} onde <em>&lt;STRINGNAME&gt;</em> é o nome da sequência traduzida que você deseja adicionar. Por exemplo, {L_WROTE} será exibido como "wrote" ou traduzido de acordo com a localidade do usuário.<br /><br /><strong>Por favor, note que apenas os símbolos listados abaixo serão autorizados a serem utilizados com os BBCodes personalizados.</strong>',
	'TOKEN_DEFINITION'		=> 'O que pode ser isso?', 
	'TOO_MANY_BBCODES'		=> 'Você não pode criar mais BBCodes. Por favor, remova um ou mais BBCodes e tente novamente.', 

	'tokens'	=>	array( 
		'TEXT'			=> 'Qualquer texto, incluindo caracteres externos, números e etc. Você não deverá utilizar este símbolo em tags de HTML. Mas tente utilizar IDENTIFIER, INTTEXT ou SIMPLETEXT.', 
		'SIMPLETEXT'    => 'Caracteres do alfabeto latino (A-Z), números, espaços, vírgulas, pontos, menos, mais, hífen e sublinhado',
		'INTTEXT'		=> 'Caracteres Unicode letra, números, espaços, vírgulas, pontos, menos, mais, hífen, sublinhado e espaços.',
        'IDENTIFIER'    => 'Caracteres do alfabeto latino (A-Z), números, hífen e sublinha',
		'NUMBER'		=> 'Qualquer série de dígitos', 
		'EMAIL'			=> 'Um endereço de e-mail válido', 
		'URL'			=> 'Uma URL válida utilizando qualquer protocolo (http, ftp, etc. não pode ser utilizada para javascript). Se nenhum for concedido, "http://" é o prefixo padrão para a sequência.', 
		'LOCAL_URL'		=> 'Uma URL local. A URL deve ser relativa à página do tópico e não pode ser um nome de servidor ou protocolo, como links que são prefixados com “%s”',
		'RELATIVE_URL'	=> 'Uma URL relativa. Você pode usar isso para combinar partes de uma URL, porém tenha cuidado: uma URL completa é uma URL relativa válida. Quando você quiser usar URLs relativas em seu fórum, use o token LOCAL_URL.', 
		'COLOR'			=> 'Uma cor de HTML, pode ser tanto na forma hexadecimal <samp>#FF1234</samp> como em uma <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">cor de estilos CSS</a> assim como <samp>fuchsia</samp> ou <samp>InactiveBorder</samp>',
	),
)); 

// Smilies and topic icons 
$lang = array_merge($lang, array( 
	'ACP_ICONS_EXPLAIN'		=> 'Aqui você pode adicionar, editar e excluir os ícones os quais os usuários adicionarão em seus tópicos e mensagens. Estes ícones são exibidos geralmente perto do título dos tópicos na listagem de fóruns, ou no título do tópico na listagem de tópicos. Você pode também instalar e criar novos pacotes de ícones.', 
	'ACP_SMILIES_EXPLAIN'	=> 'Os smilies ou emoções são tipicamente pequenos às vezes imagens animadas utilizadas para expressar alguma emoção ou sentimento. Aqui você pode adicionar, editar e excluir os smilies que os usuários poderão utilizar em seus tópicos e mensagens privadas. Você também pode instalar e criar novos pacotes de smilies.', 
	'ADD_SMILIES'			=> 'Adicionar smilies múltiplos', 
	'ADD_SMILEY_CODE'		=> 'Adicionar código adicional ao smiley',
	'ADD_ICONS'				=> 'Adicionar ícones múltiplos', 
	'AFTER_ICONS'			=> 'Depois %s', 
	'AFTER_SMILIES'			=> 'Depois %s', 

	'CODE'						=> 'Código', 
	'CURRENT_ICONS'				=> 'Ícones atuais', 
	'CURRENT_ICONS_EXPLAIN'		=> 'Escolha o que fazer com os ícones atualmente instalados.',
	'CURRENT_SMILIES'			=> 'Smilies atuais', 
	'CURRENT_SMILIES_EXPLAIN'	=> 'Escolha o que fazer com os smilies atualmente instalados.',

	'DISPLAY_ON_POSTING'	=> 'Exibir na página do envio de mensagens',
	'DISPLAY_POSTING'       => 'Na página do envio de mensagens',
    'DISPLAY_POSTING_NO'    => 'Não exibir na página do envio de mensagens',

	'EDIT_ICONS'				=> 'Editar ícones', 
	'EDIT_SMILIES'				=> 'Editar smilies', 
	'EMOTION'					=> 'Emoticon', 
	'EXPORT_ICONS'				=> 'Exportar e baixar icons.pak', 
	'EXPORT_ICONS_EXPLAIN'		=> '%sClicando neste link, a configuração para os seus ícones instalados será compactada para o pacote <samp>icons.pak</samp>, que uma vez baixado pode ser utilizado para criar um arquivo <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus ícones e mais este arquivo de configuração <samp>icons.pak</samp>%s.', 
	'EXPORT_SMILIES'			=> 'Exportar e baixar smilies.pak', 
	'EXPORT_SMILIES_EXPLAIN'	=> '%sClicando neste link, a configuração para os seus smilies instalados será compactada para o pacote <samp>smilies.pak</samp>, que uma vez baixado pode ser utilizado para criar um arquivo <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus smilies e mais este arquivo de configuração <samp>smilies.pak</samp>%s.', 

	'FIRST'			=> 'Primeiro', 

	'ICONS_ADD'				=> 'Adicionar novo ícone', 
	'ICONS_ADDED'			=> array(
		0	=> 'Nenhum ícone foi adicionado.',
		1	=> 'O ícone foi adicionado com sucesso.',
		2	=> 'Os ícones foram adicionados com sucesso.',
	),
	'ICONS_CONFIG'			=> 'Configuração de ícones', 
	'ICONS_DELETED'			=> 'O ícone foi excluído com sucesso.', 
	'ICONS_EDIT'			=> 'Editar ícone', 
	'ICONS_EDITED'			=> array(
		0	=> 'Nenhum ícone foi atualizado.',
		1	=> 'O ícone foi atualizado com sucesso.',
		2	=> 'Os ícones foram atualizados com sucesso.',
	),
	'ICONS_HEIGHT'			=> 'Altura do ícone', 
	'ICONS_IMAGE'			=> 'Imagem do ícone', 
	'ICONS_IMPORTED'		=> 'O pacote de Ícones foi instalado com sucesso.', 
	'ICONS_IMPORT_SUCCESS'	=> 'O pacote de Ícones foi importado com sucesso.', 
	'ICONS_LOCATION'		=> 'Local do ícone', 
	'ICONS_NOT_DISPLAYED'	=> 'Os ícones seguintes não serão exibidos na página do envio de mensagens.', 
	'ICONS_ORDER'			=> 'Ordem do ícone', 
	'ICONS_URL'				=> 'Arquivo de imagem do ícone', 
	'ICONS_WIDTH'			=> 'Largura do ícone', 
	'IMPORT_ICONS'			=> 'Instalar pacote de ícones',
	'IMPORT_SMILIES'		=> 'Instalar pacote de smilies', 

	'KEEP_ALL'			=> 'Salvar todos', 

	'MASS_ADD_SMILIES'	=> 'Adicionar smilies múltiplos', 

	'NO_ICONS_ADD'		=> 'Não há ícones disponíveis para adicionar.',
	'NO_ICONS_EDIT'		=> 'Não há ícones disponíveis para editar.',
	'NO_ICONS_EXPORT'	=> 'Você não possui ícones para criar um pacote.', 
	'NO_ICONS_PAK'		=> 'Nenhum pacote de ícones foi encontrado.',
	'NO_SMILIES_ADD'	=> 'Não há smilies disponíveis para adicionar.',
	'NO_SMILIES_EDIT'	=> 'Não há smilies disponíveis para editar.',	 
	'NO_SMILIES_EXPORT'	=> 'Você não possui smilies para criar um pacote.', 
	'NO_SMILIES_PAK'	=> 'Nenhum pacote de smilies foi encontrado.', 

	'PAK_FILE_NOT_READABLE'		=> 'Não é possível ler o arquivo <samp>.pak</samp>.', 

	'REPLACE_MATCHES'	=> 'Substituir selecionados', 

	'SELECT_PACKAGE'			=> 'Selecionar um arquivo do pacote', 
	'SMILIES_ADD'				=> 'Adicionar novo smiley', 
	'SMILIES_ADDED'				=> array(
		0	=> 'Nenhum smiley foi adicionado.',
		1	=> 'O smiley foi adicionado com sucesso.',
		2	=> 'Os smilies foram adicionados com sucesso.',
	),
	'SMILIES_CODE'				=> 'Código do smiley', 
	'SMILIES_CONFIG'			=> 'Configuração do smiley', 
	'SMILIES_DELETED'			=> 'O smiley foi excluído com sucesso.', 
	'SMILIES_EDIT'				=> 'Editar smiley', 
	'SMILIE_NO_CODE'            => 'O smiley "%s"  foi ignorado, como se nenhum código tivesse sido escrito.',
	'SMILIE_NO_EMOTION'         => 'O smiley "%s" foi ignorado, como se nenhuma emoção tivesse sido escrita.',
	'SMILIE_NO_FILE'			=> 'O smiley “%s” foi ignorado, como se o arquivo tivesse ausente.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Nenhum smiley foi atualizado.',
		1	=> 'O smiley foi atualizado com sucesso.',
		2	=> 'Os smilies foram atualizados com sucesso.',
	),
	'SMILIES_EMOTION'			=> 'Smiley', 
	'SMILIES_HEIGHT'			=> 'Altura do smiley', 
	'SMILIES_IMAGE'				=> 'Imagem do smiley', 
	'SMILIES_IMPORTED'			=> 'O pacote de smilies foi instalado com sucesso.', 
	'SMILIES_IMPORT_SUCCESS'	=> 'O pacote de smilies foi importado com sucesso.', 
	'SMILIES_LOCATION'			=> 'Local do smiley', 
	'SMILIES_NOT_DISPLAYED'		=> 'Os smilies seguintes não serão exibidos na página do envio de mensagens.', 
	'SMILIES_ORDER'				=> 'Ordem do smiley', 
	'SMILIES_URL'				=> 'Arquivo de imagem do smiley', 
	'SMILIES_WIDTH'				=> 'Largura do smiley', 

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'O limite de %d smiley foi alcançado.',
		2	=> 'O limite de %d smilies foi alcançado',
	),
	
	'WRONG_PAK_TYPE'	=> 'O pacote selecionado não possui as informações apropriadas.', 
)); 

// Word censors 
$lang = array_merge($lang, array( 
	'ACP_WORDS_EXPLAIN'		=> 'Aqui você pode adicionar, editar e excluir palavras que serão automaticamente censuradas em seu fórum. Todos ainda encontram-se autorizados a registrar-se com nomes de usuários contendo estas palavras. Podem ser utilizados asteriscos (*) para abranger um maior número de variações de uma mesma palavra, ex. *testa* abrangerá detestável, testa* abrangerá testando e *testa abrangerá detesta.', 
	'ADD_WORD'				=> 'Adicionar nova palavra', 

	'EDIT_WORD'		=> 'Editar palavra censurada', 
	'ENTER_WORD'	=> 'Você precisa escrever uma palavra e a sua substituição.', 

	'NO_WORD'	=> 'Nenhuma palavra foi selecionada para ser editada.', 

	'REPLACEMENT'	=> 'Substituição', 

	'UPDATE_WORD'	=> 'Atualizar palavra censurada', 

	'WORD'				=> 'Palavra', 
	'WORD_ADDED'		=> 'A palavra censurada foi adicionada com sucesso.', 
	'WORD_REMOVED'		=> 'A palavra censurada foi excluída com sucesso.', 
	'WORD_UPDATED'		=> 'A palavra censurada foi atualizada com sucesso.', 
)); 

// Ranks 
$lang = array_merge($lang, array( 
	'ACP_RANKS_EXPLAIN'		=> 'Aqui você pode adicionar, editar, visualizar e excluir ranks. Você pode também criar ranks personalizados que podem ser aplicados a um usuário pelas ferramentas da administração de usuários.', 
	'ADD_RANK'				=> 'Adicionar novo rank', 

	'MUST_SELECT_RANK'		=> 'Você precisa selecionar um rank.', 
	 
	'NO_ASSIGNED_RANK'		=> 'Nenhum rank especial existente.', 
	'NO_RANK_TITLE'			=> 'Você não especificou um título para o rank.', 
	'NO_UPDATE_RANKS'		=> 'O rank foi excluído com sucesso. De qualquer modo, os registros que utilizavam este rank não foram atualizados. Você deve atualizar os ranks nestes registros manualmente.', 

	'RANK_ADDED'			=> 'O rank foi adicionado com sucesso.', 
	'RANK_IMAGE'			=> 'Imagem do rank', 
	'RANK_IMAGE_EXPLAIN'	=> 'Use esta ferramenta para definir uma pequena imagem associada a este rank, relativa à pasta raíz do phpBB.', 
	'RANK_IMAGE_IN_USE'		=> '(em uso)',
	'RANK_MINIMUM'			=> 'Número mínimo de mensagens', 
	'RANK_REMOVED'			=> 'O rank foi excluído com sucesso.', 
	'RANK_SPECIAL'			=> 'Rank especial', 
	'RANK_TITLE'			=> 'Título do rank', 
	'RANK_UPDATED'			=> 'O rank foi atualizado com sucesso.', 
)); 

// Disallow Usernames 
$lang = array_merge($lang, array( 
	'ACP_DISALLOW_EXPLAIN'	=> 'Aqui você pode controlar os nomes proibidos a serem aplicados no fórum. Aos nomes proibidos são permitidos conter um asterisco (*) para abranger um maior número de variações na palavra.', 
	'ADD_DISALLOW_EXPLAIN'	=> 'Aqui você pode proibir um nome de usuário utilizando asteriscos (*) para abranger um maior número de variações de uma palavra.', 
	'ADD_DISALLOW_TITLE'	=> 'Adicionar um nome proibido', 

	'DELETE_DISALLOW_EXPLAIN'	=> 'Aqui você pode excluir um nome proibido selecionando através desta lista e clicando em enviar.', 
	'DELETE_DISALLOW_TITLE'		=> 'Excluir um nome proibido', 
	'DISALLOWED_ALREADY'		=> 'O nome especificado não pode ser proibido.', 
	'DISALLOWED_DELETED'		=> 'O nome proibido foi excluído com sucesso.', 
	'DISALLOW_SUCCESSFUL'		=> 'O nome proibido foi adicionado com sucesso.', 

	'NO_DISALLOWED'				=> 'Não há nomes proibidos', 
	'NO_USERNAME_SPECIFIED'		=> 'Você não selecionou ou escreveu um nome de usuário para operar com esta ferramenta.', 
)); 

// Reasons 
$lang = array_merge($lang, array( 
	'ACP_REASONS_EXPLAIN'	=> 'Aqui você pode gerenciar as razões utilizadas para as denúncias e reprovações quando desaprovando alguma mensagem. Existe uma razão padrão (marcada com um (*)) em que você não pode excluir, esta razão é normalmente utilizada para mensagens personalizadas se não possuírem motivos plausíveis.', 
	'ADD_NEW_REASON'		=> 'Adicionar nova razão', 
	'AVAILABLE_TITLES'		=> 'Títulos de razões locais disponíveis',
	 
	'IS_NOT_TRANSLATED'			=> 'A razão <strong>não</strong> foi localizada.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'A razão <strong>não</strong> foi localizada. Se você deseja estabelecer a forma local, especifique a chave correta através dos arquivos de linguagem da seção de razões para denúncias.',
	'IS_TRANSLATED'				=> 'A razão foi localizada.',
	'IS_TRANSLATED_EXPLAIN'		=> 'A razão foi localizada. Se o título que você escreveu aqui for especificado nos arquivos de linguagem da seção de razões para denúncias, a forma localizada para o título e a descrição serão utilizadas.',
	 
	'NO_REASON'					=> 'A razão não pôde ser encontrada.', 
	'NO_REASON_INFO'			=> 'Você deve especificar um título e uma descrição para esta razão.', 
	'NO_REMOVE_DEFAULT_REASON'	=> 'Você não está autorizado a remover a razão padrão "Outros".', 

	'REASON_ADD'				=> 'Adicionar razão para denúncia/reprovação', 
	'REASON_ADDED'				=> 'A razão para denúncia/reprovação foi adicionada com sucesso.', 
	'REASON_ALREADY_EXIST'		=> 'Uma razão com este título já existe, por favor, escreva outro título para esta razão.', 
	'REASON_DESCRIPTION'		=> 'Descrição da razão', 
	'REASON_DESC_TRANSLATED'	=> 'Descrição da razão exibida', 
	'REASON_EDIT'				=> 'Editar razão para denúncia/reprovação', 
	'REASON_EDIT_EXPLAIN'		=> 'Aqui você pode adicionar ou editar uma razão. Se a razão for traduzida, a versão localizada é utilizada ao invés da descrição escrita aqui.', 
	'REASON_REMOVED'			=> 'A razão para denúncia/reprovação foi excluída com sucesso.', 
	'REASON_TITLE'				=> 'Título da razão', 
	'REASON_TITLE_TRANSLATED'	=> 'Título da razão exibida', 
	'REASON_UPDATED'			=> 'A razão para denúncia/reprovação foi atualizada com sucesso.', 
	'USED_IN_REPORTS'		=> 'Utilizado em denúncias', 
));
