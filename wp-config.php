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
define('DB_NAME', 'mesra_db');

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
define('AUTH_KEY',         '5feyw;EtY`%9gaxMA]Y`$3=G]2dd&exm*T%1+-8.![#7TJct,x4SGLz(|bnnqcB`');
define('SECURE_AUTH_KEY',  'hpuU4=&Iu5>+@=/!l5WK:i*{p[`&cbO{,YcO;,[Qiz5lcS$1+xTeV>&*haZdo<BF');
define('LOGGED_IN_KEY',    '#$RY;yR^|1=>Q8p*GnWm`d/UQPOa(?`dm(),7SrD-S&*8?4Ww=-.J>q}aMqY]kyb');
define('NONCE_KEY',        '6S$k?X^>hfVA6gXm^hM8S]fI6,fm~nOYNx5Wq`dk:6bk;pJNZ#Uu[d|7JY)@HK=G');
define('AUTH_SALT',        'GAgH2mgn`) A)~%qKfDtP(;~Q1rU*W6ho;^5+=Mod/Nt<)^nF^~f75ESiK,C,Czh');
define('SECURE_AUTH_SALT', '0UUu]/7eWSeWjr&akj-vp!fsF(+QPUrndcp+z<J51nY<_hG9KL]D.3o%qV6=V;`4');
define('LOGGED_IN_SALT',   '1%55SEbnt&#n:UEf8yhwZ<rrPHi>8OXT$Q&VNkDAc;zu/_dk^jghn?|tkUcK>e :');
define('NONCE_SALT',       '6uC[=>#O$ilH:x[8S4z:>#]9~CCEE@ezLpTexb_iKdiJP?LmwcdK]1z{Qczyz2{G');

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
