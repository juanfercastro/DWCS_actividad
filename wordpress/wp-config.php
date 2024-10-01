<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PelisChulas' );

/** Database username */
define( 'DB_USER', 'pelis_admin' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '=fg=kYd{$~#kF&L09oGL,|@IUJdnF38FT-jh*q45-6yCC(NtB8f+GK9|MqD T$W4' );
define( 'SECURE_AUTH_KEY',  'X%A_:SIP qr)O;)G;r9d]U4io,`BP/9X_R<)Ux@iKy_|p,<B(8u^{~H#&/Q&A]wv' );
define( 'LOGGED_IN_KEY',    'o<U1q&:S%XTXFdlO6wHT_e-C.M2{wEyO!=bmy87%$RfPd2ZwM*@h~]T%`M=#EQi4' );
define( 'NONCE_KEY',        'nhyd>;?3:_7h-~,&C5Q`%8iZSoDr` 7IG<+uL0=?pOiI0y`S8UOpM}m=8`D1<>8U' );
define( 'AUTH_SALT',        'xq9[4Ptavd:zER.N@m@z9jr&*?dgcn>Rltonog#<tCU}b*WN]o{$Odk3>I/[,ue.' );
define( 'SECURE_AUTH_SALT', '.<(|C}.28D{b]DJeV6Au{8H&(<hN<.]#!%wSFh@w$+4Hs5snY~W~qf_pxO,(*VD4' );
define( 'LOGGED_IN_SALT',   'fNkSAz$~t8O%sHbumE5B.08r%wL0I-vrH$en,N=XcGot>g}|K}3(:x$+m2c]jV7p' );
define( 'NONCE_SALT',       '%G0E+uwYrQsTLY[.z.@;b5*bo?lB8d_xaJx1C4u^49^k$/<6PgGS9_LRH|{G5eD(' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
