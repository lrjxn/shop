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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);


define('FS_METHOD', 'direct');
define('FTP_USER', 'your-sftp-username');
define('FTP_PASS', 'your-sftp-password');
define('FTP_HOST', 'localhost:22'); // Use 22 for SFTP

define( 'DB_NAME', 'shop_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop_db' );

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
define( 'AUTH_KEY',         'iBF?FAxxIR^ nJz7*nw)O5&xtLR$N7i06u5<{UXE;isIdj8<{7{*[r/J1?Tq!bpb' );
define( 'SECURE_AUTH_KEY',  ':G-%Ow49rfDlGtz/~+eC6<Y<DnK3~).J}^76X&k4h>3b0Jb_8u0;jp?gsj5:k}fJ' );
define( 'LOGGED_IN_KEY',    'f_^@NrO^NWn)GdFcL2ipE.Q;eW=2M=!1zKSy}&JxxWu>E{1]&2la&Ua#oIeT[zAQ' );
define( 'NONCE_KEY',        '00YC&jYT$_M<[`76^t6L2{ZM4R1Pi)Pg--]?P0L)aZ4h:2$!KuW-d-sp1m5vw[I5' );
define( 'AUTH_SALT',        'a]eRbm&#-iOZ#T`2W:>pjT`RkTSCcTAnS[M`Cn{*rKlg`m2IgV~cT4PyM?:g_8 6' );
define( 'SECURE_AUTH_SALT', 'ed4Q|o_s`x0a #nJIu+^uK}O<QSJPajPP[#Rnq:9lZ5]neeC2tH7qN:OQ.F^bAKc' );
define( 'LOGGED_IN_SALT',   'biRP6Q|IMX7z`x!M?3ypALv.$Pm6I=$@[<Vhc|su#,Z2mccEd0VW!-:]GJwWUKe%' );
define( 'NONCE_SALT',       's@+$}QG#d=r@VNLAK-U+U~yy{5&!fJTofIn5*L:%:tqr{%1t>JzP[X574L&[`2ut' );

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
