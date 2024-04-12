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
define( 'AUTH_KEY',          'hJ<HleB+iN$gsxA2:ql+N7<u!!+XPWdfAg4aYMt.e<H,5euP~>6:LhZC*FPVdsAd' );
define( 'SECURE_AUTH_KEY',   'Im5x$ht&/B%[@^#LTn,[zU9ybTl5:/}2a]{|h_OHh;<h(4c]&tq!)6x#9aC6[<gd' );
define( 'LOGGED_IN_KEY',     'h03,EfZUvd=Z/R1{CaiAw@wPsusM06iDpcodw[{9{bWJy(-O<vb6MF-?629b@0E(' );
define( 'NONCE_KEY',         'F-}[Qk2nw<ak*WNgB:#<d,e;|b.j%L#Yu=LI]tNILrKzuc`5j#k%ILn/fy^l`WdG' );
define( 'AUTH_SALT',         'J,`YvfvL_qGOb6)d%(Zo{<?9skcxu;:ga@qeITf+jl=|4]l.F[#|E:9oO:K/(^Nw' );
define( 'SECURE_AUTH_SALT',  '{T[SjpNM*PwFglh.EY#dG]5#7sfA]_ XS mN%_&`$5lDOO!ECOc]J][T1s.2cE%z' );
define( 'LOGGED_IN_SALT',    '{H79UQzD%BIOKf*[ZC%vOfILVw.gOb40c@dPE2o4<>|H_og%FH3P$|O4A?Ac$zr,' );
define( 'NONCE_SALT',        'm;G!F@yS?!!F~.~zh@d!!2^?Ltr7j%pe/e5~1/Ueh5cu)bt2=r5M&`f3 km&A_)%' );
define( 'WP_CACHE_KEY_SALT', 'bv%HI4_Hw#e}3!hV02NbGcgLDj_ZSGvjS!hjncUl(r+s9=-+-1TbSq[HVktW]z-A' );


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
