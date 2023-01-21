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
define( 'DB_NAME', 'bd_sitewp' );

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
define( 'AUTH_KEY',         '+)P$9+4SG*&Y1Bg-i*m/d=r;;b:n~EY:PBG37-]_$_n6w#qYSa4IWO>.P9.i4r5$' );
define( 'SECURE_AUTH_KEY',  'b_7X6AOSbx4{qtj;,$|T7D2g%`K2.5Z=~4?fI_$l$.(/E.y*Zv02$l%L)2Qq,!py' );
define( 'LOGGED_IN_KEY',    ']kOCVr:SgRnkgs0`3u.?2HJ8xH4s&uW*nV1T^k}Hxu,lws%ZS],59CV3tvsDJTE(' );
define( 'NONCE_KEY',        '10PCC(9YhrQJdt0fet6*gcOMIv5Q=Ge>FbOFxjG!}8mobuKU^`64RIQ9`9RKW8]O' );
define( 'AUTH_SALT',        '[liuO67<T8>q;Lz$7.=fEauWX9u~QUnr.V XF*dc2|:;-%]ZWP4KHHC6tOa s|7+' );
define( 'SECURE_AUTH_SALT', '{xJ`4U?J/PlBwQC?dhDRn6%nb^_7w8V$i5!g#=0:mPRXD0/-R|~)LJp[eP;./HkK' );
define( 'LOGGED_IN_SALT',   '%H<[VR}_db$7Th-Ya8((uq#vXDbEf^wLX_/Dv*MzS;1YOERN nlkqh{XeNtY9)*8' );
define( 'NONCE_SALT',       '1<Ds>G7U]i-O,KF-bdN4iBvx$Q1Pb*}ESsgIetFaCk8BbC6lc[S2DdP21`pzzR>W' );

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
