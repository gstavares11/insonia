<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'u269907711_G05aX' );

/** Database username */
define( 'DB_USER', 'u269907711_FjLgK' );

/** Database password */
define( 'DB_PASSWORD', 'BtFI1bWF63' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          ')K,c<,_Ly!Hj,O~vTm{Tan6B_y@?Ymh=gKL}C$OC#l32rl&LAV&G !NAI0TKAjBT' );
define( 'SECURE_AUTH_KEY',   '0tq;Q4?cpb327*ur}uVw+6xYg#~W7Zt;uDjm  e=B%yzZev0g!~5RQ/iX)1fZ,xy' );
define( 'LOGGED_IN_KEY',     '%1D8k|a(a7%ye~sc8>m9t!jUY:58BY1_Qe-k2wXCA,[m,aROOsLr>XmjI)h-_1X.' );
define( 'NONCE_KEY',         'n:xb*kmT+Y1_*:;L18mpK-qgyoU9]~z?$9cLQ>aoS0^L]_[s-,G}m!t|cRwUfCgX' );
define( 'AUTH_SALT',         'Ua9iC M9WpwQUu(|&4ePGpR@(.?)Ew*po{pps*kFF3+I0tgO/4{`LVn/v>&{L|Rs' );
define( 'SECURE_AUTH_SALT',  'hU_KIGP#2uRbK2}0Bp#:P_N}wW)<@@L S,%t!}}; hfmZe37JN{=`)r*-4t`6uco' );
define( 'LOGGED_IN_SALT',    'zCEfMN1&>.+9(>|R+Qa16XE1PA8R{[I?MFQ#txfj(J?*/bd;ARv{4TJYX,y?6{%b' );
define( 'NONCE_SALT',        'u.ftXSlPK1l%}n0Bv+v!^f/%9#KN|M.OPD=%Zu@U@&mo8@`)WT2E?f8QJs#O}?:2' );
define( 'WP_CACHE_KEY_SALT', ' Q=&/Xg`hhJ9g(r~uUyqkH+tWlgup~!|CKU*M-ZS*?C(_bmn{o4:JBScTS:)M$6W' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
