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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'kichlee' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '7rxFG|eIN1dHw|5?.qc2MXnv9#i1.!DLxnqjJ!|F/Y_/<0@dM}g%DgZ`/XRS>jl}' );
define( 'SECURE_AUTH_KEY',   'Q+zW?$37_T$-Jj_I/[H_3c%HfwspIrGxkiNT(=yO*)V+W12&TCBT^GU b^tK<J<=' );
define( 'LOGGED_IN_KEY',     'OS97Sgv^+L#MUoQ!d! |`Y20N2[R|d7`*6V}:VT0/>8^7kVw&O_TOQ;hv`z%m1iu' );
define( 'NONCE_KEY',         'wX4#@)2![m@~6qTtaNAEHKL^#ina2-`&G6Mw%FJjc41}2OM6x62yxE2R_r BQZld' );
define( 'AUTH_SALT',         'vMc,&sbAF>--?eT7M`#]1c$+k|>CX|M)}@#hsry9et}tk%$0Y}z6yxqk5&t!c(sv' );
define( 'SECURE_AUTH_SALT',  '<CG:E X&p|V9 l!qP_w=XRcoJBx7m<8T1Zjo`*}I=~$-<QR}@>w$<ej3~D2l;eUU' );
define( 'LOGGED_IN_SALT',    '+^&%vz<({Bqq%BY/)6p ]]J$@73D*?T iKg^Pa8.Ga+CfAEmK,_nqSmLLw?)3a_7' );
define( 'NONCE_SALT',        'xo[4gh<~$2)$})VE1SgH@*!uW4w3jmWN^c#RcRC-0gY+f`]Tak*|~}YGKQ?g<n?G' );
define( 'WP_CACHE_KEY_SALT', 'SyC/9S=Zn?ev6lc4~:Lz=ZZEe|fuI/ea~b:.tiJ4$f[]Sz.!7QAg1K8 V]bZyi%R' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
