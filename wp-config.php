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
define('DB_NAME', 'boholpaddlers');

/** MySQL database username */
define('DB_USER', 'boholpaddlers');

/** MySQL database password */
define('DB_PASSWORD', '_!@X^sZ>9m');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']aN|{C)nE%PZ31DH[6)Y)?hRl&g9Ki|15j+<my`D!+lHB726Q}C0_bI0t)CL#!,a');
define('SECURE_AUTH_KEY',  'H{==TlWg/V%r v-TI={KRimEQ:);#k@MIAJ%ku`<n9]{7suFYbrao$6GW!W-ZqcE');
define('LOGGED_IN_KEY',    'Cznzfu-cl6}O 7D;|^M.yvd{JF~*_=cOp|TRuxI(LRTk<eTE&.aq*Iu/7bOnp,{b');
define('NONCE_KEY',        '>jdN})n<_>T^c9B3L2X5q{E e*K?+/jLYO2*h.1^W=;Vm;|`4@kS8*1`?/-%`S9=');
define('AUTH_SALT',        'ZUrU+5=$o3Vim!GQ=+g|1RD=1OpRt)Ml|Zsz0HW.aDR,+$]#iT-fl+9nJ a9q.A$');
define('SECURE_AUTH_SALT', '%Nt`:|`a}9?S}/<{h}Uekm&O|M)Yvz-yLn=)0u<7(] chSNl7X==Bl-H)0n|wsT-');
define('LOGGED_IN_SALT',   '`?CQ_tB~7A.2r]fsIr^Rj)5m+1YxT}(hZ-gPMiVVlqa.j|98j3hQWN@YR.&@-T,i');
define('NONCE_SALT',       '!m$K2yu?tb)o+z$^&S!^+R0K-L|7%O^gU@!=uKdNOY/7mUtdRZ(v+1z?wcdWMYWV');

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
