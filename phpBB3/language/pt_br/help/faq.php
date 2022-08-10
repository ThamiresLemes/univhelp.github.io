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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'O administrador do fórum talvez não permita que anexos sejam adicionados especificando no fórum que você esteja postando ou que apenas certos grupos possam adicionar anexos. Se você não tem certeza sobre o que pode ser enviado, contate o administrador para maiores informações.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Por que não consigo adicionar anexos?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Para encontrar a lista de anexos que você enviou, vá ao seu painel de controle do usuário e siga os links para a área de anexos desejada.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Como eu posso encontrar todos os meus anexos?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Sobre Anexos',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Sobre a Subscrição de tópicos e Favoritos',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Sobre os Formatos e Tipos de Tópicos',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Sobre os Amigos e Inimigos',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Sobre os Níveis de Usuários e Grupos',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Sobre o Sistema phpBB3',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Sobre o Login e o Registro',
	'HELP_FAQ_BLOCK_PMS'	=> 'Sobre as Mensagens Privadas',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Sobre as Mensagens',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Sobre a Pesquisa',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Sobre as Preferências e Configuração de Usuários',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Os favoritos no phpBB 3.0 funcionam como os favoritos do seu navegador. Você não será alertado quando houver alguma atualização. No phpBB 3.1, favoritos são muito parecidos com a subscrição de tópico, você pode ser notificado quando houver qualquer atualização ao tópico. A subscrição irá notificar-lhe quando houver qualquer atualização ao tópico ou fórum. Opções de notificação para favoritos e subscrição podem ser configurados no Painel de Controle do Usuário, na opção “Preferências”.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Qual é a diferença entre os favoritos e a subscrição?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Para subscrever um fórum específico, você deve clicar no link “Subscrever fórum”, no final da página, ao entrar no fórum desejado.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Como eu posso subscrever um fórum específico?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Para excluir as suas subscrições, você deverá ir ao seu Painel de Controle do Usuário e seguir as devidas instruções para suas subscrições.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Como eu posso excluir minhas subscrições?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Para adicionar aos seus favoritos ou subscrever um tópico específico, você deve clicar no link no menu “Ferramentas do Tópico” na parte superior ou inferior de um tópico.<br />Responder a um tópico com a opção “Notificar-me quando for respondida” marcada é equivalente a subscrevê-lo.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Como eu posso adicionar aos favoritos ou subscrever um tópico específico?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Os anúncios contém normalmente informações importantes e devem ser lidos logo que possível. Os anúncios são automaticamente colocados no topo de cada página de cada fórum onde são postados. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'O que são anúncios?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'O BBCode é uma implementação especial do HTML. A possibilidade de se usar BBCode nas suas mensagens é determinada pelo administrador do fórum. Adicionalmente, você poderá desativar o BBCode em cada mensagem. O BBCode por si mesmo é similar em estilo ao HTML, as etiquetas (tags) são incluídas em colchetes [ e ] ao invés de &lt; e &gt;, proporcionando uma maior facilidade na formatação de seus textos e mensagens dentro do fórum. Para mais informações, consulte o guia de BBCode, acessível no envio de novas mensagens.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'O que é BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Os anúncios globais contém normalmente informações importantes e devem ser lidos logo que possível. Eles irão aparecer no topo de todos os fóruns e também no seu Painel de Controle do Usuário. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'O que são anúncios globais?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Não. Não é possível enviar mensagens em HTML neste fórum. A maioria dos formatos utilizados em HTML podem ser reproduzidos na utilização de BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Posso utilizar HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Os ícones de tópicos são imagens que podem ser associadas com as mensagens para indicar o seu conteúdo. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'O que são ícones de tópicos?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'As imagens em geral, podem ser exibidas em suas mensagens. Se o administrador tiver autorizado o envio de anexos, você poderá enviar sua imagem ao painel. De outro modo, você pode exibir uma imagem armazenada em um servidor publicamente acessível, por exemplo http://www.example.com/my-picture.gif. Você não pode exibir imagens salvas no seu próprio PC (a menos que possua um servidor publicamente acessível), nem imagens armazenadas sob mecanismos que requeiram autenticação, como por exemplo caixas de correio eletrônico do hotmail ou yahoo!, páginas protegidas por senha, etc. Para exibir uma imagem use a tag BBCode [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Posso exibir imagens?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Os tópicos trancados são assim colocados por um administrador ou moderador de cada fórum. Quando um tópico se encontra trancado, os usuários do fórum não podem mais respondê-lo, e qualquer enquete em curso logo será concluída. Apenas administradores e moderadores podem responder nestes tópicos e você poderá também trancar os seus próprios tópicos, dependendo das permissões que lhe foram atribuídas pelo administrador do fórum. Algum determinado tópico pode ser trancado por diversos motivos.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'O que são tópicos trancados?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Os Smilies ou Emoticons, são pequenas representações gráficas que podem ser usadas para expressar algum sentimento utilizando poucos caracteres, ou seja, :) quer dizer feliz, :( quer dizer triste. Uma lista completa de smilies pode ser vista no formulário de postagem de cada mensagem. Tente evitar o uso excessivo dos smilies, já que podem tornar uma mensagem ilegível, podendo o moderador edita-los ou excluir a mensagem inteira. O administrador também pode ter configurado um limite para o número de smilies que você pode utilizar em uma mensagem.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'O que são smilies?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Os tópicos fixos aparecem abaixo dos anúncios e apenas na primeira página de cada fórum. São tópicos com conteúdo importante e devem ser lidos logo que possível. Da mesma forma que os anúncios, está ao critério do administrador determinar as permissões necessárias para enviar tópicos fixos em cada fórum.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'O que são tópicos fixos?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Você pode utilizar esta lista para organizar os demais usuários do fórum. Os usuários adicionados em sua lista de amigos serão listados em seu Painel de Controle do Usuário com acesso rápido para ver seus status online e para enviá-los mensagens privadas. Se você solicitar ao suporte de templates, as mensagens enviadas por estes usuários poderão aparecer em destaque. Se você adicionar um usuário em sua lista de inimigos, então qualquer mensagem enviada por ele será ocultada de forma padrão.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'O que é a lista de amigos e inimigos?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Você pode adicionar usuários em sua lista de duas formas. Através do perfil de cada usuário existe um link para adicioná-los à sua lista. De maneira alternativa, em seu Painel de Controle do Usuário, você pode adicionar usuários escrevendo diretamente os seus nomes de usuários. Você pode também excluir usuários de sua lista utilizando esta mesma página.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Como eu posso adicionar/excluir usuários de minha lista de amigos e inimigos?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Os administradores são os usuários com o nível máximo de controle sobre todos os aspectos do fórum. Podem controlar toda a operação dos fóruns, incluindo criar, editar ou excluir fóruns, determinar permissões, banir usuários, criar grupos de usuários ou moderadores, etc. E ainda possuem todos os poderes de um moderador global em todas os fóruns existentes.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'O que são Administradores?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'O administrador do fórum pode assinalar cores aos membros de um determinado grupo, para identificá-los diante de outros usuários e grupos distintos.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Por que alguns grupos aparecem em diferentes cores?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Se você é membro de mais de um grupo de usuários, será determinado qual cor e rank lhe serão atribuídos por padrão. O administrador poderá lhe conceder a opção de escolha do seu grupo padrão através de seu Painel de Controle do Usuário.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'O que é um “Grupo padrão”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Os moderadores são os usuários (ou grupos de usuários) em que seu trabalho é supervisionar diariamente o andamento dos fóruns que lhes estejam designadas. Eles possuem o poder de editar ou excluir mensagens, trancar, destrancar, mover e subdividir tópicos nos fóruns onde são moderadores. Geralmente os moderadores fiscalizam mensagens que possam ir além do assunto em discussão ou o uso de material abusivo e/ou ofensivo.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'O que são Moderadores?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Esta página exibirá uma lista de todos os membros da equipe do fórum, incluindo os administradores e moderadores com todos os seus respectivos detalhes e informações adicionais.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'O que é o link “Equipe do fórum”?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Os grupos de usuários são uma forma dos administradores agruparem os usuários do fórum. Cada usuário pode pertencer a vários grupos e a cada grupo podem ser atribuídos direitos de acesso individuais. Isto torna mais fácil aos administradores destinar vários usuários como moderadores de um determinado fórum ou dar-lhes acesso a um fórum privado.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Você pode ver todos os grupo através do link “Grupos de usuários” em seu Painel de Controle do Usuário. Para inscrever-se em um, proceda clicando no botão apropriado. Nem todos os grupos possuem um acesso aberto, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o grupo estiver aberto, você poderá solicitar sua inscrição clicando no botão apropriado. Se o grupo necessitar de aprovação, você poderá solicitar sua inscrição clicando no botão apropriado. O líder do grupo precisará aprovar a sua inscrição, podendo perguntar-lhe o motivo do mesmo. Por favor, não insista ao líder do grupo caso a sua inscrição seja recusada. Ele deverá informá-lo a respeito de qualquer decisão e temos certeza de que terá uma boa justificativa para tal.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Onde estão e como me inscrevo em um grupo de usuários?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Os grupos de usuários são inicialmente criados pelo administrador do fórum, o qual encarrega alguém de ser responsável pelo mesmo, no caso, o líder do grupo. Se está interessado em criar um grupo de usuários, você deverá primeiramente contatar o administrador com uma mensagem privada.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Como posso ser líder de um grupo?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'O que são grupos de usuários?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Todos os usuários do fórum podem usar o formulário “Contate-nos”, se a opção estiver ativada.<br />Os usuários registrados também podem usar o link “Equipe do fórum”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Como faço para entrar em contato com o administrador do fórum?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Este software foi escrito e licenciado por phpBB Limited. Se acha que alguma função pode ser adicionada, por favor visite o <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, onde você poderá votar em funcões existentes ou sugerir novas.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Porque não há a função X?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Qualquer administrador listado na página “Equipe do fórum” deve ser um alvo apropriado para as suas dúvidas. Se você não obter resposta, deverá contatar o dono do domínio (faça uma <a href="http://www.google.com/search?q=whois">pesquisa</a>) ou, caso o fórum esteja hospedado em um servidor grátis (por exemplo, CJB.NET, Free Forums, Yahoo!, etc.), a gerência desse serviço. Por favor, note que a phpBB Limited não possui <strong>absolutamente nenhuma jurisdição</strong> e não pode ser responsável sobre quando, onde e por quem este fórum é utilizado. Não existe motivo em contatar a phpBB Limited em relação a qualquer questão legal (interrupção e desistência, de responsabilidade, comentário difamatório, etc.) <strong>não diretamente relacionado</strong> com o site phpBB.com ou o software discreto do phpBB por si próprio. Caso envie algum e-mail a phpBB Limited acerca do <strong>uso de terceiros</strong> deste software, poderá receber uma resposta concisa ou não receber resposta alguma.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Contatos sobre questões abusivas e/ou ilegais relacionadas a este fórum',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Este software (em sua forma não modificada) é produzido, publicado e com direitos reservados a <a href="https://www.phpbb.com/">phpBB Limited</a>. Está disponível sob a licença GNU General Public Licence 2 (GPL-2.0) e pode ser distribuído gratuitamente. Verifique o link <a href="https://www.phpbb.com/about/">About phpBB</a> para mais informações.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Quem escreveu o phpBB?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Se não assinalar <em>Lembrar minhas informações</em>, você não entrará automaticamente da próxima vez que visitar o fórum. Isto evita o uso abusivo da sua conta por parte de outras pessoas. Para manter-se online e não necessitar escrever o seu nome de usuário e senha, assinale a caixa <em>Lembrar minhas informações</em> quando estiver efetuando o login. Isto não é recomendável caso acesse o fórum através de um computador compartilhado por outros usuários, ou seja, bibliotecas, café internet ou cyber café, universidades, etc. Se não consegue visualizar a caixa, é possível que o administrador tenha desativado este recurso.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Por que entro automaticamente no fórum?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Existem diversas possibilidades para tal acontecer. Primeiro, certifique-se de que seu nome de usuário e senha estão corretos. Se estiverem, contate o administrador do painel para ter certeza de que você não foi banido. É possível também que tenha ocorrido um erro de configuração, o qual precise ser corrigido.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'É possível que o administrador tenha excluído o seu registro por algum motivo. É comum administradores excluírem registros de usuários que não enviaram mensagens durante um longo período, para reduzir o tamanho do seu banco de dados. Tente registrar-se novamente e participar das discussões do fórum.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Registrei-me anteriormente mas não consigo mais entrar?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Porque é que não consigo entrar no fórum?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'É possível que o administrador tenha banido o seu endereço de IP ou adicionado como nome de usuário proibido o que você deseja registrar. O registro também pode ter sido desativado por razões privadas. Para mais informações, contate o administrador do fórum.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Por que não consigo me registrar?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'A COPPA (Child Online Privacy and Protection Act) é uma Lei de 1998 dos Estados Unidos que exige que aos websites que apenas possam receber informações de menores abaixo de 13 anos de idade com a devida autorização de seus pais ou responsáveis, ou sob qualquer outro método legalmente aceito em que possa ser autorizada a coleta de dados desses menores. No Brasil, esta lei não vigora e por isso não é realmente necessária a aplicação desta função, mas é sempre recomendável que os administradores apliquem as regras de suas comunidades e andem sempre de acordo com a lei vigente do país. Se você está inseguro quanto a aplicação da seguinte lei, contate um conselho judicial para maiores informações. Por favor, note que o Grupo phpBB não pode ser responsabilizado ou contatado para possíveis problemas legais e/ou judiciais de qualquer natureza, exceto sobre as linhas descritas por este sistema.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'O que é a COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Simplesmente exclui todos os cookies gerados pelo sistema phpBB, os quais lhe mantém autenticado dentro do fórum e que também permitem o funcionamento de determinadas opções ativadas pelo administrador. Se você estiver com problemas de entrar e sair na comunidade, excluir os cookies pode ser uma ajuda alternativa.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'O que a opção de “Excluir cookies” faz?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Não entre em pânico! Apesar da sua senha não poder ser recuperada, pode no entanto ser facilmente resetada. Para fazer isto, clique em <em>Esqueci a senha</em> ao efetuar o login, e seguindo às instruções, voltará a entrar no fórum em questão de minutos.<br />No entanto, caso você não seja capaz de resetar sua senha, então tente contatar o administrador do fórum.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Esqueci a senha!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Compete ao administrador do fórum decidir se para poder criar mensagens, o registro é obrigatório. No entanto; o registro dá-lhe acesso a ferramentas adicionais não disponíveis aos visitantes, como imagens de avatar, mensagens privadas, e-mail de outros usuários, subscrição de grupos, etc. Leva apenas alguns minutos para registrar, então é recomendável que o faça.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Primeiro, verifique se está escrevendo o seu nome de usuário e senha corretamente. Caso estejam corretos, então uma entre duas coisas podem estar acontecendo. Se a função COPPA estiver ativa no fórum e você especificou ter menos de 13 anos de idade em seu registro, você terá que seguir às instruções que recebeu. Alguns fóruns exigem que o registro de novos usuários seja ativado, tanto por você como por um administrador, antes que seja efetuado o login; está informação encontra-se presente durante o registro. Se recebeu um e-mail, então siga às instruções. Se não recebeu e-mail algum, você deve ter escrito um endereço de e-mail incorreto ou o mesmo foi detectado por um filtro de spam. Se você tem certeza que o endereço de e-mail que forneceu é válido e correto, então tente contatar o administrador do fórum.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Registrei-me mas não consigo entrar!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Por que preciso registrar-me?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Existem três razões para que tal possa acontecer: você não está registrado no fórum e/ou não se encontra autenticado, o administrador terá desativado a opção de enviar mensagens privadas em todo o fórum ou você encontra-se proibido de enviar mensagens. Se este último é o seu caso, então você deverá perguntar ao administrador qual o motivo, caso realmente não saiba.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Não consigo enviar mensagens privadas!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Embora o sistema de e-mails deste fórum possuir funções de segurança que tentem detectar usuários que enviem este tipo de mensagens, lamentamos que tal tenha acontecido. Você deve informar o acontecido ao administrador do fórum com uma cópia completa do e-mail recebido, sendo muito importante que inclua os cabeçalhos (nestes encontram-se os detalhes do usuário que enviou o e-mail). O administrador poderá então agir em conformidade.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Recebi de alguém neste fórum mensagens de e-mail com assuntos irrelevantes ou abusivos!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Você pode bloquear as mensagens privadas enviadas por um usuário em específico utilizando o seu Painel de Controle do Usuário. Se estiver recebendo mensagens indesejáveis por parte de algum usuário, contate o administrador do fórum para que possa proibir o determinado usuário de enviar este tipo de mensagem.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Recebo mensagens privadas indesejáveis!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Clicando em “Ressuscitar Tópico”, quando você estiver visualizando o mesmo, você pode atualizar e levantar o tópico para o topo do fórum na primeira página. Porém, se você não ver a opção, então esta ferramenta encontra-se desativada. E também é possível efetuar isto simplesmente respondendo ao tópico desejado. Entretanto, fique atento para as regras do website em que você está acessando.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Como eu posso ressuscitar os meus tópicos?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Para enviar um novo tópico em um fórum, clique no botão “Novo Tópico”. Para enviar uma resposta em um tópico, clique no botão “Responder”. Você talvez precise se registrar antes de enviar uma mensagem. Uma lista de suas permissões de cada fórum está disponível no fundo das páginas dos fóruns e tópicos. Exemplo: Você pode enviar novos tópicos, votar em enquetes, etc.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Como posso criar um novo tópico ou enviar uma nova mensagem?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Esta opção lhe permite salvar o rascunho de uma determinada mensagem que você deseje enviar em um outro momento. Para recarregá-la, vá ao Painel de Controle do Usuário e siga as devidas opções.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'O que é o botão “Salvar” no envio de tópicos?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'A menos que seja um administrador ou moderador do painel, você apenas pode editar ou excluir as suas próprias mensagens. Você pode editar uma mensagem clicando no botão de edição para a mensagem relevante, algumas vezes por um período limitado após ser enviada. Caso alguém já tenha respondido a essa mensagem, você encontrará um pequeno texto ao fundo, mencionando que foi editada e eventualmente quantas vezes. Isto não aparece apenas caso essa mensagem ainda não tenha obtido respostas; não aparecerá caso a alteração seja efetuada por algum administrador ou moderador, mas possivelmente eles deixarão uma nota dizendo o motivo ou critério usado. Por favor, note que usuários normais não podem excluir uma mensagem após alguém já ter enviado uma resposta.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Como posso editar ou excluir uma mensagem?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'O acesso a alguns fóruns poderá estar limitado apenas a determinados usuários ou grupos. Para ver, ler, enviar mensagens ou qualquer outra ação você precisa de uma autorização especial. Apenas o moderador desse fórum e o administrador podem permitir esse acesso. Entre em contato, caso julgue necessário.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Por que não consigo entrar em um fórum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'As permissões do uso de anexos são garantidas por fórum, por grupo ou por usuário. O administrador do fórum talvez não permita que anexos sejam adicionados especificando no fórum que você esteja postando ou que apenas certos grupos possam adicionar anexos. Se você não tem certeza sobre o que pode ser enviado, contate o administrador para maiores informações.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Por que não consigo adicionar anexos?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'O limite de opções de voto é configurado pelo administrador do fórum. Se você sentir que precisa adicionar mais opções de voto do que a quantidade permitida, contate o administrador.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Por que não posso adicionar mais opções de voto?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Quando enviar um novo tópico ou editar a primeira mensagem de um tópico, clique na aba “Criar uma enquete” abaixo do corpo da mensagem; se você não conseguir ver esta opção, é porque provavelmente não possui permissão para criar enquetes ou o tópico não é de sua autoria. Você deve escrever um título para a enquete e em seguida, escrever pelo menos duas opções de voto, certificando-se de colocar cada opção em uma linha separada na área de texto. Você poderá também especificar o número de opções que um usuário poderá selecionar ao votar em “Opções por usuário”, estipular um tempo limite para a enquete (sendo 0 ilimitado), e por último a opção de permitir aos usuários a mudança de voto.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Como posso adicionar uma enquete?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Da mesma forma que as mensagens, as enquetes apenas poderão ser editadas pelo seu autor, moderadores ou administradores do fórum. Para editar uma enquete, clique na primeira mensagem do tópico; esta mensagem é a que tem a enquete associada ao tópico. Caso ninguém tenha submetido voto, o seu autor poderá excluir a enquete ou editar as suas opções de voto. Contudo, se usuários já tiverem submetido os seus votos, apenas moderadores e administradores podem editar ou excluir essa enquete. Isso é para evitar com que sejam alteradas as opções de voto de enquetes em curso.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Como posso editar ou excluir uma enquete?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'O administrador pode decidir se no fórum em que você está postando, as mensagens precisem ser revisadas ou não. E também é possível que o administrador tenha adicionado você a um grupo de usuários que precise ter suas mensagens aprovadas antes de enviá-las ao fórum. Por favor, contate o administrador para maiores informações.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'O que a minha mensagem necessita para ser aprovada?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Se o administrador tiver ativado esta opção, vá até a mensagem que você deseja denunciar e verá um botão que é utilizado para denunciar mensagens. Clicando ali, você será encaminhado às etapas necessárias para executar esta operação.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Como eu posso denunciar mensagens?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Para adicionar uma assinatura em suas mensagens, você deverá primeiro criar uma em seu Painel de Controle do Usuário. Uma vez criada, marque a opção <em>Anexar assinatura</em> nas opções referentes ao envio de mensagens para adicionar sua assinatura. Você também pode adicionar sua assinatura por padrão para todas as suas mensagens enviadas selecionando a opção correta em seu Painel de Controle do Usuário. Se fizer isto, você pode prevenir que uma assinatura seja anexada a mensagens individuais durante o envio de novas mensagens.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Como posso adicionar assinatura a uma mensagem?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Cada administrador possui suas próprias regras para o seu website. Se ele perceber que elas estão sendo ignoradas, você receberá uma advertência. Por favor, note que esta é a decisão do administrador do fórum e a phpBB Limited não possui autoridade nenhuma sobre a advertência enviada em seu website. Contate o administrador se você não sabe as razões pelas quais recebeu esta advertência.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Por que eu recebi uma advertência?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'A sua pesquisa resultou em inúmeras ocorrências. Use a “Pesquisa Avançada” e seja mais específico nos termos escritos e selecione fóruns onde possam ser pesquisados.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Por que a minha pesquisa resultou em uma página em branco!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Escrevendo um termo de pesquisa na respectiva página localizada no índice do fórum, visualizando tópicos ou fóruns. A pesquisa avançada pode ser acessada clicando no link “Pesquisa Avançada” que encontra-se disponível em todas as páginas do fórum. Como acessar a pesquisa dependerá também do estilo em uso.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Como eu posso pesquisar?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Vá até a página “Membros” e clique no link “Procurar um usuário”.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Como eu posso pesquisar por usuários?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Sua pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB. Seja mais específico e utilize as opções disponíveis na Pesquisa Avançada.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Por que a minha pesquisa resultou em nenhuma ocorrência?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'As suas próprias mensagens podem ser exibidas clicando em “Ver as suas mensagens” através do Painel de Controle do Usuário ou pelo seu próprio perfil clicando em “Pesquisar mensagens do usuário” ou clicando em “Links rápidos” no menu do topo do fórum. Para encontrar os seus tópicos, utilize a Pesquisa Avançada e preencha as diversas opções apropriadamente.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Como eu posso pesquisar minhas próprias mensagens e tópicos?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Há duas imagens que podem aparecer junto com um nome de usuário quando se visualiza as mensagens. Uma delas pode ser uma imagem associada ao seu rank, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu status no fórum. Outra, geralmente uma imagem maior, é conhecida como um avatar, que é normalmente única ou pertencente a cada usuário.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'No seu Painel de Controle do Usuário, dentro da categoria “Perfil” você pode adicionar um avatar usando um dos quatro métodos a seguir: Gravatar, Galeria de avatares, Avatares remotos ou Envio de avatares. Está ao critério do administrador permitir ou não o uso de avatares e como os usuários podem enviar estas imagens. Se você não está autorizado a utilizar avatares, contate o administrador para receber uma justificativa.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Como posso exibir uma imagem junto ao meu nome de usuário?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'O que são as imagens ao lado do meu nome de usuário?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Se você é um usuário registrado, toda a sua configuração é salva no banco de dados do painel. Para alterá-la, clique em Painel de Controle do Usuário; um link pode ser geralmente encontrado clicando no seu nome de usuário no topo da página. Este sistema lhe permitirá alterar toda a sua configuração e preferências.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Como altero a minha configuração?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Apenas usuários registrados poderão enviar e-mails a outros usuários através do formulário exclusivo do fórum e apenas se o administrador tiver ativado esta função. Isso é para evitar o uso malicioso do sistema de e-mails por usuários anônimos.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Quando clico no e-mail de um usuário, uma página aparece solicitando que eu faça o login?!',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Em seu Painel de Controle do Usuário, dentro da categoria “Preferências”, você encontrará uma opção nomeada <em>Ocultar seus status online</em>. Se selecionar Sim, apenas você, o administrador e os moderadores poderão ver que está online. Passará a ser considerado pelo sistema como um usuário invisível.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Como posso ocultar o meu nome de usuário da lista de usuários online?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'O administrador pode não ter instalado o seu idioma ou o phpBB ainda não foi traduzido para o mesmo. Peça ao administrador que instale o seu pacote de idiomas e, caso não exista, você poderá criar uma nova tradução. Mais informações, consulte o site <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'O idioma da minha nacionalidade não está na lista!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Os ranks, os quais aparecem abaixo do nome de usuário, indicam o número de mensagens enviadas ou identificam determinados usuários, por exemplo: moderadores e administradores. Em geral, você não pode alterar diretamente o seu rank, bem como eles são determinados pelo administrador do fórum. Por favor, não abuse do envio de mensagens desnecessárias apenas para aumentar o seu rank. A maior parte dos fóruns não tolera este tipo de atitude e os moderadores ou administradores irão simplesmente diminuir o seu contador de mensagens.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Como posso alterar o meu rank?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Se você tem certeza de que selecionou o fuso horário corretamente e a hora continua errada, então o horário armazenado no relógio do servidor está incorreto. Por favor, contate o administrador para que o problema seja resolvido.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Alterei o fuso Horário, mas a data e hora continuam erradas!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Pode ocorrer que você visualize as horas em um fuso horário diferente de onde você normalmente se encontra ou inicialmente programou. Se esse é o seu caso, você deve alterar no seu Painel de Controle do Usuário a opção para o seu fuso horário local, ou seja, Brasil, Londres, Paris, Nova Iorque, Sidney, ou onde você estiver. Note que a mudança do fuso horário, bem como a maior parte das configurações, só é permitida a usuários registrados. Se você ainda não se registrou, é hora para que se registre no fórum!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'A data e hora estão erradas!',
));
