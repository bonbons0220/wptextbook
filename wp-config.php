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
define('DB_NAME', 'wptextbook');

/** MySQL database username */
define('DB_USER', 'wptextbook_user');

/** MySQL database password */
define('DB_PASSWORD', 'DumbBl0nd3');

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
define('AUTH_KEY',         '%+(bX!p|_Ucl*O5KDS6Y$n$&^lBnB-[9acjPi3C`K9VA2<,H)D-m.wBs,yo&LEq4');
define('SECURE_AUTH_KEY',  'g+3,Rel+40R-54/OmF_c|eI!1%Y#(0%n+912+U,00f5;>I^x;iafVEcjd#c_o9,3');
define('LOGGED_IN_KEY',    ']!wHWUsMUj:tL=24k-ODg`E?K_kKVU,rK`:j_SFd.1-vr.7B;g:)-9{U/919-m`V');
define('NONCE_KEY',        'qg2G_]^ }(}01j_Mp!U_XdHR6wBVkYjK{Em5[~btO~cEis2C@P/;+Fk0GXr)US}V');
define('AUTH_SALT',        '&S;?Lt$I,]z0_^|Z)EOk+~]IEZewgy01~1+~bm7~MMpy-v9.`Lf04VD68wWF)!|S');
define('SECURE_AUTH_SALT', '+~:04;ftP0oY|xD yq&8+jP$9pgzlv_-d_XY54u#dipJ*W[j*c!VOp]1Dk.]:s8d');
define('LOGGED_IN_SALT',   'wEW:eXug_8tbjpV09vf1l+>xdpzOl8$0|VtwADCr[&.Ssm*jy1;Zm]dQlW=l0iwj');
define('NONCE_SALT',       ',szmItK6TNq$FeE ~Sy>i6n;SHK`CAh&l,`!xV d[s)l`3++w$ qQR!yT7[AUm,l');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
