<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tk_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_t]h^;LajH8a f;@SuaG8Hf~e1(D]_H_IYx?!**_;_~$M{C#&ly?0)RsaSX){L]y');
define('SECURE_AUTH_KEY',  '?h=+`WU$7_2l!|#({87@Wzxz~bm:fRBqR3A#suY]Q3l@?cINOOgnfJ<Nl{bwrXjV');
define('LOGGED_IN_KEY',    '61sg~2N0M0j%`6)hE%~;QOaCHV5:PWl9cZ[@%xAD=f(a,@_4%8[#&p)z,%x3ufUy');
define('NONCE_KEY',        ' w:]`pLi`[pqn{HZa{U{ 0eKua<UA=zp$xoV7Wz-:G?gpBY.>a!(V/<Z=:oR0)CJ');
define('AUTH_SALT',        '%q)[28|-SF5V%DUu>qO.i@7sE=R3rM*L[-C?4XO hzXqDnuUM(d,^u34]}hP+3dN');
define('SECURE_AUTH_SALT', '+FB7%QObFpC/iEDcw CjT4,2df]}rfUv9AhHm}/M[yS= :Y$ZbelWvk=xfHYe+kD');
define('LOGGED_IN_SALT',   '?e[G?$xRUmWmR{c=/He<C|Q0bo0@Z(dTHKl H&4xj~0]fFBG;0gH0}&?hX@Ezk|:');
define('NONCE_SALT',       'mfbcATFX.o+(I|,M<(seDG)p4BXWL5BE{)f~po_WkyoX6<EXrO70InpMAQUIyyxh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

