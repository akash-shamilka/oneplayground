<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oneplayground' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p tb?3X.IOgU+$**Ug4g!$8JX6R~9rML,EqA~Oi :3fH/+bR8DJvN+qPL0Ek{m i' );
define( 'SECURE_AUTH_KEY',  'osmJLS[zy~M7f:U?-)P[P[$f/Zk*UT/k)B+JCvA2g`i?NM4K$_7o|VQgXkc5E&$T' );
define( 'LOGGED_IN_KEY',    '35ZCY2)Q*/LlpeH )&nJ6Hr3b}h *hR(O$$5TivsGE)nFd]&CTP1Ra`#CyvX^U 7' );
define( 'NONCE_KEY',        'iOcWZZzl%VqrA#sRvpWJOzVj>/G2;9.tuUpw9r=6m?(Ix?M;eM{^;Fu3<o8xwqPA' );
define( 'AUTH_SALT',        '2Y2^S;IdcL%G>e)(*.0}ZgyYC]tP5B+LUP0LV4&<H;B#J8`oz{|).f%nvft!kd8o' );
define( 'SECURE_AUTH_SALT', 'YG1l27L%iWPiIWvKV-VZ0&8jM@*{/qGBtAR:h~t5`q]T&ns4QO31~_9T:Y,Lo-WN' );
define( 'LOGGED_IN_SALT',   ')--/{sVtRpcS=Qoin0XOK-PXKwfb Tod5U]XS62[eDzbiY,%?Hul51|q>* `k9)C' );
define( 'NONCE_SALT',       '^1N6;8Tk50x&An`|aub8tM(!6^:k@4?n$9_:# V_@nUo TW),+c;c1ZCxr.r5[!(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '1024M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
