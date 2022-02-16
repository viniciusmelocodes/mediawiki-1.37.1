<?php
/** Serbian (Cyrillic script) (српски (ћирилица))
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bjankuloski06
 * @author CERminator
 * @author Charmed94
 * @author FriedrickMILBarbarossa
 * @author Geitost
 * @author Helios13
 * @author Kaganer
 * @author Kale
 * @author Meno25
 * @author Milicevic01
 * @author Millosh
 * @author Nikola Smolenski
 * @author Rancher
 * @author Red Baron
 * @author Reedy
 * @author Sasa Stefanovic
 * @author Slaven Kosanovic
 * @author TheStefan12345
 * @author Zoranzoki21
 * @author Јованвб
 * @author Жељко Тодоровић
 * @author Милан Јелисавчић
 * @author Михајло Анђелковић
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Медиј',
	NS_SPECIAL          => 'Посебно',
	NS_TALK             => 'Разговор',
	NS_USER             => 'Корисник',
	NS_USER_TALK        => 'Разговор_са_корисником',
	NS_PROJECT_TALK     => 'Разговор_о_$1',
	NS_FILE             => 'Датотека',
	NS_FILE_TALK        => 'Разговор_о_датотеци',
	NS_MEDIAWIKI        => 'Медијавики',
	NS_MEDIAWIKI_TALK   => 'Разговор_о_Медијавикију',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Разговор_о_шаблону',
	NS_HELP             => 'Помоћ',
	NS_HELP_TALK        => 'Разговор_о_помоћи',
	NS_CATEGORY         => 'Категорија',
	NS_CATEGORY_TALK    => 'Разговор_о_категорији',
];

$namespaceAliases = [
	# Aliases for Latin script namespaces
	"Medija"                  => NS_MEDIA,
	"Posebno"                 => NS_SPECIAL,
	"Razgovor"                => NS_TALK,
	"Korisnik"                => NS_USER,
	"Razgovor_sa_korisnikom"  => NS_USER_TALK,
	"Razgovor_o_$1"           => NS_PROJECT_TALK,
	"Slika"                   => NS_FILE,
	"Razgovor_o_slici"        => NS_FILE_TALK,
	"MedijaViki"              => NS_MEDIAWIKI,
	"Razgovor_o_MedijaVikiju" => NS_MEDIAWIKI_TALK,
	'Šablon'                  => NS_TEMPLATE,
	'Razgovor_o_šablonu'      => NS_TEMPLATE_TALK,
	'Pomoć'                   => NS_HELP,
	'Razgovor_o_pomoći'       => NS_HELP_TALK,
	'Kategorija'              => NS_CATEGORY,
	'Razgovor_o_kategoriji'   => NS_CATEGORY_TALK,

	'Медија'                  => NS_MEDIA,
	'Слика'                   => NS_FILE,
	'Разговор_о_слици'        => NS_FILE_TALK,
	'МедијаВики'              => NS_MEDIAWIKI,
	'Разговор_о_МедијаВикију' => NS_MEDIAWIKI_TALK,
];

$datePreferenceMigrationMap = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Активни_корисници', 'АктивниКорисници' ],
	'Allmessages'               => [ 'Све_поруке', 'СвеПоруке' ],
	'AllMyUploads'              => [ 'Сва_моја_отпремања', 'СваМојаОтпремања', 'СвеМојеДатотеке' ],
	'Allpages'                  => [ 'Све_странице', 'СвеСтранице' ],
	'Ancientpages'              => [ 'Најстарије_странице', 'НајстаријеСтранице', 'НајстаријиЧланци' ],
	'ApiHelp'                   => [ 'Помоћ_око_API-ја', 'API_помоћ' ],
	'ApiSandbox'                => [ 'Песак_API-ја', 'API_песак', 'АПИ_песак' ],
	'AutoblockList'             => [ 'Списак_аутоблокада', 'СписакАутоблокова', 'Аутоблокаде', 'Аутоблокови' ],
	'Badtitle'                  => [ 'Неисправан_наслов', 'Лош_наслов', 'ЛошНаслов' ],
	'Blankpage'                 => [ 'Празна_страница', 'ПразнаСтраница' ],
	'Block'                     => [ 'Блокирај', 'БлокирајИП', 'БлокирајКорисника' ],
	'BlockList'                 => [ 'Списак_блокада', 'СписакБлокада', 'СписакБлокираних', 'ПописБлокираних' ],
	'Booksources'               => [ 'Штампани_извори', 'ШтампаниИзвори', 'КњижевниИзвори' ],
	'BotPasswords'              => [ 'Лозинке_ботова', 'ЛозинкеБотова' ],
	'BrokenRedirects'           => [ 'Покварена_преусмерења', 'Неисправна_преусмерења', 'ПокваренаПреусмерења' ],
	'Categories'                => [ 'Категорије' ],
	'ChangeContentModel'        => [ 'Промени_садржински_модел', 'ПромениМоделСадржаја', 'ИзмениМоделСадржаја' ],
	'ChangeCredentials'         => [ 'Промени_акредитиве', 'ПромениАкредитиве' ],
	'ChangeEmail'               => [ 'Промени_имејл', 'ПромениИмејл', 'ПромениИмејлАдресу' ],
	'ChangePassword'            => [ 'Промени_лозинку', 'ПромениЛозинку' ],
	'ComparePages'              => [ 'Упореди_странице', 'УпоредиСтранице' ],
	'Confirmemail'              => [ 'Потврди_имејл', 'ПотврдиИмејл', 'ПотврдиЕ-пошту', 'Потврда_е-поште' ],
	'Contributions'             => [ 'Доприноси', 'Прилози' ],
	'CreateAccount'             => [ 'Отвори_налог', 'ОтвориНалог' ],
	'Deadendpages'              => [ 'Ћорсокаци', 'СтраницеКојеНеВодеНикуда', 'СлепеСтранице' ],
	'DeletedContributions'      => [ 'Избрисани_доприноси', 'ОбрисаниДоприноси' ],
	'Diff'                      => [ 'Разлике' ],
	'DoubleRedirects'           => [ 'Двострука_преусмерења', 'ДвострукаПреусмерења' ],
	'EditPage'                  => [ 'Уреди_страницу', 'УредиСтраницу', 'Уреди' ],
	'EditTags'                  => [ 'Уреди_ознаке', 'УредиОзнаке' ],
	'EditWatchlist'             => [ 'Уреди_списак_надгледања', 'УредиСписакНадгледања' ],
	'Emailuser'                 => [ 'Пошаљи_имејл_кориснику', 'ПошаљиИмејлКориснику' ],
	'ExpandTemplates'           => [ 'Прошири_шаблоне', 'ПрошириШаблоне' ],
	'Export'                    => [ 'Извези' ],
	'Fewestrevisions'           => [ 'Најмање_измена', 'НајмањеИзмена', 'ЧланциСаНајмањеРевизија' ],
	'FileDuplicateSearch'       => [ 'Претрага_дупликата_датотека', 'ПретрагаДупликатаДатотека' ],
	'Filepath'                  => [ 'Путања_до_датотеке', 'Путања_датотеке', 'ПутањаДатотеке' ],
	'GoToInterwiki'             => [ 'Посети_међувики', 'ПосетиМеђувики' ],
	'Import'                    => [ 'Увези' ],
	'Invalidateemail'           => [ 'Откажи_потврду_имејла', 'ПоништиИмејл' ],
	'JavaScriptTest'            => [ 'Тестирање_JavaScript-а', 'ТестирањеЈаваскрипта' ],
	'LinkAccounts'              => [ 'Повежи_налоге', 'ПовежиНалоге' ],
	'LinkSearch'                => [ 'Претрага_веза', 'ПретрагаВеза' ],
	'Listadmins'                => [ 'Списак_администратора', 'СписакАдминистратора', 'ПописАдминистратора' ],
	'Listbots'                  => [ 'Списак_ботова', 'СписакБотова', 'ПописБотова' ],
	'ListDuplicatedFiles'       => [ 'Списак_дуплираних_датотека', 'СписакДупликата' ],
	'Listfiles'                 => [ 'Списак_датотека', 'СписакДатотека', 'СписакСлика' ],
	'Listgrants'                => [ 'Списак_дозвола', 'СписакДозвола' ],
	'Listgrouprights'           => [ 'Списак_права_корисничких_група', 'Списак_корисничких_права', 'СписакКорисничкихПрава' ],
	'Listredirects'             => [ 'Списак_преусмерења', 'СписакПреусмерења' ],
	'Listusers'                 => [ 'Списак_корисника', 'СписакКорисника', 'Кориснички_списак', 'КорисничкиСписак' ],
	'Lockdb'                    => [ 'Закључај_базу_података', 'ЗакључајБазуПодатака', 'Закључај_базу', 'ЗакључајБазу' ],
	'Log'                       => [ 'Дневник', 'Извештај', 'Извештаји' ],
	'Lonelypages'               => [ 'Сирочићи' ],
	'Longpages'                 => [ 'Дуге_странице', 'ДугачкеСтранице', 'ДугачкеСтране' ],
	'MediaStatistics'           => [ 'Статистика_датотека', 'СтатистикеМедија' ],
	'MergeHistory'              => [ 'Обједини_историју', 'Споји_историју', 'СпојиИсторију' ],
	'MIMEsearch'                => [ 'Претрага_по_MIME-у', 'MIME_претрага' ],
	'Mostcategories'            => [ 'Највише_категорија', 'НајвишеКатегорија', 'ЧланциСаНајвишеКатегорија' ],
	'Mostimages'                => [ 'Најповезаније_датотеке', 'НајповезанијеДатотеке', 'НајповезанијеСлике' ],
	'Mostinterwikis'            => [ 'Највише_међувикија', 'НајвишеМеђувикија' ],
	'Mostlinked'                => [ 'Најповезаније_странице', 'НајповезанијеСтранице', 'НајповезанијеСтране' ],
	'Mostlinkedcategories'      => [ 'Најповезаније_категорије', 'НајповезанијеКатегорије' ],
	'Mostlinkedtemplates'       => [ 'Најповезанији_шаблони', 'НајповезанијиШаблони' ],
	'Mostrevisions'             => [ 'Највише_измена', 'НајвишеИзмена', 'НајвишеРевизија', 'ЧланциСаНајвишеРевизија' ],
	'Movepage'                  => [ 'Премести_страницу', 'ПреместиСтраницу', 'Премести', 'Преусмери' ],
	'Mycontributions'           => [ 'Моји_доприноси', 'МојиДоприноси', 'Моји_прилози' ],
	'MyLanguage'                => [ 'Мој_језик', 'МојЈезик' ],
	'Mypage'                    => [ 'Моја_страница', 'МојаСтраница' ],
	'Mytalk'                    => [ 'Мој_разговор', 'МојРазговор' ],
	'Myuploads'                 => [ 'Моја_отпремања', 'МојаОтпремања', 'Моја_слања' ],
	'Newimages'                 => [ 'Нове_датотеке', 'НовеДатотеке', 'НовиФајлови', 'НовеСлике' ],
	'Newpages'                  => [ 'Нове_странице', 'НовеСтранице', 'НовеСтране' ],
	'NewSection'                => [ 'Нови_одељак', 'НовиОдељак' ],
	'PageData'                  => [ 'Подаци_странице', 'ПодациСтранице' ],
	'PageHistory'               => [ 'Историја_странице', 'ИсторијаСтранице', 'Историја' ],
	'PageLanguage'              => [ 'Језик_странице', 'ЈезикСтранице' ],
	'PagesWithProp'             => [ 'Странице_са_својством', 'СтраницеСаСвојством' ],
	'PasswordPolicies'          => [ 'Правила_о_лозинкама', 'ПравилаЗаЛозинке' ],
	'PasswordReset'             => [ 'Ресетовање_лозинке', 'РесетовањеЛозинке' ],
	'PermanentLink'             => [ 'Трајна_веза', 'ТрајнаВеза', 'Привремена_веза' ],
	'Preferences'               => [ 'Подешавања', 'Поставке' ],
	'Prefixindex'               => [ 'Странице_с_префиксом', 'СтраницеСаПрефиксом' ],
	'Protectedpages'            => [ 'Заштићене_странице', 'ЗаштићенеСтранице' ],
	'Protectedtitles'           => [ 'Заштићени_наслови', 'ЗаштићениНаслови' ],
	'Purge'                     => [ 'Освежи' ],
	'RandomInCategory'          => [ 'Насумична_страница_у_категорији', 'Случајна_страница_у_категорији', 'Случајна_страна_у_категорији' ],
	'Randompage'                => [ 'Насумична_страница', 'СлучајнаСтраница', 'СлучајнаСтрана' ],
	'Randomredirect'            => [ 'Насумично_преусмерење', 'СлучајноПреусмерење' ],
	'Randomrootpage'            => [ 'Насумична_коренска_страница', 'СлучајнаОсновнаСтраница', 'СлучајнаОсновнаСтрана' ],
	'Recentchanges'             => [ 'Скорашње_измене', 'СкорашњеИзмене' ],
	'Recentchangeslinked'       => [ 'Повезане_измене', 'СроднеИзмене' ],
	'Redirect'                  => [ 'Преусмерење' ],
	'RemoveCredentials'         => [ 'Уклони_акредитиве', 'УклониАкредитиве' ],
	'ResetTokens'               => [ 'Ресетуј_токене', 'РесетујЖетоне' ],
	'Revisiondelete'            => [ 'Брисање_измене', 'БрисањеИзмене', 'УклањањеИзмене' ],
	'RunJobs'                   => [ 'Изврши_послове', 'ИзвршиПослове' ],
	'Search'                    => [ 'Претражи' ],
	'Shortpages'                => [ 'Кратке_странице', 'КраткеСтранице', 'КраткиЧланци' ],
	'Specialpages'              => [ 'Посебне_странице', 'ПосебнеСтранице', 'ПосебнеСтране', 'Специјалне_странице', 'СпецијалнеСтране' ],
	'Statistics'                => [ 'Статистика', 'Статистике' ],
	'Tags'                      => [ 'Ознаке' ],
	'TrackingCategories'        => [ 'Категорије_за_праћење', 'КатегоријеЗаПраћење' ],
	'Unblock'                   => [ 'Деблокирај' ],
	'Uncategorizedcategories'   => [ 'Некатегорисане_категорије', 'НекатегорисанеКатегорије', 'КатегоријеБезКатегорија' ],
	'Uncategorizedimages'       => [ 'Некатегорисане_датотеке', 'НекатегорисанеДатотеке', 'СликеБезКатегорија' ],
	'Uncategorizedpages'        => [ 'Некатегорисане_странице', 'НекатегорисанеСтранице', 'Чланци_без_категорија', 'ЧланциБезКатегорија' ],
	'Uncategorizedtemplates'    => [ 'Некатегорисани_шаблони', 'НекатегорисаниШаблони', 'ШаблониБезКатегорија' ],
	'Undelete'                  => [ 'Врати' ],
	'UnlinkAccounts'            => [ 'Одвежи_налоге', 'ОдвежиНалоге', 'УклониПовезивањеНалога' ],
	'Unlockdb'                  => [ 'Откључај_базу_података', 'ОткључајБазуПодатака', 'Откључај_базу', 'ОткључајБазу' ],
	'Unusedcategories'          => [ 'Неупотребљене_категорије', 'НеискоришћенеКатегорије' ],
	'Unusedimages'              => [ 'Неупотребљене_датотеке', 'НеискоришћенеДатотеке', 'НеискоришћенеСлике' ],
	'Unusedtemplates'           => [ 'Неупотребљени_шаблони', 'НеискоришћениШаблони' ],
	'Unwatchedpages'            => [ 'Ненадгледане_странице', 'НенадгледанеСтранице' ],
	'Upload'                    => [ 'Отпреми', 'Пошаљи' ],
	'UploadStash'               => [ 'Складиште' ],
	'Userlogin'                 => [ 'Корисничка_пријава', 'КорисничкаПријава' ],
	'Userlogout'                => [ 'Корисничка_одјава', 'КорисничкаОдјава' ],
	'Userrights'                => [ 'Корисничка_права', 'КорисничкаПрава' ],
	'Version'                   => [ 'Верзија', 'Издање' ],
	'Wantedcategories'          => [ 'Тражене_категорије', 'ТраженеКатегорије' ],
	'Wantedfiles'               => [ 'Тражене_датотеке', 'ТраженеДатотеке', 'ТраженеСлике' ],
	'Wantedpages'               => [ 'Тражене_странице', 'ТраженеСтранице', 'ТраженеСтране' ],
	'Wantedtemplates'           => [ 'Тражени_шаблони', 'ТражениШаблони' ],
	'Watchlist'                 => [ 'Списак_надгледања', 'СписакНадгледања' ],
	'Whatlinkshere'             => [ 'Шта_води_довде', 'ШтаВодиОвде', 'Шта_је_повезано_овде' ],
	'Withoutinterwiki'          => [ 'Без_међувикија', 'БезМеђувикија' ],
];

$datePreferences = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

$defaultDateFormat = 'hh:mm d. month y.';

$dateFormats = [
	/*
	'Није битно',
	'06:12, 5. јануар 2001.',
	'06:12, 5 јануар 2001',
	'06:12, 05.01.2001.',
	'06:12, 5.1.2001.',
	'06:12, 5. јан 2001.',
	'06:12, 5 јан 2001',
	'6:12, 5. јануар 2001.',
	'6:12, 5 јануар 2001',
	'6:12, 05.01.2001.',
	'6:12, 5.1.2001.',
	'6:12, 5. јан 2001.',
	'6:12, 5 јан 2001',
	 */

	'hh:mm d. month y. time'    => 'H:i',
	'hh:mm d month y time'      => 'H:i',
	'hh:mm dd.mm.yyyy time'     => 'H:i',
	'hh:mm d.m.yyyy time'       => 'H:i',
	'hh:mm d. mon y. time'      => 'H:i',
	'hh:mm d mon y time'        => 'H:i',
	'h:mm d. month y. time'     => 'G:i',
	'h:mm d month y time'       => 'G:i',
	'h:mm dd.mm.yyyy time'      => 'G:i',
	'h:mm d.m.yyyy time'        => 'G:i',
	'h:mm d. mon y. time'       => 'G:i',
	'h:mm d mon y time'         => 'G:i',

	'hh:mm d. month y. date'    => 'j. F Y.',
	'hh:mm d month y date'      => 'j F Y',
	'hh:mm dd.mm.yyyy date'     => 'd.m.Y',
	'hh:mm d.m.yyyy date'       => 'j.n.Y',
	'hh:mm d. mon y. date'      => 'j. M Y.',
	'hh:mm d mon y date'        => 'j M Y',
	'h:mm d. month y. date'     => 'j. F Y.',
	'h:mm d month y date'       => 'j F Y',
	'h:mm dd.mm.yyyy date'      => 'd.m.Y',
	'h:mm d.m.yyyy date'        => 'j.n.Y',
	'h:mm d. mon y. date'       => 'j. M Y.',
	'h:mm d mon y date'         => 'j M Y',

	'hh:mm d. month y. both'    => 'H:i, j. F Y.',
	'hh:mm d month y both'      => 'H:i, j F Y',
	'hh:mm dd.mm.yyyy both'     => 'H:i, d.m.Y',
	'hh:mm d.m.yyyy both'       => 'H:i, j.n.Y',
	'hh:mm d. mon y. both'      => 'H:i, j. M Y.',
	'hh:mm d mon y both'        => 'H:i, j M Y',
	'h:mm d. month y. both'     => 'G:i, j. F Y.',
	'h:mm d month y both'       => 'G:i, j F Y',
	'h:mm dd.mm.yyyy both'      => 'G:i, d.m.Y',
	'h:mm d.m.yyyy both'        => 'G:i, j.n.Y',
	'h:mm d. mon y. both'       => 'G:i, j. M Y.',
	'h:mm d mon y both'         => 'G:i, j M Y',
];

/* NOT USED IN STABLE VERSION */
/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'КОДИРАЊЕВЕЗЕ', 'КОДИРАЊЕ_ВЕЗЕ', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'ПУТАЊАЧЛАНКА', 'ПУТАЊА_ЧЛАНКА', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'ИМЕОСНОВЕ', 'ИМЕ_ОСНОВЕ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ИМЕНАОСНОВА', 'ИМЕНА_ОСНОВА', 'BASEPAGENAMEE' ],
	'contentlanguage'           => [ '1', 'ЈЕЗИКСАДРЖАЈА', 'ЈЕЗИК_САДРЖАЈА', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'ТРЕНУТНИДАН', 'ТЕКУЋИДАН', 'ТЕКУЋИ_ДАН', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ТЕКУЋИДАН2', 'ТЕКУЋИ_ДАН_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ТРЕНУТНИДАНИМЕ', 'ИМЕТЕКУЋЕГДАНА', 'ИМЕ_ТЕКУЋЕГ_ДАНА', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'ТРЕНУТНИДОВ', 'ТЕКУЋИДУН', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'ТЕКУЋИСАТ', 'ТЕКУЋИ_САТ', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'ТРЕНУТНИМЕСЕЦ', 'ТРЕНУТНИ_МЕСЕЦ', 'ТЕКУЋИМЕСЕЦ', 'ТЕКУЋИ_МЕСЕЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ТРЕНУТНИМЕСЕЦ1', 'ТРЕНУТНИ_МЕСЕЦ1', 'ТЕКУЋИМЕСЕЦ1', 'ТЕКУЋИ_МЕСЕЦ1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'ТРЕНУТНИМЕСЕЦСКР', 'ТЕКУЋИМЕСЕЦСКР', 'ТЕКУЋИ_МЕСЕЦ_СКР', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'ТРЕНУТНИМЕСЕЦИМЕ', 'ИМЕТЕКУЋЕГМЕСЕЦА', 'ИМЕ_ТЕКУЋЕГ_МЕСЕЦА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ТРЕНУТНИМЕСЕЦГЕН', 'ТЕКУЋИМЕСЕЦГЕН', 'ТЕКУЋИ_МЕСЕЦ_ГЕН', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'ТРЕНУТНОВРЕМЕ', 'ТЕКУЋЕВРЕМЕ', 'ТЕКУЋЕ_ВРЕМЕ', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'ТЕКУЋИОТИСАКВРЕМЕНА', 'ТЕКУЋИ_ОТИСАК_ВРЕМЕНА', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'ТЕКУЋЕИЗДАЊЕ', 'ТЕКУЋЕ_ИЗДАЊЕ', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'ТРЕНУТНАНЕДЕЉА', 'ТРЕНУТНА_НЕДЕЉА', 'ТЕКУЋАНЕДЕЉА', 'ТЕКУЋА_НЕДЕЉА', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ТРЕНУТНАГОДИНА', 'ТЕКУЋАГОДИНА', 'ТЕКУЋА_ГОДИНА', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'ПОДРАЗУМЕВАНОСОРТИРАЊЕ:', 'ПОДРАЗУМЕВАНИКЉУЧЗАСОРТИРАЊЕ:', 'ПОДРАЗУМЕВАНОСОРТИРАЊЕКАТЕГОРИЈЕ:', 'DEFAULTSORT:' ],
	'defaultsort_noerror'       => [ '0', 'без_грешке', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'без_замене', 'noreplace' ],
	'directionmark'             => [ '1', 'СМЕРОЗНАКЕ', 'СМЕР   _ОЗНАКЕ', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'НАЗИВПРИКАЗА', 'НАЗИВ_ПРИКАЗА', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'ПУТАЊАДАТОТЕКЕ', 'ПУТАЊА_ДАТОТЕКЕ', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__ФОРСИРАНИСАДРЖАЈ__', '__ФОРСИРАНИ_САДРЖАЈ__', '__ПРИМОРАНИСАДРЖАЈ__', '__ПРИМОРАНИ_САДРЖАЈ__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'форматдатума', 'формат_датума', 'formatdate', 'dateformat' ],
	'fullpagename'              => [ '1', 'ПУНОИМЕСТРАНИЦЕ', 'ПУНОИМЕСТРАНЕ', 'ПУНО_ИМЕ_СТРАНИЦЕ', 'ПУНО_ИМЕ_СТРАНЕ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ПУНАИМЕНАСТРАНИЦА', 'ПУНАИМЕНАСТРАНА', 'ПУНА_ИМЕНА_СТРАНИЦА', 'ПУНА_ИМЕНА_СТРАНА', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'ПУНУРЛ:', 'ЦЕЛААДРЕСА', 'ЦЕЛА_АДРЕСА', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПУНУРЛЕ:', 'ЦЕЛЕАДРЕСЕ', 'ЦЕЛЕ_АДРЕСЕ', 'FULLURLE:' ],
	'gender'                    => [ '0', 'РОД:', 'ЛИЦЕ:', 'GENDER:' ],
	'grammar'                   => [ '0', 'ГРАМАТИКА:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__САКРИВЕНАКАТ__', '__HIDDENCAT__' ],
	'img_alt'                   => [ '1', 'алт=$1', 'alt=$1' ],
	'img_baseline'              => [ '1', 'основа', 'baseline' ],
	'img_border'                => [ '1', 'ивица', 'оивичено', 'border' ],
	'img_bottom'                => [ '1', 'дно', 'bottom' ],
	'img_center'                => [ '1', 'центар', 'ц', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'оквир', 'рам', 'framed', 'enframed', 'frame' ],
	'img_frameless'             => [ '1', 'безоквира', 'без_оквира', 'безрама', 'без_рама', 'frameless' ],
	'img_left'                  => [ '1', 'лево', 'л', 'left' ],
	'img_link'                  => [ '1', 'веза=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'мини=$1', 'умањено=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'средина', 'middle' ],
	'img_none'                  => [ '1', 'без', 'н', 'none' ],
	'img_page'                  => [ '1', 'страница=$1', 'страна=$1', 'страница_$1', 'страна_$1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'десно', 'д', 'right' ],
	'img_sub'                   => [ '1', 'под', 'sub' ],
	'img_super'                 => [ '1', 'супер', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'срединатекста', 'средина_текста', 'text-bottom' ],
	'img_text_top'              => [ '1', 'врхтекста', 'врх_текста', 'text-top' ],
	'img_thumbnail'             => [ '1', 'мини', 'умањено', 'thumbnail', 'thumb' ],
	'img_top'                   => [ '1', 'врх', 'top' ],
	'img_upright'               => [ '1', 'усправно', 'усправно=$1', 'усправно_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1пискел', '$1п', '$1p', '$1px' ],
	'index'                     => [ '1', '__ИНДЕКС__', '__INDEX__' ],
	'int'                       => [ '0', 'ИНТ:', 'INT:' ],
	'lc'                        => [ '0', 'ЛЦ:', 'LC:' ],
	'lcfirst'                   => [ '0', 'ЛЦПРВИ:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'ЛОКАЛНИДАН', 'ЛОКАЛНИ_ДАН', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ЛОКАЛНИДАН2', 'ЛОКАЛНИ_ДАН2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ИМЕЛОКАЛНОГДАНА', 'ИМЕ_ЛОКАЛНОГ_ДАНА', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'ЛОКАЛНИДУН', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'ЛОКАЛНИСАТ', 'ЛОКАЛНИ_САТ', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'ЛОКАЛНИМЕСЕЦ', 'ЛОКАЛНИ_МЕСЕЦ', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ЛОКАЛНИМЕСЕЦ2', 'ЛОКАЛНИ_МЕСЕЦ2', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'ЛОКАЛНИМЕСЕЦСКР', 'ЛОКАЛНИ_МЕСЕЦ_СКР', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'ИМЕЛОКАЛНОГМЕСЕЦА', 'ИМЕ_ЛОКАЛНОГ_МЕСЕЦА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ЛОКАЛНИМЕСЕЦГЕН', 'ЛОКАЛНИ_МЕСЕЦ_ГЕН', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'ЛОКАЛНОВРЕМЕ', 'ЛОКАЛНО_ВРЕМЕ', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'ОТИСАКВРЕМЕНА', 'ОТИСАК_ВРЕМЕНА', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'ЛОКАЛНААДРЕСА:', 'ЛОКАЛНА_АДРЕСА:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ЛОКАЛНЕАДРЕСЕ:', 'ЛОКАЛНЕ_АДРЕСЕ:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'ЛОКАЛНАНЕДЕЉА', 'ЛОКАЛНА_НЕДЕЉА', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ЛОКАЛНАГОДИНА', 'ЛОКАЛНА_ГОДИНА', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'ПОР:', 'MSG:' ],
	'msgnw'                     => [ '0', 'НВПОР:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'ИМЕНСКИПРОСТОР', 'ИМЕНСКИ_ПРОСТОР', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ИМЕНСКИПРОСТОРИ', 'ИМЕНСКИ_ПРОСТОРИ', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'БРОЈИМЕНСКОГПРОСТОРА', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__НОВАВЕЗАОДЕЉКА__', '__НОВА_ВЕЗА_ОДЕЉКА__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__БЕЗКС__', '__БЕЗЦЦ__', '__BEZKS__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__БЕЗИЗМЕНА__', '__БЕЗ_ИЗМЕНА__', '__БЕЗИЗМЈЕНА__', '__БЕЗ_ИЗМЈЕНА__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__БЕЗГАЛЕРИЈЕ__', '__БЕЗ_ГАЛЕРИЈЕ__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__БЕЗИНДЕКСА__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__БЕЗНОВЕВЕЗЕОДЕЉКА__', '__БЕЗ_НОВЕ_ВЕЗЕ_ОДЕЉКА__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__БЕЗКН__', '__BEZKN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__БЕЗСАДРЖАЈА__', '__БЕЗ_САДРЖАЈА__', '__NOTOC__' ],
	'ns'                        => [ '0', 'ИП:', 'NS:' ],
	'numberingroup'             => [ '1', 'БРОЈУГРУПИ', 'БРОЈ_У_ГРУПИ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'БРОЈАКТИВНИХКОРИСНИКА', 'БРОЈ_АКТИВНИХ_КОРИСНИКА', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'БРОЈАДМИНА', 'БРОЈ_АДМИНА', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'БРОЈЧЛАНАКА', 'БРОЈ_ЧЛАНАКА', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'БРОЈИЗМЕНА', 'БРОЈ_ИЗМЕНА', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'БРОЈДАТОТЕКА', 'БРОЈ_ДАТОТЕКА', 'БРОЈФАЈЛОВА', 'БРОЈ_ФАЈЛОВА', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'БРОЈСТРАНИЦА', 'БРОЈ_СТРАНИЦА', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'БРОЈКОРИСНИКА', 'БРОЈ_КОРИСНИКА', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'ПОРАВНАЈЛЕВО', 'ПОРАВНАЈ_ЛЕВО', 'PADLEFT' ],
	'padright'                  => [ '0', 'ПОРАВНАЈДЕСНО', 'ПОРАВНАЈ_ДЕСНО', 'PADRIGHT' ],
	'pageid'                    => [ '0', 'БРОЈСТРАНИЦЕ', 'PAGEID' ],
	'pagename'                  => [ '1', 'ИМЕСТРАНИЦЕ', 'ИМЕ_СТРАНИЦЕ', 'СТРАНИЦА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ИМЕНАСТРАНИЦА', 'ИМЕНА_СТРАНИЦА', 'СТРАНИЦЕ', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'СТРАНИЦАУКАТЕГОРИЈИ', 'СТРАНАУКАТЕГОРИЈИ', 'СТРАНИЦА_У_КАТЕГОРИЈИ', 'СТРАНА_У_КАТЕГОРИЈИ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'све', 'all' ],
	'pagesincategory_files'     => [ '0', 'датотеке', 'files' ],
	'pagesinnamespace'          => [ '1', 'СТРАНИЦАУИМЕНСКОМПРОСТОРУ', 'СТРАНАУИМЕНСКОМПРОСТОРУ', 'СТРАНИЦА_У_ИМЕНСКОМ_ПРОСТОРУ', 'СТРАНА_У_ИМЕНСКОМ_ПРОСТОРУ', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'ВЕЛИЧИНАСТРАНИЦЕ', 'ВЕЛИЧИНАСТРАНЕ', 'ВЕЛИЧИНА_СТРАНИЦЕ', 'ВЕЛИЧИНА_СТРАНЕ', 'PAGESIZE' ],
	'plural'                    => [ '0', 'МНОЖИНА:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'НИВОЗАШТИТЕ', 'НИВО_ЗАШТИТЕ', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'ЧИСТ:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'Р', 'R' ],
	'redirect'                  => [ '0', '#Преусмери', '#преусмери', '#ПРЕУСМЕРИ', '#Преусмјери', '#преусмјери', '#ПРЕУСМЈЕРИ', '#redirect', '#REDIRECT' ],
	'revisionday'               => [ '1', 'ДАНИЗМЕНЕ', 'ДАН_ИЗМЕНЕ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДАНИЗМЕНЕ2', 'ДАН_ИЗМЕНЕ2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'ИДРЕВИЗИЈЕ', 'ИД_РЕВИЗИЈЕ', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'МЕСЕЦИЗМЕНЕ', 'МЕСЕЦ_ИЗМЕНЕ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'МЕСЕЦИЗМЕНЕ1', 'МЕСЕЦ_ИЗМЕНЕ1', 'REVISIONMONTH1' ],
	'revisiontimestamp'         => [ '1', 'ВРЕМЕИЗМЕНЕ', 'ВРЕМЕ_ИЗМЕНЕ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'КОРИСНИКИЗМЕНЕ', 'КОРИСНИК_ИЗМЕНЕ', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'ГОДИНАИЗМЕНЕ', 'ГОДИНА_ИЗМЕНЕ', 'REVISIONYEAR' ],
	'safesubst'                 => [ '0', 'БЕЗБЕДНАЗАМЕНА', 'БЕЗБЕДНА_ЗАМЕНА', 'SAFESUBST:' ],
	'scriptpath'                => [ '0', 'СКРИПТА', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'СЕРВЕР', 'SERVER' ],
	'servername'                => [ '0', 'ИМЕСЕРВЕРА', 'ИМЕ_СЕРВЕРА', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'ИМЕСАЈТА', 'SITENAME' ],
	'special'                   => [ '0', 'посебно', 'special' ],
	'staticredirect'            => [ '1', '__СТАТИЧКОПРЕУСМЕРЕЊЕ__', 'СТАТИЧКО_ПРЕУСМЕРЕЊЕ', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'ПУТАЊАСТИЛА', 'ПУТАЊА_СТИЛА', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'ИМЕЧЛАНКА', 'ИМЕ_ЧЛАНКА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ИМЕНАЧЛАНАКА', 'ИМЕНА_ЧЛАНАКА', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'ИМЕНСКИПРОСТОРЧЛАНКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНКА', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ИМЕНСКИПРОСТОРЧЛАНАКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНАКА', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'ИМЕПОДСТРАНИЦЕ', 'ИМЕПОДСТРАНЕ', 'ИМЕ_ПОДСТРАНИЦЕ', 'ИМЕ_ПОДСТРАНЕ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ИМЕНАПОДСТРАНИЦА', 'ИМЕНАПОДСТРАНА', 'ИМЕНА_ПОДСТРАНИЦА', 'ИМЕНА_ПОДСТРАНА', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'ЗАМЕНИ:', 'ЗАМЕНА:', 'СУБСТ', 'SUBST:' ],
	'tag'                       => [ '0', 'ознака', 'tag' ],
	'talkpagename'              => [ '1', 'ИМЕРАЗГОВОРА', 'ИМЕ_РАЗГОВОРА', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ИМЕНАРАЗГОВОРА', 'ИМЕНА_РАЗГОВОРА', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'РАЗГОВОР', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'РАЗГОВОРИ', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__САДРЖАЈ__', '__TOC__' ],
	'uc'                        => [ '0', 'УЦ:', 'UC:' ],
	'ucfirst'                   => [ '0', 'УЦПРВИ:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'КОДИРАЊЕАДРЕСЕ', 'КОДИРАЊЕ_АДРЕСЕ', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'ПУТАЊА', 'PATH' ],
	'url_query'                 => [ '0', 'РЕДОСЛЕД', 'QUERY' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
];
$separatorTransformTable = [ ',' => '.', '.' => ',' ];