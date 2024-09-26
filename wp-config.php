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
define( 'DB_NAME', 'academia' );

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
define( 'AUTH_KEY',         'CXI]V]i?ASBI/?y,E-fa6@NHYG..V|G%l]/0=20HJ&X/Ja4tc82ciO#BQ7E.5Dvo' );
define( 'SECURE_AUTH_KEY',  '7%B%dte+:2U]V}_l_.!~OwDK79MF28e%>5Hd/>WlMLovCL46QoyQM3[Sa!$vi[sv' );
define( 'LOGGED_IN_KEY',    '8i7YdN4t?[vb0M1[(cBS$weeE*NxG5=@bHmi7Z@9x&ol+)vb*r4QY(Slkyi0Q @n' );
define( 'NONCE_KEY',        '{s>v0#`z&fLmO0ZfZ(VK=<aV15)my)CgO#(Q+#fXl)AJTT;$ZYKw534ofKbFzKf^' );
define( 'AUTH_SALT',        'p/=B33.<gW}:u(tbJ+4G_wbY;1bvp[Nm.g;caNPO}($hBE7Szh]}K|zvM<0|Q`EM' );
define( 'SECURE_AUTH_SALT', '>{l)dR^x_<{e|[Y+a4dyB5B^A%vHl^TEi!16)9%56<vm+;yy/dLLmLgA!^*;F!~r' );
define( 'LOGGED_IN_SALT',   'Qj.!4fQM]{luD9z)}1`u)C,%)0C~*32euN P&-`gs9QVG>,x}WSI)GCW2lAnsP7g' );
define( 'NONCE_SALT',       '=,%mXJ:v?I<26oV/u/VQVp|~l2n#&Q7rr!iYJi,}2S:h+k^LVc{luv?24,lysc x' );

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
