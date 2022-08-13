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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'J}J>Po}&#Sz[9*SA( g+APoh 1K/)N?54!0Bzt%$GerdtVC%ITjo;b&(568mZhzd' );
define( 'SECURE_AUTH_KEY',  '@<*3p`KGB4[#V2~Zhnl,m]4C_0GH.Ge|66GS8CmW %ORi,{m PN,Y! `F@gW.J4D' );
define( 'LOGGED_IN_KEY',    'ql1)Hv%A@p6xq ^Na(ZHy9:Yw>)DBu^uYkAaE?zXc/k.$-9PaWu:l,*,yFkCJ1g/' );
define( 'NONCE_KEY',        '6|++S[`g0uF$_@6SWtRDSIR$n)a&H!+oxmNp`fcvA}g%vB#o7pFN6zCGLbq$}S8k' );
define( 'AUTH_SALT',        'u^5Yql2AlzY,Y&Hjcu`#,Z@I=kycsKTT!O.cn!r(&Gb`:~iF7krlEkB,Cwx:SwWV' );
define( 'SECURE_AUTH_SALT', '/s<X_L3w,P;%czJ;|za*G#Zc~b%l(qcr>Hl8!W!zM92V)^ko[BFHT=f>53(SAR|;' );
define( 'LOGGED_IN_SALT',   'sz{u,i_p.ALC6r*dY~UH.@q*1pwUDBU:}{%+51Lh_*8Rss+LI!r%*.EB`i7tx4Ui' );
define( 'NONCE_SALT',       '>J,Cls:(tX4Qfc(+Lsn3Jj !?:5+]UwbcLCLjVS+L.]41lB0d>7@9+xk?|%CC3UU' );

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
