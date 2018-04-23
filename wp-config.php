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
define('DB_NAME', 'wp-solid');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'E}&.^b:a*9Y/2FnKrLwq<M4~THHi?hdUci{r(tEZ6,)TD=>5nsvI$FJ!P4ul5fy:');
define('SECURE_AUTH_KEY',  '{5B7Xj+YvZG|j!}a +YI0E&KgbvF$dGb6j;o{_&nD27g-^$w8r~LnVj oMz1-4~.');
define('LOGGED_IN_KEY',    'Z9s4*j|tIe+3SV:fQzu+)AZPc<o3l4,2VO>)ND|@<+J]x},Y%|sN@D3&Kq0GMk_A');
define('NONCE_KEY',        '|=S[YJN.wg|M.On=&,Cj<b^J(H*/j-_o0RGuvS~?l|q-teAh5wa0t~W(S#k#6WAm');
define('AUTH_SALT',        'c<<>-9y+c0x@x65-+:>a2e|r_vj^)&kN6H-${OYOfbng+6;YB-G@lf~Id+WKN:jr');
define('SECURE_AUTH_SALT', 'QiAd0<Px6=lz22mY:C*~+z&M<Ee|/%;KT?:8&LOEuv$:FiI-XctJ}$JC{_0fStvm');
define('LOGGED_IN_SALT',   ')Y-F*$}Vy[o<0e}V$J2q[FCHjSge|L#f2XN{oi9`9w}hH=wTs=*j!V(;-y;;:F#W');
define('NONCE_SALT',       '7E`#M{Ku$Du?-T$BnhVB/f0i+V.n=0Q=C(k:,< Pp-=0QPZK4l;-|q.CsiybzeOi');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
