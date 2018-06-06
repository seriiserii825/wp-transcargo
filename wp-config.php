<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'transcargo');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zh5c$C!oaBRqD46+P~a}2R1tECi})w{)},y5X5#2Eo&HJFqm;Xsqc`$Cz{2bl(e4');
define('SECURE_AUTH_KEY',  '/b6B6qEE*az6~y3WmB5YNbS)}]hx=`X _pcEhR~jsL[S8=@<Rxia5276f=`;Hq:m');
define('LOGGED_IN_KEY',    '> 9TNc*,?c_|YqN)%`RXWkAl|t9n,ok J6Pw]eP8i+>Lq.f=nG7Tepwdfn^HuX9a');
define('NONCE_KEY',        '*AAI7_3fBV::;Pqf~WsG$$[}Lj)rd|sUVw_mV.dCe_~^Te>hesgH5aew58Uza!v:');
define('AUTH_SALT',        '..N|:P]U#x,dt+;kykw(hqWaMZw^x:3&}v@{*5&IHmC)FrT(.1#!H,r%>^Z?Jlb(');
define('SECURE_AUTH_SALT', 'W*lNq*ck7!UaOUgX{wjHm={/jOhjnU#d.J AfJw9zT{$0NOnvuHeQ-U+**Ei~6Dy');
define('LOGGED_IN_SALT',   'NY`$OMPN9MR+P2Jn#F9TNhm.f}IWu<!umkj1-w=,W`X+s#lf<O01!p@F$0A.~ccT');
define('NONCE_SALT',       '4P%1S6HME#PrLA)Po1*{.11(]oy_c]oo:TOTpeIp}u1i/)MYV<273Uqv)$h+(I&A');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
