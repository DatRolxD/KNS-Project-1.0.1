<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'triple-a' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h %~jwOKmzH-)dum}P]hE)Zxl4q{JO/1w!]kxzQ#4FYBadk6FM/F-j)}w@9Gj) &' );
define( 'SECURE_AUTH_KEY',  '0r$jN~l?QPq*h; @0e6$4VO5j..?jGugiu]ojjG]uC5_TFB%-z?o6!#Wz-;zL<Jr' );
define( 'LOGGED_IN_KEY',    's~TuV-+XY,|Wa(&DGqxMdcbG:LiK7aHXaWbM*-C)]k*u8gYvwsKr)=`sN5cuh{/%' );
define( 'NONCE_KEY',        'xNYr)RX9u8#w(%8*[NCoi?xhv/d^M^o-g-<#f`=zmz%ZD8:mni@`>E0}U`YS|/H}' );
define( 'AUTH_SALT',        ';k[=7|0@9k`)8.^>=F{:fyPdTEygq?hmmbC$?ZZ;6~IwIJ}X!9/@o>/:ZuXi_(W3' );
define( 'SECURE_AUTH_SALT', '7dUh1Q6=M!%.B`tU$7~pjBkR6eg0IJay5`!M,t>?EVjL,&p*5eY/K]BGSD6}>.)J' );
define( 'LOGGED_IN_SALT',   '4 bTY@>)=ckb1|EzqDyZLegwaN=VS@ig` <lH6nY+A~<j7rBmN_@0}i)?k4?l3q=' );
define( 'NONCE_SALT',       'g---~tFj>P]1q+VH6spoV.JC>$-V6o#nzW <J)uZjwy0>e5+Tc5$CLvm3{Sj[Fn-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
