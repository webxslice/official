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
define( 'DB_NAME', 'official' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'WFpHOJnP:Rcv1.OX?N6m5^&;7i~>5(dHW?p/K2T.gi09#=%p?}V=$q[:)CqIQ;MV' );
define( 'SECURE_AUTH_KEY',  ';58uW8[+_SeY)@80:.K5Yb^-DM-`}&O{hz>;f#Da),D{sP2|9I<_sRXrC8* ZLPX' );
define( 'LOGGED_IN_KEY',    ')D0{v%;Lf>3<%fM[81(FezvIr|P$/J!59fA`LSq[`V[<31E%Vf`wL|sY^X5rnc7^' );
define( 'NONCE_KEY',        'I9$|c{mipZ?,B3$W(A[YV;`YOq8A^U!/z=6sB~*dYD[uw#,CcI/zSmZ29$NFUO.c' );
define( 'AUTH_SALT',        'Xbvj1R2/F;B%`L%i0*;Uyt,v:}eaP=)ulf]V?|PM^v_xy~O<+3IpS@Y+YH>P>qyU' );
define( 'SECURE_AUTH_SALT', 'J&0KlZ]Jh4~3]$5IlDVtw|g0*5,,jaONs|?[=?L?6l50R-+gjn%ZY7A4)/_!~:FK' );
define( 'LOGGED_IN_SALT',   'R$sOb[=W^a6&uyhcL;H?l4l,-R2WUUNM/3y<;[W_IB|.]Q{@`1>Y/&PN}Q$Tv>MI' );
define( 'NONCE_SALT',       '$4Hr)O8kXn$$|fS^13K05<5oyNW? h-,4F!}r(.G`4tK=SX&Mz^*it_. Nr3J(}V' );

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
