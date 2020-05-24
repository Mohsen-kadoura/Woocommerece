<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'concept' );

/** MySQL database username */
define( 'DB_USER', 'mk19' );

/** MySQL database password */
define( 'DB_PASSWORD', 'May4th2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&u3G`@/J^[a`>v&O.s!}?(m9RxOy>{adv31O5v|`{DjZCNu2(-E:R]slF|&::!k^' );
define( 'SECURE_AUTH_KEY',  '&Vzi(]^n!u^{3nbB^`<p.^%yO[K{kF#s4rdNt?9OVp/bD63;K0_$-k0@u$ DvT$@' );
define( 'LOGGED_IN_KEY',    'O+WSKmuo2UZ4[IVLFxu/8_Vq3[)*I.Z*| V>a.icePgA^fJuD}JAjs9w)5G.%wnw' );
define( 'NONCE_KEY',        '&[p-HFR=`2hE]KwIrnnU|4`cl3~^qQ</.@b54?qHMEFwI-4>9*.(YVwk[M,iw)p|' );
define( 'AUTH_SALT',        ')8-97A|Db85t$i{7h^>B?=F!FdXI/5bym>.ib3jSPkUdTD3`-lMwwXcQ/T{0Q{9#' );
define( 'SECURE_AUTH_SALT', '%){PS,sd,6Y!83]E>)Pb#y!G:|k[B%[6>Ap84-]-|:5>LmT3pn0%V%b&5TVfi9i^' );
define( 'LOGGED_IN_SALT',   '>l5q{DzB1#PLPUn~lxg5%;i<`Ym5x8knF2z=VT~y;S!g5wQ%6Hm-cMwd/AMOsvf_' );
define( 'NONCE_SALT',       'lw`E^Pi}5Yg+nMJNl0R@zegydsE@:jK!Y,C&Sf!F7x<OFy#0=.(D[.hWHnPcI#5N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcom_';

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

/* increase wordpress memory limit */
define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


/* increase maximum files limits */
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
