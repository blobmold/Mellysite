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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gp_melly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w@J7TOKgY_3Xv=D2:7$^7I0*tRxeQ<jmmJL6B.@S2.@o`v3AUM4gB>wl]E| /aRb' );
define( 'SECURE_AUTH_KEY',  '._<N+`p_7EU?A4SW{0Y/fGbTMr {S|Zs|{YypElk[r[jdtw*haNPAngRQ4-!R6be' );
define( 'LOGGED_IN_KEY',    '.8T>7yoO.b55G;=*U.m3&ewUlG?zL%lD4&Hu JKblInv5_(e4^>.NW{MaQST[PvC' );
define( 'NONCE_KEY',        'gDT|0GaYdODvSGPlG-8Nfc134fdw0e6tH&+,7L_2)c|Ww`~T_;)W1Mq]?6T#_8_g' );
define( 'AUTH_SALT',        '-z5R_v|Pqp[/2_?S#tsbk;~@v%(s>Do8^x4H3/@3j2{yC;VUQT0AQ!}kSp1U26Wv' );
define( 'SECURE_AUTH_SALT', '}(g&O- V!c[FO@Sly|BYNa9%:0=1GbcPd6Y{Q//jaur|;AcM0E~zQU~PW!b`;I[x' );
define( 'LOGGED_IN_SALT',   'qq2X6k.dc+OECj5gSM-<O3ucG%`^eJ/m/[($<U7O/<[:u7X#2OFs>K=8%n:.2q{K' );
define( 'NONCE_SALT',       '`NMP0 8vr{O[EqpNo99B7;N~TP Fb:>Gh^iM 8Gg_ERct>MqCta{5A0NllP2-)0N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
