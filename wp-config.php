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
define('DB_NAME', 'assign2_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`ukg.[)NelNgiw  +:pZgP^b?w](->)1jGot0^q tZ?ec{~d(~u4H+>kq7d1%EnP');
define('SECURE_AUTH_KEY',  '<[YhGK.Jb@P,y^e_%yySDx|L 2Fj+h[~psz3YCsr~EQ9Ei|_clntfxCnL56KwthN');
define('LOGGED_IN_KEY',    '[8 SYacVH3q[[.tK[We-?Gpb2 3ncI3[Im[M+jH?,yTq^c@)Jbv8HW[uNV7s<JL`');
define('NONCE_KEY',        '+!@,b_YapSueAsNek=8GAO(%zH3t}JgRSi^{jpspF3^aJiwJSwc*)ob^G> ~Aq#d');
define('AUTH_SALT',        'G9) :amre2k$NQI`MsVC`:LMt7~r+Vg:g-X{FeO!5WsKh@*cUDA{3zhN$Zh|i)iK');
define('SECURE_AUTH_SALT', '{V|m]t:c(};v?O}Tk%pdgX/kR`O:`at,1Y.w)kl?8jr=v4KJX-{ lg:Hn.,Q{x~5');
define('LOGGED_IN_SALT',   'jyPacc.1n:iAZ3Hr8lwnkPE5/6;]4V xSC*c<EY3%1N/!oge}|Pp5B:u2&;G*V)m');
define('NONCE_SALT',       ';T4cocfLYjG_M;F)jLQx.K-+HoER2T/f^~jfkEeCKtMz6gn3IG*gbJTGCl_@z[Vj');

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
