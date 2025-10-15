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
define( 'DB_NAME', "caretrainacademy" );

/** Database username */
define( 'DB_USER', "caretrainuser" );

/** Database password */
define( 'DB_PASSWORD', "C@reTr@1n4c@" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Wordpress allowed to write directly to the file system*/
define( 'FS_METHOD', 'direct' );
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
define('AUTH_KEY',         '{2;[,^rd$Wd*$d:{eHucbz>xn:~1}R.vxS|YGcsro--)1.+jb6Lf35Zx=^NgdSWa');
define('SECURE_AUTH_KEY',  ':r}&Lq+}={1kU$O4BrD#?`b[?Ui7IQhz|jloOkVy^LwVRQ_UAN|}-y-|*1s+Zp b');
define('LOGGED_IN_KEY',    '*H%;UqD^+E+.z++{5{fVcBaJ6N_[kE1(|Ic?X-,V-.Dt$K8gNX)hq8Sen(*+WYx$');
define('NONCE_KEY',        '?@f{{-VNU.ZP|NTQp+vaoJqe-LQ^fYLWw9>T}Nrc2&A[)$r}2bqCzqL,=8Hv`)cn');
define('AUTH_SALT',        'e8-mqVn+ [1ku3E1u15E-*mF)0|B-FsowSv@01a@EZQ0J[-X{}rL8(dCEbyUYmti');
define('SECURE_AUTH_SALT', 'mrv-[CeA*2KsG/icHP4;Wm.3Yy3Gb>SH,fM~G$plG*$jXrn[<K8syL9Rptim;Ji>');
define('LOGGED_IN_SALT',   '#.K{bNG-ur|*+3@B#_%^+I@D|o9YD-TT`khl/T=,L8FL/We[N`mPZ )Wx]o3Q+OT');
define('NONCE_SALT',       'hMG?c-F7J&?VY-IjaNUpeWM]k|*&G2[hlLp*#}i|[|Mg&D49q<qJlhpA<y7VSi_W');
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



define( 'WP_SITEURL', 'https://caretrainacademy.co.uk/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
