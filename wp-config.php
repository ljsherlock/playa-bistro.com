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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'playa-bistro' );

/** Database username */
define( 'DB_USER', 'playa-bistro' );

/** Database password */
define( 'DB_PASSWORD', 'JTOVJx2Baxs9hXNN2xF3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'CSU%I_$DU4oZ$miCqh_PGMgV-X6=Z%!9Nm2WXfN /RhQj<-Y/~rMOdW~dDwDT}W?' );
define( 'SECURE_AUTH_KEY',   'SKACK!7p@JPAH[DC(gse0^dCy/]4CJ@M@=UE=RmB[irdlb@TZvrvM2)nz,n (5Ah' );
define( 'LOGGED_IN_KEY',     '$xNch2y-!w->-;Y%7yAXOyRH3msQBA6i;8i~^6hs}Y+SSP_N<a:-/(<|kswf+fEv' );
define( 'NONCE_KEY',         '?am5lJV[1r+aY[MBh! 6Gq{jfHSkL>zG;d/@/h/`U}.H.-)SpnNTr}I^FiH^H/3D' );
define( 'AUTH_SALT',         '~G[UEg#e2_HL3vU90q(gY$@6LK<z6-1l?6`+(R0Zw,(q;QTp4&]E7hjUQ$O^Z{+o' );
define( 'SECURE_AUTH_SALT',  'w:P[9fY(mrLZnDk1=%1C88(/1Wp)-1HxtZzY_7ut*hO@pIY@[F!(*J_lsMw|l<X-' );
define( 'LOGGED_IN_SALT',    ';ueTy[N3?P^4uj q0*w3%/(^j6|0< nsQYM)eF7Q+@eGP~L1J.Pwf<X5v>vI%_#Y' );
define( 'NONCE_SALT',        'qq{,|R_^tbC{G?BSidFB0kt/7*Pi3 <N!/7T~:JX-`YK.a3G|fyky9>69[xf!Wj8' );
define( 'WP_CACHE_KEY_SALT', '-|Nv]cjf[txV(vK,u Y,y>CSu1:Y)esPK)dLXE9)vTH-AT3Nsg<X0AidYd?)Te}c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
