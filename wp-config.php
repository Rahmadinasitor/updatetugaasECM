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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_rahmadina' );

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
define( 'AUTH_KEY',         '!oQ5r8G/286}p2V/|4guu`,ZL+Du<^,!@<h=a>jY E#a+ik)#^1GUa!ne*T0Y-LB' );
define( 'SECURE_AUTH_KEY',  'gdl*c<]|rrpsZ9/ii[Q]>?V&Uy;%tZ@)pKC[%{IzD(%pG/T(q#Bv7FD+lR{X6Ku@' );
define( 'LOGGED_IN_KEY',    ',ts~b@!~JcrN=xBz!H2rW|+rD!!vv?j?!Npa|k_%P~34S~jr+,/lt:KCeikmHRi]' );
define( 'NONCE_KEY',        'Z^[nPM}zQ43xrTCR.X?]>xmA>TSx8ZHOsA4yC@(./5Pf3;o+:`Xds5d^X`mv;OL^' );
define( 'AUTH_SALT',        'aCj38~iUO:a=pD@/}D:}nUE3Jkw_w(a7NH{ktvs}Q}}So%_.TQXU}dP.sZ[( 8`2' );
define( 'SECURE_AUTH_SALT', 'qbnoB({1WCYn8fI]og/QTYQqQk]RlrlUN7jlxPmNw4[rLJWVv(Or*/s6Uk0m wE6' );
define( 'LOGGED_IN_SALT',   ';P5c/,{`N/6@CS410IOb@sHdL&Cw|[eP3b~VUkX=sq@@k,yW#C[P)hSi(c#H~&?|' );
define( 'NONCE_SALT',       '0[LGw{2{-c89IaC-f<8!uNpV<tM06#F5{~i%LQMf5hb8h5dg iTYLyuqyaj+G>c:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
