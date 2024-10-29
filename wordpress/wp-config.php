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
define( 'AUTH_KEY',         'b@_M91n-tO&F<%@&[psYj$l|l ~R$ER4,3.c)ragQrzmkM2yf8#S&`Rdbr-b<vau' );
define( 'SECURE_AUTH_KEY',  '+(aNFnN}~VH4<>0r,5ufL.azC[w:Xn6tR<Se-=GJXy8Ix9.lS5v(wG9Gl22=Y_3w' );
define( 'LOGGED_IN_KEY',    'krY!0lOLpr2{voqJV_.C`#n*Dnp`[Iy1aB}]Ah}`NCeRsx%8hbl=Et-?^xp181k>' );
define( 'NONCE_KEY',        '$&)LzL.M@`A%G|idHSU<@L(~FY%iWHk;gt.EDhLuE:Q--vtx,S2}0mQ05O)TU&mk' );
define( 'AUTH_SALT',        '|evmOg%~W]D1Urd*d@]Wx/WfzrF(v{(#7J+S>rQ,,/52z%};[=R69s}08Mw9/a=Z' );
define( 'SECURE_AUTH_SALT', '%~a Pi$)M[u4R&WRlMa*B~&k`kd.>BB5u]5a87XggB~$6Mr}#}g2>#cz0R^T:a{t' );
define( 'LOGGED_IN_SALT',   ']H0)?cL{to[],EevYNlH/Qv8E8RLe/8`C]YnJ&E<sk<d{28]H??U):F}FsC9uu7{' );
define( 'NONCE_SALT',       'zM]}t@RWk3fs88c:mQ0@oofotOOE E[[k12m$n*;FS[Pjj#.rxKv$NY;)(s34<L0' );

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
