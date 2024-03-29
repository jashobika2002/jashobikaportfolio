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
define( 'DB_NAME', 'jashobikaportfolio_db' );

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
define( 'AUTH_KEY',         '/jGs<-Wn4SW07J1,sJ,QI7sA&Ja3Pgn+88VGR|S:jahiE V@5<wt MJ^6Yolrj2]' );
define( 'SECURE_AUTH_KEY',  'Rg+3u}U4JxGhC=B$X_%904qo?%!ZA2>@$5i-sM-46h|G?Zem,Q<?[;M2_Fp7q->?' );
define( 'LOGGED_IN_KEY',    '/o CVr0|Id[tM)+A,zYAUoO[|E.P)N#y_1MRoqAqH#!#OuC<4|-vY)Y)L9i40G1:' );
define( 'NONCE_KEY',        'ID`voZH/DJJM|#;E;J!:c[<7RYTxYz@#-iQ*.m97uG?WZXZlA><ZRg<mW~wI#yF&' );
define( 'AUTH_SALT',        'h,EDtp?HnE_7rSb #HXhDrI,M-Ttn~MYCr^8Cz8:VLRD4tNMpLye&H923.2Xh$=G' );
define( 'SECURE_AUTH_SALT', 'k;)15/zOsDgmd=2Uj2EO6i^L,_5k_)?&.`nZw$CCA4(;2$[0du;*vekf:H4uZH%y' );
define( 'LOGGED_IN_SALT',   'dFyMe1g2Kh=YfLKnS.]5ZqL486]=!CFP3 S&e,Ykm#E:?Jg<.p&EO<JjM*p{J[.U' );
define( 'NONCE_SALT',       'P^^+YsT|<_D,hl!t1U;zaZ& *Y^&hA}YH}JIbB8j<lvd6a@_3]:NvzMS3Z{LF(#s' );

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
