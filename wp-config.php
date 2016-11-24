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
define('DB_NAME', 'praxsite');

/** MySQL database username */
define('DB_USER', 'jesign');

/** MySQL database password */
define('DB_PASSWORD', 'jesign');

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
define('AUTH_KEY',         'tN Qg0toSwb?=hNt<9|zxeHnnqa]|>hC% l`yC98u36MN=8QDOh O8qzoTc+VFzD');
define('SECURE_AUTH_KEY',  '?|z@qYm$$mP`?XFw/9FN|{iR:K:d,L+4fkB[.1f76Ca{Dpfj+]p0R<jO]z>NLHLW');
define('LOGGED_IN_KEY',    '?fc9Y;YMj?KtU}qs !+FB&oBK;nEpjs-|7Y^`A4cZP^UVE^_a{M,e@=o@-z$IgXX');
define('NONCE_KEY',        'Pi(#=#UN}]fV0*BYEw2*Vej{0(oe5FtV;VXWZH3#uz/=>MN<LHb `4DmQ(R4?A1%');
define('AUTH_SALT',        'TxM.kXT p9`Nz@A}iK> iwFU?WTQ;mJ9D[185TwH5rV+fr52KR|dIN:;mOM](a`0');
define('SECURE_AUTH_SALT', ',b?>/1,<<9{lUDiVp)$ZyC8VW|xQIl[$y2Ore,.v&EOFLT}Spe%v%K=IxQ00.wbb');
define('LOGGED_IN_SALT',   'u$qUJC;gL=@6L=ZmZ7d@0j!}{~R4!|z*Z0kZwN>Y6F&9bb2[E6TBs@Pj=@MT9}yP');
define('NONCE_SALT',       'W/k# *}~v]Rhz3kY3[U%/1`9I5?Qd^No;/#cU{e//Ui1zWoum#^+?&0m%]TwgfD}');

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
