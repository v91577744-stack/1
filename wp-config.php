<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite9' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Crz*@{F3pZ/D[^}^?Lb8Ii^[SlC4FOkI;8!kti5tTB!g&~;V<qpG3Cu:h-r2qTvz' );
define( 'SECURE_AUTH_KEY',  '@fVdLv.)Rkn`Dv6tB9NSu:t>_enqK,( 2#]%UbN5kW_ZywRQ:7-vXRSLk#&7ip91' );
define( 'LOGGED_IN_KEY',    'vq@[kKqV,@02`gslu8}.A FQuzNMd/`HAT>~l:`%xMo`{:z65a<3okC}W$y% y$s' );
define( 'NONCE_KEY',        '4QG$X73/#rzVJ9Mx,ZgLd0;(?q{SKiOjR|~?<vGPDFtks[ZR&RS)OIj(%=+56C]I' );
define( 'AUTH_SALT',        '/{JtU)7bqUguG2n,_ W@E!KvFN^rIph<4HS5j%mriA+:Mm|>ReF&>.>dkTv0}9J+' );
define( 'SECURE_AUTH_SALT', 'Dfx6|qBskht?@L3/.Kw>aE9lx:-9?xijP<O0oC<(d/~iqh+G`EUnrj5kFv9q}R;9' );
define( 'LOGGED_IN_SALT',   '-,FS*Kn%|)!r4TZYC>;ftVUWmx& CE|*=uZ&wF1<sRe{-Ka_G*&g+n/HeM$hSx]-' );
define( 'NONCE_SALT',       '#J~@F}+o;m Tnzkp_k(.5R__~%o,QPfz^HY21}YJo)Dgo-{qklmORcKqDJQw(0cA' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
