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
define( 'DB_NAME', 'hemat_kargo' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Nauracantik27.' );

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
define('AUTH_KEY',         'GcBe@?:Ow9YqlY#UjPSUW|`HNXqd.Ss&IV$j9t<HVN)-:LUel#n)pS=yEb|Dx ^8');
define('SECURE_AUTH_KEY',  '.Xx{#l!9/-(%-e0b-U:v1D|Aj5~wCLN`of+!d6?jxe(^!47.`7mB%(1HiUJOF47B');
define('LOGGED_IN_KEY',    '<L)=OQtEOK0bj>Z%k-3F }{|2-w*>CY+*q!yO#E)!oI@7?-yI+d68#UK-+Q@PWFH');
define('NONCE_KEY',        'e3=~5NFsp6#w_dt/xd-7`:Ir@YJKg?8GJ;*?o<VD`!J[^n j-22G)OA{Y}O?&8@u');
define('AUTH_SALT',        'dLad[xSe:OQB4J:E<!~;DS9[y9JPyWUcYG}sX3w@r`ynD0eF2yVpKsx8znZbM2F=');
define('SECURE_AUTH_SALT', 'IXC<Bd`X)od.}$A/TI7pc!eb^IgGD#T+t5[~~zk@DG$wa~Y:cym5[/Sl|UDek=|Z');
define('LOGGED_IN_SALT',   '{s;qy|roB6C*e@OL}UZJ}6,~,-f]fgZ|vp+X-pk LknLx/XD2LXF=!GrImkM<ls+');
define('NONCE_SALT',       '5|trNi+UL##_5f1mc+&L`ll4`K&yNev/HnsY^n;-_ZW,Zzjcr4EpokxZU~yN)eG ');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
