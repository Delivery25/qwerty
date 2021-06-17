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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'hot' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'hot_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dY6Gb~)VaY|=g3QH$MAgH)h.KBBS5/.ZC)6fH+k<RA>a*KEfi8O+T&/_N+gFi|IX' );
define( 'SECURE_AUTH_KEY',  '[yZRBUi;pqE,AIocqeN6DfPnk>q,V,TVi?O$VxCP6xyR(QU:krG+mQ>qgD}3I/m_' );
define( 'LOGGED_IN_KEY',    '#/L]n:BGO5Rp#K1[I,G]~/?|tP&j>@<A<}NzJ=y.ye7) DTwQP$oi`pp7q.B3CEg' );
define( 'NONCE_KEY',        'lCAjG^r#S0[9Ff) *U*lwonDYaZwFWR~QUs2MnO*VMMpi*@nj03V^dbkn,3CQvT4' );
define( 'AUTH_SALT',        '{(+HWfX-D;;V!d736V k=QZUJsIMyxub=X>(&1YBK_m=JMW=me>Ao^tthI^(TzT[' );
define( 'SECURE_AUTH_SALT', 'KL@hl*FZQL{SvALALeml!|QY2#<K.n77nBD1lwF,YCt$%2CwI;$>QIuL*&Mat9Ut' );
define( 'LOGGED_IN_SALT',   'I&9R_@%_%;OT2#M?P1VE1PXp7t.@Hd,xIMJ0]wme:vUoVdGn(%YpkX4F.pyBz*2+' );
define( 'NONCE_SALT',       'OnvJQM=^2[I6%#m%6,yWJ<S!ub]u=/$nN)0W^y+@dwEuytA)|I6SbfUoz!f#m]u0' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
