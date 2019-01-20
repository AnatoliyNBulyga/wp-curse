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
define('DB_NAME', 'wp_curse_glo');

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
define('AUTH_KEY',         'DUICNeNWsjz7{G-idN5 xWweb3Ba_E$_FXnqgviP-}{)w=|6mAH391??J|@bw+^C');
define('SECURE_AUTH_KEY',  '%p^>I0cN btG JD.LU+cYX1FrjAmU+>aHGC<BT1u:d@#%jn6by;Bf2TlQs#(AXVG');
define('LOGGED_IN_KEY',    'BynH,=a/&#a)zMCI{6LT|ogI51|zADCU96mt|,SKxCnKx32m?A%1_~UJ<WEnM/KR');
define('NONCE_KEY',        '>n5mvT!+xgY(DK`>eteAf7jyv&K,1_`Hv;P|xO,Ns`|i^%E|2*dWG;7t`5r73&Ux');
define('AUTH_SALT',        '4SXp>c<}}y]i_uF82U=H{IqIro-,k!(b%|*26m)I3:JNKdJYBLEZdazS*jf{]3[(');
define('SECURE_AUTH_SALT', '~TsYSMh~0*+DSn/}GU;LLO,Bu}BokR!XMW[}yNW!cpabO->N$bBgU5N~X9L53LoN');
define('LOGGED_IN_SALT',   ']#tZ/|RG0af4m WO-Wf(5<,B%<.QW+*[Tv.6]+Zb(5`L1v;*nQ$n /Bs rE:v{1}');
define('NONCE_SALT',       'd?8IZ!Y8s8@|;dCa1` GovO^B#tM6nis^`3NO7ZWa&)cxd)ZB7RJu%-_CuN,;=e9');

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
