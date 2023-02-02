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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AaA*Rydu&<np@)Y8=5])4b:a$%zX!r%[!)_E!T(YFZhrr^_6LsADPd}ZK$6oY*00' );
define( 'SECURE_AUTH_KEY',  'VF|l&HXQqtd+L zV@GH jf.}=G#Bg:Uc0t;EPM.S+L4o*CO)N~!2S359NfU{a(7-' );
define( 'LOGGED_IN_KEY',    '|q;e]vyV.a~BO>daWGy19BG#3xf0!QKgER^a#TFrxA57T`+4r&qgRL{&HUwuf-p#' );
define( 'NONCE_KEY',        'S}*x;<a,1{![oaC@(oaPMP m% GIs;|oA*Ri {IiBgjKDwC)svkQpCmph1fvX:#>' );
define( 'AUTH_SALT',        'jc.=`[+Ac6zjkhApA~1F^M4#P1r8n12c]rInK)/6S{Y9V}9l4eZIj-qcthm&8`-s' );
define( 'SECURE_AUTH_SALT', 'Xv}%W]k45UzI]yGb28s~`6Wc*Te~Gf7YL3UghKuepPMFiEquZ>SLvU|o(o]&z6Cs' );
define( 'LOGGED_IN_SALT',   '[-q/X?`Z0[/M1A-E;Ba._XlJ>.Fp*3Xw3fSYG>t}qw!<e`F^h)<vN<UmGBE<`l}e' );
define( 'NONCE_SALT',       'j`>soa_hX5D9aVkt4fx7J,>s7I}I `lgVe+~^4_AE`VTir~|R[~@|PhLpb[WemCf' );

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
