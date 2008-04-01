<?php
/** Silesian (ślůnski)
 *
 * @addtogroup Language
 *
 * @author Lajsikonik
 * @author Herr Kriss
 * @author Pimke
 * @author Siebrand
 */

$fallback = 'pl';

$messages = array(
# User preference toggles
'tog-underline'               => 'Podkreślynie linkůw:',
'tog-highlightbroken'         => 'Uoznocz <a href="" class="new">tak</a> linki do zajtůw kere brakůjům (abo tyž: doůončany pytajnik<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Wyrůwnůj tekst w akapitach do uobu strůn',
'tog-hideminor'               => 'Schowej drobne pomjyńańo w "Pomjyńanych na uostatku"',
'tog-extendwatchlist'         => 'Rozšežůno lista artikli, na kere dowoš pozůr',
'tog-usenewrc'                => 'Rozšyžynie pomiyńanych na uostatku (JavaScript)',
'tog-numberheadings'          => 'Automatyčno numeracjo naguůwkůw',
'tog-showtoolbar'             => 'Pokož pasek werkcojgůw (JavaScript)',
'tog-editondblclick'          => 'Přyńdź do sprowjańo po podwůjnym klikńyńću (JavaScript)',
'tog-editsection'             => 'Možliwość sprowjańo poščegůlnych tajlůw zajty',
'tog-editsectiononrightclick' => 'Klikńyńće prawym přyćiskiym myšy na titlu tajla<br />začyno jego sprowjańe(JavaScript)',
'tog-showtoc'                 => 'Pokož spis treści (na zajtach kere majům wjencyi jak trziy naguůwki)',
'tog-rememberpassword'        => 'Pamjyntej moje hasuo na tym komputře',
'tog-editwidth'               => 'Uobšar sprowjańo uo poůnyi šyrokośći',
'tog-watchcreations'          => 'Doćepuj zajty kere žech naškréfloů do zajtůw, na kere dowom pozůr',
'tog-watchdefault'            => 'Doćepuj zajty, kere žech sprowjoů, do zajtůw na kere dowom pozůr',
'tog-watchmoves'              => 'Doćepuj zajty, kere žech přećepywoů, do zajtůw, na kere dowom pozůr',
'tog-watchdeletion'           => 'Doćepuj zajty, kere žech wyćep, do zajtůw, na kere dowom pozůr',
'tog-minordefault'            => 'Uoznačej wšyskie moje sprowjyńo domyślńy jako drobne',
'tog-previewontop'            => 'Pokazůj podglůnd před uobšarym sprowjańo',
'tog-previewonfirst'          => 'Pokož podglůnd zajty přy pjyršym sprowjańu',
'tog-nocache'                 => 'Wyuůnč pamjyńć podrynčno',
'tog-enotifwatchlistpages'    => 'Wyślij e-brifa jak jako zajta z tych na kere dowom pozůr bydzie zmjyńono',
'tog-enotifusertalkpages'     => 'Wyślij e-brifa jak zajta mojiy godki bydzie zmjyńono',
'tog-enotifminoredits'        => 'Wyślij e-brifa tyž w takiym razie, jak by chodziyuo o drobne pomjyńańa',
'tog-enotifrevealaddr'        => 'Ńy chowej adresa mojygo e-brifa w powjadomjyńach',
'tog-shownumberswatching'     => 'Pokož wjela užytkownikůw dowo pozůr',
'tog-fancysig'                => 'Šrajbowańe bez automatyčnego linka',
'tog-externaleditor'          => 'Domyślńe užywej zewnytřny edytor',
'tog-externaldiff'            => 'Domyślńe užywej zewnyntřny program do filowańo w pomjyńańa',
'tog-showjumplinks'           => 'Zauůnč cajchnůndzki "přéńdź do"',
'tog-uselivepreview'          => 'Užywej dynamičnego podglůndu (JavaScript) (experymentalny)',
'tog-forceeditsummary'        => 'Dej znać jakbych nic ńy naškréflou w opiśe pomjyńań',
'tog-watchlisthideown'        => 'Schowej moje pomjyńańa w artiklach na kere dowom pozůr',
'tog-watchlisthidebots'       => 'Schowej pomjyńańa sprowjone bez boty w artiklach na kere dowom pozůr',
'tog-watchlisthideminor'      => 'Schowej drobne pomjyńańa w artiklach na kere dowom pozůr',
'tog-ccmeonemails'            => 'Přesyuej mi kopie e-brifůw co žech je posuoů inkšym užytkownikom',
'tog-diffonly'                => 'Ńy pokozůj treśći zajtůw půnižy porůwnańo pomjyńań',
'tog-showhiddencats'          => 'Pokož schowane kategoryje',

'underline-always'  => 'Zawdy',
'underline-never'   => 'Nigdy',
'underline-default' => 'Wedle štalowańo přeglůndarki',

'skinpreview' => '(podglůnd)',

# Dates
'sunday'        => 'Ńedźela',
'monday'        => 'Pyńdźołek',
'tuesday'       => 'Wtorek',
'wednesday'     => 'Střoda',
'thursday'      => 'Štwortek',
'friday'        => 'Pjůntek',
'saturday'      => 'Sobota',
'sun'           => 'Ńed',
'mon'           => 'Pyń',
'tue'           => 'Wto',
'wed'           => 'Stř',
'thu'           => 'Štw',
'fri'           => 'Pjů',
'sat'           => 'Sob',
'january'       => 'styčyń',
'february'      => 'luty',
'march'         => 'mařec',
'april'         => 'kwjećyń',
'may_long'      => 'moj',
'june'          => 'čyrwjec',
'july'          => 'lipjec',
'august'        => 'śyrpjyń',
'september'     => 'wřeśyń',
'october'       => 'paźdźerńik',
'november'      => 'listopad',
'december'      => 'grudźyń',
'january-gen'   => 'styčńa',
'february-gen'  => 'lutygo',
'march-gen'     => 'marca',
'april-gen'     => 'kwjetńa',
'may-gen'       => 'maja',
'june-gen'      => 'čyrwca',
'july-gen'      => 'lipca',
'august-gen'    => 'śyrpńa',
'september-gen' => 'wřeśńa',
'october-gen'   => 'paźdźerńika',
'november-gen'  => 'listopada',
'december-gen'  => 'grudńa',
'jan'           => 'sty',
'feb'           => 'lut',
'mar'           => 'mař',
'apr'           => 'kwj',
'may'           => 'moj',
'jun'           => 'čyr',
'jul'           => 'lip',
'aug'           => 'śyr',
'sep'           => 'wře',
'oct'           => 'paź',
'nov'           => 'lis',
'dec'           => 'gru',

# Categories related messages
'categories'                     => 'Kategoryje',
'categoriespagetext'             => 'Ponižy wymjeńone kategoryje sům na wiki.',
'special-categories-sort-count'  => 'sortowanie wedle ličby',
'special-categories-sort-abc'    => 'sortowanie wedle alfabyta',
'pagecategories'                 => '{{PLURAL:$1|Kategoryja|Kategoryje|Kategorjůw}}',
'category_header'                => 'Zajty w kategorie "$1"',
'subcategories'                  => 'Podkategoryje',
'category-media-header'          => 'Pliki w kategoryji "$1"',
'category-empty'                 => "''W tyi katygorii ńy ma terozki artikli ańi plikůw''",
'hidden-categories'              => '{{PLURAL:$1|Schowano kategoryja|Schowane kategoryje|Schowanych kategorjůw}}',
'hidden-category-category'       => 'Schowane kategoryje', # Name of the category where hidden categories will be listed
'category-subcat-count'          => '{{PLURAL:$2|Ta kategoryja mo ino jedna podkategorja.|Ta kategoryja mo {{PLURAL:$1|nastympůjąco podkategorja|$1 podkategorje|$1 podkategorjůw}} s ličby kategorjów ogůuem: $2.}}',
'category-subcat-count-limited'  => 'Ta kategoryja mo {{PLURAL:$1|nastympůjąco podkategorja|$1 podkategorje|$1 podkategorjůw}}.',
'category-article-count'         => '{{PLURAL:$2|W kategoryji jest jedno zajta.|W kategoryji {{PLURAL:$1|zostoua pokazana $1 zajta|zostouy pokazane $1 zajty|zostouo pokazanych $1 zajtůw}} z uončny ličby $2 zajtůw.}}',
'category-article-count-limited' => 'W kategoryji {{PLURAL:$1|zostoua pokozano $1 zajta|zostouy pokozane $1 zajty|zostauo pokozanych $1 zajtůw}}.',
'category-file-count'            => '{{PLURAL:$2|W kategoryji znajdowo sie jedyn plik.|W kategoryji {{PLURAL:$1|zostou pokozany $1 plik|zostouy pokozane $1 pliki|zostouo pokozanych $1 plikůw}} z uončny ličby $2 plikůw.}}',
'category-file-count-limited'    => 'W kategoryji {{PLURAL:$1|zostou pokozany $1 plik|zostouy pokozane $1 pliki|zostouo pokazanych $1 plikůw}}.',
'listingcontinuesabbrev'         => 'c.d.',

'mainpagetext'      => "<big>'''Inštalacjo MediaWiki powiodua sie.'''</big>",
'mainpagedocfooter' => 'Uobejřij [http://meta.wikimedia.org/wiki/Help:Contents přewodńik užytkownika], kaj sům informacje uo dziauańu uoprogramowanio MediaWiki.

== Na štart ==
* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lista štalowań konfiguracyji]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki FAQ]
* [http://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Komůnikaty uo nowych wersjach MediaWiki]',

'about'          => 'Uo serwiśe',
'article'        => 'zajta',
'newwindow'      => '(odmyko śe w nowym uokńy)',
'cancel'         => 'Odćepnij',
'qbfind'         => 'Šnupej',
'qbbrowse'       => 'Přeglůndańe',
'qbedit'         => 'Sprowjéj',
'qbpageoptions'  => 'Ta zajta',
'qbpageinfo'     => 'Kontekst',
'qbmyoptions'    => 'Moje zajty',
'qbspecialpages' => 'Extra zajty',
'moredotdotdot'  => 'Wincyj...',
'mypage'         => 'Mojo zajta',
'mytalk'         => 'Mojo godka',
'anontalk'       => 'Godka tego IP',
'navigation'     => 'Nawigacjo',
'and'            => 'i',

# Metadata in edit box
'metadata_help' => 'Metadane:',

'errorpagetitle'    => 'Feler',
'returnto'          => 'Nazod do zajty $1.',
'tagline'           => 'S {{GRAMMAR:D.lp|{{SITENAME}}}}',
'help'              => 'Pomoc',
'search'            => 'Šnupej',
'searchbutton'      => 'Šnupej',
'go'                => 'Přéńdź',
'searcharticle'     => 'Přéńdź',
'history'           => 'Historia zajty',
'history_short'     => 'Historjo',
'updatedmarker'     => 'pomjeńane uod uostatniy wizyty',
'info_short'        => 'Informacjo',
'printableversion'  => 'Wersyjo do druku',
'permalink'         => 'Bezpośredńi link',
'print'             => 'Drukuj',
'edit'              => 'sprowjéj',
'create'            => 'Utwůř',
'editthispage'      => 'Sprowiej ta zajta',
'create-this-page'  => 'Utwůř ta zajta',
'delete'            => 'Wyćep',
'deletethispage'    => 'Wyćep ta zajta',
'undelete_short'    => 'Wćep nazod {{PLURAL:$1|jedna wersja|$1 wersje|$1 wersji}}',
'protect'           => 'Zawřij',
'protect_change'    => 'zmień',
'protectthispage'   => 'Zawryj ta zajta',
'unprotect'         => 'Uodymknij',
'unprotectthispage' => 'Uodymknij ta zajta',
'newpage'           => 'Nowy artikel',
'talkpage'          => 'Godej o tym artiklu',
'talkpagelinktext'  => 'Godka',
'specialpage'       => 'Extra zajta',
'personaltools'     => 'Osobiste',
'postcomment'       => 'Skomyntuj',
'articlepage'       => 'Zajta artikla',
'talk'              => 'Godka',
'views'             => 'Widok',
'toolbox'           => 'Werkcojg',
'userpage'          => 'Zajta užytkownika',
'projectpage'       => 'Zajta projekta',
'imagepage'         => 'Zajta grafiki',
'mediawikipage'     => 'Zajta komunikata',
'templatepage'      => 'Zajta šablůna',
'viewhelppage'      => 'Zajta pomocy',
'categorypage'      => 'Zajta kategoryji',
'viewtalkpage'      => 'Zajta godki',
'otherlanguages'    => 'W inkšych godkach',
'redirectedfrom'    => '(Překerowano s $1)',
'redirectpagesub'   => 'Zajta překerowujůnca',
'lastmodifiedat'    => 'Ta zajta uostatnio sprowjano $2, $1.', # $1 date, $2 time
'viewcount'         => 'W ta zajta filowano {{PLURAL:$1|tylko roz|$1 rozůw}}.',
'protectedpage'     => 'Zajta zawarto',
'jumpto'            => 'Přéńdź do:',
'jumptonavigation'  => 'nawigacyji',
'jumptosearch'      => 'šnupańe',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Uo {{GRAMMAR:MS.lp|{{SITENAME}}}}',
'aboutpage'         => 'Project:Uo serwiśe',
'bugreports'        => 'Raport o felerach',
'bugreportspage'    => 'Project:Felery',
'copyright'         => 'Tekst udostympniany na licencje $1.',
'copyrightpagename' => 'prawami autorskimi {{GRAMMAR:D.lp|{{SITENAME}}}}',
'copyrightpage'     => '{{ns:project}}:Prawa autorskie',
'currentevents'     => 'Bježůnce wydařyńa',
'currentevents-url' => 'Project:Bježůnce wydařyńa',
'disclaimers'       => 'Informacyje prawne',
'disclaimerpage'    => 'Project:Informacyje prawne',
'edithelp'          => 'Pomoc we pomjyńańu',
'edithelppage'      => 'Help:Jak pomjyńać zajta',
'faq'               => 'FAQ',
'faqpage'           => 'Project:FAQ',
'helppage'          => 'Help:Pomoc',
'mainpage'          => 'Přodńo zajta',
'policy-url'        => 'Project:Zasady',
'portal'            => 'Portal užytkowńikůw',
'portal-url'        => 'Project:Portal užytkowńikůw',
'privacy'           => 'Zasady chrońyńo prywatności',
'privacypage'       => 'Project:Zasady chrońyńo prywatnośći',
'sitesupport'       => 'Śćepa',
'sitesupport-url'   => 'Project:Śćepa',

'badaccess'        => 'Felerne uprawńyńo',
'badaccess-group0' => 'Ńy moš uprawńyń coby wykůnać ta uoperacjo.',
'badaccess-group1' => 'Ta uoperacjo mogům wykůnać ino užytkownicy z grupy $1',
'badaccess-group2' => 'Ta uoperacjo mogům wykůnać ino užytkownicy s keryjś z grup $1.',
'badaccess-groups' => 'Ta uoperacjo mogům wykůnać ino užytkownicy s keryjś z grup $1.',

'versionrequired'     => 'Wymagano MediaWiki we wersji $1',
'versionrequiredtext' => 'Wymagano jest MediaWiki we wersji $1 coby skořystać z ty zajty. Uoboč [[Special:Version]]',

'ok'                      => 'OK',
'retrievedfrom'           => 'Zdřůduo "$1"',
'youhavenewmessages'      => 'Mosz $1 ($2).',
'newmessageslink'         => 'nowe wjadůmośći',
'newmessagesdifflink'     => 'ostatnio dyferéncyjo',
'youhavenewmessagesmulti' => 'Moš nowe wjadomości: $1',
'editsection'             => 'sprowjéj',
'editold'                 => 'sprowjéj',
'editsectionhint'         => 'Sprowjéj tajla: $1',
'toc'                     => 'Spis treśći',
'showtoc'                 => 'pokož',
'hidetoc'                 => 'schrůń',
'thisisdeleted'           => 'Pokož/wćepej nazod $1',
'viewdeleted'             => 'Uobejžij $1',
'restorelink'             => '{{PLURAL:$1|jedna wyćepano wersja|$1 wyćepane wersje|$1 wyćepanych wersjůw}}',
'feedlinks'               => 'Kanau:',
'feed-invalid'            => 'Ńywuaściwy typ kanauů informacyjnego.',
'feed-unavailable'        => 'Kanauy informacyjne ńy sům dostympne na {{GRAMMAR:MS.lp|{{SITENAME}}}}',
'site-rss-feed'           => 'Kanau RSS {{GRAMMAR:D.lp|$1}}',
'site-atom-feed'          => 'Kanau Atom {{GRAMMAR:D.lp|$1}}',
'page-rss-feed'           => 'Kanau RSS "$1"',
'page-atom-feed'          => 'Kanau Atom "$1"',
'red-link-title'          => '$1 (ješče ńy utwořono)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Zajta',
'nstab-user'      => 'Zajta užytkowńika',
'nstab-media'     => 'Media',
'nstab-special'   => 'Extra zajta',
'nstab-project'   => 'Zajta projektu',
'nstab-image'     => 'Plik',
'nstab-mediawiki' => 'Komunikat',
'nstab-template'  => 'Šablôna',
'nstab-help'      => 'Zajta pomocy',
'nstab-category'  => 'Katégoryjo',

# Main script and global functions
'nosuchaction'      => 'Ńy ma takiy uoperacje',
'nosuchactiontext'  => 'Uoprogramowańe ńy rozpoznowo uoperacje takiy jak podano w URL',
'nosuchspecialpage' => 'Ńy ma takiy extra zajty',
'nospecialpagetext' => 'Uoprogramowańe ńy rozpoznaje takiy extra zajty. Lista extra zajtůw znejdzieš na [[{{ns:special}}:Specialpages]]',

# General errors
'error'                => 'Feler',
'databaseerror'        => 'Feler bazy danych',
'dberrortext'          => 'Zdožyu sie feler we skuadńe zapytańa do bazy danych. Uostatńe, ńyudane zapytańe to:
<blockquote><tt>$1</tt></blockquote>
wysuane bez funkcja "<tt>$2</tt>".
MySQL zguosiů bůond "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Zdožyu sie feler we skuadńe zapytańo do bazy danych. Uostatńe, ńyudane zapytańe to:
"$1"
kere wywouoůa fukcjo "$2".
MySQL zguosiyů bůond "$3: $4"',
'noconnect'            => 'Přeprašomy! {{SITENAME}} mo chwilowo problemy technične. Ńy možna pouůnčyć sie ze serwerym bazy danych.<br />$1',
'nodb'                 => 'Ńy idźe znejść bazy danych $1',
'cachederror'          => 'To co sam nanaškréflane to ino kopia z pamjyńći podrynčnyi i može ńy być aktualne.',
'laggedslavemode'      => 'Dej pozůr: Ta zajta može ńy mjeć nojnowšych aktualizacjůw.',
'readonly'             => 'Baza danych jest zawarto',
'enterlockreason'      => 'Naškréflej sam powůd zawarća bazy danych i za wiela (mniy-wiyncyi) jom uodymkńeš',
'readonlytext'         => 'Baza danych jest terozki zawarto
- ńy možna wćepywać nowych artikli ani sprowjać juž wćepanych. Powodem
sům prawdopodobńe czynności administracyjne. Po jeich zakůńčeńu peuno funkcjonalność bazy bydźe přywrůcono.
Administrator, kery zablokowou baza, podou takie wyjaśńyńe:<br /> $1',
'missingarticle'       => 'Uoprogramowanie ńy znoduo tekstu zajty "$1", kero powinna sie znajdować w bazie.

Zwykle sie to trefio, jak zostańe wybrany link do wyćepanej zajty,
np. do staršej wersji inkšyi z zajtów.

Jak to ńy je powůd, to možeś znod feler w uoprogramowańu. W takiym raźe zguoś, proša, tyn fakt
administratorowi, końečńe podej w zguošyńu adres URL tyi zajty.',
'readonly_lag'         => 'Baza danych zostoua automatyčnie zawarto na čas potřebny na synchronizacja zmian miyndzy serwerem guůwnym i serwerami pośredničůncymi.',
'internalerror'        => 'Wewnyntřny feler',
'internalerror_info'   => 'Wewnytřny feler: $1',
'filecopyerror'        => 'Ńy idźe skopiować plika "$1" do "$2".',
'filerenameerror'      => 'Ńy idźe zmjynić nazwy plika "$1" na "$2".',
'filedeleteerror'      => 'Ńy idźe wyćepać plika "$1".',
'directorycreateerror' => 'Ńy idźe utwořyć katalogu "$1".',
'filenotfound'         => 'Ńy idźe znejść plika "$1".',
'fileexistserror'      => 'Ńy idźe sprowjać we pliku "$1": plik istńeje',
'unexpected'           => 'Ńyspodźewano wartość: "$1"="$2".',
'formerror'            => 'Feler: ńy idźe wysuać formulařa',
'badarticleerror'      => 'Tyi uoperacyji ńy idźe zrobiyć dlo tyi zajty.',
'cannotdelete'         => 'Ńy idźe wyćepać podanyi zajty abo grafiki.',
'badtitle'             => 'Zuy titel',
'badtitletext'         => 'Podano felerny titel zajty. Prawdopodobńy sům w ńym znoki kerych ńy wolno užywać we titlach, abo je pusty.',
'perfdisabled'         => 'Přeprašomy! Coby uodciůnžyć serwer w godźinach ščytu czasowo zawarlimy wykůnanie tyi čynności.',
'perfcached'           => 'To co sam nanaškréflane to ino kopia z pamjyńći podrynčnyi i može ńy być aktualne.',
'perfcachedts'         => 'To co sam nanaškréflane to ino kopia z pamjyńći podrynčnyi i boůo uaktualniůne $1.',
'querypage-no-updates' => 'Uaktualńyńo dlo tyi zajty sům terozki zawarte. Dane kere sam sům nie zostouy uodświežůne.',
'wrong_wfQuery_params' => 'Felerne parametry překozane do wfQuery()<br />
Funkcjo: $1<br />
Zapytanie: $2',
'viewsource'           => 'Tekst źrůduowy',
'viewsourcefor'        => 'dlo $1',
'actionthrottled'      => 'Akcjo wstřiymano',
'actionthrottledtext'  => 'Mechanizm uobrůny před spamym uograničo liczba wykonań tyi čynnośći w jednostce času. Průbowoužeś go uocyganić. Proša sprůbuj na nowo za pora minut.',
'protectedpagetext'    => 'Ta zajta jest zawarto před sprowjańym.',
'viewsourcetext'       => 'We tekst źrůduowy tyi zajty možna dali filować, idźe go tyž kopjować.',
'protectedinterface'   => 'Na tyi zajcie znojdowo sie tekst interfejsa uoprogramowanio, bez tůž uona jest zawarto uod sprowjańo.',
'editinginterface'     => "'''Dej pozůr:''' Sprowjoš zajta na kery jest tekst interfejsa uoprogramowanio. Pomjyńyńa na tyi zajcie zmiyńom wyglůnd interfejsa dlo inkšych užytkownikůw.",
'sqlhidden'            => '(schowano zapytanie SQL)',
'cascadeprotected'     => 'Ta zajta jest zawarto od sprowjańo, po takiymů co uona je zauončono na {{PLURAL:$1|nastympujůncej zajcie, kero zostaua zawarto|nastympujůncych zajtach, kere zostauy zawarte}} z zauončonom opcjom dźedźiczynio:
$2',
'namespaceprotected'   => "Ńy moš uprowńyń coby sprowjać zajty w přestřeńi mjan '''$1'''.",
'customcssjsprotected' => 'Ńy moš uprawńyń do sprowjańo tyi zajty, bo na ńyi sům uosobiste štalowańo inkšego užytkownika.',
'ns-specialprotected'  => 'Ńy idźe sprowjać zajtów we přestřyni mjan {{ns:special}}.',
'titleprotected'       => "Wćepanie sam zajty o takiym mjańe zawar [[User:$1|$1]].
Powůd zawarćo: ''$2''.",

# Login and logout pages
'logouttitle'                => 'Wylogůwańe užytkownika',
'logouttext'                 => '<strong>Terozki jestžeś wylůgowany</strong>.<br />Možeš dali sam sprowjać zajty jako niezalůgowany užytkownik, abo zalůgować sie nazod jako tyn som abo inkšy užytkownik.',
'welcomecreation'            => '== Witej, $1! ==

Uotwarli my sam dlo Ćebje kůnto. Ńy zapomńij poštalować [[{{ns:special}}:Preferences|prefyrencyji]].',
'loginpagetitle'             => 'Logůwańe',
'yourname'                   => 'Login:',
'yourpassword'               => 'Hasuo:',
'yourpasswordagain'          => 'Naškréflej hasuo zaś',
'remembermypassword'         => 'Zapamjyntej moje hasuo na tym kůmputře',
'yourdomainname'             => 'Twojo domyna',
'externaldberror'            => 'Jest jakiś feler w zywnyntřnyj baźe autentyfikacyjnyi, abo ńy moš uprawńyń potřebnych do aktualizacji zewnyntřnego kůnta.',
'loginproblem'               => '<b>Zdořyu sie problym při průbie zalůgowanio.</b><br />Sprůbuj zaś!',
'login'                      => 'Zalůguj mie',
'loginprompt'                => 'Muśiš mjeć zouůnčůne cookies coby můc śe sam zalůgować.',
'userlogin'                  => 'Logowańe / regišterowańe',
'logout'                     => 'Wyloguj mie',
'userlogout'                 => 'Wylogowańe',
'notloggedin'                => 'Ńy jest žeś zalůgowany',
'nologin'                    => 'Niy moš konta? $1.',
'nologinlink'                => 'Regišteruj sie',
'createaccount'              => 'Zouůž nowe kůnto',
'gotaccount'                 => 'Moš juž kůnto? $1.',
'gotaccountlink'             => 'Zalůguj śe',
'createaccountmail'          => 'e-brifym',
'badretype'                  => 'Hasua kere žeś naškréfloů sie ńy zgodzajom jedne z drugiym.',
'userexists'                 => 'Mjano užytkownika, kere žeś wybrou, jest zajynte. Wybjer proša inkše mjano.',
'youremail'                  => 'E-brif:',
'username'                   => 'Mjano užytkownika:',
'uid'                        => 'ID užytkownika:',
'yourrealname'               => 'Prowdźiwe mjano:',
'yourlanguage'               => 'Godka interfejsa',
'yournick'                   => 'Twojo šrajba',
'badsig'                     => 'Felerno šrajba, sprowdź značńiki HTML.',
'badsiglength'               => 'Mjano užytkowńika jest za duůgie. Maksymalno jego duůgość to $1 buchštabůw.',
'email'                      => 'E-brif',
'prefs-help-realname'        => '* Mjano i nazwisko (opcjůnalńy): jak žeś zdecydowou aže je podoš, bydům užyte, coby Twoja robota mjoua atrybucyjo.',
'loginerror'                 => 'Feler při logůwańu',
'prefs-help-email'           => '* E-brif (opcjůnalńe): Podańe e-brifa pozwolo inkšym užytkownikom kůntaktować sie z Toboů bez Twoja zajta užytkownika abo zajta godki i ńy třa při tymu podować swojiych danych identyfikacyjnych.',
'prefs-help-email-required'  => 'Wymogany jest adres e-brifa.',
'nocookiesnew'               => 'Kůnto užytkowńika zostoůo utwořůne, ale nie jestžeś zalůgowany. {{SITENAME}} užywo ćosteček do logůwańo. Moš wyuůnčone ćostečka. Coby sie zalůgować, uodymknij ćostečka i podej nazwa i hasuo swojego kůnta.',
'nocookieslogin'             => '{{SITENAME}} užywo ćosteček do lůgowańo užytkownikůw. Moš zablokowano jeich obsuůga. Sprůbuj zaś jak zauůnčyš obsuůga ćosteček.',
'noname'                     => 'To ńy jest poprowne mjano užytkownika.',
'loginsuccesstitle'          => 'Logůwańe udane',
'loginsuccess'               => "'''Terozki žeś jest zalogůwany do {{SITENAME}} jako \"\$1\".'''",
'nosuchuser'                 => 'Ńy ma sam užytkowńika o mjańe "$1".
Sprowdź pisowńja, abo užyj formulařa půńižej coby utwořić nowe kůnto.',
'nosuchusershort'            => 'Ńy ma sam užytkowńika uo mjańe "<nowiki>$1</nowiki>".',
'nouserspecified'            => 'Podej mjano užytkowńika.',
'wrongpassword'              => 'Hasuo kere žeś naškryflou je felerne. Poprůbůj naškryflać je ješče roz.',
'wrongpasswordempty'         => 'Hasuo kere žeś podou je puste. Naškryflej je ješče roz.',
'passwordtooshort'           => 'Hasuo kere žeś podou je za krůtke.
Hasuo musi mjyć přinojmńij $1 buchštabůw i być inkše uod mjana užytkowńika.',
'mailmypassword'             => 'Wyślij mi nowe hasuo e-brifem',
'passwordremindertitle'      => 'Nowe tymčasowe hasuo dla {{SITENAME}}',
'passwordremindertext'       => 'Ktůś (chyba Ty, s IP $1)
pado, aže chce nowe hasuo do {{SITENAME}} ($4).
Nowe hasuo do užytkowńika "$2" je "$3".
Zalůgůj śe terozki i zmjyń swoje hasuo.

Jak ktůś inkšy chćou nowe hasuo abo jak Ci śe připůmńouo stare i njy chceš nowygo, to zignoruj to i užywyj starygo hasua.',
'noemail'                    => 'Ńy mo u nos adresu e-brifa do "$1".',
'passwordsent'               => 'Nowe hasuo pošuo na e-brifa uod užytkowńika "$1".
Zalůguj śe zaś jak dostańyš tygo brifa.',
'blocked-mailpassword'       => 'Twůj adres IP zostou zawarty i ńy možeš užywać funkcje odzyskiwańo hasua s kuli možliwośći jei nadužywańo.',
'eauthentsent'               => 'E-mail potwjerdzajůncy je wysuany na e-maila.
Jak bydźeš chćou, coby wysůuouo Ci maile, pirwyj go přečytoj. Bydźeš tam mjou instrukcyjo co moš zrobić, coby pokazać, aže tyn adres je Twůj.',
'throttled-mailpassword'     => 'Připůmńeńe hasua boůo juž wysůane bez uostatnie $1 godzin.
Coby powstřimać nadužyća možliwość wysyuańa připůmńeń naštalowano na jedne bez $1 godziny.',
'mailerror'                  => 'Při wysyůańu e-brifa zdožyů sie feler: $1',
'acct_creation_throttle_hit' => 'Přikro nom, zauožyu(a)žeś juž $1 kont(a). Ńy možeš zauožyć kolejnygo.',
'emailauthenticated'         => 'Twůj adres e-brifa zostou uwjeřitelńůny $1.',
'emailnotauthenticated'      => 'Twůj adres e-brifa ńy jest uwjeřitelńůny. Půnižše funkcyje počty ńy bydom dźauać.',
'noemailprefs'               => 'Muśiš podać adres e-brifa, coby te funkcyje dziouauy.',
'emailconfirmlink'           => 'Potwjerdź swůj adres e-brifa',
'invalidemailaddress'        => 'E-brif nie bydźe zaakceptůwany: jego format nie speunio formalnych wymagań. Proša naškryflać poprowny adres e-brifa abo wyčyścić pole.',
'accountcreated'             => 'Utwůřůno kůnto',
'accountcreatedtext'         => 'Kůnto dla $1 zostouo utwůřůne.',
'createaccount-title'        => 'Stwořyńe kůnta na {{GRAMMAR:MS.lp|{{SITENAME}}}}',
'createaccount-text'         => 'Ktoś utwořyu na {{GRAMMAR:MS.lp|{{SITENAME}}}} ($4) dla Twojego adresa e-brif kůnto "$2". Aktualne hasuo to "$3". Powiniežeś sie terozki zalogůwać i je zmjenić.',
'loginlanguagelabel'         => 'Godka: $1',

# Password reset dialog
'resetpass'               => 'Resetuj hasuo',
'resetpass_announce'      => 'Zalůgowoužeś sie z tymčasowym kodym uotřimanym bez e-brif. Aby zakůńčyć proces logůwanio muśiš naštalować nowe hasuo:',
'resetpass_header'        => 'Resetuj hasuo',
'resetpass_submit'        => 'Naštaluj hasuo i zalůguj',
'resetpass_success'       => 'Twoje hasuo zostouo půmyślńe pomjyńone! Trwo logůwańe...',
'resetpass_bad_temporary' => 'Felerne hasuo tymčasowe. Abo možeś juž zakůńčyu proces pomjyńańo hasua, abo poprosiůžeś uo nowe hasuo tymčasowe.',
'resetpass_forbidden'     => 'Na {{GRAMMAR:MS.lp|{{SITENAME}}}} ńy idźe pomjyńyć hasuůw.',
'resetpass_missing'       => 'Formulař ńy mo danych.',

# Edit page toolbar
'bold_sample'     => 'Ruby tekst',
'bold_tip'        => 'Ruby tekst',
'italic_sample'   => 'Tekst pochylůny',
'italic_tip'      => 'Tekst pochylůny',
'link_sample'     => 'Tytuł linka',
'link_tip'        => 'Link wewnyntřny',
'extlink_sample'  => 'http://www.przykuod.szl titel zajty',
'extlink_tip'     => 'Link zewnyntřny (pamjyntej uo prefikśe http:// )',
'headline_sample' => 'Tekst naguůwka',
'headline_tip'    => 'Naguůwek 2. poźůma',
'math_sample'     => 'Sam tukej wprowadź wzůr',
'math_tip'        => 'Wzůr matymatyčny (LaTeX)',
'nowiki_sample'   => 'Wćepej sam tekst bez formatowańo',
'nowiki_tip'      => 'Zignoruj formatowańe wiki',
'image_tip'       => 'Plik uosadzůny',
'media_tip'       => 'Link do plika',
'sig_tip'         => 'Twoje šrajbowańy s datům i časym',
'hr_tip'          => 'Lińo poźůmo (užywej s ůmjarym)',

# Edit pages
'summary'                   => 'Uopis pomjéńań',
'subject'                   => 'Tymat/naguůwek',
'minoredit'                 => 'To je ńjywjelgie sprowjyńe',
'watchthis'                 => 'Dej pozor',
'savearticle'               => 'Škryflej',
'preview'                   => 'Podglůnd',
'showpreview'               => 'Pokož podglůnd',
'showlivepreview'           => 'Dynamičny podglůnd',
'showdiff'                  => 'Pokož dyferéncyje',
'anoneditwarning'           => 'Nie jest žeś zalogowany. W historie sprowjyń tyi zajty bydzie naškréflany Twůj adres IP.',
'missingsummary'            => "'''Připomńyńe:''' Ńy wprowadźiužeś uopisu pomjyńań. Jak go nie chceš wprowadzać, naciś knefel Škryflej ješče roz.",
'missingcommenttext'        => 'Wćepej kůmyntoř půnižyi.',
'missingcommentheader'      => "'''Dej pozůr:''' Treść naguůwka jest pusto - uzupeuńyj go! Jeśli tego ńy zrobiš, Twůj kůmyntoř bydzie naškryflany bez naguůwka.",
'summary-preview'           => 'Podglůnd uopisu',
'subject-preview'           => 'Podglůnd tematu/naguůwka',
'blockedtitle'              => 'Užytkownik jest zawarty uod sprowjyń',
'blockedtext'               => '<big>\'\'\'Twoje kůnto abo adres IP sům zawarte.\'\'\'</big>

Uo zawarću zdecydowou $1. Pado, aže s kuli: \'\'$2\'\'.

* Zawarte uod: $8
* Uodymkńe śe: $6
* Bez cůž: $7
Coby wyjaśńić sprawa zawarćo, naškryflej do $1 abo inkšygo [[{{MediaWiki:Grouppage-sysop}}|admińistratora]].
Ńy možeš posuać e-brifa bez "poślij e-brifa tymu užytkowńikowi", jak žeś ńy podou dobrygo adresa e-brifa we prefyryncyjach , abo jak e-brify moš tyž zawarte. Terozki moš adres IP $3 a nůmer zawarća to #$5. Prošymy podać jedyn abo uobadwa jak chceš pouosprawjać uo zawarću.',
'autoblockedtext'           => 'Tyn adres IP zostou zawarty automatyčńe, gdyž kořysto ś ńygo inkšy užytkowńik, zawarty uod sprowjyń bez administratora $1.
Powůd zawarćo:

:\'\'$2\'\'

Zawarće uod $8 wygaso $6

Možyš skůntaktować sie z $1 abo jednym z pozostauych [[{{MediaWiki:Grouppage-sysop}}|administratorůw]] jakbyś chiou uzyskać informacyje uo zawarću.

Uwaga: Jakžeś w [[Special:Preferences|preferencjach]] ńy naštalowou prowiduowygo adresa e-brifa, abo e-brify moš tyž zawarte, ńy možeš skožystać z opcje "Poślij e-brifa tymu užytkownikowi".

Identyfikator Twojiy blokady to $5. Zanotuj sie go i podej administratorowi.',
'blockednoreason'           => 'ńy podano s kuli čego',
'blockedoriginalsource'     => "Zdřůduo '''$1''' zostouo pokozane půnižyj:",
'blockededitsource'         => "Tekst '''Twojiych sprowjyń''' na '''$1''' zostou pokozany půnižyj:",
'whitelistedittitle'        => 'Ńym začńeš sprowiać ta zajta, muśiš być zalůgowany.',
'whitelistedittext'         => 'Muśiš $1 coby můc sprowjać artikle.',
'whitelistreadtitle'        => 'Před přečytańym muśiš sie zalůgować',
'whitelistreadtext'         => 'Muśiš sie [[Special:Userlogin|zalůgować]], coby čytać zajty.',
'whitelistacctitle'         => 'Ńy wolno Ci zakuodać kůnta',
'whitelistacctext'          => 'Zakuodanie kůnt na {{GRAMMAR:MS.lp|{{SITENAME}}}} wymogo [[Special:Userlogin|zalůgowańo]] oraz pośadanio uodpowjednich uprowńyń.',
'confirmedittitle'          => 'Wymogane potwiyrdzynie e-brifa cobyś můg sam sprowjać',
'confirmedittext'           => 'Muśiš podać i potwjerdźić swůj e-brif coby můc sam sprowjać.
Možeš to zrobić w [[Special:Preferences|swojych štalowańach]].',
'nosuchsectiontitle'        => 'Ńy ma takiy tajli',
'nosuchsectiontext'         => 'Průbowoužeś sprowjać tajla kero ńy istńeje. Jak sam ńy ma tajli $1, ńy ma tyž kaj naškryflać twojego sprowjyńo.',
'loginreqtitle'             => 'Muśiš sie zalůgować',
'loginreqlink'              => 'zalůguj sie',
'loginreqpagetext'          => 'Muśiš $1 coby můc přeglůndać inkše zajty.',
'accmailtitle'              => 'Hasuo wysuane.',
'accmailtext'               => 'Hasuo užytkowńika "$1" zostauo wysuane pod adres $2.',
'newarticle'                => '(Nowy)',
'newarticletext'            => 'Ńy ma sam ješče artikla uo tym tytule. W polu ńižej možeš naškryflać jygo pjeršy fragmynt. Jak chćoužeś zrobić co inkše, naćiś ino knefel "Nazod".',
'anontalkpagetext'          => "---- ''To jest zajta godki dla užytkownikůw anůnimowych - takich, keři ńy majům ješče swojygo kůnta abo ńy chcům go terozki užywać. By ich identyfikować užywomy numerůw IP. Jeśli žeś jest anůnimowym užytkowńikiem i wydowo Ci sie, že zamjyščůne sam kůmentoře ńy sům skiyrowane do Ćebie, [[{{ns:special}}:Userlogin|utwůř proša kůnto abo zalůguj sie]] - bez tůž uńikńeš potym podobnych ńyporozumień.''",
'noarticletext'             => 'Ńy ma ješče zajty uo tym tytule. Možeš [{{fullurl:{{FULLPAGENAME}}|action=edit}} wćepać artikel {{FULLPAGENAME}}] abo [[Special:Search/{{FULLPAGENAME}}|šnupać za {{FULLPAGENAME}} w inkšych artiklach]].',
'userpage-userdoesnotexist' => 'Užytkowńik "$1" ńy jest zareještrowany. Sprowdź čy na pewno chcioužeś stwořyć/pomjynić genau ta zajta.',
'clearyourcache'            => "'''Dej pozůr:''' Coby uobejřeć pomjyńańo po naškryflańu nowych štalowań poleć přeglůndarce wyčyścić zawartość pamiyńći podrynčnyi (cache). '''Mozilla / Firefox / Safari:''' přitřimej ''Shift'' klikajůnc na ''Uodświyž'' abo wciś ''Ctrl-Shift-R'' (''Cmd-Shift-R'' na Macintoshu), '''IE :''' přitřimej ''Ctrl'' klikajůnc na ''Uodświyž'' abo wciś ''Ctrl-F5''; '''Konqueror:''': kliknij knefel ''Uodświyž'' abo wciś ''F5''; užytkowńicy '''Opery''' mogům być zmušeńi coby coukiym wyčyśćić jeich pamjyńć podrynčno we menu ''Werkcojgi→Preferencyje''.",
'usercssjsyoucanpreview'    => '<strong>Podpowiydź:</strong> Užyj knefla "Podglůnd", coby přetestować Twůj nowy arkuš stylůw CSS abo kod JavaScript před jego zašrajbowańym.',
'usercsspreview'            => "'''Pamjyntej, že to na raźe ino podglůnd Twojego arkuša stylůw - nic ješče ńy zostouo naškreflane!'''",
'userjspreview'             => "'''Pamjyntej, že to na raźe ino podglůnd Twojego JavaScriptu - nic ješče ńy zostouo naškreflane!'''",
'note'                      => '<strong>Pozůr:</strong>',
'previewnote'               => '<strong>To je ino podglůnd - artikel ješče ńy je naškryflany!</strong>',
'editing'                   => 'Sprowioš $1',
'editingsection'            => 'Sprowjoš $1 (kůnsek)',
'copyrightwarning'          => "Pamjyntej uo tym, aže couki wkuod do {{SITENAME}} udostympńůmy wedle zasad $2 (dokuadńij w $1). Jak ńy chceš, coby koždy můg go zmjyńać i dali rozpowšychńać, ńy wćepuj go sam. Škréflajůnc sam tukej pośwjadčoš tyž, co te pisańy je twoje wuasne, abo žeś go wźůn(a) s materjouůw kere sům na ''public domain'', abo kůmpatybilne.<br />
<strong>PROŠA NIE WĆEPYWAĆ SAM MATERIAUŮW KERE SŮM CHRŮNIONE PRAWEM AUTORSKIM BEZ DOZWOLENIO WUAŚCICIELA!</strong>",
'longpagewarning'           => '<strong>Dej pozůr: Ta zajta je $1 kilobajt-y/-ůw wjelgo; w ńykerych přyglůndarkach můgům wystąpić problymy w sprowjańu zajtůw kere majům wjyncyj jak 32 kilobajty. Jak byś ůmjou, podźel tekst na mjyńše tajle.</strong>',
'templatesused'             => 'Šablůny užyte na tyi zajće:',
'templatesusedpreview'      => 'Šablôny užyte w tym podglůńdźe:',
'template-protected'        => '(zawarty před sprowjańym)',
'template-semiprotected'    => '(tajlowo zawarte)',
'nocreatetext'              => 'Na {{GRAMMAR:MS.lp|{{SITENAME}}}} twořyńe nowych zajtów uograničono. Možesz sprowjać te co już sóm, abo [[{{ns:special}}:Userlogin|zalogować sie, abo štartnůnć konto]].',
'recreate-deleted-warn'     => "'''Dej pozůr: Průbuješ wćepać nazod zajta kero juž bůua wyćepano.'''

Zastanůw śe, čy sprowjańy nazod tyi zajty mo uzasadńjyńe. Dla wygody užytkowńikůw, ńižyi pokozano rejestr wyćepńjyńć tyi zajty:",

# History pages
'viewpagelogs'        => 'Uoboč rejery uoperacyji do tyi zajty',
'currentrev'          => 'Aktualno wersyja',
'revisionasof'        => 'Wersyjo z dńa $1',
'revision-info'       => 'Wersyjo z dńa $1; $2',
'previousrevision'    => '← popředńo wersyjo',
'nextrevision'        => 'Naštympno wersyjo→',
'currentrevisionlink' => 'Aktualno wersyjo',
'cur'                 => 'biež',
'last'                => 'popředńo',
'page_first'          => 'počůntek',
'page_last'           => 'kůńyc',
'histlegend'          => 'Wybůr růžńic do porůwnańo: postow kropki we boksach i naćiś enter abo knefel na dole.<br />
Lygynda: (bjež) - růžńice s wersyjo bježůncům, (popř) - růžńice s wersyjo popředzajůncům, d - drobne zmjany',
'deletedrev'          => '[wyćepano]',
'histfirst'           => 'od počůntku',
'histlast'            => 'od uostatka',

# Revision feed
'history-feed-title'          => 'Historia wersji',
'history-feed-item-nocomment' => '$1 uo $2', # user at time

# Revision deletion
'pagehist' => 'Historia sprowjyń zajty',

# Diffs
'history-title'           => 'Historyja sprowjyń "$1"',
'difference'              => '(Růžńice mjyndzy škryflańami)',
'lineno'                  => 'Linia $1:',
'compareselectedversions' => 'porůwnej wybrane wersyje',
'editundo'                => 'cofej',
'diff-multi'              => '(Ńy pokazano {{PLURAL:$1|jydnej wersyji pośredńij|$1 wersyji pośredńich}}.)',

# Search results
'noexactmatch' => "'''Niy ma sam zajtów nazwanych \"\$1\".'''
Možyš [[:\$1|tako utwořyć]], abo sprůbować pounygo šnupańa.",
'prevn'        => 'popředńe $1',
'nextn'        => 'nastympne $1',
'viewprevnext' => 'Uobejřij ($1) ($2) ($3)',
'powersearch'  => 'Šnupańe zaawansowane',

# Preferences page
'preferences'       => 'Preferencyje',
'mypreferences'     => 'Moje preferéncyje',
'prefs-watchlist'   => 'Pozorlista',
'oldpassword'       => 'Stare hasuo',
'newpassword'       => 'Nowe hasuo',
'retypenew'         => 'Naškryflej ješče roz nowe hasuo:',
'textboxsize'       => 'Sprowjańy',
'searchresultshead' => 'Šnupańe',
'default'           => 'důmyślnje',

# User rights
'userrights-lookup-user' => 'Zažůndzej prawami užytkownika',

# Groups
'group-bot'   => 'Boty',
'group-sysop' => 'Admini',

'group-bot-member'   => 'Bot',
'group-sysop-member' => 'Admin',

'grouppage-sysop' => '{{ns:project}}:Administratořy',

# User rights log
'rightslog' => 'Uprawńyńa',

# Recent changes
'nchanges'                       => '$1 {{PLURAL:$1|pomjyńańe|pomjyńańa|pomjyńań}}',
'recentchanges'                  => 'Pomjéńane na űostatku',
'recentchanges-feed-description' => 'Dowej pozůr na pomjyńane na uostatku na tyi wiki .',
'rcnote'                         => "Půńižej {{PLURAL:$1|pokozano uostatńo zmjano dokůnano|pokazano uostatńy '''$1''' zmjany naškryflane|pokozano uostatńich '''$1''' škryflań zrobjůnych}} bez {{PLURAL:$2|ostatńi dźyń|ostatńich '''$2''' dńi}}, začynojůnc uod $3.",
'rcnotefrom'                     => 'Půńižej pokazano půmjyńańo zrobjůne po <b>$2</b> (ńy wjyncyj jak <b>$1</b> pozycji).',
'rclistfrom'                     => 'Pokož půmjyńańo uod $1',
'rcshowhideminor'                => '$1 drobne pomjyńańa',
'rcshowhidebots'                 => '$1 boty',
'rcshowhideliu'                  => '$1 zalůgowanych užytkowńikůw',
'rcshowhideanons'                => '$1 anůńimowych',
'rcshowhidepatr'                 => '$1 na kere dowomy pozůr',
'rcshowhidemine'                 => '$1 beze mie sprowjůne',
'rclinks'                        => 'Pokož uostatńe $1 sprowjyń bez uostatńe $2 dńi.<br />$3',
'diff'                           => 'dyf',
'hist'                           => 'hist',
'hide'                           => 'schrůń',
'show'                           => 'Pokoż',
'minoreditletter'                => 'd',
'newpageletter'                  => 'N',
'boteditletter'                  => 'b',

# Recent changes linked
'recentchangeslinked'          => 'Pomjéńane w adrésowanych',
'recentchangeslinked-title'    => 'Pomjyńyńo w adrésowanych s $1',
'recentchangeslinked-noresult' => 'Nikt nic niy pomjyńoł w dolinkowanych bez čas uo kery žeś pytou.',
'recentchangeslinked-summary'  => "To je ekstra zajta, na kerej možeš uobočyć zmjany w artiklach dolinkowanych.
Artikle na pozorli'śće sům '''rube'''.",

# Upload
'upload'        => 'Wćepnij plik',
'uploadbtn'     => 'Wćepnij sam plik',
'uploadlogpage' => 'Wćepane sam',
'filename'      => 'Mjano pliku',
'uploadedimage' => 'wćepano "[[$1]]"',

'license' => 'Licencyjo:',

# Special:Imagelist
'imgfile'        => 'plik',
'imagelist'      => 'Lista plikůw',
'imagelist_name' => 'Mjano',

# Image description page
'filehist'                  => 'Historjo pliku',
'filehist-help'             => 'Klikńij na data/čas, coby uobejřeć plik taki jak wtedy wyglůndou.',
'filehist-deleteone'        => 'wyćep ta wersyjo',
'filehist-revert'           => 'cofej',
'filehist-current'          => 'aktůalny',
'filehist-datetime'         => 'Data/čas',
'filehist-user'             => 'Užytkowńyk',
'filehist-dimensions'       => 'Wymiary',
'filehist-filesize'         => 'Rozmior plika',
'filehist-comment'          => 'Komyntorz',
'imagelinks'                => 'Co sam linkuje',
'linkstoimage'              => 'Nastympujůnce zajty sům adrésowane do tygo plika:',
'nolinkstoimage'            => 'Žodno zajta ńy je adrésowano do tygo plika.',
'sharedupload'              => 'Tyn plik je wćepńjynty na wspůlny serwer i inkše projekty tyž můgům go užywać.',
'noimage'                   => 'Ńjy ma sam plika uo takiej nazwje. Možeš go sam $1.',
'noimage-linktext'          => 'wćepać',
'uploadnewversion-linktext' => 'Wćepńij nowšo wersyjo tygo plika',

# File deletion
'filedelete'                  => 'Wyćepańe $1',
'filedelete-legend'           => 'Wyćep plik',
'filedelete-comment'          => 'Čymu chceš wyćepnůńć:',
'filedelete-success'          => "Wyćepano plik '''$1'''.",
'filedelete-otherreason'      => 'Inkšy powůd:',
'filedelete-reason-otherlist' => 'Inkszy powůd',

# MIME search
'mimesearch' => 'Sznupej MIME',
'mimetype'   => 'Typ MIME:',

# List redirects
'listredirects' => 'Lista překerowań',

# Unused templates
'unusedtemplates' => 'Ńyužywane šablôny',

# Random page
'randompage' => 'Losuj zajta',

# Random redirect
'randomredirect' => 'Losowe překerowańy',

# Statistics
'statistics' => 'Statystyka',
'sitestats'  => 'Statystyki {{SITENAME}}',

'disambiguations'     => 'Zajty ujydnoznačńajůnce',
'disambiguationspage' => '{{ns:template}}:disambig',

'doubleredirects' => 'Podwůjne překierowańa',

'brokenredirects'        => 'Zuomane překerowańa',
'brokenredirects-edit'   => '(sprowjéj)',
'brokenredirects-delete' => '(wyćep)',

'withoutinterwiki' => 'Artikle bez interwiki',

'fewestrevisions' => 'Zajty z nojmńijšom ilośćům wersyji',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|bajty|bajtůw}}',
'nlinks'                  => '$1 {{PLURAL:$1|link|linki|linkůw}}',
'nmembers'                => '$1 {{PLURAL:$1|elyment|elymenty|elymentůw}}',
'lonelypages'             => 'Poćepńynte zajty',
'uncategorizedpages'      => 'Zajty bez kategoryje',
'uncategorizedcategories' => 'Kategoryje bez kategoriůw',
'uncategorizedimages'     => 'Pliki bez kategoriůw',
'uncategorizedtemplates'  => 'Šablôny bez kategorii',
'unusedcategories'        => 'Ńyužywane kategoryje',
'unusedimages'            => 'Ńyužywane pliki',
'wantedcategories'        => 'Potřebne katygoryje',
'wantedpages'             => 'Nojpotřebńijše zajty',
'mostlinked'              => 'Nojčyńśćej adrésowane',
'mostlinkedcategories'    => 'Kategoryje we kerych je nojwjyncyi artikli',
'mostlinkedtemplates'     => 'Nojčyńśćej adrésowane šablôny',
'mostcategories'          => 'Zajty kere majům nojwiyncyi kategoriůw',
'mostimages'              => 'Nojčyńśćij adresowane pliki',
'mostrevisions'           => 'Nojčyńśćej sprowjane artikle',
'prefixindex'             => 'Wšyskie zajty wedle prefiksa',
'shortpages'              => 'Nojkrůtše zajty',
'longpages'               => 'Dugje artikle',
'deadendpages'            => 'Artikle bez linkůw',
'protectedpages'          => 'Zawarte zajty',
'protectedtitles'         => 'Zawarte mjana artikli',
'listusers'               => 'Lista užytkowńikůw',
'specialpages'            => 'Extra zajty',
'newpages'                => 'Nowe zajty',
'ancientpages'            => 'Nojstarše artikle',
'move'                    => 'Přećepnij',
'movethispage'            => 'Přećepej ta zajta',

# Book sources
'booksources' => 'Kśąžki',

# Special:Log
'specialloguserlabel'  => 'Užytkowńik:',
'speciallogtitlelabel' => 'Titel:',
'log'                  => 'Rejery uoperacjůw',
'all-logs-page'        => 'Wšyjstkie uoperacyje',

# Special:Allpages
'allpages'       => 'Wšyskie zajty',
'alphaindexline' => 'úod $1 do $2',
'nextpage'       => 'Nastympno zajta ($1)',
'prevpage'       => 'Popředńo zajta ($1)',
'allpagesfrom'   => 'Zajty začynojůnce śe na:',
'allarticles'    => 'Wšyskie zajty',
'allpagesnext'   => 'Nastympno',
'allpagessubmit' => 'Pokož',
'allpagesprefix' => 'Pokož artikle s prefiksym:',

# E-mail user
'emailuser' => 'Wyślij e-brif do tygo užytkowńika',
'emailfrom' => 'Uod',
'emailto'   => 'Do',

# Watchlist
'watchlist'            => 'Pozorlista',
'mywatchlist'          => 'Mojo pozorlista',
'watchlistfor'         => "(dla užytkowńika '''$1''')",
'addedwatch'           => 'Dodane do pozorlisty',
'addedwatchtext'       => 'Zajta "[[:$1|$1]]" zostoua dodano do Twojyj [[{{ns:special}}:Watchlist|listy artikli, na kere dowoš pozůr]].
Na tyi liśće bydzieš miou rejer přišuych sprawjyń tyi zajty i jei zajty godki, a mjano zajty bydziesz miou škryflane \'\'\'tůustym\'\'\' na [[{{ns:special}}:Recentchanges|liśće pomjyńanych na ůostatku]],
cobyś miou wygoda w jei pomjyńańa filować. 

Kiejbyś chciou wyćepać ta zajta z Twojiy listy artikli, na kere dowoš pozůr, kliknij na zakuadka "skůńč dować pozůr".',
'removedwatch'         => 'Wyćepńjynte s pozorlisty',
'removedwatchtext'     => 'Artikel "[[:$1]]" zostou wyćepńjynty s pozorlisty.',
'watch'                => 'Dej pozor',
'watchthispage'        => 'Dej pozor',
'unwatch'              => 'Njy dowej pozoru',
'watchlist-details'    => "{{PLURAL:$1|$1 artikel|$1 artiklůw}} na pozorli'śće bez godek.",
'wlshowlast'           => 'Pokož uostatńy $1 godźin $2 dńi ($3)',
'watchlist-hide-bots'  => 'schowej sprowjyńa botůw',
'watchlist-hide-own'   => 'schowej moje sprawjyńa',
'watchlist-hide-minor' => 'Schowej drobne pomjyńańa',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Dowom pozor...',
'unwatching' => 'Njy dowom pozoru...',

# Delete/protect/revert
'deletepage'                  => 'Wyćep artikel',
'historywarning'              => 'Pozor! Ta zajta kerům chceš wyćepnůńć mo historjo:',
'confirmdeletetext'           => 'Chceš wyćepnůńć trwale artikel abo plik s bazy danych s historią. Pokož, aže wjyš co robdza, i to aže to je tak jak godojům [[{{MediaWiki:Policy-url}}|zasady]].',
'actioncomplete'              => 'Fertig',
'deletedtext'                 => 'Wyćepano "<nowiki>$1</nowiki>". Rejer uostatnio zrobiůnych wyćepań možeš uobejžyć tukej: $2.',
'deletedarticle'              => 'wyciepnjynto "[[$1]]"',
'dellogpage'                  => 'Wyćepane',
'deletecomment'               => 'Čymu chceš wyćepnůńć:',
'deleteotherreason'           => 'Inkšy powůd:',
'deletereasonotherlist'       => 'Inkszy powůd',
'rollbacklink'                => 'cofej',
'protectlogpage'              => 'Zawarte',
'protectcomment'              => 'Kůmyntoř:',
'protectexpiry'               => 'Wygaso:',
'protect_expiry_invalid'      => 'Čas wygaśńjyńćo je zuy.',
'protect_expiry_old'          => 'Čas wygaśńjyńćo je w downiej ńiž terozki.',
'protect-unchain'             => 'Uodymknij možliwość přećiśńjyńcio artikla.',
'protect-text'                => 'Sam tukej možyš uobejžeć i pomjyńyć poźům zawarcia zajty <strong><nowiki>$1</nowiki></strong>.',
'protect-locked-access'       => 'Ńy moš uprowńyń coby pomjyńyć poziům zawarcia zajty. Uobecne ustawjyńo dlo zajty <strong>$1</strong> to:',
'protect-cascadeon'           => 'Ta zajta je zawarto od pomjyńań, po takjymu, co jei užywo {{PLURAL:$1|ta zajta, kero je zawarto|nastympůjůnce zajty, kere zostauy zawarte}} a opcyjo dźedźičyńo je zaůončono. Možeš pomjyńyć poziům zawarcia tyi zajty, ale dlo dźedźičyńo zawarcia to ńy mo wpuywu.',
'protect-default'             => '(důmyślny)',
'protect-fallback'            => 'Wymago pozwolynjo "$1"',
'protect-level-autoconfirmed' => 'tylko zaregišterůwani',
'protect-level-sysop'         => 'Ino admini',
'protect-summary-cascade'     => 'dźedźičyńy',
'protect-expiring'            => 'wygaso $1 (UTC)',
'protect-cascade'             => 'Dźedźyčyńe zawarćo - zawřij wšyskie zajty kere sům na tyi zajće.',
'protect-cantedit'            => 'Ńy možeš pomjyńyć poziůmu zawarća tyi zajty, po takiymu, co uona je dlo Ćebje zawarto uod pomjyńańa.',
'restriction-type'            => 'Pozwolyńy:',
'restriction-level'           => 'Poźům:',

# Restrictions (nouns)
'restriction-edit' => 'Sprowjéj',

# Undelete
'undeletebtn'            => 'Uodtwůř',
'undeletelink'           => 'uodtwůř',
'undelete-search-submit' => 'Šnupej',

# Namespace form on various pages
'namespace'      => 'Přestřyń nazw:',
'invert'         => 'Wybjer na uopy',
'blanknamespace' => '(přodńo)',

# Contributions
'contributions' => 'Wkuod užytkowńika',
'mycontris'     => 'Bezy mje sprowjône',
'contribsub2'   => 'Do užytkowńika $1 ($2)',
'uctop'         => '(uostatnio)',
'month'         => 'Uod mjeśůnca (i downiyjše):',
'year'          => 'Uod roku (i dowńijše):',

'sp-contributions-newbies-sub' => 'Dlo nowych užytkowńikůw',
'sp-contributions-blocklog'    => 'zawarća',
'sp-contributions-submit'      => 'Šnupej',

# What links here
'whatlinkshere'       => 'Co sam linkuje',
'whatlinkshere-title' => 'Zajty kere sům adrésowane do $1',
'linklistsub'         => '(Lista linków)',
'linkshere'           => "Nastympůjůnce zajty sóm adrésůwane do '''[[:$1]]''':",
'nolinkshere'         => "Žodno zajta ńy je adrésowana do '''[[:$1]]'''.",
'isredirect'          => 'překerowujůnca zajta',
'istemplate'          => 'douůnčona šablôna',
'whatlinkshere-prev'  => '{{PLURAL:$1|popředńe|popředńe $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|nastympne|nastympne $1}}',
'whatlinkshere-links' => '← do adrésata',

# Block/unblock
'blockip'            => 'Zawřij sprowjyńo užytkowńikowi',
'ipbreason'          => 'Čymu:',
'ipbreasonotherlist' => 'Inkszy powůd',
'ipboptions'         => '2 godźiny:2 hours,1 dźyń:1 day,3 dńi:3 days,1 tydźyń:1 week,2 tygodńy:2 weeks,1 mjeśůnc:1 month,3 mjeśůnce:3 months,6 mjeśency:6 months,1 rok:1 year,ńyskůńčůny:infińite', # display1:time1,display2:time2,...
'ipbotherreason'     => 'Inkšy powůd:',
'ipblocklist'        => 'Lista užytkowńikůw i adresůw IP ze zawartymi sprowjyńami',
'ipblocklist-submit' => 'Šnupej',
'blocklink'          => 'zablokuj',
'unblocklink'        => 'uodymknij',
'contribslink'       => 'wkůod',
'blocklogpage'       => 'Historyja zawarć',
'blocklogentry'      => 'zawarto [[$1]], bydźe uodymkńynty: $2 $3',

# Move page
'move-page-legend'        => 'Přećiś artikel',
'movepagetext'            => "Při půmocy formulařa půńižej možeš půmjyńyć nazwa zajty i přećepnůńć jei historja. Pod downym titlym uostańe zajta překerowujůnca. Zajty adresowane na stary titel uostanům jak bůuy. Sprowdź, čy žeś ńy uostawieu kajś podwůjne abo zerwane překerowańy. Žeś je uodpedźalny za to, coby adresowańy bůuo do wuaśćiwych artiklůw!

Zajta '''ńy''' bydźe přećepano, jak:
*je pusto i ńy bůua sprowjano
*je zajtům překerowujůncą
*zajta uo takym titlu juž sam jest

'''DEJ POZŮR!'''
To može być drastyčno abo i ńypřewidywalno zmjano, jak přećepńyš jako popularno zajta. Bydź pewny, aže wješ co robiyš, ńim klikńyš knefel \"přećep\"!",
'movepagetalktext'        => 'Uodpowiednio zajta godki, jeśli jest, bydzie přećepano automatyčńe, pod warůnkiem, že:
*ńy přećepuješ zajty do inkšy přestřeńy mjan
*ńy ma sam zajty godki o takiym mjańe
W takiych razach tekst godki třa přećepać, a jak třeba to i pouůnčyć z tym co juž sam jest, rynčńe. Abo možeš sie namyślić i nie přećepywać wcale ("checkbox" půnižyi).',
'movearticle'             => 'Přećiś artikel:',
'newtitle'                => 'Nowy titel:',
'move-watch'              => 'Dej pozor',
'movepagebtn'             => 'Přećiś artikel',
'pagemovedsub'            => 'Přećiśńjyńće gotowe',
'movepage-moved'          => '<big>\'\'\'"$1" přećiśńjynto ku "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Artikel s takym mjanym juž je, abo mjano je zue.
Wybjer inkše mjano.',
'talkexists'              => 'Zajta artikla zostaua přećepano, ale zajta godki ńy - zajta godki uo nowym mjańe juž sam jest. Poůunč, proša, teksty oubydwůch godek rynčńe.',
'movedto'                 => 'přećiśńjynto ku',
'movetalk'                => 'Přećiś godke, jak možno.',
'talkpagemoved'           => 'Godka artikla zostoua přećiśńjynto.',
'talkpagenotmoved'        => 'Godka artikla <strong>njy</strong> zostoua přećiśńjynto.',
'1movedto2'               => '[[$1]] přećepano do [[$2]]',
'movelogpage'             => 'Přećepńynte',
'movereason'              => 'Čymu:',
'revertmove'              => 'cofej',
'delete_and_move_confirm' => 'Toć, wyćep zajta',

# Export
'export' => 'Export zajtůw',

# Namespace 8 related
'allmessages' => 'Komunikaty',

# Thumbnails
'thumbnail-more'  => 'Powjynkš',
'thumbnail_error' => 'Feler při gynerowańu mińatury: $1',

# Import log
'importlogpage' => 'Rejer importa',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Mojo osobisto zajta',
'tooltip-pt-mytalk'               => 'Mojo godka',
'tooltip-pt-preferences'          => 'Moje preferéncyje',
'tooltip-pt-watchlist'            => 'Lista artiklůw na kere daješ pozor',
'tooltip-pt-mycontris'            => 'Lista bezy mje sprowjônych',
'tooltip-pt-login'                => 'My by chćeli cobyś śe zalůgowou, ale to ńy je uobowjůnzek.',
'tooltip-pt-logout'               => 'Wyloguj sie z wiki',
'tooltip-ca-talk'                 => 'Godej uo tym artiklu',
'tooltip-ca-edit'                 => 'Možeš sprowjać ta zajta. Ńim naškryfloš půmjyńańo, klikńij we knefel "podglůnd".',
'tooltip-ca-addsection'           => 'Dodej kůmyntoř do godki',
'tooltip-ca-viewsource'           => 'Ta zajta je zabezpječůno. Možeš śe uofilować tekst źrůduowy.',
'tooltip-ca-protect'              => 'Zawřij ta zajta',
'tooltip-ca-delete'               => 'Wyćep ta zajta',
'tooltip-ca-move'                 => 'Přećepnij ta zajta kaj indziy.',
'tooltip-ca-watch'                => 'Dodej artikel do pozorlisty',
'tooltip-ca-unwatch'              => 'Wyciep ten artikel z pozorlisty',
'tooltip-search'                  => 'Šnupej we serwisie {{SITENAME}}',
'tooltip-n-mainpage'              => 'Přelyź na Přodńo zajta',
'tooltip-n-portal'                => 'Uo projekće, co sam možeš majštrować, kaj idźe znolyźć informacyje',
'tooltip-n-currentevents'         => 'Informacyje uo aktualnych wydařyńach',
'tooltip-n-recentchanges'         => 'Lista pomjéńanych na űostatku na wiki',
'tooltip-n-randompage'            => 'Pokož losowo zajta',
'tooltip-n-help'                  => 'Zapoznej sie z obsůgą wiki',
'tooltip-n-sitesupport'           => 'Wspůmůž nas',
'tooltip-t-whatlinkshere'         => 'Pokož lista zajtůw kere sam sům adrésowane',
'tooltip-t-contributions'         => 'Pokož lista sprowjyń tygo užytkowńika',
'tooltip-t-emailuser'             => 'Wyślij e-brif do tygo užytkowńika',
'tooltip-t-upload'                => 'Wćepńij plik na serwer',
'tooltip-t-specialpages'          => 'Lista wšyskich extra zajtów',
'tooltip-ca-nstab-user'           => 'Pokož uosobisto zajta užytkowńika',
'tooltip-ca-nstab-project'        => 'Uobejřij zajta projektu',
'tooltip-ca-nstab-image'          => 'Pokož zajta grafiki',
'tooltip-ca-nstab-template'       => 'Uobejřij šablôna',
'tooltip-ca-nstab-help'           => 'Pokož zajte s půmocą',
'tooltip-ca-nstab-category'       => 'Pokož zajta kategorji',
'tooltip-minoredit'               => 'Uoznač ta zmjana za drobno',
'tooltip-save'                    => 'Naškréflej pomjyńańa',
'tooltip-preview'                 => 'Uobejřij jak bydźe wyglůndać zajta po twojym sprawjyńu, zańim naškryfloš!',
'tooltip-diff'                    => 'Pokozuje kere dyferéncyje žeś zrobjou artiklowi.',
'tooltip-compareselectedversions' => 'Zoboč růžńica mjyndzy wybranymi wersyjami zajty.',
'tooltip-watch'                   => 'Dodej tyn artikel do pozorlisty',

# Browsing diffs
'previousdiff' => '← Popředńy sprowjyńy',
'nextdiff'     => 'Nostympno dyferéncyjo →',

# Media information
'file-info-size'       => '($1 × $2 pikseli, rozmior plika: $3, typ MIME: $4)',
'file-nohires'         => '<small>Uobrozek we wjynkšej rozdźelčośći ńy je dostympny.</small>',
'svg-long-desc'        => '(Plik SVG, nůminalńe $1 × $2 pixelůw, rozmior plika: $3)',
'show-big-image'       => 'Oryginalno rozdźelčość',
'show-big-image-thumb' => '<small>Rozmiar podglůndu: $1 × $2 pikseli</small>',

# Special:Newimages
'newimages' => 'Galerjo nowych uobrozkůw',
'ilsubmit'  => 'Šnupej',

# Bad image list
'bad_image_list' => 'Dane noležy prowadźić we formaće:

Ino elementy tyi listy (linie kere majům na přodku *) bierymy pod uwoga.
Pjerwšy link w lińii muśi być linkym do zabrůńůnygo pliku.
Nostympne linki w lińii uwažůmy za wyjůntki, to sům nazwy zajtůw, kaj plik uo zakozanyj nazwje idźe wstawić.',

# Metadata
'metadata'          => 'Metadane',
'metadata-help'     => 'Tyn plik zawjyro extra dane, kere dodou aparat cyfrowy abo skaner. Jak coś we pliku bůuo půmjyńane, te extra dane můgům być ńyakuratne.',
'metadata-expand'   => 'Pokož ščygůuy',
'metadata-collapse' => 'Schowej ščygůuy',
'metadata-fields'   => 'Pola kere wymjyńůno pońižy pola EXIF bydům wymjyńůne na zajcie grafiki. Inkše pola bydům důmyślńy schowane.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-exposuretime-format' => '$1 s ($2)',

# External editor support
'edit-externally'      => 'Edytuj tyn plik bez zewnyntřno aplikacyjo',
'edit-externally-help' => 'Zoboč wjyncyj informacyji uo užywańu [http://meta.wikimedia.org/wiki/Help:External_editors zewnyntřnych edytorůw].',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'do kupy',
'namespacesall' => 'wšyskie',
'monthsall'     => 'wšyskie',

# action=purge
'confirm_purge_button' => 'OK',

# Watchlist editing tools
'watchlisttools-view' => 'Pokož wažńijše pomjyńańo',
'watchlisttools-edit' => 'Pokož i zmjyńoj pozorliste',
'watchlisttools-raw'  => 'Zmjyńoj surowo pozorlista',

# Special:Version
'version'                  => 'Wersjo', # Not used as normal message but as header for the special page itself
'version-version'          => 'Wersjo',
'version-software-version' => 'Wersjo',

# Special:Filepath
'filepath-page' => 'Plik:',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Mjano pliku:',
'fileduplicatesearch-submit'   => 'Šnupej',

);
