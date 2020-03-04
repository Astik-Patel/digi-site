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
define('DB_NAME', 'digi-site');

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
define('AUTH_KEY',         '8]iY3|(i]7X}H-|Ok8FJ0/o~gh$iQ,?;DMdCCN-m&w]i70w^;riXo>f9WP`[&D`?');
define('SECURE_AUTH_KEY',  'gVIZ#Jz+/MCg(gl5~TG2BE0:QwehS%%n$9G;5-Zffv>r7Td2cp=-n`Ls9QxW!@_Y');
define('LOGGED_IN_KEY',    '^EN@1g@0wBTq1n-B4wZgQ99:nz5)aSEj;Au5llmfMztB!x?D*GKfw8 @=tvea?w/');
define('NONCE_KEY',        '+1l_U <z@p^Tgf;R]qhB2|B6{p=o*8y)WVS0`0@{-}Sn}~U_S{%}>Hwwtf~d2VSb');
define('AUTH_SALT',        'U+&L P4%9s8au$FQV)MxX|jc|`rW V&|SH2q&lAVp7U8hn]bFOR3`T|p5eyFVTRw');
define('SECURE_AUTH_SALT', 'jG%UBQ~.6r,_|8)ah1Mv6x$5<gWUlQ:sZIXd!*!k{9npLqJh-K;TsM02TJx(=`a<');
define('LOGGED_IN_SALT',   'awf6:Y&y~E9T9j-G)vdOjgNP.p^ymEz&__]M;5%kyWfi:*|?HPx#ih|9BvXfDKAU');
define('NONCE_SALT',       '/5/~JvE,O,sS22pPb4pFacEC86_jgSq?qEk%7peqP:1<d!f^sRa#m[5iFnn35CKZ');

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
