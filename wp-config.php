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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')o5!t6XQQ7nHU3IRfJS>2|GUnRF<W+_P`ZB/P=8PK>W5D<,K(w3X5)EXzmV_W%6*' );
define( 'SECURE_AUTH_KEY',  'h91&b)-(|u<*n}1?>*QSd+(N[BU|p5$W_S-m:tZJHKweL|H{9)9^Mse]=LNfLn0(' );
define( 'LOGGED_IN_KEY',    'AN:rfXo*B:%np[cnWTl#9qC+qBKl/z 7k:L45)L %k>nKlBc2PE/q;*moZC#w#lD' );
define( 'NONCE_KEY',        '<w^u~-Bg#WQNbRMD4ATl,{-c{TD{Krp6:o.:]Np6n;/0JF((`Aa:UbcX36}9 rcn' );
define( 'AUTH_SALT',        '&iQ5Wt4[?IDKBA6{}ArrhW8&P7>`}{{JZ$) crv!v%~.5;K_!WMRp8-XLA.un3Z}' );
define( 'SECURE_AUTH_SALT', 'ze5 ?B6c5X|@@94UZe8_%ue^te|pZV,:W!>QT%a|BMB/8I,|%y!~?>HLl6#Gy+b.' );
define( 'LOGGED_IN_SALT',   '!r%{.83qm*d,wX(*;sWfIrj<qng;8].Wu8r`!mW.~Ltdm+VNrL-0JGD*VjOAZqRG' );
define( 'NONCE_SALT',       'C8=y)pV]m}=/|v}(N|~5%zyGbQ{J/%NuaVB3V[dWwt#L6%v/?pjn;Z2B[;eiJT>R' );

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
$table_prefix = 'wp_kappasutra';

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
