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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdatabase' );

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
define( 'AUTH_KEY',         '=kzCJ1ZB_rH9 )jf|]8N2Q{q6ynRv~gSYUO+j8aT_f,ws,^MK75~.w~giWbJfy+6' );
define( 'SECURE_AUTH_KEY',  '7+sW*b>~p6glo6!Nbs,Lz23MCvtprK^D~s-ZWex7Brf79~cLB]mD8ox?.r6 X^jy' );
define( 'LOGGED_IN_KEY',    'kPIB1HS/iWXV3-T)}b~PGj<FvZCj=o%a[X5eDNXL(5Y]A$NQ9{?3r[}]<gHgRAP3' );
define( 'NONCE_KEY',        '$*p$BvpGNgk;N9*wT<P/Pc@vCfG(%>^3kUbTGFWRoH@7UL.z_Z8zYSjGPf@,h-(O' );
define( 'AUTH_SALT',        'K0NOv8cj3[97{|<2V8|rT}!l:&P0yyD#rd.eP2+II5ZM.A8?<IQ3lI5q=+UaT`0,' );
define( 'SECURE_AUTH_SALT', 'GfLo)4?&&}RN]$[0S1VMK[CNk6+fAP5=2a1wdq4jA~b5#p#G^ LPexV~xFIat-7E' );
define( 'LOGGED_IN_SALT',   'Pj21{F2y^nY~4+|&!Y<E O|^TFRRR<GRz5bfyU+^B_uvHzXAX+-eZa8uVnWyiAVT' );
define( 'NONCE_SALT',       '8~3v!y#!58D[P),2OA%^Vu;2KKaV(eI&OK:hG2u4]LvPza:h5Mr|d)v{UN;7Tikf' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
