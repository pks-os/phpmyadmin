<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Січ', 'Лют', 'Бер', 'Квт', 'Трв', 'Чрв', 'Лип', 'Сер', 'Вер', 'Жов', 'Лис', 'Гру');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y р., %H:%M';

$timespanfmt = '%s днів, %s годин, %s хвилин і %s секунд';

$strAPrimaryKey = 'Було додано первинний ключ до %s';
$strAbortedClients = 'Перервано';
$strAbsolutePathToDocSqlDir = 'Прошу задати абсолютний шлях на веб-сервері до каталогу docSQL';
$strAccessDenied = 'Доступ заборонено';
$strAccessDeniedExplanation = 'phpMyAdmin спробував з\'єднатися з MySQL сервером, але сервер не дозволив під\'єднання. Прошу перевірити значення host, username та password у файлі config.inc.php та впевнитися, що вони відповідають даним отриманим Вами від адміністратора MySQL сервера.';
$strAction = 'Дія';
$strAddDeleteColumn = 'Додати/забрати колонку критерію';
$strAddDeleteRow = 'Додати/забрати рядок критерію';
$strAddDropDatabase = 'Додати DROP DATABASE';
$strAddIntoComments = 'Додати коментар';
$strAddNewField = 'Додати нове поле';
$strAddPrivilegesOnDb = 'Додати права для цієї бази даних';
$strAddPrivilegesOnTbl = 'Додати права для цієї таблиці';
$strAddSearchConditions = 'Додати умови пошуку (тіло для умови "where"):';
$strAddToIndex = 'Додати до індексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Додати нового користувача';
$strAddUserMessage = 'Було додано нового користувача.';
$strAddedColumnComment = 'Додано коментар до колонки';
$strAddedColumnRelation = 'Додано зв\'язок для колонки';
$strAdministration = 'Адміністратор';
$strAffectedRows = 'Задіяні рядки:';
$strAfter = 'Після %s';
$strAfterInsertBack = 'Повернутись';
$strAfterInsertNewInsert = 'Вставити новий запис';
$strAll = 'Все';
$strAllTableSameWidth = 'показувати всі таблиці однакової ширини?';
$strAlterOrderBy = 'Змінити порядок таблиці';
$strAnIndex = 'Було додано індекс для %s';
$strAnalyzeTable = 'Аналіз таблиці';
$strAnd = 'І';
$strAny = 'Довільний';
$strAnyHost = 'Довільний хост';
$strAnyUser = 'Довільний користувач';
$strArabic = 'Арабське';
$strArmenian = 'Вірменське';
$strAscending = 'Зростаючий';
$strAtBeginningOfTable = 'На початку таблиці';
$strAtEndOfTable = 'У кінці таблиці';
$strAttr = 'Атрибути';
$strAutodetect = 'Автовизначення';
$strAutomaticLayout = 'Автоматичний layout';

$strBack = 'Назад';
$strBaltic = 'Балтійське';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двійковий ';
$strBinaryDoNotEdit = ' Двійкові дані - не редагуються ';
$strBookmarkDeleted = 'Закладку було видалено.';
$strBookmarkLabel = 'Мітка';
$strBookmarkQuery = 'Закладка на SQL-запит';
$strBookmarkThis = 'Закладка на даний SQL-запит';
$strBookmarkView = 'Лише перегляд';
$strBrowse = 'Переглянути';
$strBulgarian = 'Болгарське';
$strBzError = 'phpMyAdmin не може скомпресувати dump через пошкоджене Bz2 доповнення у цій версії PHP. Наполегливо рекомендуєм встановити у конфіґураційному файлі Вашого phpMyAdmin директиву <code>$cfg[\'BZipDump\']</code> на <code>FALSE</code>. Якщо Ви хочете використовувати можливості Bz2 компресування, Вам необхідно поновити версію PHP. Див. детальніше у повідомленнях про помилки %s.';
$strBzip = 'запакувати в "bzip"';

$strCSVOptions = 'CSV опції';
$strCannotLogin = 'Не можу зареєструватися на MySQL сервері';
$strCantLoad = 'не можу завантажити %s,<br />прошу перевірити конфігурацію PHP.';
$strCantLoadRecodeIconv = 'Не можу завантажити iconv чи recode extension необхідні для зміни charset-у, сконфігуруйте php так, щоб можна було використовувати ці extensions, або забороніть зміну charset-у у phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Неможливо перейменувати індекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не можу  використати ні/або iconv, ні/або libiconv, ні/або функцію recode_string поки буде завантажено extension reports. Перевірте Вашу php конфігурацію.';
$strCardinality = 'Кількість елементів';
$strCarriage = 'Повернення каретки: \\r';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'СхідноЄвропейське';
$strChange = 'Змінити';
$strChangeCopyMode = 'Створити нового користувача з такими ж правами і ...';
$strChangeCopyModeCopy = '... залишити старого.';
$strChangeCopyModeDeleteAndReload = ' ... знищити старого з таблиці користувачів та перевантажити права після того.';
$strChangeCopyModeJustDelete = ' ... знищити старого з таблиці користувачів.';
$strChangeCopyModeRevoke = ' ... анулювати всі активні права старого користувача, знищивши його після того.';
$strChangeCopyUser = 'Змінити реєстраційні дані / Копіювати користувача';
$strChangeDisplay = 'Виберіть поля для відображення';
$strChangePassword = 'Змінити пароль';
$strCharset = 'Набір символів';
$strCharsetOfFile = 'Кодування файлу:';
$strCharsets = 'Кодування';
$strCharsetsAndCollations = 'Набори символів та схеми';
$strCheckAll = 'Відмітити все';
$strCheckPrivs = 'Перевірити права';
$strCheckPrivsLong = 'Перевірити права для бази даних &quot;%s&quot;.';
$strCheckTable = 'Перевірити таблицю';
$strChoosePage = 'Прошу вибрати сторінку для редагування';
$strColComFeat = 'Показувати коментарі стовпців';
$strCollation = 'Порівняння';
$strColumnNames = 'Назви колонок';
$strColumnPrivileges = 'Права, які стосуються колонок таблиці';
$strCommand = 'Команда';
$strComments = 'Коментарі';
$strCompleteInserts = 'Повна вставка';
$strCompression = 'Стискання';
$strConfigFileError = 'phpMyAdmin не може прочитати конфігураційний файл <br />Це може статися у тому випадку, коли php натрапить на синтаксичну помилку (parse error) у ньому, або не може знайти самого файлу.<br />Завантажте конфігураційний файл безпосередньо за допомогою посилання поданого нижче і прочитайте отримані повідомлення про помилки (php error messages). Найчастіше десь у файлі просто бракує лапок чи двокрапки.  <br />Якщо Ви отримаєте порожню сторінку, - значить все в порядку.';
$strConfigureTableCoord = 'Прошу сконфіґурувати координати таблиці %s';
$strConnections = 'З\'єднань';
$strCookiesRequired = 'З цього моменту Cookies повинні бути дозволені.';
$strCopyTable = 'Скопіювати таблицю в (база даних<b>.</b>таблиця):';
$strCopyTableOK = 'Таблицю %s було скопійовано в %s.';
$strCopyTableSameNames = 'Не можу скопіювати таблицю саму в себе!';
$strCouldNotKill = 'phpMyAdmin не може припинити процес %s. Він вже напевно був зупинений.';
$strCreate = 'Створити';
$strCreateIndex = 'Створити індекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Створити новий індекс';
$strCreateNewDatabase = 'Створити нову БД';
$strCreateNewTable = 'Створити нову таблицю в БД %s';
$strCreatePage = 'Створити нову сторінку';
$strCreatePdfFeat = 'Створити PDF-файл';
$strCriteria = 'Критерій';
$strCroatian = 'Кроатське';
$strCyrillic = 'Кириличне';
$strCzech = 'Чеське';

$strDBComment = 'Коментар бази даних: ';
$strDBGContext = 'Контекст';
$strDBGContextID = 'Контекст ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Рядок';
$strDBGMaxTimeMs = 'Макс час, мс';
$strDBGMinTimeMs = 'Мін час, мс';
$strDBGModule = 'Модуль';
$strDBGTimePerHitMs = 'Time/Hit, мс';
$strDBGTotalTimeMs = 'Загальний час, мс';
$strDanish = 'Данське';
$strData = 'Дані';
$strDataDict = 'Словник даних';
$strDataOnly = 'Лише дані';
$strDatabase = 'БД';
$strDatabaseExportOptions = 'Налаштування експорту бази даних';
$strDatabaseHasBeenDropped = 'Базу даних %s знищено.';
$strDatabaseNoTable = 'Ця база даних не містить таблиць!';
$strDatabases = 'Бази Даних';
$strDatabasesDropped = '%s баз(а\и) даних успішно знищено.';
$strDatabasesStats = 'Статистика баз даних';
$strDatabasesStatsDisable = 'Заборонити статистику';
$strDatabasesStatsEnable = 'Дозволити статистику';
$strDatabasesStatsHeavyTraffic = 'Примітка: Активізація збору статистики бази даних може спричинити значний трафік між веб сервером та базою даних MySQL.';
$strDbPrivileges = 'Права, які стосуються бази даних';
$strDbSpecific = 'специфічний для бази даних';
$strDefault = 'По замовчуванню';
$strDefaultValueHelp = 'Для значень за замовчуванням, введіть лише значення, без використання зворотніх слешів чи лапок, у такому форматі: a';
$strDelOld = 'Ця сторінка має посилання на таблицю, якої вже немає. Бажаєте видалити ці посилання?';
$strDelete = 'Видалити';
$strDeleteAndFlush = 'Усунути користувачів і перезавантажити права після цього.';
$strDeleteAndFlushDescr = 'Це кращий спосіб, проте перезавантаження прав може потривати певний час.';
$strDeleted = 'Рядок видалено';
$strDeletedRows = 'Видалено наступні рядки:';
$strDeleting = 'Усунути %s';
$strDescending = 'Спадаючий';
$strDescription = 'Опис';
$strDictionary = 'словник';
$strDisabled = 'заблоковано';
$strDisplayFeat = 'Показати можливості';
$strDisplayOrder = 'Порядок перегляду:';
$strDisplayPDF = 'Показати PDF схему';
$strDoAQuery = 'Виконати "запит згідно прикладу" (символ підставновки: "%")';
$strDoYouReally = 'Ви насправді хочете ';
$strDocu = 'Документація';
$strDrop = 'Знищити';
$strDropSelectedDatabases = 'Знищити вибрані бази даних';
$strDropUsersDb = 'Усунути бази даних, які мають такі ж назви як імена користувачів.';
$strDumpSaved = 'Dump збережено у файл %s.';
$strDumpXRows = 'Зґенерувати дамп %s рядків починаючи з %s -го.';
$strDumpingData = 'Дамп даних таблиці';
$strDynamic = 'динамічний';

$strEdit = 'Редагувати';
$strEditPDFPages = 'Редагувати PDF Сторінки';
$strEditPrivileges = 'Редагування привілеїв';
$strEffective = 'Ефективність';
$strEmpty = 'Очистити';
$strEmptyResultSet = 'MySQL повернула пустий результат (тобто нуль рядків).';
$strEnabled = 'дозволено';
$strEnd = 'Кінець';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = 'Англійське';
$strEnglishPrivileges = ' Зауваження: привілеї MySQL задаються по-англійськи ';
$strError = 'Помилка';
$strEstonian = 'Естонське';
$strExcelOptions = 'налаштування Excel';
$strExecuteBookmarked = 'Виконати збережений запит';
$strExplain = 'Тлумачити SQL';
$strExport = 'Експорт';
$strExtendedInserts = 'Розширена вставка';
$strExtra = 'Додатково';

$strFailedAttempts = 'Невдалих спроб';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s було видалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Порожній перелік полів! ';
$strFieldsEnclosedBy = 'Поля взято в';
$strFieldsEscapedBy = 'Поля екрануються';
$strFieldsTerminatedBy = 'Поля розділені';
$strFileAlreadyExists = 'Файл %s існує на сервері, прошу змінити назву файлу, або відмітити опцію заміни існуючих файлів.';
$strFileCouldNotBeRead = 'Неможливо прочитати файл';
$strFileNameTemplate = 'Шаблон назви файлу';
$strFileNameTemplateHelp = 'Використати __DB__ як назву бази даних, __TABLE__ як назву таблиці і %sдовільні strftime%s опції для визначення часової мітки, розширення будуть додані автоматично. Будь-який інший текст буде збережено.';
$strFileNameTemplateRemember = 'запам\'ятати шаблон';
$strFixed = 'фіксований';
$strFlushPrivilegesNote = 'Примітка: phpMyAdmin отримує права користувачів безпосередньо з таблиці прав MySQL. Зміст цієї таблиці може відрізнятися від прав, які використовуються сервером, якщо в цю таблицю вносилися зміни вручну. У цьому випадку Вам необхідно %sперезавантажити права%s перед продовженням.';
$strFlushTable = 'Очистити кеш таблиці ("FLUSH")';
$strFormEmpty = 'Не задано значення для форми!';
$strFormat = 'Формат';
$strFullText = 'Повні тексти';
$strFunction = 'Функція';

$strGenBy = 'Згенеровано';
$strGenTime = 'Час створення';
$strGeneralRelationFeat = 'Загальні можливості';
$strGerman = 'Німецьке';
$strGlobal = 'глобальний';
$strGlobalPrivileges = 'Глобальні права';
$strGlobalValue = 'Загальне значення';
$strGo = 'Вперед';
$strGrantOption = 'Grant';
$strGreek = 'Грецьке';
$strGzip = 'запакувати в "gzip"';

$strHasBeenAltered = 'була змінена.';
$strHasBeenCreated = 'була створена.';
$strHaveToShow = 'Необхідно вибрати принаймі один Стовпчик для показу';
$strHebrew = 'Іврит';
$strHome = 'На початок';
$strHomepageOfficial = 'Офіційна сторінка phpMyAdmin';
$strHost = 'Хост';
$strHostEmpty = 'Порожнє ім\'я хоста!';
$strHungarian = 'Мадярське';

$strId = 'ID';
$strIdxFulltext = 'ПовнТекст';
$strIfYouWish = 'Якщо Ви бажаєте завантажити лише деякі колонки таблиці, задайте розділений комами список полів.';
$strIgnore = 'Ігноруровати';
$strIgnoringFile = 'Проіґноровано файл %s';
$strImportDocSQL = 'Імпортувати docSQL файли';
$strImportFiles = 'Імпорт файлів';
$strImportFinished = 'Імпорт завершено';
$strInUse = 'використовується';
$strIndex = 'Індекс';
$strIndexHasBeenDropped = 'Індекс %s було знищено';
$strIndexName = 'Назва індекса&nbsp;:';
$strIndexType = 'Тип індекса&nbsp;:';
$strIndexes = 'Індекси';
$strInnodbStat = 'Статус InnoDB';
$strInsecureMySQL = 'Ваш файл конфіґурації містить параметри (root без паролю) які відповідають привілейованому користувачу MySQL. Ваш MySQL сервер у цьому випадку відкритий для вторгнення і тому Вам обов\'язково слід виправити цю прогалину у безпеці.';
$strInsert = 'Вставити';
$strInsertAsNewRow = 'Вставити як новий рядок';
$strInsertNewRow = 'Вставити новий рядок';
$strInsertTextfiles = 'Вставити текстові файли в таблицю';
$strInsertedRowId = 'Вставлено рядок id:';
$strInsertedRows = 'Додані рядки:';
$strInstructions = 'Інструкції';

$strJapanese = 'Японське';
$strJumpToDB = 'Перейти до бази даних &quot;%s&quot;.';
$strJustDelete = 'Щойно усунуто користувачів з таблиці прав.';
$strJustDeleteDescr = '&quot;Усунуті&quot; користувачі все ще матимуть доступ до сервера до тих пір, поки не будуть перезавантажені права.';

$strKeepPass = 'Не змінювати пароль';
$strKeyname = 'Ім\'я ключа';
$strKill = 'Вбити';
$strKorean = 'Корейське';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'опції LaTeX';
$strLandscape = 'Landscape';
$strLengthSet = 'Довжини/Значення*';
$strLimitNumRows = 'записів на сторінці';
$strLineFeed = 'Символ кінця рядка: \\n';
$strLinesTerminatedBy = 'Рядки розділено';
$strLinkNotFound = 'Лінк не знайдено';
$strLinksTo = 'Лінки до';
$strLithuanian = 'Литовське';
$strLoadExplanation = 'За замовчуванням відмічено кращий метод, проте Ви можете вибрати інший, якщо цей не вдасться.';
$strLoadMethod = 'Спосіб завантаження';
$strLocalhost = 'Локальний';
$strLocationTextfile = 'вкажіть розташування текстового файлу';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Ім\'я користувача:';
$strLogin = 'Вхід в систему';
$strLoginInformation = 'Вхідна інформація (Login)';
$strLogout = 'Вийти з системи';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'Доступні MIME-types';
$strMIME_available_transform = 'Доступні перетворення';
$strMIME_description = 'Опис';
$strMIME_nodescription = 'Немає опису для цього перетворення.<br />Прошу питатися автора, що робить %s.';
$strMIME_transformation = 'Перетворення МІМЕ-типу бровзером';
$strMIME_transformation_note = 'Щоб отримати список можливих опцій і їх MIME-type перетворень, натисніть %sописи перетворень%s';
$strMIME_transformation_options = 'Опції перетворення';
$strMIME_transformation_options_note = 'Прошу вписати значення опцій перетворення у такому форматі: \'a\',\'b\',\'c\'...<br />Якщо необхідно подати зворотній слеш ("\") чи поодинокі лапки ("\'") у цих значеннях, поставте перед ними додатковий зворотній слеш (наприклад \'\\\\xyz\' чи \'a\\\'b\').';
$strMIME_without = 'MIME-types подані курсивом не мають окремих функцій перетворення';
$strModifications = 'Модифікації було збережено';
$strModify = 'Змінити';
$strModifyIndexTopic = 'Змінити індекс';
$strMoreStatusVars = 'Додаткові статусні змінні';
$strMoveTable = 'Перенести таблицю в (база даних<b>.</b>таблиця):';
$strMoveTableOK = 'Таблицю %s було перенесено в %s.';
$strMoveTableSameNames = 'Не можу перенести таблицю саму в себе!';
$strMultilingual = 'багатомовні';
$strMustSelectFile = 'Слід вибрати файл, який Ви хочете вставити.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL перезавантажено.';
$strMySQLSaid = 'Відповідь MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% як %pma_s3%';
$strMySQLShowProcess = 'Показати процеси';
$strMySQLShowStatus = 'Показати стан MySQL';
$strMySQLShowVars = 'Показати системні змінні MySQL';

$strName = 'Назва';
$strNext = 'Дальше';
$strNo = 'Ні';
$strNoDatabases = 'БД відсутні';
$strNoDatabasesSelected = 'Не вибрано бази даних.';
$strNoDescription = 'без опису';
$strNoDropDatabases = 'Оператори "DROP DATABASE" заборонені.';
$strNoExplain = 'Не тлумачити SQL';
$strNoFrames = 'Для роботи phpMyAdmin потрібно браузер з підтримкою <b>фреймів</b>.';
$strNoIndex = 'Індекс не визначено!';
$strNoIndexPartsDefined = 'Не визначено частини індекса!';
$strNoModification = 'Змін немає';
$strNoOptions = 'Цей формат не має опцій';
$strNoPassword = 'Без паролю';
$strNoPermission = 'Веб-сервер не має привілеїв для збереження файлу %s.';
$strNoPhp = 'без PHP коду';
$strNoPrivileges = 'Без привілеїв';
$strNoQuery = 'Не задано SQL-запит!';
$strNoRights = 'Ви для цього маєте недостатньо прав!';
$strNoSpace = 'Бракує місця для збереження файлу %s.';
$strNoTablesFound = 'В БД не виявлено таблиць.';
$strNoUsersFound = 'Не знайдено користувача.';
$strNoValidateSQL = 'Не перевіряти SQL';
$strNone = 'Немає';
$strNotNumber = 'Це не число!';
$strNotOK = 'не OK';
$strNotSet = 'Таблицю <b>%s</b> не знайдено або не визначено у %s';
$strNotValidNumber = ' недопустима кількість рядків!';
$strNull = 'Нуль';
$strNumSearchResultsInTable = '%s співпадіння у таблиці <i>%s</i>';
$strNumSearchResultsTotal = '<b>Разом:</b> <i>%s</i> співпадіння';
$strNumTables = 'Таблиць';

$strOK = 'OK';
$strOftenQuotation = 'Звичайно лапки. ПО ВИБОРУ означає, що лише поля char і varchar беруться в лапки.';
$strOperations = 'Операцій';
$strOptimizeTable = 'Оптимізувати таблицю';
$strOptionalControls = 'По вибору. Контролює читання та написання спеціальних символів.';
$strOptionally = 'ПО ВИБОРУ';
$strOr = 'або';
$strOverhead = 'Надмірні видатки';
$strOverwriteExisting = 'Заміняти існуючі файли';

$strPHP40203 = 'Ви використовуєте версію PHP 4.2.3, яка має серйозну помилку при роботі з multi-byte strings (mbstring). Див PHP bug report 19404. Цю версію PHP не рекомендується використовувати з phpMyAdmin.';
$strPHPVersion = 'Версія PHP';
$strPageNumber = 'Номер сторінки:';
$strPaperSize = 'Формат паперу';
$strPartialText = 'Часткові тексти';
$strPassword = 'Пароль';
$strPasswordChanged = 'Пароль для %s успішно змінено.';
$strPasswordEmpty = 'Порожній пароль!';
$strPasswordNotSame = 'Паролі не однакові!';
$strPdfDbSchema = 'Схема бази даних "%s" - Сторінка %s';
$strPdfInvalidTblName = 'Таблиці "%s" не існує!';
$strPdfNoTables = 'Таблиць немає';
$strPerHour = 'за годину';
$strPerMinute = 'за хвилину';
$strPerSecond = 'за секунду';
$strPhoneBook = 'телефонна книга';
$strPhp = 'Створити PHP код';
$strPmaDocumentation = 'Документація по phpMyAdmin';
$strPmaUriError = 'Змінна <tt>$cfg[\'PmaAbsoluteUri\']</tt> ПОВИННА бути встановлена у Вашому конфіґураційному файлі!';
$strPortrait = 'Portrait';
$strPos1 = 'Початок';
$strPrevious = 'Назад';
$strPrimary = 'Первинний';
$strPrimaryKeyHasBeenDropped = 'Первинний ключ було знищено';
$strPrimaryKeyName = 'Ім\'я первинного ключа повинно бути PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>повинно</b> бути іменем <b>лише</b> первинного ключа!)';
$strPrint = 'Друк';
$strPrintView = 'Версія для друку';
$strPrivDescAllPrivileges = 'Дозволити всі права за винятком GRANT.';
$strPrivDescAlter = 'Дозволити змінювати структуру наявних таблиць.';
$strPrivDescCreateDb = 'Дозволити створювати нові бази даних та таблиці.';
$strPrivDescCreateTbl = 'Дозволити створювати нові таблиці.';
$strPrivDescCreateTmpTable = 'Дозволити створювати тимчасові таблиці.';
$strPrivDescDelete = 'Дозволити знищувати дані з таблиць.';
$strPrivDescDropDb = 'Дозволити знищувати бази даних та таблиці.';
$strPrivDescDropTbl = 'Дозволити знищувати таблиці.';
$strPrivDescExecute = 'Дозволити виконання збережених процедур; Неефективно для цієї версії MySQL.';
$strPrivDescFile = 'Дозволити імпорт даних з файлів, та експорт у файли.';
$strPrivDescGrant = 'Дозволити додавання користувачів та прав без перезавантаження таблиці прав.';
$strPrivDescIndex = 'Дозволити створення та знищення індексів.';
$strPrivDescInsert = 'Дозволити вставку та заміну даних.';
$strPrivDescLockTables = 'Дозволити блокування таблиць для біжучих потоків.';
$strPrivDescMaxConnections = 'Обмежити кількість нових під\'єднань, які користувач може створювати протягом години.';
$strPrivDescMaxQuestions = 'Обмежити кількість запитів, які користувач може надіслати серверу протягом години.';
$strPrivDescMaxUpdates = 'Обмежити кількість команд, що вносять зміни до будь-якої таблиці чи бази даних, які користувач може виконати протягом години.';
$strPrivDescProcess3 = 'Дозволити припиняти процеси інших користувачів.';
$strPrivDescProcess4 = 'Дозволити перегляд повних запитів у списку процесів.';
$strPrivDescReferences = 'Неефективно для цієї версії MySQL.';
$strPrivDescReload = 'Дозволити перезавантаження установок та очищення кешу сервера.';
$strPrivDescReplClient = 'Надати користувачу право запитувати де є slaves / masters.';
$strPrivDescReplSlave = 'Необхідно для реплікації slaves.';
$strPrivDescSelect = 'Дозволити читання даних.';
$strPrivDescShowDb = 'Надати доступ до повного списку баз даних.';
$strPrivDescShutdown = 'Дозволити вимкнення сервера.';
$strPrivDescSuper = 'Дозволити під\'єднання, навіть якщо досягнуто максимальної кількості під\'єднань; Обов\'язково для більшості адміністративних операцій таких як встановлення ґлобальних змінних чи припинення процесів інших користувачів.';
$strPrivDescUpdate = 'Дозволити зміну даних.';
$strPrivDescUsage = 'Немає прав.';
$strPrivileges = 'Привілеї';
$strPrivilegesReloaded = 'Права успішно перезавантажено.';
$strProcesslist = 'Список процесів';
$strPutColNames = 'Дати назви полів у першому рядку';

$strQBE = 'Запит згідно прикладу';
$strQBEDel = 'Видалити';
$strQBEIns = 'Вставити';
$strQueryFrame = 'Вікно запиту';
$strQueryOnDb = 'SQL-запит до БД <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>Статистика запитів</b>: З моменту запуску, до сервера було надіслано %s запитів.';
$strQueryTime = 'Запит виконувався %01.4f сек';
$strQueryType = 'Тип запиту';
$strQueryWindowLock = 'Не перекривати цей запит в інших вікнах';

$strReType = 'Підтвердження';
$strReceived = 'Отримано';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Перевір цілісність даних на рівні посилань:';
$strRelationNotWorking = 'Додаткова можливість роботи із залінкованими таблицями деактивована. Для того, щоб довідатись чому, натисніть %sтут%s.';
$strRelationView = 'Перегляд залежностей';
$strRelationalSchema = 'Схема зв\'язків';
$strRelations = 'Зв\'язки';
$strReloadFailed = 'Не вдалось перезавантажити MySQL.';
$strReloadMySQL = 'Перезавантажити MySQL';
$strReloadingThePrivileges = 'Перезавантаження прав';
$strRemoveSelectedUsers = 'Усунути відмічених користувачів';
$strRenameTable = 'Перейменувати таблицю в';
$strRenameTableOK = 'Таблицю %s було перейменовано в %s';
$strRepairTable = 'Ремонтувати таблицю';
$strReplace = 'Замінити';
$strReplaceNULLBy = 'Замінити NULL на';
$strReplaceTable = 'Замінити дані таблиці даними з файлу';
$strReset = 'Перевстановити';
$strResourceLimits = 'Обмеження ресурсів';
$strRevoke = 'Відмінити';
$strRevokeAndDelete = 'Відмінити всі активні права користувачів та усунути їх після цього.';
$strRevokeAndDeleteDescr = 'Користувачі все ще будуть мати право КОРИСТУВАННЯ (USAGE) до тих пір, поки не будуть перезавантажені права.';
$strRevokeMessage = 'Ви змінили привілеї для %s';
$strRowLength = 'Довжина рядка';
$strRowSize = ' Розмір рядка ';
$strRows = 'Рядки';
$strRowsFrom = 'рядків з';
$strRowsModeFlippedHorizontal = 'горизонтально (rotated headers)';
$strRowsModeHorizontal = ' горизонтально ';
$strRowsModeOptions = '-го %s і дублювати заголовки через кожні %s рядків ';
$strRowsModeVertical = ' вертикально ';
$strRowsStatistic = 'Статистика рядка';
$strRunQuery = 'Виконати запит';
$strRunSQLQuery = 'Виконати SQL запит(и) до БД %і';
$strRunning = 'на %s';
$strRussian = 'Російське';

$strSQL = 'SQL';
$strSQLOptions = 'SQL опції';
$strSQLParserBugMessage = 'Можливо Ви знайшли помилку в парсері SQL. Прошу детальніше перевірити чи коректно вжиті і не пропущені лапки у Вашому запиті. Іншою можливою причиною помилки може бути те що Ви завантажили файл з двійковими даними розміщеними поза взятим в лапки текстом. Спробуйте виконати Ваш запит за допомогою оболонки MySQL з командної стрічки. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми. Якщо у Вас все ще виникають проблеми чи парсер видає помилку, а з командної стрічки запити виконуються, прошу скоротити Ваш ввідний SQL запит до одного запиту, який власне і викликає проблеми, і відішліть повідомлення про помилку з порцією даних у розділі CUT нижче:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми.';
$strSQLQuery = 'SQL-запит';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = 'Некоректний ідентифікатор';
$strSQPBugUnclosedQuote = 'Не закриті лапки';
$strSQPBugUnknownPunctuation = 'Невідомий символ пунктуації';
$strSave = 'Зберегти';
$strSaveOnServer = 'Зберегти на сервері в каталогу %s ';
$strScaleFactorSmall = 'Занадто малий масштаб щоб схема займала цілу сторінку';
$strSearch = 'Шукати';
$strSearchFormTitle = 'Шукати в базі даних';
$strSearchInTables = 'Всередині таблиць:';
$strSearchNeedle = 'Слова чи значення, які потрібно знайти (маска: "%"):';
$strSearchOption1 = 'принаймі одне з слів';
$strSearchOption2 = 'всі слова';
$strSearchOption3 = 'точну фразу';
$strSearchOption4 = 'регулярний вираз';
$strSearchResultsFor = 'Результати пошуку "<i>%s</i>" %s:';
$strSearchType = 'Знайти:';
$strSecretRequired = 'Конфігураційний файл потребує секретну фразу (пароль).';
$strSelectADb = 'Прошу вибрати БД';
$strSelectAll = 'Відмітити все';
$strSelectFields = 'Вибрати поля (щонайменше одне):';
$strSelectNumRows = 'по запиту';
$strSelectTables = 'Вибрати таблиці';
$strSend = 'Відіслати';
$strSent = 'Відправлено';
$strServer = 'Сервер';
$strServerChoice = 'Вибір сервера';
$strServerStatus = 'Інформація про роботу сервера';
$strServerStatusUptime = 'Цей MySQL сервер працює %s. Стартував %s.';
$strServerTabProcesslist = 'Процеси';
$strServerTabVariables = 'Змінні';
$strServerTrafficNotes = '<b>Трафік сервера</b>: таблиці показують статистику завантаження мережі цим MySQL сервером з моменту його запуску.';
$strServerVars = 'Змінні сервера та налаштування';
$strServerVersion = 'Версія сервера';
$strSessionValue = 'Значення сесії';
$strSetEnumVal = 'Для типів поля "enum" та "set", введіть значення згідно такого формату: \'a\',\'b\',\'c\'...<br />Якщо вам буде потрібно ввести зворотню косу риску ("\"") або поодинокі лапки ("\'") посеред цих значень, поставте перед ними зворотню косу риску (наприклад, \'\\\\xyz\' чи \'a\\\'b\').';
$strShow = 'Показати';
$strShowAll = 'Показати все';
$strShowColor = 'Показати колір';
$strShowDatadictAs = 'Формат словника';
$strShowFullQueries = 'Показати повні запити';
$strShowGrid = 'Показати сітку';
$strShowPHPInfo = 'Показати інформацію про PHP';
$strShowTableDimension = 'Показати розміри таблиць';
$strShowTables = 'Показати таблиці';
$strShowThisQuery = ' Показати даний запит знову ';
$strShowingRecords = 'Показано записи ';
$strSimplifiedChinese = 'Китайське Спрощене';
$strSingly = '(окремо)';
$strSize = 'Розмір';
$strSort = 'Посортувати';
$strSpaceUsage = 'Простір, що використовується';
$strSplitWordsWithSpace = 'Слова розділені пробілом (" ").';
$strStatCheckTime = 'Перевірено';
$strStatCreateTime = 'Створено';
$strStatUpdateTime = 'Поновлено';
$strStatement = 'Параметр';
$strStatus = 'Статус';
$strStrucCSV = 'CSV дані';
$strStrucData = 'Структуру і дані';
$strStrucDrop = 'Додати видалення таблиці';
$strStrucExcelCSV = 'CSV для даних MS Excel';
$strStrucOnly = 'Лише структуру';
$strStructPropose = 'Запропонувати структуру таблиці';
$strStructure = 'Структура';
$strSubmit = 'Виконати';
$strSuccess = 'Ваш SQL-запит було успішно виконано';
$strSum = 'Всього';
$strSwedish = 'Шведське';
$strSwitchToTable = 'Перейти до скопійованої таблиці';

$strTable = 'таблиця ';
$strTableComments = 'Коментар до таблиці';
$strTableEmpty = 'Порожня назва таблиці!';
$strTableHasBeenDropped = 'Таблицю %s було знищено';
$strTableHasBeenEmptied = 'Таблицю %s було очищено';
$strTableHasBeenFlushed = 'Було очищено кеш таблиці %s';
$strTableMaintenance = 'Обслговування таблиці';
$strTableOfContents = 'Зміст';
$strTableOptions = 'Налаштування таблиці';
$strTableStructure = 'Структура таблиці';
$strTableType = 'Тип таблиці';
$strTables = '%s таблиц(і)';
$strTblPrivileges = 'Права, які стосуються таблиці';
$strTextAreaLength = ' Через велику довжину,<br /> це поле не може бути відредаговано ';
$strThai = 'Тайське';
$strTheContent = 'Вміст файлу було імпортовано.';
$strTheContents = 'Вміст файлу заміняє вміст таблиці для рядків з ідентичними первинним або унікальними ключами.';
$strTheTerminator = 'Символ закінчення полів.';
$strThisHost = 'Цей хост';
$strThisNotDirectory = 'Це не каталог';
$strThreadSuccessfullyKilled = 'Процес %s припинено.';
$strTime = 'Час';
$strToggleScratchboard = 'ввімкнути чорновик (scratchboard)';
$strTotal = 'всього';
$strTotalUC = 'Разом';
$strTraditionalChinese = 'Китайське Традиційне';
$strTraffic = 'Трафік';
$strTransformation_image_jpeg__inline = 'Відображає clickable thumbnail; опції: ширина, висота у пікселах (зберігає початкові пропорції)';
$strTransformation_image_jpeg__link = 'Відображає лінк до цього малюнку (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'Див. image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Взяти поле TIME, TIMESTAMP чи DATETIME і сформатувати його відповідно до локального формату дати. Перша опція - це інтервал (в годинах) який буде додано до часової мітки (за замовчуванням: 0). Друга опція - інший формат дати відповідно до параметрів заданих для PHP strftime().';
$strTransformation_text_plain__external = 'LINUX ONLY: Запускає зовнішню програму і подає дані через стандартний ввід. Повертає снаддартний вивід програми. За замовчуванням програмою є Tidy, яка гарно друкує HTML код. З міркувань безпеки, Вам потрібно самостійно відредагувати файл libraries/transformations/text_plain__external.inc.php та вписати програми дозволені для запуску. У такому випадку, перша опція - кількість програм, які Ви бажаєте використовувати і друга - параметри для програм. Третя опція, встановлена в 1, буде ковертувати вивід використовуючи htmlspecialchars() (за замовчуванням: 1). Четверта опція, встановлена в 1, буде додавати NOWRAP до кожної комірки контенту, так що веси вивід буде показано без переформатування (за замовчуванням: 1)';
$strTransformation_text_plain__formatted = 'Зберігає початкове форматування поля. Не вносяться модифікації.';
$strTransformation_text_plain__imagelink = 'Показує малюнок і лінк, поле містить назву файлу; перша опція - префікс, подібно до "http://domain.com/", друга - ширина в пікселах, третя - висота.';
$strTransformation_text_plain__link = 'Показує лінк, поле містить назву файлу; перша опція - префікс, подібно до "http://domain.com/", друга опція - title для лінку.';
$strTransformation_text_plain__substr = 'Показує лише частину тексту. Перша опція - це відступ який визначає з якого місця повинен початися вивід тексту (за замовчуванням: 0). Друга опція - визначає скільки тексту буде виведено. Якщо вона порожня - виводиться решта всього тексту. Третя опція - визначає які символи буде додано після виведеного текстового сегменту (за замовчуванням: ...) .';
$strTransformation_text_plain__unformatted = 'Відображає HTML код як HTML entities. HTML форматування не показується.';
$strTruncateQueries = 'Обрізати показані запити';
$strTurkish = 'Турецьке';
$strType = 'Тип';

$strUkrainian = 'Українське';
$strUncheckAll = 'Зняти усі відмітки';
$strUnicode = 'Юнікод';
$strUnique = 'Унікальне';
$strUnknown = 'невідоме';
$strUnselectAll = 'Зняти всі відмітки';
$strUpdComTab = 'За інформацією як поновити Вашу таблицю Column_comments прошу дивитись у Документації';
$strUpdatePrivMessage = 'Було змінено привілеї для';
$strUpdateProfileMessage = 'Профіль було поновлено.';
$strUpdateQuery = 'Доповнити запит';
$strUsage = 'Використання';
$strUseBackquotes = 'Зворотні лапки в назвах таблиць і полів';
$strUseHostTable = 'Використовувати Таблицю Хостів';
$strUseTables = 'Використовувати таблиці';
$strUseTextField = 'Використовувати текстове поле';
$strUser = 'Користувач';
$strUserAlreadyExists = 'Користувач %s вже існує!';
$strUserEmpty = 'Порожнє і\'мя користувача!';
$strUserName = 'Ім\'я користувача';
$strUserNotFound = 'Вказаного користувача не знайдено в таблиці прав.';
$strUserOverview = 'Огляд користувачів';
$strUsersDeleted = 'Відмічених користувачів успішно усунуто.';
$strUsersHavingAccessToDb = 'Користувачі, котрі мають доступ до &quot;%s&quot;';

$strValidateSQL = 'Перевірити SQL';
$strValidatorError = 'Не можу запустити перевірку SQL. Прошу проконтролювати чи заінстальовано необхідні php extensions як описано в %sдокументації%s.';
$strValue = 'Значення';
$strVar = 'Змінна';
$strViewDump = 'Переглянути дамп (схему) таблиці';
$strViewDumpDB = 'Переглянути дамп (схему) БД';
$strViewDumpDatabases = 'Переглянути dump (схему) баз даних';

$strWebServerUploadDirectory = 'каталог веб-сервера для завантаження файлів (upload directory)';
$strWebServerUploadDirectoryError = 'Встановлений Вами каталог для завантаження файлів недоступний';
$strWelcome = 'Ласкаво просимо до %s';
$strWestEuropean = 'Західно Європейське';
$strWildcard = 'шаблон';
$strWithChecked = 'З відміченими:';
$strWritingCommentNotPossible = 'Неможливо додати коментар';
$strWritingRelationNotPossible = 'Неможливо додати зв\'язок';
$strWrongUser = 'Невірний логін/пароль. Доступ не дозволено.';

$strXML = 'XML';

$strYes = 'Так';

$strZeroRemovesTheLimit = 'Примітка: Встановлення цієї опції у 0 (нуль) знімає обмеження.';
$strZip = 'запакувати в "zip"';
// To translate

$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate

$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strLogServer = 'Server';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
?>
