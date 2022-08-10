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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as opções principais para os anexos e as categorias especiais associadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aqui você pode adicionar, editar, excluir e desativar os seus grupos de extensões de anexos. E ainda, ferramentas adicionais incluem definir uma categoria especial para eles, alterar o mecanismo de download e também selecionar um ícone de envio que será exibido junto aos anexos pertencentes ao grupo.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aqui você pode gerenciar as extensões permitidas. Para ativar as suas extensões, por favor, consulte o painel de grupos de extensões. É altamente recomendável que você não permita extensões relacionadas a scripts (ex. <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, entre outros).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aqui você poderá visualizar os anexos órfãos. Isto acontece normalmente quando um usuário anexa um arquivo e não envia a sua respectiva mensagem. Você pode excluir estes arquivos ou anexá-los a outras mensagens existentes. Ao anexar estes a outras mensagens, você deverá escrever e determinar um ID de mensagem válido. Esta ferramenta é usual para pessoas que desejam enviar os anexos com outro programa, ou simplesmente anexar um determinado arquivo em outra mensagem.',	
	'ADD_EXTENSION'						=> 'Adicionar extensão', 
	'ADD_EXTENSION_GROUP'				=> 'Adicionar grupo de extensões', 
	'ADMIN_UPLOAD_ERROR'				=> 'Erros enquanto tentava anexar o arquivo: "%s".', 
	'ALLOWED_FORUMS'					=> 'Fóruns permitidos', 
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Permitir o envio de extensões assinaladas aos fóruns selecionados (ou à todos, se selecionado).', 
	'ALLOWED_IN_PM_POST'				=> 'Permitido',
	'ALLOW_ATTACHMENTS'					=> 'Permitir anexos', 
	'ALLOW_ALL_FORUMS'					=> 'Permitir em todos os fóruns', 
	'ALLOW_IN_PM'						=> 'Permitido em mensagens privadas', 
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir em mensagens privadas', 
	'ALLOW_SELECTED_FORUMS'				=> 'Apenas os fóruns selecionados abaixo', 
	'ASSIGNED_EXTENSIONS'				=> 'Extensões selecionadas', 
	'ASSIGNED_GROUP'					=> 'Grupo de extensões selecionado', 
	'ATTACH_EXTENSIONS_URL'				=> 'Extensões', 
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupos de extensões', 
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamanho máximo do arquivo', 
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'O tamanho máximo para cada arquivo. Se este valor for 0, o tamanho do arquivo enviado é limitado somente pela sua configuração do PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Quota de anexos em mensagens privadas', 
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Tamanho máximo de cada arquivo anexo em mensagens privadas, sendo 0 um valor ilimitado .', 
	'ATTACH_ORPHAN_URL'					=> 'Anexos órfãos', 
	'ATTACH_POST_ID'					=> 'ID da mensagem', 
	'ATTACH_POST_TYPE'					=> 'Tipo de mensagem',
	'ATTACH_QUOTA'						=> 'Quota total de anexos', 
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espaço máximo em disco que todos os anexos podem ocupar em sua pasta de envio, sendo 0 um valor ilimitado.', 
	'ATTACH_TO_POST'					=> 'Anexar arquivo à mensagem', 

	'CAT_FLASH_FILES'			=> 'Arquivos Flash',
	'CAT_IMAGES'				=> 'Imagens', 
	'CHECK_CONTENT'				=> 'Verificar arquivos anexos',
	'CHECK_CONTENT_EXPLAIN'		=> 'Alguns navegadores podem serem enganados e assumir funções incorretas a alguns dos arquivos enviados. Esta opção lhe assegura que estes arquivos sejam rejeitados.',
	'CREATE_GROUP'				=> 'Criar novo grupo', 
	'CREATE_THUMBNAIL'			=> 'Criar miniatura', 
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Sempre criar uma miniatura em todas as situações possíveis.', 

	'DEFINE_ALLOWED_IPS'			=> 'Selecionar IPs/hostnames permitidos', 
	'DEFINE_DISALLOWED_IPS'			=> 'Selecionar IPs/hostnames proibidos', 
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Para definir diversos IPs/hostnames diferentes, escreva cada um em uma nova linha. Você também pode definir uma faixa de endereços de IP separando o início do fim com um hífen (-). E ainda pode utilizar asteriscos (*).', 
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Você pode excluir múltiplos endereços de IP de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador. Os IPs excluídos possuem um fundo em azul.', 
	'DISPLAY_INLINED'				=> 'Exibir imagens', 
	'DISPLAY_INLINED_EXPLAIN'		=> 'Se selecionar NÃO, as imagens anexas serão exibidas como links.', 
	'DISPLAY_ORDER'					=> 'Ordem de exibição dos anexos',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Exibir anexos ordenados pelo tempo.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Editar grupo de extensões',
	'EXCLUDE_ENTERED_IP'			=> 'Ative isto para excluir o IP/hostname escrito.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Excluir IP de IPs/hostnames permitidos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP de IPs/hostnames proibidos',
	'EXTENSIONS_UPDATED'			=> 'As extensões foram atualizadas com sucesso.',
	'EXTENSION_EXIST'				=> 'A extensão %s já existe.',
	'EXTENSION_GROUP'				=> 'Grupo de extensões',
	'EXTENSION_GROUPS'				=> 'Grupos de extensões',
	'EXTENSION_GROUP_DELETED'		=> 'O grupo de extensões foi excluído com sucesso.',
	'EXTENSION_GROUP_EXIST'			=> 'O grupo de extensões %s já existe.',
	
	'EXT_GROUP_ARCHIVES'			=> 'Arquivos',
	'EXT_GROUP_DOCUMENTS'			=> 'Documentos',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Arquivos para download',
	'EXT_GROUP_FLASH_FILES'			=> 'Arquivos em Flash',
	'EXT_GROUP_IMAGES'				=> 'Imagens',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texto simples',

	'FILES_GONE'			=> 'Alguns dos anexos que você deseja excluir não foram encontrados. Eles podem já ter sido excluídos. Os anexos encontrados foram excluídos.',
	'FILES_STATS_WRONG'		=> 'As estatísticas de arquivos são imprecisas e devem ser re-sincronizadas. Valores atuais: Número de arquivos = %1$d, tamanho total dos arquivos = %2$s.<br />Clique %3$saqui%4$s para os re-sincronizar.',

	'GO_TO_EXTENSIONS'		=> 'Ir à administração de extensões', 
	'GROUP_NAME'			=> 'Nome do grupo', 

	'IMAGE_LINK_SIZE'			=> 'Dimensões do link da imagem', 
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Exibe o anexo de uma imagem como link, caso a imagem seja maior que o informado. Escreva 0px por 0px para desativar este recurso.', 

	'MAX_ATTACHMENTS'				=> 'Número máximo de anexos por mensagem', 
	'MAX_ATTACHMENTS_PM'			=> 'Número máximo de anexos por mensagem privada', 
	'MAX_EXTGROUP_FILESIZE'			=> 'Tamanho máximo de arquivos', 
	'MAX_IMAGE_SIZE'				=> 'Dimensões máximas de imagens', 
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Dimensões máximas de imagem anexas. Escreva 0px por 0px para desativar este recurso.', 
	'MAX_THUMB_WIDTH'				=> 'Largura/altura máxima de miniaturas em pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Aqui você define a largura máxima de suas miniaturas em pixels.',
	'MIN_THUMB_FILESIZE'			=> 'Tamanho mínimo de miniaturas', 
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Aqui você define o tamanho mínimo de suas miniaturas.', 
	'MODE_INLINE'					=> 'Na linha', 
	'MODE_PHYSICAL'					=> 'Físico', 

	'NOT_ALLOWED_IN_PM'			=> 'Somente permitido em mensagens', 
	'NOT_ALLOWED_IN_PM_POST'	=> 'Proibido',
	'NOT_ASSIGNED'				=> 'Não autorizado', 
	'NO_ATTACHMENTS'			=> 'Nenhum anexo encontrado para este período.',
	'NO_EXT_GROUP'				=> 'Nenhum', 
	'NO_EXT_GROUP_NAME'			=> 'O nome do grupo não foi especificado.', 
	'NO_EXT_GROUP_SPECIFIED'	=> 'O grupo de extensões não foi especificado.', 
	'NO_FILE_CAT'				=> 'Nenhum', 
	'NO_IMAGE'					=> 'Sem imagem', 
	'NO_UPLOAD_DIR'				=> 'O diretório de envio selecionado não existe.', 
	'NO_WRITE_UPLOAD'			=> 'O diretório de envio selecionado não pode ser escrito. Por favor, altere as permissões para permitir ao servidor fazer a escrita no mesmo.', 

	'ONLY_ALLOWED_IN_PM'	=> 'Somente permitido em mensagens privadas',
	'ORDER_ALLOW_DENY'		=> 'Permitir', 
	'ORDER_DENY_ALLOW'		=> 'Proibir', 

	'REMOVE_ALLOWED_IPS'			=> 'Excluir IPs/hostnames <em>permitidos</em>', 
	'REMOVE_DISALLOWED_IPS'			=> 'Excluir IPs/hostnames <em>proibidos</em>', 
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Você deseja realmente re-sincronizar estatísticas de arquivos?',

	'SECURE_ALLOW_DENY'				=> 'Lista de permissões/proibições', 
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Substitui o comportamento padrão quando os downloads seguros estão ativos na lista de permissões/proibições através de uma <strong>lista branca</strong> (permissões) ou uma <strong>lista negra</strong> (proibições).',
	'SECURE_DOWNLOADS'				=> 'Ativar downloads seguros', 
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Se esta opção estiver ativa, os downloads se restringem apenas aos IPs/hostnames que você definiu.', 
	'SECURE_DOWNLOAD_NOTICE'		=> 'Os downloads seguros estão desativados. As configurações abaixo serão aplicadas apenas depois que esta opção estiver ativa.', 
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'A lista de IPs foi atualizada com sucesso.', 
	'SECURE_EMPTY_REFERRER'			=> 'Permitir referência em branco', 
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Os downloads seguros estão baseados nas referências. Você deseja realmente permitir downloads para aqueles que omitirem a referência?', 
	'SETTINGS_CAT_IMAGES'			=> 'Configurações da categoria de imagem',
	'SPECIAL_CATEGORY'				=> 'Categoria especial', 
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Categorias especiais se diferenciam entre a forma como são exibidas com as mensagens.', 
	'SUCCESSFULLY_UPLOADED'			=> 'Enviado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'O grupo de extensões foi adicionado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'O grupo de extensões foi atualizado com sucesso.',

	'UPLOADING_FILES'				=> 'Enviando arquivos', 
	'UPLOADING_FILE_TO'				=> 'Enviando arquivo "%1$s" à mensagem de número %2$d…', 
	'UPLOAD_DENIED_FORUM'			=> 'Você não tem autorização para enviar anexos ao fórum "%s".', 
	'UPLOAD_DIR'					=> 'Pasta dos anexos', 
	'UPLOAD_DIR_EXPLAIN'			=> 'Aqui você pode inserir a pasta que armazenará os anexos enviados através do painel. Por favor, note que se você alterar o diretório enquanto envia um arquivo, você terá de copiar manualmente o mesmo para o novo local.',
	'UPLOAD_ICON'					=> 'Ícone de envio', 
	'UPLOAD_NOT_DIR'				=> 'A pasta de envio que você especificou parece não ser um diretório válido.', 
));
