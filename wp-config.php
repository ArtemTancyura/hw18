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
define('AUTH_KEY',         'CM*NynH8orVPw_!TKs*jyid/U$--ips#4SE*o{GhC7X%hGQucO1cnm3Bh&Gs|_Ku');
define('SECURE_AUTH_KEY',  'tEnc!.v)4Gp|@46_$8!.t45Uxbn7&?yI;{:ln7-!4lR{.L5 {ew(m9@$tvlX0%qv');
define('LOGGED_IN_KEY',    'BrieuX.v~aPelM!Go$XdDC-<>>`HW@c$3Z-w:1[}|+e_V;~PBY+8o1BiU`_SJr~H');
define('NONCE_KEY',        'b@3W%S~%`x<5b,*tP5RrDDqRwuey.1zo<^]Mfo|-PO!=<`BO<c|1Z+]fL$oWbmXU');
define('AUTH_SALT',        '#_QOPl)H+FBz>ro+CYK/Wcje3/4LKlG5H=bOV|[AJF- 6AZi%WCUo^*3Hq~YPb1D');
define('SECURE_AUTH_SALT', 'dZT9|16Y~RnS`Xc.`=^DcnjB4?-p4eh/_e{fz KS#Hn=x= 7 y_|]+Tw]OpBGF3}');
define('LOGGED_IN_SALT',   '}37xuz-HrbgZ|p{5Ja Zg,&S>lc?8hK5l1o&WDwRQr:c>|*c]|@or!52[ja3kyl%');
define('NONCE_SALT',       'i9o8<aQ;Iiuet`H:w_6AG*.)t}DTgwLD+[3.-AD.Y5|q:G(S[+y;RTz2$#yNooO|');

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
