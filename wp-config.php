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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g1d6InwREqS|3qGfz*m^8Ibvvz%:llh#1Y`pDPk!wxQ$Z E;.a@c]t2T>?_]k58R');
define('SECURE_AUTH_KEY',  'G,at}#UF7/Y.qI<(LW|ZcmW!g8=T#EChsaJ^Z8g,MzXrO/K?|sZ1y1y5G&_<6q]5');
define('LOGGED_IN_KEY',    'Y,O4U<YSSir/&p:mIEd~1f;^|#|fz5v:)}K)5hhRwtL*QD2Y@,1L~+nQPx?vb5,Z');
define('NONCE_KEY',        'vAu9mZ8!iESK{Y-@b]?Is3 UGyNF+rs|8:`X6?7kRN~*F##D(hL-B NV&0+haI~%');
define('AUTH_SALT',        '[L|@p`Azp2jQg y}#fAqy#o`|R1cGk?I-?Qfd_mW}T&a]]qR3tU7}|~r0}r/Jhg6');
define('SECURE_AUTH_SALT', '5xcnt%J;~;m[P<d7nEN/?UD9&cxDzr-SXW%HA*5&Qn9DSCq#@1m8LCCiD3WSMt}j');
define('LOGGED_IN_SALT',   '(Weay$b$uVls9Ue>NvSX&_Pm4Et$be)B}0.j;$%&Nuhg.Fyp@I#aj1wAi[tY`aTG');
define('NONCE_SALT',       'P$!y ?B&k4/ef,.y!GeZB`L1gVt62hooo;sH`5=aAI7O)/{7<lHbW.a5UOqtd_Zn');

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
