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
define( 'DB_NAME', 'WPSQL' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|jt=jwp~-P[Wa_2_`COua|0d9ZoFm0-v2t=f]syA/G{ub{#vM((x&l6t,Q72d3(U' );
define( 'SECURE_AUTH_KEY',  '.M[42[ma4!(-_yRQEyTpHOZu~FKmDJ4G:Ye]#%9Kx3UT)~j1jd|ur4_C9<L%F,K=' );
define( 'LOGGED_IN_KEY',    'L^RQb;:NC674G`J!K)kWHS/Myf5Lb,%)f=(mBj+-Zi((;daqW>4Q?azBWp[<*75h' );
define( 'NONCE_KEY',        '/Dk*Y)B<imG;UIGd3,H&:2gx!0}RX_shFewW]zwy{tk/TH@WnCY>=PRn|407./*v' );
define( 'AUTH_SALT',        'Z}=LxeOXmLYEV;/D^~E2*G_,B;LDR,%Y2f$S*Y0NY8LCb:f^v/P@B8#4+7M~2CRe' );
define( 'SECURE_AUTH_SALT', 'Le]z]8@sZ7|@QSMd:nxVw!=iz r,p3}6b4_~:d9wsT sVmA_ y/2S@h^}TV8rZ+G' );
define( 'LOGGED_IN_SALT',   'j4M%o rh!r!FlylSj^d9afE(F$~LsA]!ZUe~L@{YE^IGP(hf4liL*u<VNLO6THGF' );
define( 'NONCE_SALT',       '%QbL,kX`_oBYK.[_)<?K3Jm7mNf:g{ct(<G<[8YW2X!x!A[~ZT:%jymj![PI5NfO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
