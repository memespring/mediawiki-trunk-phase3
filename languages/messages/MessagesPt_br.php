<?php
/** Brazilian Portuguese (Português do Brasil)
 *
 * @addtogroup Language
 *
 * @author Yves Marques Junqueira
 * @author Rodrigo Calanca Nishino
 * @author Siebrand
 * @author לערי ריינהארט
 * @author 555
 */

$fallback = 'pt';

$skinNames = array(
	'standard' => 'Padrão',
);

$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Especial',
	NS_MAIN           => '',
	NS_TALK           => 'Discussão',
	NS_USER           => 'Usuário',
	NS_USER_TALK      => 'Usuário_Discussão',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => '$1_Discussão',
	NS_IMAGE          => 'Imagem',
	NS_IMAGE_TALK     => 'Imagem_Discussão',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'MediaWiki_Discussão',
	NS_TEMPLATE       => 'Predefinição',
	NS_TEMPLATE_TALK  => 'Predefinição_Discussão',
	NS_HELP           => 'Ajuda',
	NS_HELP_TALK      => 'Ajuda_Discussão',
	NS_CATEGORY       => 'Categoria',
	NS_CATEGORY_TALK  => 'Categoria_Discussão'
);
$linkTrail = "/^([a-z]+)(.*)\$/sD";

$messages = array(
# User preference toggles
'tog-underline'               => 'Sublinha links',
'tog-highlightbroken'         => 'Formata links quebrados <a href="" class="new"> como isto </a> (alternative: como isto<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Justifica parágrafos',
'tog-hideminor'               => 'Esconder edições secundárias em mudanças recentes',
'tog-usenewrc'                => 'Mudanças recentes melhoradas(nem todos os navegadores)',
'tog-numberheadings'          => 'Auto-numerar cabeçalhos',
'tog-showtoolbar'             => 'Mostrar barra de edição',
'tog-editondblclick'          => 'Editar páginas quando houver clique duplo(JavaScript)',
'tog-editsection'             => 'Habilitar seção de edição via links [edit]',
'tog-editsectiononrightclick' => 'Habilitar seção de edição por clique <br /> com o botão direito no título da seção (JavaScript)',
'tog-showtoc'                 => 'Mostrar Tabela de Conteúdos<br />(para artigos com mais de 3 cabeçalhos)',
'tog-rememberpassword'        => 'Lembra senha entre sessões',
'tog-editwidth'               => 'Caixa de edição com largura completa',
'tog-watchdefault'            => 'Observa artigos novos e modificados',
'tog-minordefault'            => 'Marca todas as edições como secundárias, por padrão',
'tog-previewontop'            => 'Mostrar Previsão antes da caixa de edição ao invés de ser após',
'tog-nocache'                 => 'Desabilitar caching de página',

# Dates
'sunday'        => 'Domingo',
'monday'        => 'Segunda',
'tuesday'       => 'Terça-Feira',
'wednesday'     => 'Quarta-Feira',
'thursday'      => 'Quinta-Feira',
'friday'        => 'Sexta-Feira',
'saturday'      => 'Sábado',
'sun'           => 'Dom',
'mon'           => 'Seg',
'tue'           => 'Ter',
'wed'           => 'Qua',
'thu'           => 'Qui',
'fri'           => 'Sex',
'sat'           => 'Sáb',
'january'       => 'Janeiro',
'february'      => 'Fevereiro',
'march'         => 'Março',
'april'         => 'Abril',
'may_long'      => 'Maio',
'june'          => 'Junho',
'july'          => 'Julho',
'august'        => 'Agosto',
'september'     => 'Setembro',
'october'       => 'Outubro',
'november'      => 'Novembro',
'december'      => 'Dezembro',
'january-gen'   => 'Janeiro',
'february-gen'  => 'Fevereiro',
'march-gen'     => 'Março',
'april-gen'     => 'Abril',
'may-gen'       => 'Maio',
'june-gen'      => 'Junho',
'july-gen'      => 'Julho',
'august-gen'    => 'Agosto',
'september-gen' => 'Setembro',
'october-gen'   => 'Outubro',
'november-gen'  => 'Novembro',
'december-gen'  => 'Dezembro',
'jan'           => 'Jan',
'feb'           => 'Fev',
'mar'           => 'Mar',
'apr'           => 'Abr',
'may'           => 'Mai',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Ago',
'sep'           => 'Set',
'oct'           => 'Out',
'nov'           => 'Nov',
'dec'           => 'Dez',

# Bits of text used by many pages
'categories'      => 'Page categories',
'pagecategories'  => 'Page categories',
'category_header' => 'Páginas na categoria "$1"',
'subcategories'   => 'Subcategorias',

'mainpagetext' => 'Software Wiki instalado com sucesso.',

'about'         => 'Sobre',
'newwindow'     => '(abrir em uma nova janela)',
'cancel'        => 'Cancelar',
'qbfind'        => 'Procura',
'qbbrowse'      => 'Folhear',
'qbedit'        => 'Editar',
'qbpageoptions' => 'Opções de página',
'qbpageinfo'    => 'Informação de página',
'qbmyoptions'   => 'Minhas opções',
'mypage'        => 'Minha página',
'mytalk'        => 'Minha discussão',

'errorpagetitle'    => 'Erro',
'returnto'          => 'Retornar para $1.',
'tagline'           => 'De {{SITENAME}}',
'help'              => 'Ajuda',
'search'            => 'Pesquisar',
'searchbutton'      => 'Pesquisar',
'go'                => 'Vai',
'searcharticle'     => 'Ir',
'history'           => 'Histórico',
'printableversion'  => 'Versão para impressão',
'permalink'         => 'Link permanente',
'edit'              => 'Editar',
'editthispage'      => 'Editar esta página',
'delete'            => 'Eliminar',
'deletethispage'    => 'Apagar esta página',
'protect'           => 'Proteger',
'protectthispage'   => 'Proteger esta página',
'unprotectthispage' => 'Desproteger esta página',
'newpage'           => 'Nova página',
'talkpage'          => 'Discutir esta página',
'talkpagelinktext'  => 'Discussão',
'personaltools'     => 'Ferramentas pessoais',
'articlepage'       => 'Ver atigo',
'talk'              => 'Discussão',
'views'             => 'Acessos',
'toolbox'           => 'Ferramentas',
'userpage'          => 'Ver página de usuário',
'projectpage'       => 'Ver meta página',
'imagepage'         => 'Ver página de imagens',
'viewtalkpage'      => 'Ver discussões',
'otherlanguages'    => 'Outras línguas',
'redirectedfrom'    => '(Redirecionado de $1)',
'redirectpagesub'   => 'Página de redirecionamento',
'lastmodifiedat'    => 'Está página foi modificada pela última vez em $2, $1.', # $1 date, $2 time
'viewcount'         => 'Esta página foi acessada $1 vezes.',
'protectedpage'     => 'Página protegida',
'jumpto'            => 'Ir para:',
'jumptonavigation'  => 'navegação',
'jumptosearch'      => 'pesquisa',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Sobre',
'aboutpage'         => 'Project:Sobre',
'bugreports'        => "Reportagem de 'bugs'",
'bugreportspage'    => 'Project:Reportag_Bug',
'copyrightpagename' => 'Direitos Autorais da {{SITENAME}}',
'copyrightpage'     => '{{ns:project}}:Direitos_autorais',
'currentevents'     => 'Eventos atuais',
'currentevents-url' => 'Project:Eventos atuais',
'disclaimers'       => 'Alerta de Conteúdo',
'disclaimerpage'    => 'Project:Aviso_geral',
'edithelp'          => 'Ajuda de edição',
'edithelppage'      => 'Help:Editar',
'helppage'          => 'Help:Conteúdos',
'mainpage'          => 'Página principal',
'portal'            => 'Portal comunitário',
'portal-url'        => 'Project:Portal comunitário',
'privacy'           => 'Política de privacidade',
'privacypage'       => 'Project:Política_de_privacidade',
'sitesupport'       => 'Doações',
'sitesupport-url'   => 'Project:Apoio',

'retrievedfrom'       => 'Obtido em "$1"',
'youhavenewmessages'  => 'Você tem $1 ($2).',
'newmessageslink'     => 'novas mensagens',
'newmessagesdifflink' => 'comparar com a penúltima edição',
'editsection'         => 'editar',
'editold'             => 'editar',
'editsectionhint'     => 'Editar seção: $1',
'toc'                 => 'Índice de conteúdo',
'showtoc'             => 'mostrar',
'hidetoc'             => 'esconder',
'page-rss-feed'       => 'Feed RSS de "$1"',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-user'     => 'Página de usuário',
'nstab-project'  => 'Página de projeto',
'nstab-image'    => 'Arquivo',
'nstab-template' => 'Predefinição',
'nstab-category' => 'Categoria',

# Main script and global functions
'nosuchaction'      => 'Ação não existente',
'nosuchactiontext'  => 'A ação especificada pela URL não é
reconhecida pelo programa da {{SITENAME}}',
'nosuchspecialpage' => 'Não exista esta página especial',
'nospecialpagetext' => 'Você requisitou uma página especial que não é
reconhecida pelo software da {{SITENAME}}.',

# General errors
'error'           => 'Erro',
'databaseerror'   => 'Erro no banco de dados',
'dberrortext'     => 'Um erro de sintaxe de busca no banco de dados ocorreu.
A última tentativa de busca no banco de dados foi:
<blockquote><tt>$1</tt></blockquote>
na função "<tt>$2</tt>".
MySQL retornou o erro "<tt>$3: $4</tt>".',
'dberrortextcl'   => 'Um erro de sintaxe de pesquisa no banco
de dados ocorreu.
A última tentativa de pesquisa no banco de dados foi:
"$1"
com a função"$2".
MySQL retornou o erro "$3: $4".',
'noconnect'       => 'Desculpe! O wiki está passando por algumas
dificuldades técnicas, e não pode contactar o servidor de bando de dados.',
'nodb'            => 'Não foi possível selecionar o banco de dados $1',
'cachederror'     => 'O que segue é uma cópia em cache da página
solicitada, e pode não estar atualizada.',
'readonly'        => 'Banco de dados somente para leitura',
'enterlockreason' => 'Entre com um motivo para trancá-lo, incluindo uma estimativa de quando poderá novamente ser escrito',
'readonlytext'    => 'O Banco-de-dados da {{SITENAME}} está atualmente bloqueado para novos
artigos e outras modificações, provávelmente por uma manutenção rotineira no Bando de Dados,
mais tarde voltará ao normal.

O administrador que fez o bloqueio oferece a seguinte explicação:
<p>$1',
'missingarticle'  => 'O Banco-de-Dados não encontrou o texto de uma página
que deveria ser encontrado, chamado "$1".

<p>Isto é geralmente causado pela procura de um diff antigo ou um histórico que leva a uma página que foi deletada.

<p>Se isto não for o caso, você pode ter encontrado um bug no software.
Por favor, comunique isto ao administrador, tenha nota da URL.',
'internalerror'   => 'Erro Interno',
'filecopyerror'   => 'Não foi possível copiar o arquivo "$1" para "$2".',
'filerenameerror' => 'Não foi possível renomear o arquivo "$1" para "$2"',
'filedeleteerror' => 'Não foi possível deletar o arquivo "$1".',
'filenotfound'    => 'Não foi possível encontrar o arquivo "$1".',
'unexpected'      => 'Valor não esperado: "$1"="$2".',
'formerror'       => 'Erro: Não foi possível enviar o formulário',
'badarticleerror' => 'Esta acção não pode ser performada nesta página.',
'cannotdelete'    => 'Não foi possível excluir página ou imagem especificada. (Ela já pode ter sido deletada por alguém.)',
'badtitle'        => 'Título ruim',
'badtitletext'    => 'O título de página requisitado era inválido, vazio, ou
um link incorreto de inter-linguagem ou título inter-wiki .',
'perfdisabled'    => 'Desculpe! Esta opção foi temporariamente desabilitada
porque tornava o banco de dados lento demais a ponto de impossibilitar o wiki.',
'viewsource'      => 'Ver código-fonte',
'viewsourcefor'   => 'para $1',

# Login and logout pages
'logouttitle'           => 'Saída de utilizador',
'logouttext'            => 'Você agora não está mais autenticado.
Você pode continuar a usar a {{SITENAME}} anonimamente, ou pode se autenticar
novamente como o mesmo utilizador ou como um utilizador diferente.',
'welcomecreation'       => '<h2>Bem-vindo, $1!</h2><p>Sua conta foi criada.
Não se esqueça de personalizar suas preferências na {{SITENAME}}.',
'loginpagetitle'        => 'Login de usuário',
'yourname'              => 'Nome de usuário:',
'yourpassword'          => 'Senha:',
'yourpasswordagain'     => 'Redigite sua senha',
'remembermypassword'    => 'Lembrar de minha senha em outras sessões.',
'loginproblem'          => '<b>Houve um problema com a sua autenticação.</b><br />Tente novamente!',
'login'                 => 'Entrar',
'loginprompt'           => 'É necessário estar com os <i>cookies</i> ativados para poder autenticar-se na {{SITENAME}}.',
'userlogin'             => 'Criar uma conta ou entrar',
'logout'                => 'Sair',
'userlogout'            => 'Sair',
'notloggedin'           => 'Não-logado',
'nologinlink'           => 'Criar uma conta',
'createaccount'         => 'Criar nova conta',
'createaccountmail'     => 'por e-Mail',
'badretype'             => 'As senhas que você digitou não são iguais.',
'userexists'            => 'O nome de usuário que você digitou já existe. Por favor, escolha um nome diferente.',
'youremail'             => 'Seu e-mail*',
'yournick'              => 'Seu apelido (para assinaturas)',
'loginerror'            => 'Erro de autenticação',
'noname'                => 'Você não colocou um nome de usuário válido.',
'loginsuccesstitle'     => 'Login bem sucedido',
'loginsuccess'          => 'Agora você está logado na {{SITENAME}} como "$1".',
'nosuchuser'            => 'Não há nenhum usuário com o nome "$1".
Verifique sua grafia, ou utilize o formulário a baixo para criar uma nova conta de usuário.',
'wrongpassword'         => 'A senha que você entrou é inválida. Por favor tente novamente.',
'mailmypassword'        => 'Envie uma nova senha por e-mail',
'passwordremindertitle' => 'Lembrador de senhas da {{SITENAME}}',
'passwordremindertext'  => 'Alguém (provavelmente você, do endereço de IP $1)
solicitou que nós lhe enviássemos uma nova senha para login.
A senha para o usuário "$2" é a partir de agora "$3".
Você pode realizar um login e mudar sua senha agora.',
'noemail'               => 'Não há nenhum e-Mail associado ao usuário "$1".',
'passwordsent'          => 'Uma nova senha está sendo enviada para o endereço de e-Mail
registrado para "$1".
Por favor, reconecte-se ao recebê-lo.',

# Edit page toolbar
'bold_sample'     => 'Texto em negrito',
'bold_tip'        => 'Texto em negrito',
'italic_sample'   => 'Texto em itálico',
'italic_tip'      => 'Texto em itálico',
'link_sample'     => 'Título do link',
'link_tip'        => 'Link interno',
'extlink_sample'  => 'http://www.wikimedia.org link externo',
'extlink_tip'     => 'Link externo (lembre-se do prefixo http://)',
'headline_sample' => 'Texto de cabeçalho',
'headline_tip'    => 'Seção de nível 2',
'math_sample'     => 'Inserir fórmula aqui',
'math_tip'        => 'Fórmula matemática (LaTeX)',
'nowiki_sample'   => 'Inserir texto não-formatado aqui',
'nowiki_tip'      => 'Ignorar formatação wiki',
'image_tip'       => 'Imagem embutida',
'media_tip'       => 'Link a arquivo interno de multimídia',
'sig_tip'         => 'Sua assinatura, com data e hora',
'hr_tip'          => 'Linha horizontal (use de forma moderada)',

# Edit pages
'summary'                => 'Sumário',
'subject'                => 'Assunto/cabeçalho',
'minoredit'              => 'Marcar como edição menor',
'watchthis'              => 'Vigiar esta página',
'savearticle'            => 'Salvar página',
'preview'                => 'Prever',
'showpreview'            => 'Mostrar previsão',
'showdiff'               => 'Mostrar alterações',
'anoneditwarning'        => "'''Atenção''': Você não se encontra autenticado. O seu endereço de IP será registrado no histórico de edições desta página.",
'blockedtitle'           => 'Usuário está bloqueado',
'blockedtext'            => '<big>O seu nome de usuário ou endereço de IP foi bloqueado</big>

O bloqueio foi realizado por $1. O motivo apresentado foi \'\'$2\'\'.

* Início do bloqueio: $8
* Expiração do bloqueio: $6
* Destino do bloqueio: $7

Você pode contactar $1 ou outro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir sobre o bloqueio.

Note que não poderá utilizar a funcionalidade "Contactar usuário" se não possuir uma conta neste wiki ({{SITENAME}}) com um endereço de email válido indicado nas suas [[{{ns:special}}:Preferences|preferências de usuário]] e se tiver sido bloqueado de utilizar tal recurso.

O seu endereço de IP atual é $3 e a ID de bloqueio é $5. Por favor, inclua um desses (ou ambos) dados em quaisquer tentativas de esclarecimentos.',
'whitelistedittitle'     => 'Login necessário para edição',
'whitelistedittext'      => 'Você precisa se [[Especial:Userlogin|logar]] para editar artigos.',
'whitelistreadtitle'     => 'Login necessário para leitura',
'whitelistreadtext'      => 'Você precisa se [[Especial:Userlogin|logar]] para ler artigos.',
'whitelistacctitle'      => 'Você não está habilitado a criar uma conta',
'whitelistacctext'       => 'Para ter permissão para se criar uma conta neste Wiki você precisará estar [[Especial:Userlogin|logado]] e ter as permissões apropriadas.',
'accmailtitle'           => 'Senha enviada.',
'accmailtext'            => "A senha de '$1' foi enviada para $2.",
'newarticle'             => '(Nova)',
'newarticletext'         => "Você seguiu um link para uma página que não existe.
Para criá-la, começe escrevendo na caixa abaixo
(veja [[{{MediaWiki:Helppage}}|a página de ajuda]] para mais informações).
Se você chegou aqui por engano, apenas clique no botão '''voltar''' do seu navegador.",
'anontalkpagetext'       => "---- ''Esta é a página de discussão para um usuário anônimo que não criou uma conta ainda ou que não a usa. Então nós temos que usar o endereço numérico de IP para identificá-lo. Um endereço de IP pode ser compartilhado por vários usuários. Se você é um usuário anônimo e acha irrelevante que os comentários sejam direcionados a você, por favor [[Especial:Userlogin|crie uma conta ou autentique-se]] para evitar futuras confusões com outros usuários anônimos.''",
'noarticletext'          => 'Não existe atualmente texto nesta página; você pode [[{{ns:special}}:Search/{{PAGENAME}}|pesquisar pelo título desta página em outras páginas]] ou [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta página].',
'updated'                => '(Atualizado)',
'note'                   => '<strong>Nota:</strong>',
'previewnote'            => '<strong>Isto é apenas uma previsão. As modificações ainda não foram salvas!</strong>',
'previewconflict'        => 'Esta previsão reflete o texto que está na área de edição acima e como ele aparecerá se você escolher salvar.',
'editing'                => 'Editando $1',
'editinguser'            => 'Editando $1',
'editingsection'         => 'Editando $1 (seção)',
'editingcomment'         => 'Editando $1 (comentário)',
'editconflict'           => 'Conflito de edição: $1',
'explainconflict'        => 'Alguém mudou a página enquanto você a estava editando.
A área de texto acima mostra o texto original.
Suas mudanças são mostradas na área abaixo.
Você terá que mesclar suas modificações no texto existente.
<b>SOMENTE</b> o texto na área acima será salvo quando você pressionar "Salvar página".<br />',
'yourtext'               => 'Seu texto',
'storedversion'          => 'Versão guardada',
'editingold'             => '<strong>CUIDADO: Você está editando uma revisão desatualizada deste artigo.
Se você salvá-lo, todas as mudanças feitas a partir desta revisão serão perdidas.</strong>',
'yourdiff'               => 'Diferenças',
'copyrightwarning'       => 'Por favor, note que todas as suas contribuições em {{SITENAME}} são consideradas como lançadas nos termos da licença $2 (veja $1 para detalhes). Se não deseja que o seu texto seja inexoravelmente editado e redistribuído de tal forma, não o envie.<br />
Você está, ao mesmo tempo, a garantir-nos que isto é algo escrito por você mesmo ou algo copiado de uma fonte de textos em domínio público ou similarmente de teor livre.
<strong>NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS AUTORAIS SEM A DEVIDA PERMISSÃO!</strong>',
'longpagewarning'        => '<strong>CUIDADO: Esta página tem $1 kilobytes ; alguns browsers podem ter problemas ao editar páginas maiores que 32kb.
Por favor considere quebrar a página em sessões menores.</strong>',
'readonlywarning'        => '<strong>CUIDADO: O banco de dados está sendo bloqueado para manutenção.
No momento não é possível salvar suas edições. Você pode copiar e colar o texto em um arquivo de texto e salvá-lo em seu computador para adicioná-lo ao wiki mais tarde.</strong>',
'protectedpagewarning'   => '<strong>CUIDADO: Apenas os usuários com privilégios de sysop podem editar esta página pois ela foi bloqueada.</strong>',
'templatesused'          => 'Predefinições utilizadas nesta página:',
'template-protected'     => '(protegida)',
'template-semiprotected' => '(semi-protegida)',
'nocreatetext'           => '{{SITENAME}} tem restringida a habilidade de criar novas páginas.
Volte à tela anterior e edite uma página já existente, ou [[{{ns:special}}:Userlogin|autentique-se ou crie uma conta]].',
'recreate-deleted-warn'  => "'''Atenção: Você está re-criando uma página já eliminada em outra ocasião.'''

Certifique-se de que seja adequado prosseguir editando esta página.
O registro de eliminação desta página é exibido a seguir, para sua comodidade:",

# History pages
'viewpagelogs'        => 'Ver registros para esta página',
'nohistory'           => 'Não há histórico de revisões para esta página.',
'revnotfound'         => 'Revisão não encontrada',
'revnotfoundtext'     => 'A antiga revisão da página que você está procurando não pode ser encontrada.
Por favor verifique a URL que você usou para acessar esta página.',
'loadhist'            => 'Carregando histórico',
'currentrev'          => 'Revisão atual',
'revisionasof'        => 'Edição de $1',
'previousrevision'    => '← Versão anterior',
'nextrevision'        => 'Versão posterior →',
'currentrevisionlink' => 'ver versão atual',
'cur'                 => 'atu',
'next'                => 'prox',
'last'                => 'ult',
'histlegend'          => 'Seleção para diferença: marque as caixas em uma das versões que deseja comparar e clique no botão.<br />
Legenda: (atu) = diferenças da versão atual,
(ult) = diferença da versão anterior, m = edição menor',
'histfirst'           => 'Mais antigas',
'histlast'            => 'Mais recentes',

# Diffs
'history-title'           => 'Histórico de edições de "$1"',
'difference'              => '(Diferenças entre revisões)',
'lineno'                  => 'Linha $1:',
'compareselectedversions' => 'Compare as versões selecionadas',
'editundo'                => 'desfazer',

# Search results
'searchresults'         => 'Buscar resultados',
'searchresulttext'      => 'Para mais informações sobre busca na {{SITENAME}}, veja [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'        => 'Para pedido de busca "[[:$1]]"',
'searchsubtitleinvalid' => 'Para pedido de busca "$1"',
'noexactmatch'          => "'''Não existe uma página com o título \"\$1\".''' Você pode [[:\$1|criar tal página]].",
'titlematches'          => 'Resultados nos títulos dos artigos',
'notitlematches'        => 'Sem resultados nos títulos dos artigos',
'textmatches'           => 'Resultados nos textos dos artigos',
'notextmatches'         => 'Sem resultados nos textos dos artigos',
'prevn'                 => 'anterior $1',
'nextn'                 => 'próximo $1',
'viewprevnext'          => 'Ver ($1) ($2) ($3).',
'showingresults'        => 'Mostrando os próximos <b>$1</b> resultados começando com #<b>$2</b>.',
'showingresultsnum'     => 'Mostrando <b>$3</b> resultados começando com #<b>$2</b>.',
'nonefound'             => '<strong>Nota</strong>: pesquisas mal sucedidas são geralmente causadas devido o uso de palavras muito comuns como "tem" e "de",
que não são indexadas, ou pela especificação de mais de um termo (somente as páginas contendo todos os termos aparecerão nos resultados).',
'powersearch'           => 'Pesquisar',
'powersearchtext'       => '
Procurar nos namespaces :<br />
$1<br />
$2 Lista redireciona &nbsp; Procura por $3 $9',

# Preferences page
'preferences'           => 'Preferências',
'mypreferences'         => 'Minhas preferências',
'prefsnologin'          => 'Não autenticado',
'prefsnologintext'      => 'Você precisa estar [[Special:Userlogin|autenticado]]
para definir suas preferências.',
'prefsreset'            => 'Preferências foram reconfiguradas.',
'qbsettings'            => 'Configurações da Barra Rápida',
'changepassword'        => 'Mudar senha',
'skin'                  => 'Aparência(Skin)',
'math'                  => 'Renderização matemática',
'dateformat'            => 'Formato da Data',
'math_failure'          => 'Falhou ao checar gramática(parse)',
'math_unknown_error'    => 'erro desconhecido',
'math_unknown_function' => 'função desconhecida',
'math_lexing_error'     => 'erro léxico',
'math_syntax_error'     => 'erro de síntaxe',
'saveprefs'             => 'Salvar preferências',
'resetprefs'            => 'Redefinir preferências',
'oldpassword'           => 'Senha antiga',
'newpassword'           => 'Nova senha',
'retypenew'             => 'Redigite a nova senha',
'textboxsize'           => 'Tamanho da caixa de texto',
'rows'                  => 'Linhas',
'columns'               => 'Colunas',
'searchresultshead'     => 'Configurar resultados de pesquisas',
'resultsperpage'        => 'Resultados por página',
'contextlines'          => 'Linhas por resultados',
'contextchars'          => 'Letras de contexto por linha',
'recentchangescount'    => 'Número de títulos em Mudanças Recentes',
'savedprefs'            => 'Suas preferências foram salvas.',
'timezonetext'          => 'Entre com o número de horas que o seu horário local difere do horário do servidor (UTC).',
'localtime'             => 'Display de hora local',
'timezoneoffset'        => 'Offset',
'servertime'            => 'Horário do servidor é',
'guesstimezone'         => 'Colocar no navegador',
'defaultns'             => 'Procurar nestes namespaces por padrão:',

# Recent changes
'recentchanges'                  => 'Mudanças recentes',
'recentchangestext'              => 'Veja as mais novas mudanças na {{SITENAME}} nesta página.',
'recentchanges-feed-description' => 'Acompanhe as Mudanças recentes deste wiki por este feed.',
'rcnote'                         => "A seguir {{PLURAL:$1|está listada '''uma''' alteração ocorrida|estão listadas '''$1''' alterações ocorridas}} {{PLURAL:$2|no último dia|nos últimos '''$2''' dias}}, a partir de $3.",
'rcnotefrom'                     => 'Abaixo estão as mudanças desde <b>$2</b> (até <b>$1</b> mostradas).',
'rclistfrom'                     => 'Mostrar as novas alterações a partir de $1',
'rcshowhideminor'                => '$1 edições menores',
'rcshowhidebots'                 => '$1 bots',
'rcshowhideliu'                  => '$1 usuários registrados',
'rcshowhideanons'                => '$1 usuários anônimos',
'rcshowhidemine'                 => '$1 as minhas edições',
'rclinks'                        => 'Mostrar as últimas $1 mudanças nos últimos $2 dias<br />$3',
'diff'                           => 'dif',
'hist'                           => 'hist',
'hide'                           => 'Esconder',
'show'                           => 'Mostrar',
'minoreditletter'                => 'm',
'newpageletter'                  => 'N',
'boteditletter'                  => 'b',

# Recent changes linked
'recentchangeslinked'          => 'Alterações relacionadas',
'recentchangeslinked-title'    => 'Alterações relacionadas com $1',
'recentchangeslinked-noresult' => 'Não ocorreram alterações em páginas relacionadas no intervalo de tempo fornecido.',
'recentchangeslinked-summary'  => "Esta página especial lista as alterações mais recentes de páginas que possuam um link a outra. Páginas que estejam em sua lista de páginas vigiadas são exibidas em '''negrito'''.",

# Upload
'upload'            => 'Carregar arquivo',
'uploadbtn'         => 'Carregar arquivo',
'reupload'          => 'Re-carregar',
'reuploaddesc'      => 'Retornar ao formulário de Uploads.',
'uploadnologin'     => 'Não autenticado',
'uploadnologintext' => 'Você deve estar [[Special:Userlogin|autenticado]]
para carregar arquivos.',
'uploaderror'       => 'Erro ao Carregar',
'uploadlog'         => 'log de uploads',
'uploadlogpage'     => 'Registro de upload',
'uploadlogpagetext' => 'Segue uma lista dos uploads mais recentes.
Todas as datas mostradas são do servidor (UTC).',
'filename'          => 'Nome do arquivo',
'filedesc'          => 'Sumário',
'uploadedfiles'     => 'Arquivos carregados',
'badfilename'       => 'O nome da imagem mudou para "$1".',
'successfulupload'  => 'Carregamento efetuado com sucesso',
'uploadwarning'     => 'Aviso de Upload',
'savefile'          => 'Salvar arquivo',
'uploadedimage'     => '"[[$1]]" carregado',

# Image list
'imagelist'           => 'Lista de Imagens',
'imagelisttext'       => 'A seguir uma lista de $1 imagens organizadas $2.',
'getimagelist'        => 'buscando lista de imagens',
'ilsubmit'            => 'Procura',
'showlast'            => 'Mostrar as  $1 imagens organizadas $2.',
'byname'              => 'por nome',
'bydate'              => 'por data',
'bysize'              => 'por tamanho',
'filehist'            => 'Histórico do arquivo',
'filehist-help'       => 'Clique em uma data/horário para ver o arquivo tal como ele se encontrava em tal momento.',
'filehist-current'    => 'atual',
'filehist-datetime'   => 'Data/Horário',
'filehist-user'       => '{{ns:user}}',
'filehist-dimensions' => 'Dimensões',
'filehist-filesize'   => 'Tamanho do arquivo',
'filehist-comment'    => 'Comentário',
'imagelinks'          => 'Links',
'linkstoimage'        => 'As seguintes páginas apontam para este arquivo:',
'nolinkstoimage'      => 'Nenhuma página aponta para este arquivo.',
'sharedupload'        => 'Este arquivo encontra-se partilhado, podendo ser utilizado por outros projetos.',

# Random page
'randompage' => 'Página aleatória',

# Statistics
'statistics'    => 'Estatísticas',
'sitestats'     => 'Estatísticas do Site',
'userstats'     => 'Estatística dos usuários',
'sitestatstext' => 'Há atualmente um total de <b>$1</b> páginas em nosso banco de dados.
Isto inclui páginas  "talk", páginas sobre a {{SITENAME}}, páginas de rascunho, redirecionamentos, e outras que provavelmente não são qualificadas como artigos.
Excluindo estas, há <b>$2</b> páginas que provavelmente são artigos legitimos .<p>
Há um total de <b>$3</b> páginas vistas, e <b>$4</b> edições de página
desde a última atualização do software (Janeiro de 2004).
O que nos leva a aproximadamente <b>$5</b> edições por página, e <b>$6</b> vistas por edição.',
'userstatstext' => 'Há atualmente <b>$1</b> usuários registrados.
Destes, <b>$2</b> são administradores (veja $3).',

'disambiguations'     => 'Páginas de desambiguamento',
'disambiguationspage' => '{{ns:project}}:Links_para_desambiguar_páginas',

'doubleredirects'     => 'Double Redirects',
'doubleredirectstext' => '<b>Atenção:</b> Esta lista pode conter positivos falsos. O que usualmente significa que há texto adicional com links depois do primeiro #REDIRECT.<br />
Cada linha contem links para o primeiro e segundo redirecionamento, bem como a primeira linha do segundo texto redirecionado , geralmente dando o artigo alvo "real" , para onde o primeiro redirecionamento deveria apontar.',

'brokenredirects'     => 'Redirecionamentos Quebrados',
'brokenredirectstext' => 'Os seguintes redirecionamentos apontam para um artigo inexistente.',

# Miscellaneous special pages
'nbytes'           => '$1 {{PLURAL:$1|byte|bytes}}',
'nlinks'           => '$1 links',
'nmembers'         => '$1 {{PLURAL:$1|membro|membros}}',
'nviews'           => '$1 visitas',
'lonelypages'      => 'Páginas órfãns',
'unusedimages'     => 'Imagens não utilizadas',
'popularpages'     => 'Páginas populares',
'wantedpages'      => 'Páginas procuradas',
'allpages'         => 'Todas as páginas',
'shortpages'       => 'Páginas Curtas',
'longpages'        => 'Paginas Longas',
'listusers'        => 'Lista de Usuários',
'specialpages'     => 'Páginas especiais',
'spheading'        => 'Páginas especiais para todos os usuários',
'newpages'         => 'Páginas novas',
'ancientpages'     => 'Artigos mais antigos',
'intl'             => 'Links interlínguas',
'move'             => 'Mover',
'movethispage'     => 'Mover esta página',
'unusedimagestext' => '<p>Por favor note que outros websites como
as Wikipédias internacionais podem apontar para uma imagem com uma URL direta, e por isto pode estar aparecendo aqui mesmo estando em uso ativo.',
'notargettitle'    => 'Sem alvo',
'notargettext'     => 'Você não especificou um alvo ou usuário para performar esta função.',

# Book sources
'booksources' => 'Fontes de livros',

'alphaindexline' => '$1 até $2',

# Special:Log
'log' => 'Registros',

# Special:Allpages
'nextpage'       => 'Próxima página ($1)',
'prevpage'       => 'Página anterior ($1)',
'allpagesfrom'   => 'Mostrar páginas a partir de:',
'allarticles'    => 'Todas as páginas',
'allpagessubmit' => 'Ir',

# E-mail user
'mailnologin'     => 'Sem endereço ed envio',
'mailnologintext' => 'Você deve estar [[Special:Userlogin|autenticado]]
e ter um e-mail válido em suas [[Special:Preferences|preferências]]
para poder enviar e-mails para outros usuários.',
'emailuser'       => 'Contactar usuário',
'emailpage'       => 'Enviar e-mail ao usuário',
'emailpagetext'   => 'Se este usuário disponibilizou um endereço válido de e-mail em suas preferências, o formulário a seguir enviará uma mensagem única.
O endereço de e-mail que você disponibilizou em suas preferências aparecerá como remetente da mensagem, então, o usuário poderá responder a você diretamente.',
'noemailtitle'    => 'Sem endereço de e-mail',
'noemailtext'     => 'Este usuário não especificou um endereço de e-mail válido, ou optou por não receber mensagens de outros usuários.',
'emailfrom'       => 'De',
'emailto'         => 'Para',
'emailsubject'    => 'Assunto',
'emailmessage'    => 'Mensagem',
'emailsend'       => 'Enviar',
'emailsent'       => 'E-mail enviado',
'emailsenttext'   => 'Sua mensagem foi enviada.',

# Watchlist
'watchlist'          => 'Páginas vigiadas',
'mywatchlist'        => 'Páginas vigiadas',
'watchlistfor'       => "(para '''$1''')",
'nowatchlist'        => 'Você não está monitorando nenhum artigo.',
'watchnologin'       => 'Não está autenticado',
'watchnologintext'   => 'Você deve estar [[Special:Userlogin|autenticado]]
para modificar a lista de artigos do seu interesse.',
'addedwatchtext'     => 'A página "$1" foi adicionada à [[Special:Watchlist|lista de artigos do seu interesse]].
Modificações futuras neste artigo e páginas de discussão associadas serão listadas aqui,
e a página aparecerá <b>em negrito</b> na [[Special:Recentchanges|lista de mudanças recentes]] para que
possa achá-la com maior facilidade.

Se você quiser remover futuramente o artigo da sua lista de artigos vigiados, clique em  "Desinteressar-se" na barra lateral.',
'removedwatch'       => 'Removida da lista de monitoramento',
'removedwatchtext'   => 'A página "$1" não é mais de seu interesse e portanto foi removida de sua lista de monitoramento.',
'watch'              => 'Vigiar',
'watchthispage'      => 'Interessar-se por esta página',
'unwatch'            => 'Deixar de vigiar',
'unwatchthispage'    => 'Desinteressar-se',
'notanarticle'       => 'Não é um artigo',
'watchnochange'      => 'Nenhum dos itens monitorados foram editados no período exibido.',
'watchlist-details'  => '$1 páginas monitoradas excluindo-se as páginas de discussão.',
'watchmethod-recent' => 'checando edições recentes para os artigos monitorados',
'watchmethod-list'   => 'checando páginas monitoradas de edições recentes',
'watchlistcontains'  => 'Sua lista contém $1 páginas.',
'iteminvalidname'    => "Problema com item '$1', nome inválido...",
'wlnote'             => 'Segue as últimas $1 mudanças nas últimas <b>$2</b> horas.',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Vigiando...',
'unwatching' => 'Deixando de vigiar...',

# Delete/protect/revert
'deletepage'        => 'Deletar página',
'confirm'           => 'Confirmar',
'excontent'         => "conteúdo era: '$1'",
'exbeforeblank'     => "conteúdo antes de apagar era: '$1'",
'exblank'           => 'página estava vazia',
'historywarning'    => 'Atenção: A página que você quer deletar tem um histórico:',
'confirmdeletetext' => 'Você está  prestes a deletar permanentemente uma página ou imagem junto com todo seu histórico do banco de dados.
Por favor, confirme que você realmente pretende fazer isto, que você compreende as consequências, e que você está fazendo isto em acordo com a [[{{MediaWiki:Policy-url}}|Política da {{SITENAME}}]].',
'actioncomplete'    => 'Ação efetuada com sucesso',
'deletedtext'       => '"$1" foi deletada.
Veja $2 para um registro de deleções recentes.',
'deletedarticle'    => 'eliminou "$1"',
'dellogpage'        => 'Registro de eliminação',
'dellogpagetext'    => 'Segue uma lista das deleções mais recentes.
Todos os horários mostrados estão no horário do servidor (UTC).',
'deletionlog'       => 'registro de deleções',
'reverted'          => 'Revertido para versão mais nova',
'deletecomment'     => 'Motivo da deleção',
'rollback'          => 'Voltar edições',
'rollbacklink'      => 'voltar',
'rollbackfailed'    => 'A reversão falhou',
'cantrollback'      => 'Não foi possível reverter a edição; o último contribuidor é o único autor deste artigo.',
'alreadyrolled'     => 'Não foi possível reverter as edições de  [[:$1]]
por [[User:$2|$2]] ([[User talk:$2|discussão]]); alguém o editou ou já o reverteu.

A última edição foi de  [[User:$3|$3]] ([[User talk:$3|Conversar com ele]]).',
'editcomment'       => 'O comentário de edição era: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'        => 'Revertido para a última edição por  $1', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from

# Undelete
'undelete'          => 'Restaurar páginas deletadas',
'undeletepage'      => 'Ver e restaurar páginas deletadas',
'undeletepagetext'  => 'As páginas seguintes foram apagadas mas ainda permanecem no bando de dados e podem ser restauradas. O arquivo pode ser limpo periodicamente.',
'undeleterevisions' => '$1 revisões arquivadas',
'undeletehistory'   => 'Se você restaurar uma página, todas as revisões serão restauradas para o histórico.
Se uma nova página foi criada com o mesmo nome desde a deleção, as revisões restauradas aparecerão primeiro no histórico e a página existente não será automaticamente recolocada.',
'undeletebtn'       => 'Restaurar',
'undeletedarticle'  => ' "$1" restaurado',

# Namespace form on various pages
'namespace'      => 'Espaço nominal:',
'invert'         => 'Inverter seleção',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contribuições de usuários',
'mycontris'     => 'Minhas contribuições',
'contribsub2'   => 'Para $1 ($2)',
'nocontribs'    => 'Não foram encontradas mudanças com este critério.',
'ucnote'        => 'Segue as últimas  <b>$1</b> mudanças nos últimos <b>$2</b> dias do usuário.',
'uclinks'       => 'Ver as últimas $1 mudanças; ver os últimos $2 dias.',
'uctop'         => ' (edição atual)',
'month'         => 'Mês (inclusive anteriores):',
'year'          => 'Ano (inclusive anteriores):',

'sp-contributions-blocklog' => 'Registro de bloqueios',

# What links here
'whatlinkshere'       => 'Páginas afluentes',
'whatlinkshere-title' => 'Páginas que apontam para $1',
'linklistsub'         => '(Lista de links)',
'linkshere'           => "As seguintes páginas possuem links que apontam para '''[[:$1]]''':",
'nolinkshere'         => "Não existem links para '''[[:$1]]'''.",
'isredirect'          => 'página de redirecionamento',
'istemplate'          => 'inclusão',
'whatlinkshere-prev'  => '{{PLURAL:$1|anterior|$1 anteriores}}',
'whatlinkshere-next'  => '{{PLURAL:$1|próximo|próximos $1}}',
'whatlinkshere-links' => '← links',

# Block/unblock
'blockip'            => 'Bloquear endereço de IP',
'ipaddress'          => 'Endereço de IP',
'ipbreason'          => 'Motivo',
'ipbsubmit'          => 'Bloquear este endereço',
'ipboptions'         => '2 horas:2 hours,1 dia:1 day,3 dias:3 days,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,indefinido:infinite', # display1:time1,display2:time2,...
'badipaddress'       => 'O endereço de IP está mal-formado.',
'blockipsuccesssub'  => 'Bloqueio bem sucedido',
'blockipsuccesstext' => 'O endereço de IP "$1" Foi bloqueado.
<br />Veja [[Special:Ipblocklist|Lista de IP\'s bloqueados]] para rever os bloqueios.',
'unblockip'          => 'Desbloquear endereço de IP',
'unblockiptext'      => 'Utilize o formulário a seguir para restaurar o acesso a escrita para um endereço de IP previamente bloqueado.',
'ipusubmit'          => 'Desbloquear este endereço',
'ipblocklist'        => "Lista de IP's bloqueados",
'blocklistline'      => '$1, $2 bloqueado $3 ($4)',
'blocklink'          => 'bloquear',
'unblocklink'        => 'desbloquear',
'contribslink'       => 'contribs',
'blocklogpage'       => 'Registro de bloqueios',
'blocklogentry'      => '"[[$1]]" foi bloqueado pelo período de $2 $3',

# Developer tools
'lockdb'              => 'Trancar Banco de Dados',
'unlockdb'            => 'Destrancar Banco de Dados',
'lockdbtext'          => 'Trancar o banco de dados suspenderá a habilidade de todos os usuários de editarem páginas, mudarem suas preferências, listas de monitoramento e outras coisas que requerem mudanças no banco de dados.
Por favor confirme que você realmente pretende fazer isto, e que você vai desbloquear o banco de dados quando sua manutenção estiver completa.',
'unlockdbtext'        => 'Desbloquear o banco de dados vai restaurar a habilidade de todos os usuários de editar artigos, mudar suas preferências, editar suas listas de monitoramento e outras coisas que requerem mudanças no banco de dados. Por favor, confirme que você realmente pretende fazer isto.',
'lockconfirm'         => 'SIM, eu realmente pretendo trancar o banco de dados.',
'unlockconfirm'       => 'SIM, eu realmente pretendo destrancar o banco de dados.',
'lockbtn'             => 'Trancar banco',
'unlockbtn'           => 'Destrancar banco',
'locknoconfirm'       => 'Você não checou a caixa de confirmação.',
'lockdbsuccesssub'    => 'Tranca bem sucedida',
'unlockdbsuccesssub'  => 'Destranca bem sucedida',
'lockdbsuccesstext'   => 'O banco de dados da {{SITENAME}} foi trancado.
<br />Lembre-se de remover a tranca após a manutenção.',
'unlockdbsuccesstext' => 'O bando de dados da {{SITENAME}} foi destrancado.',

# Move page
'movepage'         => 'Mover página',
'movepagetext'     => "Usando o formulário a seguir você poderá renomear uma página, movendo todo o histórico para o novo nome.
O título antigo será transformado num redirecionamento para o novo título.
Links para as páginas antigas não serão mudados; certifique-se de checar redirecionamentos  quebrados ou artigos duplos.
Você é responsável por certificar-se que os links continuam apontando para onde eles deveriam apontar.

Note que a página '''não''' será movida se já existe uma página com o novo título, a não ser que ele esteja vazio ou seja um redirecionamento e não tenha histórico de edições. Isto significa que você pode renomear uma págna de volta para o nome que era antigamente se você cometer algum enganoe você não pode sobrescrever uma página.

<b>!!!CUIDADO!!!</b>
Isto pode ser uma mudança drástica e inexperada para uma página popular;
por favor tenha certeza de que compreende as consequencias disto antes de proceder.",
'movepagetalktext' => "A página associada, se existir, será automaticamente movida,  '''a não ser que:'''
*Você esteja movendo uma página estre namespaces,
*Uma página talk (não-vazia) já exista sob o novo nome, ou
*Você não marque a caixa abaixo.

Nestes casos, você terá que mover ou mesclar a página manualmente se desejar .",
'movearticle'      => 'Mover página',
'movenologin'      => 'Não Autenticado',
'movenologintext'  => 'Você deve ser um usuário registrado e [[Special:Userlogin|autenticado]]
para mover uma página.',
'newtitle'         => 'Pata novo título',
'movepagebtn'      => 'Mover página',
'pagemovedsub'     => 'Moção bem sucedida',
'articleexists'    => 'Uma página com este nome já existe, ou o nome que você escolheu é inválido.
Por favor, escolha outro nome.',
'talkexists'       => 'A página em si foi movida com sucesso, porém a página de discussão não pode ser movida por que já existe uma com este nome. Por favor, mescle-as manualmente.',
'movedto'          => 'movido para',
'movetalk'         => 'Mover página  de discussão também, se aplicável.',
'talkpagemoved'    => 'A página de discussão correspondente foi movida com sucesso.',
'talkpagenotmoved' => 'A página de discussão correspondente  <strong>não</strong> foi movida.',
'movelogpage'      => 'Registro de movimentações',
'revertmove'       => 'reverter',

# Export
'export' => 'Exportar páginas',

# Thumbnails
'thumbnail-more'  => 'Ampliar',
'thumbnail_error' => 'Erro ao criar miniatura: $1',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Minha página de usuário',
'tooltip-pt-mytalk'               => 'Minha página de discussão',
'tooltip-pt-preferences'          => 'Minhas preferências',
'tooltip-pt-watchlist'            => 'Lista de páginas vigiadas.',
'tooltip-pt-mycontris'            => 'Lista das minhas contribuições',
'tooltip-pt-login'                => 'Você é encorajado a autenticar-se, apesar disso não ser obrigatório.',
'tooltip-pt-logout'               => 'Sair',
'tooltip-ca-talk'                 => 'Discussão sobre o conteúdo da página',
'tooltip-ca-edit'                 => 'Você pode editar esta página. Por favor, utilize o botão Mostrar Previsão antes de salvar.',
'tooltip-ca-addsection'           => 'Adicionar um comentário a essa discussão.',
'tooltip-ca-viewsource'           => 'Esta página está protegida; você pode, no entanto, exibir seu código.',
'tooltip-ca-protect'              => 'Proteger esta página',
'tooltip-ca-delete'               => 'Apagar esta página',
'tooltip-ca-move'                 => 'Mover esta página',
'tooltip-ca-watch'                => 'Adicionar esta página às páginas vigiadas',
'tooltip-ca-unwatch'              => 'Remover esta página de suas páginas vigiadas',
'tooltip-search'                  => 'Pesquisar nesta wiki',
'tooltip-n-mainpage'              => 'Visitar a página principal',
'tooltip-n-portal'                => 'Sobre o projeto',
'tooltip-n-recentchanges'         => 'A lista de mudanças recentes nesta wiki.',
'tooltip-n-randompage'            => 'Acessa uma página aleatória',
'tooltip-n-help'                  => 'Um local para procurar por ajuda.',
'tooltip-n-sitesupport'           => 'Ajude-nos',
'tooltip-t-whatlinkshere'         => 'Lista de todas as páginas que se ligam à esta',
'tooltip-t-contributions'         => 'Ver as contribuições deste usuário',
'tooltip-t-emailuser'             => 'Enviar um e-mail a este usuário',
'tooltip-t-upload'                => 'Carregar imagens ou arquivos multimídia',
'tooltip-t-specialpages'          => 'Lista de páginas especiais',
'tooltip-ca-nstab-user'           => 'Ver a página deste usuário',
'tooltip-ca-nstab-project'        => 'Ver a página de projeto',
'tooltip-ca-nstab-image'          => 'Ver a página de imagem',
'tooltip-ca-nstab-template'       => 'Ver a predefinição',
'tooltip-ca-nstab-category'       => 'Ver a página de categoria',
'tooltip-minoredit'               => 'Marcar como uma edição menor',
'tooltip-save'                    => 'Salvar as alterações',
'tooltip-preview'                 => 'Prever as suas alterações. Por gentileza, use antes de salvar!',
'tooltip-diff'                    => 'Mostrar as alterações feitas por você a este texto.',
'tooltip-compareselectedversions' => 'Ver as diferenças entre as versões selecionadas desta página.',
'tooltip-watch'                   => 'Adicionar esta página à sua lista de páginas vigiadas',

# Spam protection
'subcategorycount'       => '{{PLURAL:$1|Existe uma subcategoria|Existem $1 subcategorias}} nesta categoria.',
'categoryarticlecount'   => '{{PLURAL:$1|Existe uma página|Existem $1 páginas}} nesta categoria.',
'listingcontinuesabbrev' => 'cont.',

# Math options
'mw_math_png'    => 'Sempre renderizar PNG',
'mw_math_simple' => 'HTML se for bem simples e PNG',
'mw_math_html'   => 'HTML se possível ou então PNG',
'mw_math_source' => 'Deixar como TeX (para navegadores em modo texto)',
'mw_math_modern' => 'Recomendado para navegadores modernos',
'mw_math_mathml' => 'MathML',

# Browsing diffs
'previousdiff' => '← Ver a alteração anterior',
'nextdiff'     => 'Ver a alteração posterior →',

# Media information
'file-info-size'       => '($1 × $2 pixels, tamanho: $3, tipo MIME: $4)',
'file-nohires'         => '<small>Sem resolução maior disponível.</small>',
'svg-long-desc'        => '(arquivo SVG de $1 × $2 pixels; tamanho: $3)',
'show-big-image'       => 'Resolução completa',
'show-big-image-thumb' => '<small>Tamanho desta previsão: $1 × $2 pixels</small>',

# Metadata
'metadata'          => 'Metadados',
'metadata-help'     => 'Este arquivo possui informações adicionais que provavelmente foram adicionadas a partir da câmara digital ou scanner utilizada para criar ou digitalizar a imagem. Caso o arquivo tenha sido modificado a partir do seu estado original, alguns detalhes poderão não refletir completamente as mudanças efetuadas.',
'metadata-expand'   => 'Mostrar detalhes restantes',
'metadata-collapse' => 'Esconder detalhes adicionais',
'metadata-fields'   => 'Os campos de metadados EXIF listados nesta mensagem poderão estar presente na exibição da página de imagem quando a tabela de metadados estiver no modo "expandida". Outros poderão estar escondidos por padrão.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# External editor support
'edit-externally'      => 'Editar este arquivo utilizando um programa externo',
'edit-externally-help' => 'Consulte as [http://meta.wikimedia.org/wiki/Help:External_editors instruções de instalação] para maiores informações.',

# 'all' in various places, this might be different for inflected languages
'namespacesall' => 'todas',
'monthsall'     => 'todos',

# Watchlist editing tools
'watchlisttools-view' => 'Ver alterações relevantes',
'watchlisttools-edit' => 'Ver e editar a lista de vigiadas',
'watchlisttools-raw'  => 'Edição crua das vigiadas',

);
