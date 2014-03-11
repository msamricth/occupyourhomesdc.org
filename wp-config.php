<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('WP_SITEURL', 'http://localhost/occupyourhomesdc.org/');
define('WP_HOME', 'http://localhost/occupyourhomesdc.org/'); 

define('RELOCATE',true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'reverence_oohdc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'GH$==yzKhv-_UI2xwn}flngR&clHx_`&/cqtKzbyxKm,45dVtzAE|(RIbdM+QsW+');
define('SECURE_AUTH_KEY',  '-5wjJ~oDa;1&E*QiHuL1fKd#2n~eG##?O,7fZp8HmhD?dksxlu9_=I+io`%tJC4b');
define('LOGGED_IN_KEY',    '9d/K3Qiwj*4^HL+9eX4kd3p>6Y}o5u/L#sCr3!BXph6El65tG^!sALJPzU5H25R?');
define('NONCE_KEY',        'b>`a)FCdWI,)8[;gzY4C?IP %rP=m6*u_a,,iZ2FTRk,y,~zJ<mK`[yz#jwc$ZSD');
define('AUTH_SALT',        'Bu/[~bRww#(_&C}cdu}H;*kn6sSP[#?]D)b&lZ-Xxp>{!ICT#KRF;:gmtr87(4Mt');
define('SECURE_AUTH_SALT', '4fQc Z9571kgixcWouq f&;9v B:1^>hW,Qu>F`O)b+2l2F#Js/8.^+3JVyT#,A|');
define('LOGGED_IN_SALT',   '|PgF89j$&?[(, ^&nbMidXZKcwf^-?=a`bc!1x/9U}pC*KZ=t?0+Hd a:esVA5a?');
define('NONCE_SALT',       'tII%$]YN07jY:j#YMV!ydVW@ ^~? 9N?>Y5XY#QH_OM:p=fU0_2Zl|5dh;b|BcWd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');