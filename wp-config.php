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
define('DB_NAME', 'test-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mehfoozian1R');

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
define('AUTH_KEY',         '1O!.>g_ID7zh^9xt^9!64_H}eVf@,D{#!08qrs8b{0qI6L]qri2znV.1=u_JLFOZ');
define('SECURE_AUTH_KEY',  'C)C}_/;>-&?[y)-IQx3t#Tgy7%im8WKkZBR3*K2SsAyk^h<-c7^O/LN&g47=|v6U');
define('LOGGED_IN_KEY',    '#Vg )[hX9t)ckV=*:q_Hq``km*xSGzM,sY2|Hb[:oHj1`X?oT7iFPU*6MA99#xwG');
define('NONCE_KEY',        ':`]TvDEY]AJ0aBg$ER9HARZpAYAl]<8<*9)9r|4{:Y!1#~mRYF</9}Gyj0x/%Ho7');
define('AUTH_SALT',        'Ww sE%hA+N4U;!a^izB|]r,kycW8vM^4P)$Y3{Y93VLm{3Zxhc8hj5uXg_|0%?PJ');
define('SECURE_AUTH_SALT', 'QGxQHiQ16$&*O(H64(Ma3`VQ0OtJ^Px@3o3`ZC[o)^T(Dcy8tuwpd$~xiM2<u$D8');
define('LOGGED_IN_SALT',   '[453&nk:P&fq1Bu_CetG]y(qW}*d4BfT;2`Tfxe)-^5r{4uoYvPiA((azKPx>tg<');
define('NONCE_SALT',       '+NVl|7D1<eV^5 vnZ!]}8z^_]Nf29u`@KJP(A!=W&tlaZ6,y?yvW5Gjd[EZW#8.6');

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
