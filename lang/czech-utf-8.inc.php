<?php
/* $Id$ */

/**
 * Czech language file by
 *   Michal Čihař <nijel at users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtů', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$month = array('ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %d. %b %Y, %H:%M';

$timespanfmt = '%s dnů, %s hodin, %s minut a %s sekund';

$strAbortedClients = 'Přerušené';
$strAbsolutePathToDocSqlDir = 'docSQL adresář';
$strAccessDeniedExplanation = 'phpMyAdmin se pokusil připojit k&nbsp;MySQL serveru, a ten odmítl připojení. Zkontrolujte jméno serveru, uživatelské jméno a heslo v&nbsp;souboru config.inc.php a ujistěte se, že jsou totožné s&nbsp;těmi, které máte od administrátora MySQL serveru.';
$strAccessDenied = 'Přístup odepřen';
$strAction = 'Akce';
$strAddAutoIncrement = 'Přidat hodnotu AUTO_INCREMENT';
$strAddConstraints = 'Přidat integritní omezení';
$strAddDeleteColumn = 'Přidat nebo odebrat sloupec';
$strAddDeleteRow = 'Přidat nebo odebrat řádek';
$strAddDropDatabase = 'Přidat DROP DATABASE';
$strAddedColumnComment = 'Přidán komentář ke sloupci';
$strAddedColumnRelation = 'Přidána relace pro sloupec';
$strAddFields = 'Přidat %s položek';
$strAddHeaderComment = 'Přidat vlastní komentář do hlavičky (\\n odděluje řádky)';
$strAddIfNotExists = 'Přidat IF NOT EXISTS';
$strAddIntoComments = 'Do komentářů přidat';
$strAddNewField = 'Přidat sloupec';
$strAddPrivilegesOnDb = 'Přidat oprávnění pro databázi';
$strAddPrivilegesOnTbl = 'Přidat oprávnění pro tabulku';
$strAddSearchConditions = 'Přidat vyhledávací parametry (část dotazu po příkazu "WHERE"):';
$strAddToIndex = 'Přidat %s sloupců do indexu';
$strAddUserMessage = 'Uživatel byl přidán.';
$strAddUser = 'Přidat nového uživatele';
$strAdministration = 'Správa';
$strAffectedRows = 'Ovlivněné řádky:';
$strAfterInsertBack = 'Návrat na předchozí stránku';
$strAfterInsertNewInsert = 'Vložit další řádek';
$strAfterInsertSame = 'Návrat na tuto stránku';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'Použít pro všechny tabulky stejnou šířku';
$strAll = 'Všechno';
$strAlterOrderBy = 'Změnit pořadí tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAnIndex = 'K&nbsp;tabulce %s byl přidán index';
$strAnyHost = 'Jakýkoliv počítač';
$strAny = 'Jakýkoliv';
$strAnyUser = 'Jakýkoliv uživatel';
$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvořen primární klíč';
$strArabic = 'Arabština';
$strArmenian = 'Arménština';
$strAscending = 'Vzestupně';
$strAtBeginningOfTable = 'Na začátku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';
$strAutodetect = 'Automaticky zjistit';
$strAutomaticLayout = 'automatické rozvržení';

$strBack = 'Zpět';
$strBaltic = 'Baltické';
$strBeginCut = 'ZAČÁTEK VÝPISU';
$strBeginRaw = 'ZAČÁTEK VÝPISU';
$strBinary = ' Binární ';
$strBinaryDoNotEdit = ' Binární - neupravujte ';
$strBinaryLog = 'Binární log';
$strBinLogEventType = 'Typ události';
$strBinLogInfo = 'Informace';
$strBinLogName = 'Jméno logu';
$strBinLogOriginalPosition = 'Původní pozice';
$strBinLogPosition = 'Pozice';
$strBinLogServerId = 'ID serveru';
$strBookmarkAllUsers = 'Umožnit všem uživatelům používat tuto položku';
$strBookmarkDeleted = 'Položka byla smazána z&nbsp;oblíbených.';
$strBookmarkLabel = 'Název';
$strBookmarkOptions = 'Nastavení oblíbeného dotazu';
$strBookmarkQuery = 'Oblíbený SQL dotaz';
$strBookmarkThis = 'Přidat tento SQL dotaz do oblíbených';
$strBookmarkView = 'Jen zobrazit';
$strBrowseForeignValues = 'Projít hodnoty cizích klíčů';
$strBrowse = 'Projít';
$strBulgarian = 'Bulharština';
$strBzError = 'phpMyAdminovi se nepodařilo zkomprimovat výpis, protože rozšíření pro kompresi bz2 je v&nbsp;této verzi PHP chybné. Doporučujeme tuto kompresi vypnout (nastavit <code>$cfg[\'BZipDump\']</code> v&nbsp;nastaveních phpMyAdmina na <code>FALSE</code>). Pokud chcete používat kompresi bz2, měli byste nainstalovat novější verzi PHP. Více informací o&nbsp;tomto problému je u popisu chyby %s.';
$strBzip = '"zabzipováno"';

$strCalendar = 'Kalendář';
$strCannotLogin = 'Nepodařilo se přihlášení k MySQL serveru';
$strCantLoad = 'nelze nahrát rozšíření %s,<br />zkontrolujte prosím nastavení PHP';
$strCantLoadRecodeIconv = 'Nelze nahrát rozšíření iconv ani recode potřebná pro převod znakových sad. Upravte nastavení PHP tak aby umožňovalo použít tyto rozšíření nebo vypněte převod znakových sad v&nbsp;phpMyAdminu.';
$strCantRenameIdxToPrimary = 'Index nemůžete přejmenovat na "PRIMARY"!';
$strCantUseRecodeIconv = 'Nelze použít funkce iconv ani libiconv ani recode_string, přestože rozšíření jsou nahrána. Zkontrolujte nastavení PHP.';
$strCardinality = 'Mohutnost';
$strCarriage = 'Návrat vozíku (CR): \\r';
$strCaseInsensitive = 'nerozlišovat velká a malá písmena';
$strCaseSensitive = 'rozlišovat velká a malá písmena';
$strCentralEuropean = 'Střední Evropa';
$strChangeCopyModeCopy = '... zachovat původního uživatele.';
$strChangeCopyModeDeleteAndReload = ' ... smazat uživatele a poté znovu načíst oprávnění.';
$strChangeCopyModeJustDelete = ' ... smazat původního uživatele ze všech tabulek.';
$strChangeCopyModeRevoke = ' ... odebrat všechna oprávnění původnímu uživateli a poté ho smazat.';
$strChangeCopyMode = 'Vytvořit nového uživatele se stejnými oprávněními a ...';
$strChangeCopyUser = 'Změnit informace o&nbsp;uživateli / Kopírovat uživatele';
$strChangeDisplay = 'Zvolte které sloupce zobrazit';
$strChangePassword = 'Změnit heslo';
$strChange = 'Změnit';
$strCharsetOfFile = 'Znaková sada souboru:';
$strCharsetsAndCollations = 'Znakové sady a porovnávání';
$strCharsets = 'Znakové sady';
$strCharset = 'Znaková sada';
$strCheckAll = 'Zaškrtnout vše';
$strCheckOverhead = 'Zaškrtnout neoptimální';
$strCheckPrivsLong = 'Zkontrolovat oprávnění pro databázi &quot;%s&quot;.';
$strCheckPrivs = 'Zkontrolovat oprávnění';
$strCheckTable = 'Zkontrolovat tabulku';
$strChoosePage = 'Zvolte stránku, kterou chcete změnit';
$strColComFeat = 'Zobrazuji komentáře sloupců';
$strCollation = 'Porovnávání';
$strColumnNames = 'Názvy sloupců';
$strColumnPrivileges = 'Oprávnění pro jednotlivé sloupce';
$strCommand = 'Příkaz';
$strCommentsForTable = 'KOMENTÁŘE PRO TABULKU';
$strComments = 'Komentáře';
$strCompleteInserts = 'Úplné inserty';
$strCompression = 'Komprese';
$strConfigFileError = 'phpMyAdmin nemohl načíst konfigurační soubor!<br />Tato chyba může nastat pokud v&nbsp;něm PHP najde chybu nebo nemůže tento soubor najít.<br />Po kliknutí na následující odkaz se PHP pokusí přímo interpretovat tento soubor a zobrazí informace o&nbsp;chybě, ke které došlo. Pak opravte tuto chybu (nejčastěji se jedná o&nbsp;chybějící středník).<br />Pokud získáte prázdnou stránku, všechno je v&nbsp;pořádku.';
$strConfigureTableCoord = 'Prosím, nastavte souřadnice pro tabulku %s';
$strConnectionError = 'Nepodařilo se připojit: chybné nastavení.';
$strConnections = 'Připojení';
$strConstraintsForDumped = 'Omezení pro exportované tabulky';
$strConstraintsForTable = 'Omezení pro tabulku';
$strCookiesRequired = 'Během tohoto kroku musíte mít povoleny cookies.';
$strCopyDatabaseOK = 'Databáze %s byla zkopírována na %s';
$strCopyTable = 'Kopírovat tabulku do (databáze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkopírována do %s.';
$strCopyTableSameNames = 'Nelze kopírovat tabulku na sebe samu!';
$strCouldNotKill = 'phpMyAdminovi se nepodařilo ukončit vlákno %s. Pravděpodobně jeho běh již skončil.';
$strCreateIndexTopic = 'Vytvořit nový index';
$strCreateIndex = 'Vytvořit index na&nbsp;%s&nbsp;sloupcích';
$strCreateNewDatabase = 'Vytvořit novou databázi';
$strCreateNewTable = 'Vytvořit novou tabulku v&nbsp;databázi %s';
$strCreatePage = 'Vytvořit novou stránku';
$strCreatePdfFeat = 'Vytváření PDF';
$strCreate = 'Vytvořit';
$strCreationDates = 'Datum vytvoření, poslední změny a kontroly';
$strCriteria = 'Podmínka';
$strCroatian = 'Chorvatština';
$strCSVOptions = 'Nastavení CSV exportu';
$strCyrillic = 'Cyrilika';
$strCzech = 'Čeština';
$strCzechSlovak = 'Čeština/Slovenština';

$strDanish = 'Dánština';
$strDatabase = 'Databáze';
$strDatabaseEmpty = 'Jméno databáze je prázdné!';
$strDatabaseExportOptions = 'Nastavení exportu databází';
$strDatabaseHasBeenDropped = 'Databáze %s byla zrušena.';
$strDatabaseNoTable = 'Tato databáze neobsahuje žádné tabulky!';
$strDatabases = 'Databáze';
$strDatabasesDropped = '%s databáze byla úspěšně zrušena.';
$strDatabasesStatsDisable = 'Skrýt podrobnosti';
$strDatabasesStatsEnable = 'Zobrazit podrobnosti';
$strDatabasesStatsHeavyTraffic = 'Poznámka: Zobrazení podrobností o&nbsp;databázích může způsobit značné zvýšení provozu mezi webserverem a MySQL serverem.';
$strDatabasesStats = 'Statistiky databází';
$strData = 'Data';
$strDataDict = 'Datový slovník';
$strDataOnly = ' Jen data';
$strDBComment = 'Komentář k databázi: ';
$strDBCopy = 'Zkopírovat databázi na';
$strDBGContextID = 'Kontext ID';
$strDBGContext = 'Kontext';
$strDBGHits = 'Zásahů';
$strDBGLine = 'Řádka';
$strDBGMaxTimeMs = 'Min. čas, ms';
$strDBGMinTimeMs = 'Max. čas, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Čas/Zásah, ms';
$strDBGTotalTimeMs = 'Celkový čas, ms';
$strDbPrivileges = 'Oprávnění pro jednotlivé databáze';
$strDBRename = 'Přejmenovat databázi na';
$strDbSpecific = 'závislé na databázi';
$strDefaultValueHelp = 'Výchozí hodnotu zadejte jen jednu hodnotu bez uvozovek a escapování znaků, například: a';
$strDefault = 'Výchozí';
$strDefragment = 'Defragmentovat tabulku';
$strDelayedInserts = 'Používat zpožděné inserty';
$strDeleteAndFlushDescr = 'Toto je nejčistší řešení, ale načítání oprávnění může trvat dlouho.';
$strDeleteAndFlush = 'Odstranit uživatele a znovunačíst oprávnění.';
$strDeleted = 'Řádek byl smazán';
$strDeletedRows = 'Smazané řádky:';
$strDelete = 'Smazat';
$strDeleting = 'Odstraňuji %s';
$strDelOld = 'Aktuální stránka se odkazuje na tabulky, které již neexistují. Chcete odstranit tyto odkazy?';
$strDescending = 'Sestupně';
$strDescription = 'Popis';
$strDictionary = 'slovník';
$strDisabled = 'Vypnuto';
$strDisableForeignChecks = 'Vypnout kontrolu cizích klíčů';
$strDisplayFeat = 'Zobrazení funkcí';
$strDisplayOrder = 'Seřadit podle:';
$strDisplayPDF = 'Zobrazit jako schéma v&nbsp;PDF';
$strDoAQuery = 'Provést "dotaz podle příkladu" (zástupný znak: "%")';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si přejete vykonat příkaz';
$strDropDatabaseStrongWarning = 'Chystáte se ZRUŠIT celou databázi!';
$strDrop = 'Odstranit';
$strDropSelectedDatabases = 'Zrušit vybranou databázi';
$strDropUsersDb = 'Odstranit databáze se stejnými jmény jako uživatelé.';
$strDumpingData = 'Vypisuji data pro tabulku';
$strDumpSaved = 'Výpis byl uložen do souboru %s.';
$strDumpXRows = 'Vypsat %s řádků od %s.';
$strDynamic = 'dynamický';

$strEditPDFPages = 'Upravit PDF stránky';
$strEditPrivileges = 'Upravit oprávnění';
$strEdit = 'Upravit';
$strEffective = 'Efektivní';
$strEmptyResultSet = 'MySQL vrátil prázdný výsledek (tj. nulový počet řádků).';
$strEmpty = 'Vyprázdnit';
$strEnabled = 'Zapnuto';
$strEncloseInTransaction = 'Uzavřít příkazy v&nbsp;transakci';
$strEndCut = 'KONEC VÝPISU';
$strEnd = 'Konec';
$strEndRaw = 'KONEC VÝPISU';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = 'Poznámka: názvy oprávnění v&nbsp;MySQL jsou uváděny anglicky';
$strError = 'Chyba';
$strEscapeWildcards = 'Zástupné znaky _ a % by měly být eshould be escapovány pomocí \, pokud je chcete použít jako znak';
$strEstonian = 'Estonština';
$strExcelEdition = 'Verze Excelu';
$strExcelOptions = 'Nastavení exportu do Excelu';
$strExecuteBookmarked = 'Spustit oblíbený dotaz';
$strExplain = 'Vysvětlit (EXPLAIN) SQL';
$strExport = 'Export';
$strExtendedInserts = 'Rozšířené inserty';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepovedených pokusů';
$strFieldHasBeenDropped = 'Sloupec %s byl odstraněn';
$strFieldsEmpty = ' Nebyl zadán počet sloupců! ';
$strFieldsEnclosedBy = 'Názvy sloupců uzavřené do';
$strFieldsEscapedBy = 'Názvy sloupců escapovány';
$strField = 'Sloupec';
$strFields = 'Sloupce';
$strFieldsTerminatedBy = 'Sloupce oddělené';
$strFileAlreadyExists = 'Soubor %s již na serveru existuje, změňte jméno souboru, nebo zvolte přepsání souboru.';
$strFileCouldNotBeRead = 'Soubor nelze přečíst';
$strFileNameTemplateHelp = 'Použijte __DB__ pro jméno databáze, __TABLE__ pro jméno tabulky a jakékoliv parametry pro %sfunkci strftime%s pro vložení data. Přípona souboru bude automaticky přidána podle typu. Jakýkoliv jiný text bude zachován.';
$strFileNameTemplateRemember = 'zapamatovat si hodnotu';
$strFileNameTemplate = 'Vzor pro jméno souboru';
$strFixed = 'pevný';
$strFlushPrivilegesNote = 'Poznámka: phpMyAdmin získává oprávnění přímo z&nbsp;tabulek MySQL. Obsah těchto tabulek se může lišit od oprávnění, která server právě používá, pokud byly tyto tabulky upravovány. V&nbsp;tomto případě je vhodné provést %sznovunačtení oprávnění%s před pokračováním.';
$strFlushTable = 'Vyprázdnit vyrovnávací paměť pro tabulku ("FLUSH")';
$strFormat = 'Formát';
$strFormEmpty = 'Chybějící hodnota ve formuláři!';
$strFullText = 'Celé texty';
$strFunction = 'Funkce';

$strGenBy = 'Vygeneroval';
$strGeneralRelationFeat = 'Obecné funkce relací';
$strGenTime = 'Vygenerováno';
$strGeorgian = 'Gruzínština';
$strGerman = 'Německy';
$strGlobal = 'globální';
$strGlobalPrivileges = 'Globální oprávnění';
$strGlobalValue = 'Globální hodnota';
$strGo = 'Proveď';
$strGrantOption = 'Přidělování';
$strGreek = 'Řečtina';
$strGzip = '"zagzipováno"';

$strHasBeenAltered = 'byla změněna.';
$strHasBeenCreated = 'byla vytvořena.';
$strHaveToShow = 'Musíte volit alespoň jeden sloupec, který chcete zobrazit.';
$strHebrew = 'Hebrejština';
$strHexForBinary = 'Binarní pole vypisovat šestnáctkově';
$strHome = 'Hlavní strana';
$strHomepageOfficial = 'Oficiální stránka phpMyAdmina';
$strHostEmpty = 'Jméno počítače je prázdné!';
$strHost = 'Počítač';
$strHungarian = 'Maďarština';

$strIcelandic = 'Islandština';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Pokud si přejete natáhnout jen vybrané sloupce z&nbsp;tabulky, napište je jako seznam sloupců oddělených čárkou.';
$strIgnore = 'Ignorovat';
$strIgnoreInserts = 'Použít IGNORE';
$strIgnoringFile = 'Ignoruji soubor %s';
$strImportDocSQL = 'Importovat soubory docSQL';
$strImportFiles = 'Importovat soubory';
$strImportFinished = 'Import ukončen';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index %s byl odstraněn';
$strIndex = 'Index';
$strIndexName = 'Jméno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'Máte standardní nastavení hesla uživatele root v&nbsp;MySQL. Doporučujeme změnit toto nastavení a tím podstatně zvýšit bezpečnost Vašeho serveru.';
$strInsertAsNewRow = 'Vložit jako nový řádek';
$strInsertBookmarkTitle = 'Prosím zadejte název oblíbené položky';
$strInsertedRowId = 'Id vloženého řádku:';
$strInsertedRows = 'Vloženo řádků:';
$strInsertNewRow = 'Vložit nový řádek';
$strInsertTextfiles = 'Vložit textové soubory do tabulky';
$strInsert = 'Vložit';
$strInstructions = 'Instrukce';
$strInternalNotNecessary = '* Interní relace není potřebná, pokud již relace existuje v InnoDB.';
$strInternalRelations = 'Interní relace';
$strInUse = 'právě se používá';

$strJapanese = 'Japonština';
$strJumpToDB = 'Na databázi &quot;%s&quot;.';
$strJustDeleteDescr = 'Odstranění uživatelé stále budou mít přistup na server dokud nebudou znovunačtena oprávnění.';
$strJustDelete = 'Jen odstranit uživatele z tabulek s oprávněními.';

$strKeepPass = 'Neměnit heslo';
$strKeyname = 'Klíčový název';
$strKill = 'Ukončit';
$strKorean = 'Korejština';

$strLandscape = 'Na šířku';
$strLatexCaption = 'Titulek tabulky';
$strLatexContent = 'Obsah tabulky __TABLE__';
$strLatexContinuedCaption = 'Titulek pokračování tabulky';
$strLatexContinued = '(pokračování)';
$strLatexIncludeCaption = 'Použít titulek tabulky';
$strLatexLabel = 'Návěstí';
$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'Nastavení exportu do LaTeXu';
$strLatexStructure = 'Struktura tabulky __TABLE__';
$strLatvian = 'Lotyšština';
$strLengthSet = 'Délka/Množina*';
$strLimitNumRows = 'záznamů na stránku';
$strLineFeed = 'Ukončení řádků: \\n';
$strLinesTerminatedBy = 'Řádky ukončené';
$strLinkNotFound = 'Odkaz nenalezen';
$strLinksTo = 'Odkazuje na';
$strLithuanian = 'Litevština';
$strLoadExplanation = 'Automaticky jsou zvoleny nejvhodnější parametry, pokud toto nastavení selže, můžete zkusit druhou možnost.';
$strLoadMethod = 'Parametry pro příkaz LOAD';
$strLocalhost = 'Lokální';
$strLocationTextfile = 'textový soubor';
$strLoginInformation = 'Přihlašování';
$strLogin = 'Přihlášení';
$strLogout = 'Odhlásit se';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Jméno:';

$strMaximumSize = 'Maximální velikost: %s%s';
$strMIME_available_mime = 'Dostupné MIME typy';
$strMIME_available_transform = 'Dostupné transformace';
$strMIME_description = 'Popis';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_nodescription = 'Pro tuto transformaci není dostupný žádný popis.<br />Zeptejte se autora co %s dělá.';
$strMIME_transformation_note = 'Pro seznam dostupných parametrů transformací a jejich MIME typů klikněte na %spopisy transformací%s';
$strMIME_transformation_options_note = 'Zadejte parametry transformací v&nbsp;následujícím tvaru: \'a\',\'b\',\'c\'...<br />Pokud potřebujete použít zpětné lomítko ("\") nebo jednoduché uvozovky ("\'") mezi těmito hodnotami, vložte před ně zpětné lomítko (například \'\\\\xyz\' nebo \'a\\\'b\').';
$strMIME_transformation_options = 'Parametry transformace';
$strMIME_transformation = 'Transformace při prohlížení';
$strMIMETypesForTable = 'MIME TYPY PRO TABULKU';
$strMIME_without = 'MIME typy zobrazené kurzívou nemají vlastní transformační funkci';
$strModifications = 'Změny byly uloženy';
$strModifyIndexTopic = 'Upravit index';
$strModify = 'Úpravy';
$strMoreStatusVars = 'Další informace o&nbsp;stavu';
$strMoveTableOK = 'Tabulka %s byla přesunuta do %s.';
$strMoveTable = 'Přesunout tabulku do (databáze<b>.</b>tabulka):';
$strMoveTableSameNames = 'Nelze přesunout tabulku na sebe samu!';
$strMultilingual = 'mnohojazyčný';
$strMustSelectFile = 'Zvolte soubor, který chcete vložit.';
$strMySQLCharset = 'Znaková sada v&nbsp;MySQL';
$strMySQLConnectionCollation = 'Znaková sada připojení k&nbsp;MySQL';
$strMySQLReloaded = 'MySQL znovu načteno.';
$strMySQLSaid = 'MySQL hlásí: ';
$strMySQLServerProcess = 'MySQL %pma_s1% běžící na serveru %pma_s2%, uživatel přihlášen jako %pma_s3%';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Ukázat informace o&nbsp;běhu MySQL';
$strMySQLShowVars = 'Ukázat systémové proměnné MySQL';

$strName = 'Název';
$strNeedPrimaryKey = 'Pro tuto tabulku byste měli definovat primární klíč.';
$strNext = 'Další';
$strNoDatabasesSelected = 'Nebyla vybrána žádná databáze.';
$strNoDatabases = 'Žádné databáze';
$strNoDescription = 'žádný popisek';
$strNoDropDatabases = 'Příkaz "DROP DATABASE" je vypnutý.';
$strNoExplain = 'Bez vysvětlení (EXPLAIN) SQL';
$strNoFrames = 'phpMyAdmin se lépe používá v&nbsp;prohlížeči podporujícím rámy ("FRAME").';
$strNoIndexPartsDefined = 'Žádná část indexu nebyla definována!';
$strNoIndex = 'Žádný index nebyl definován!';
$strNoModification = 'Žádná změna';
$strNo = 'Ne';
$strNone = 'Žádná';
$strNoOptions = 'Tento formát nemá žádná nastavení';
$strNoPassword = 'Žádné heslo';
$strNoPermission = 'Web server nemá oprávnění uložit výpis do souboru %s.';
$strNoPhp = 'Bez PHP kódu';
$strNoPrivileges = 'Bez oprávnění';
$strNoQuery = 'Žádný SQL dotaz!';
$strNoRights = 'Nemáte dostatečná práva na provedení této akce!';
$strNoRowsSelected = 'Nebyla vybrán žádný řádek';
$strNoSpace = 'Nedostatek místa pro uložení souboru %s.';
$strNoTablesFound = 'V&nbsp;databázi nebyla nalezena žádná tabulka.';
$strNoThemeSupport = 'Není podporována změna tématu, zkontrolujte nastavení a témata v adresáři %s.';
$strNotNumber = 'Nebylo zadáno číslo!';
$strNotOK = 'není v pořádku';
$strNotSet = '<b>%s</b> tabulka nenalezena nebo není nastavena v&nbsp;%s';
$strNotValidNumber = ' není platné číslo řádku!';
$strNoUsersFound = 'Žádný uživatel nenalezen.';
$strNoValidateSQL = 'Bez kontroly SQL';
$strNull = 'Nulový';
$strNumSearchResultsInTable = '%s odpovídající(ch) záznam(ů) v&nbsp;tabulce <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkem:</b> <i>%s</i> odpovídající(ch) záznam(ů)';
$strNumTables = 'Tabulek';

$strOftenQuotation = 'Často uvozující znaky. Volitelně znamená, že pouze položky u kterých je to nutné (obvykle typu CHAR a VARCHAR) jsou uzavřeny do uzavíracích znaků.';
$strOK = 'OK';
$strOperations = 'Úpravy';
$strOperator = 'Operátor';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Volitelné. Určuje jak zapisovat nebo číst speciální znaky.';
$strOptionally = 'Volitelně';
$strOr = 'nebo';
$strOverhead = 'Navíc';
$strOverwriteExisting = 'Přepsat existující soubor(y)';

$strPageNumber = 'Strana číslo:';
$strPaperSize = 'Velikost stránky';
$strPartialText = 'Zkrácené texty';
$strPasswordChanged = 'Heslo pro %s bylo úspěšně změněno.';
$strPasswordEmpty = 'Heslo je prázdné!';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Hesla nejsou stejná!';
$strPdfDbSchema = 'Schéma databáze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabulka "%s" neexistuje!';
$strPdfNoTables = 'žádné tabulky';
$strPerHour = 'za hodinu';
$strPerMinute = 'za minutu';
$strPerSecond = 'za sekundu';
$strPersian = 'Perština';
$strPhoneBook = 'adresář';
$strPHP40203 = 'Používáte PHP 4.2.3, které má závažnou chybu při práci s&nbsp;vícebajtovými znaky (mbstring), jedná se o&nbsp;chybu PHP číslo 19404. Nedoporučujeme používat tuto verzi PHP s&nbsp;phpMyAdminem.';
$strPHPVersion = 'Verze PHP';
$strPhp = 'Zobrazit PHP kód';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUSÍ být nastaven v&nbsp;konfiguračním souboru!';
$strPolish = 'Polština';
$strPortrait = 'Na výšku';
$strPos1 = 'Začátek';
$strPrevious = 'Předchozí';
$strPrimaryKeyHasBeenDropped = 'Primární klíč byl odstraněn';
$strPrimaryKeyName = 'Jméno primárního klíče musí být "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musí</b> být jméno <b>pouze</b> primárního klíče!)';
$strPrimary = 'Primární';
$strPrintViewFull = 'Náhled k vytištění (s&nbsp;kompletními texty)';
$strPrintView = 'Náhled k vytištění';
$strPrint = 'Vytisknout';
$strPrivDescAllPrivileges = 'Všechna oprávnění kromě GRANT.';
$strPrivDescAlter = 'Umožňuje měnit strukturu existujících tabulek.';
$strPrivDescCreateDb = 'Umožňuje vytvářet nové databáze a tabulky.';
$strPrivDescCreateTbl = 'Umožňuje vytvářet nové tabulky.';
$strPrivDescCreateTmpTable = 'Umožňuje vytvářet dočasné tabulky.';
$strPrivDescDelete = 'Umožňuje mazat data.';
$strPrivDescDropDb = 'Umožňuje odstranit databáze a tabulky.';
$strPrivDescDropTbl = 'Umožňuje odstranit tabulky.';
$strPrivDescExecute = 'Umožňuje spouštět uložené procedury. V&nbsp;této verzi MySQL se nepoužívá.';
$strPrivDescFile = 'Umožňuje importovat a exportovat data z/do souborů na serveru.';
$strPrivDescGrant = 'Umožňuje přidávat uživatele a oprávnění bez znovunačítání tabulek s&nbsp;oprávněními.';
$strPrivDescIndex = 'Umožňuje vytvářet a rušit indexy.';
$strPrivDescInsert = 'Umožňuje vkládat a přepisovat data.';
$strPrivDescLockTables = 'Umožňuje zamknout tabulku pro aktuální thread.';
$strPrivDescMaxConnections = 'Omezí počet nových připojení, která může uživatel vytvořit za hodinu.';
$strPrivDescMaxQuestions = 'Omezí kolik dotazů může uživatel odeslat serveru za hodinu.';
$strPrivDescMaxUpdates = 'Omezí kolik dotazů, měnících nějakou tabulku nebo databázi, může uživatel spustit za hodinu.';
$strPrivDescProcess3 = 'Umožňuje ukončit procesy jiným uživatelům.';
$strPrivDescProcess4 = 'Umožňuje vidět celé dotazy v&nbsp;seznamu procesů.';
$strPrivDescReferences = 'Nemá žádný vliv v&nbsp;této verzi MySQL.';
$strPrivDescReload = 'Umožňuje znovunačtení nastavení a vyprázdnění vyrovnávacích pamětí MySQL serveru.';
$strPrivDescReplClient = 'Umožní uživateli zjistit kde je hlavní / pomocný server.';
$strPrivDescReplSlave = 'Potřebné pro replikaci pomocných serverů.';
$strPrivDescSelect = 'Umožňuje vybírat data.';
$strPrivDescShowDb = 'Umožňuje přístup k&nbsp;úplnému seznamu databází.';
$strPrivDescShutdown = 'Umožňuje vypnout server.';
$strPrivDescSuper = 'Umožňuje připojení i když je dosažen maximální počet připojení. Potřebné pro většinu operací pro správu serveru jako nastavování globálních proměnných a zabíjení threadů jiných uživatelů.';
$strPrivDescUpdate = 'Umožňuje měnit data.';
$strPrivDescUsage = 'Žádná oprávnění.';
$strPrivileges = 'Oprávnění';
$strPrivilegesReloaded = 'Oprávnění byla znovunačtena úspěšně.';
$strProcesslist = 'Seznam procesů';
$strPutColNames = 'Přidat jména sloupců na první řádek';

$strQBEDel = 'smazat';
$strQBE = 'Dotaz';
$strQBEIns = 'přidat';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = 'SQL dotaz na databázi <b>%s</b>:';
$strQuerySQLHistory = 'SQL historie';
$strQueryStatistics = '<b>Statistika dotazů</b>: Od spuštění bylo serveru posláno %s dotazů.';
$strQueryTime = 'Dotaz zabral %01.4f sekund';
$strQueryType = 'Typ dotazu';
$strQueryWindowLock = 'Nepřepisovat tento dotaz z&nbsp;hlavního okna';

$strReceived = 'Přijato';
$strRecords = 'Záznamů';
$strReferentialIntegrity = 'Zkontrolovat integritu odkazů:';
$strRefresh = 'Obnovit';
$strRelationalSchema = 'Relační schéma';
$strRelationNotWorking = 'Některé z&nbsp;rozšířených funkcí phpMyAdmina nelze používat. %sZde%s zjistíte proč.';
$strRelationsForTable = 'RELACE PRO TABULKU';
$strRelations = 'Relace';
$strRelationView = 'Zobrazit relace';
$strReloadFailed = 'Znovunačtení MySQL selhalo.';
$strReloadingThePrivileges = 'Znovunačítám oprávnění';
$strReloadMySQL = 'Znovunačtení MySQL';
$strRemoveSelectedUsers = 'Odstranit vybrané uživatele';
$strRenameDatabaseOK = 'Databáze %s byla přejmenována na %s';
$strRenameTableOK = 'Tabulka %s byla přejmenována na %s';
$strRenameTable = 'Přejmenovat tabulku na';
$strRepairTable = 'Opravit tabulku';
$strReplaceNULLBy = 'Nahradit NULL hodnoty';
$strReplace = 'Přepsat';
$strReplaceTable = 'Přepsat data tabulky souborem';
$strReset = 'Původní';
$strResourceLimits = 'Omezení zdrojů';
$strReType = 'Heslo znovu';
$strRevokeAndDeleteDescr = 'Uživatelé budou mít oprávnění "USAGE" (používání) dokud nebudou znovunačtena oprávnění.';
$strRevokeAndDelete = 'Odebrat uživatelům veškerá oprávnění a poté je odstranit z tabulek.';
$strRevokeMessage = 'Byla zrušena práva pro %s';
$strRevoke = 'Zrušit';
$strRomanian = 'Rumunština';
$strRowLength = 'Délka řádku';
$strRowsFrom = 'řádků začínající od';
$strRowSize = ' Velikost řádku ';
$strRowsModeFlippedHorizontal = 'vodorovném (otočené hlavičky)';
$strRowsModeHorizontal = 'vodorovném';
$strRowsModeOptions = 've %s režimu a opakovat hlavičky po %s řádcích.';
$strRowsModeVertical = 'svislém';
$strRows = 'Řádků';
$strRowsStatistic = 'Statistika řádků';
$strRunning = 'na %s';
$strRunQuery = 'Provést dotaz';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na databázi %s';
$strRussian = 'Ruština';

$strSaveOnServer = 'Uložit na serveru v adresáři %s';
$strSave = 'Ulož';
$strScaleFactorSmall = 'Měřítko je příliš malé, aby se schéma vešlo na jednu stránku';
$strSearchFormTitle = 'Vyhledávání v&nbsp;databázi';
$strSearchInTables = 'V&nbsp;tabulkách:';
$strSearchNeedle = 'Slova nebo hodnoty, které chcete vyhledat (zástupný znak: "%"):';
$strSearchOption1 = 'alespoň jedno ze slov';
$strSearchOption2 = 'všechna slova';
$strSearchOption3 = 'přesnou frázi';
$strSearchOption4 = 'jako regulární výraz';
$strSearchResultsFor = 'Výsledky vyhledávání pro "<i>%s</i>" %s:';
$strSearchType = 'Najít:';
$strSearch = 'Vyhledávání';
$strSecretRequired = 'Nastavte klíč pro šifrování cookies (blowfish_secret) v&nbsp;konfiguračním souboru (config.inc.php).';
$strSelectADb = 'Prosím vyberte databázi';
$strSelectAll = 'Vybrat vše';
$strSelectBinaryLog = 'Zvolte binární log pro zobrazení';
$strSelectFields = 'Zvolte sloupec (alespoň jeden):';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSelectTables = 'Vybrat tabulky';
$strSend = 'Do souboru';
$strSent = 'Odesláno';
$strServerChoice = 'Výběr serveru';
$strServerNotResponding = 'Server neodpovídá';
$strServer = 'Server';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento MySQL server běží %s. Čas spuštění: %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Proměnné';
$strServerTrafficNotes = '<b>Provoz serveru</b>: Informace o&nbsp;síťovém provozu MySQL serveru od jeho spuštění.';
$strServerVars = 'Proměnné a nastavení serveru';
$strServerVersion = 'Verze MySQL';
$strSessionValue = 'Hodnota sezení';
$strSetEnumVal = 'Pokud je sloupec typu "enum" nebo "set", zadávejte hodnoty v&nbsp;následujícím formátu: \'a\',\'b\',\'c\'...<br />Pokud potřebujete zadat zpětné lomítko ("\") nebo jednoduché uvozovky ("\'") mezi těmito hodnotami, napište před ně zpětné lomítko (příklad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShowAll = 'Zobrazit vše';
$strShowColor = 'Barevné šipky';
$strShowDatadictAs = 'Formát datového slovníku';
$strShowFullQueries = 'Zobrazit celé dotazy';
$strShowGrid = 'Zobrazit mřížku';
$strShowingRecords = 'Zobrazeny záznamy';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowTableDimension = 'Rozměry tabulek';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strShow = 'Zobrazit';
$strSimplifiedChinese = 'Zjednodušená čínština';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSlovak = 'Slovenština';
$strSlovenian = 'Slovinština';
$strSortByKey = 'Setřídit podle klíče';
$strSort = 'Řadit';
$strSpaceUsage = 'Využití místa';
$strSpanish = 'Španělština';
$strSplitWordsWithSpace = 'Slova jsou oddělena mezerou (" ").';
$strSQLExportType = 'Typ vytvořených dotazů';
$strSQLOptions = 'Nastavení SQL exportu';
$strSQLParserBugMessage = 'Je možné, že jste našli chybu v&nbsp;SQL parseru. Prosím prozkoumejte podrobně SQL dotaz, především jestli jsou správně uvozovky a jestli nejsou proházené. Další možnost selhání je pokud nahráváte soubor s&nbsp;binárními daty nezapsanými v&nbsp;uvozovkách. Můžete také vyzkoušet příkazovou řádku MySQL. Níže uvedený výstup z&nbsp;MySQL serveru (pokud je nějaký) Vám také může pomoci při zkoumání problému. Pokud stále máte problémy nebo pokud SQL parser ohlásí chybu u dotazu, který na příkazové řádce funguje, prosím pokuste se zredukovat dotaz na co nejmenší, ve kterém se problém ještě vyskytne, a ohlaste chybu na stránkách phpMyAdmina spolu se sekcí VÝPIS uvedenou níže:';
$strSQLParserUserError = 'Pravděpodobně máte v&nbsp;SQL dotazu chybu. Níže uvedený výstup MySQL serveru (pokud je nějaký) Vám také může pomoci při zkoumání problému';
$strSQLQuery = 'SQL-dotaz';
$strSQLResult = 'Výsledek SQL dotazu';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Chybný identifikátor';
$strSQPBugUnclosedQuote = 'Neuzavřené uvozovky';
$strSQPBugUnknownPunctuation = 'Neznámé interpunkční znaménko';
$strStatCheckTime = 'Poslední kontrola';
$strStatCreateTime = 'Vytvoření';
$strStatement = 'Údaj';
$strStatUpdateTime = 'Poslední změna';
$strStatus = 'Stav';
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'Přidat DROP TABLE';
$strStrucExcelCSV = 'CSV data pro MS Excel';
$strStrucNativeExcel = 'Nativní MS Excel';
$strStrucOnly = 'Pouze strukturu';
$strStructPropose = 'Navrhnout strukturu tabulky';
$strStructure = 'Struktura';
$strSubmit = 'Odešli';
$strSuccess = 'Váš SQL-dotaz byl úspěšně vykonán';
$strSum = 'Celkem';
$strSwedish = 'Švédština';
$strSwitchToDatabase = 'Přepnout na zkopírovanou databázi';
$strSwitchToTable = 'Přepnout na zkopírovanou tabulku';

$strTableComments = 'Komentář k tabulce';
$strTableEmpty = 'Jméno tabulky je prázdné!';
$strTableHasBeenDropped = 'Tabulka %s byla odstraněna';
$strTableHasBeenEmptied = 'Tabulka %s byla vyprázdněna';
$strTableHasBeenFlushed = 'Vyrovnávací paměť pro tabulku %s byla vyprázdněna';
$strTableMaintenance = ' Údržba tabulky ';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametry tabulky';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTable = 'Tabulka';
$strTableType = 'Typ tabulky';
$strTakeIt = 'zvolit';
$strTblPrivileges = 'Oprávnění pro jednotlivé tabulky';
$strTextAreaLength = 'Tento sloupec možná nepůjde <br />(kvůli délce) upravit ';
$strThai = 'Thajština';
$strTheContent = 'Obsah souboru byl vložen';
$strTheContents = 'Obsah souboru přepíše obsah zvolené tabulky v&nbsp;těch řádcích, kde je stejný primární nebo unikátní klíč.';
$strTheme = 'Vzhled';
$strTheTerminator = 'Sloupce jsou odděleny tímto znakem.';
$strThisHost = 'Tento počítač';
$strThisNotDirectory = 'Nebyl zadán adresář';
$strThreadSuccessfullyKilled = 'Vlákno %s bylo úspěšně zabito.';
$strTime = 'Čas';
$strToggleScratchboard = 'Zobrazit grafický návrh';
$strTotal = 'celkem';
$strTotalUC = 'Celkem';
$strTraditionalChinese = 'Tradiční čínština';
$strTraditionalSpanish = 'Tradiční španělština';
$strTraffic = 'Provoz';
$strTransformation_application_octetstream__download = 'Zobrazí odkaz na stáhnutí dat. První parametr je jméno souboru, druhý jméno sloupce v tabulce obsahující jméno souboru. Pokud zadáte druhý parametr, první musí být prázdný.';
$strTransformation_image_jpeg__inline = 'Zobrazí náhled obrázku s&nbsp;odkazem na obrázek; parametry šířka a výška v&nbsp;bodech (poměr stran obrázku zůstane zachován)';
$strTransformation_image_jpeg__link = 'Zobrazí odkaz na obrázek (například stáhnutí pole blob).';
$strTransformation_image_png__inline = 'Viz image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zobrazí datum nebo čas (TIME, TIMESTAMP a DATETIME) podle místního nastavení. První parametr je posun (v&nbsp;hodinách), který bude přidán k&nbsp;času (výchozí je 0). Druhý parametr je formátovací řetězec pro funkci strftime().';
$strTransformation_text_plain__external = 'JEN PRO LINUX: Spustí externí program, na jeho standardní vstup pošle obsah pole a zobrazí výstup programu. Výchozí je program Tidy, který pěkně zformátuje HTML. Z&nbsp;bezpečnostních důvodů musíte jména povolených programů zapsat do souboru libraries/transformations/text_plain__external.inc.php. První parametr je číslo programu, který má být spuštěn a druhý parametr udává parametry tohoto programu. Třetí parametr určuje, zda mají být ve výstupu nahrazeny HTML entity (např. pro zobrazení zdrojového kódu HTML) (výchozí je 1, tedy převádět na entity), čtvrtý (při nastavení na 1) zajistí přidání parametru NOWRAP k&nbsp;vypisovanému textu, čímž se zachová formátování (výchozí je 1).';
$strTransformation_text_plain__formatted = 'Zachová původní formátování sloupce, tak jak je uložen v&nbsp;databázi.';
$strTransformation_text_plain__imagelink = 'Zobrazí obrázek a odkaz z&nbsp;pole obsahujícího odkaz na obrázek. První parametr je prefix URL (například "http://mojedomena.cz/", druhý a třetí šířku a výšku obrázku.';
$strTransformation_text_plain__link = 'Zobrazí odkaz z&nbsp;pole obsahující odkaz. První parametr je prefix URL (například "http://mojedomena.cz/", druhý text odkazu.';
$strTransformation_text_plain__substr = 'Zobrazí jen část textu. První parametr je posun od začátku (výchozí je 0) a druhý určuje délku textu, který se má zobrazit, pokud není uveden, bude zobrazen zbytek textu. Třetí parametr určuje jaký text má být přidán za zkrácený text (výchozí je ...).';
$strTransformation_text_plain__unformatted = 'Zobrazí text pomocí HTML entit, případný HTML se zobrazí v&nbsp;původním tvaru.';
$strTruncateQueries = 'Zobrazit zkrácené dotazy';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajinština';
$strUncheckAll = 'Odškrtnout vše';
$strUnicode = 'Unicode';
$strUnique = 'Unikátní';
$strUnknown = 'neznámý';
$strUnselectAll = 'Odznačit vše';
$strUpdatePrivMessage = 'Byla aktualizována oprávnění pro %s.';
$strUpdateProfileMessage = 'Přístup byl změněn.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUpdComTab = 'Podívejte se prosím do dokumentace, jak aktualizovat tabulku s&nbsp;informacemi o&nbsp; sloupcích (tabulka column_comments)';
$strUpgrade = 'Měli byste aktualizovat %s na verzi %s nebo vyšší.';
$strUsage = 'Používá';
$strUseBackquotes = 'Použít zpětné uvozovky u&nbsp;jmen tabulek a sloupců';
$strUseHostTable = 'Použít tabulku s&nbsp;počítači';
$strUserAlreadyExists = 'Uživatel %s již existuje!';
$strUserEmpty = 'Jméno uživatele je prázdné!';
$strUserName = 'Jméno uživatele';
$strUserNotFound = 'Zvolený uživatel nebyl nalezen v&nbsp;tabulce oprávnění.';
$strUserOverview = 'Přehled uživatelů';
$strUsersDeleted = 'Vybraní uživatelé byli úspěšně odstraněni.';
$strUsersHavingAccessToDb = 'Uživatelé mající přístup k&nbsp;&quot;%s&quot;';
$strUser = 'Uživatel';
$strUseTabKey = 'Použijte klávesu TAB pro pohyb mezi hodnotami nebo CTRL+šipky po pohyb všemi směry.';
$strUseTables = 'Použít tabulky';
$strUseTextField = 'Použít textové pole';
$strUseThisValue = 'Použít tuto hodnotu';

$strValidateSQL = 'Zkontrolovat SQL';
$strValidatorError = 'SQL validátor nemohl být inicializován. Prosím zkontrolujte, jestli máte požadovaná rozšíření PHP, která jsou uvedena v&nbsp;%sdokumentaci%s.';
$strValue = 'Hodnota';
$strVar = 'Proměnná';
$strViewDumpDatabases = 'Export databází';
$strViewDumpDB = 'Export databáze';
$strViewDump = 'Export tabulky';

$strWebServerUploadDirectoryError = 'Adresář určený pro upload souborů nemohl být otevřen';
$strWebServerUploadDirectory = 'soubor z&nbsp;adresáře pro upload';
$strWelcome = 'Vítejte v&nbsp;%s';
$strWestEuropean = 'Západní Evropa';
$strWildcard = 'maska';
$strWindowNotFound = 'Cílové okno prohlížeče nemohlo být aktualizováno. Možná jste zavřel rodičovské okno, nebo prohlížeč blokuje operace mezi okny z důvodu bezpečnostních nastavení.';
$strWithChecked = 'Zaškrtnuté:';
$strWritingCommentNotPossible = 'Nelze zapsat komentář';
$strWritingRelationNotPossible = 'Nelze zapsat relaci';
$strWrongUser = 'Špatné uživatelské jméno nebo heslo. Přístup odepřen.';

$strXML = 'XML';

$strYes = 'Ano';

$strZeroRemovesTheLimit = 'Poznámka: Nastavení těchto parametrů na 0 (nulu) odstraní omezení.';
$strZip = '"zazipováno"';

?>
