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
define( 'AUTH_KEY',         'kyf1Fs[`PRo=#XH2c<DS8rm#uKISi!|g>1:>YQk$~z7f!/Zc^zd[<G,5)Ms,4tp,' );
define( 'SECURE_AUTH_KEY',  'moDyyMN;d:Xv{T)!B#tiq}f-is3U}78?rs.0e6k2~Hn=dX1RSiup(<wl8v,y]~EX' );
define( 'LOGGED_IN_KEY',    'l[8S:V{b~{RV5kHr4yl6O)Ux1X$2DL7_%_ceCx)I5kY)E*]>1HiZ_/p$YVNY26iq' );
define( 'NONCE_KEY',        '.]ktze0A<*L/_9`8`jCK]R^4&7(4Uc/ & `Q3TJCX6lBPQEa9Xc,,%JCsd~G,2LD' );
define( 'AUTH_SALT',        'qf(ku|B8Sm0Z,tv0W1=ug4T>zZ+ru8)yFLH;Nj~TDX*Fa=^>^p%J_>@c9I6u1@Hi' );
define( 'SECURE_AUTH_SALT', '@8bg{Jq6Sy[VM:n^]iIUmN(U rDKR!:%G`GWI~mFw5GH[>fTo7fyhXA!2JWlsdvi' );
define( 'LOGGED_IN_SALT',   '=`8VK@:4m0-{LO&Icn4hT)%LWn!).)#DEmz(rE{.Yb}/h.1F88 d+<3f:_26^H=3' );
define( 'NONCE_SALT',       'W^>!|5&3Z{]~3z~4~5;9[P$McEAhajr5o:W)&|*8;+DNWxgQjI((n<@eM9ZCmSWx' );

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
