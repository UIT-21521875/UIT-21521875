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
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         '=1(fh-l0L-`hQ:Z9m5dGp4ha}&G)P!%s$zv<%K `8jF>LsKH=4(-)dl]%v&B-KR?' );
define( 'SECURE_AUTH_KEY',  'q(7}~_fZ0xR/fyIR4hgo]c-Z;5}!G*HO]vpga.xxAdgYTKRq5khsT-kF*~;&;?s3' );
define( 'LOGGED_IN_KEY',    '[0`i<=Dnh:}f8J}L]i41rgC5::cAa6s$8#3b6tV(`NM^{(wU}Rw88GzOj~cK4u;_' );
define( 'NONCE_KEY',        '%15dwqz`RMct)~7_)KW7VC%oy0625i{N]~qq-RB8jibTA3x#!JB}TjQYRRW%ep:m' );
define( 'AUTH_SALT',        '. W<^H%]~+4-ur#,keox#5CktFE|m]uw3&Ms<FnkWoK#jLOqFBq%_6G&s@GBV:s_' );
define( 'SECURE_AUTH_SALT', '&)p!go8J)CHE_[m4BBKny&UInuHf7|%> u2h(^JPLO[g~!$ps5~jCEEf&>0K/I9I' );
define( 'LOGGED_IN_SALT',   'K2(_aoseh``IVV|M<[>^$>zzM{BvJ#PcH:Gmt7t8Q?Hly|Yw*Kohf}__EFRRqe~y' );
define( 'NONCE_SALT',       ')p6iM,K5CaB[+Ec_;Czlkcup8^_#n>Bxq;M@[/O-k[q*cqCk^w0Xpt<8,eTv;8u]' );

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
