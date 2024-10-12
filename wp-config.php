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
define( 'DB_NAME', 'lycus' );

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
define( 'AUTH_KEY',         '*bU}6e?Vo55b*`,KN~6L{-Wz2fF~3-@/YN2}F-IsSB!/:hqAJ{eMKjicJ*[*3$~p' );
define( 'SECURE_AUTH_KEY',  '(uK|~9T6c}%+ET{Y7+R;rx 9.QU7@J2ye^!%~S44KiN{6(lyxJA+ffQ{*%3w/=(/' );
define( 'LOGGED_IN_KEY',    '!t[M+^F(!^hH75` F(4<|~]#E=a:C|?Mwm/WK(8HpO*Rs*--]O2|:/2ttR]*kVU<' );
define( 'NONCE_KEY',        'wjd,m.G&:1nFP;J>gWH,Ex.iU68AWj%dNZ98<~%4N?s,]l<#`a*/$`pFWwvF.5l)' );
define( 'AUTH_SALT',        'lUQ ${}KU~Jnb#^hmkaP}833E@H^6kw]J(65(x.BCVve_A72I!s1,*/mU!(oX5ry' );
define( 'SECURE_AUTH_SALT', '!_m/21%iP:}jo4heu)S[@.`H*o+mlC8SkPlD6Z-!m!]<+QFTZ9#w%9sPYS)>ka&2' );
define( 'LOGGED_IN_SALT',   '}&?itkln;Ocbq;[8:]A.QMT =8h@^uwVtjw#1(rf1JH~Ry9XymD#8cI4!T5N4xtW' );
define( 'NONCE_SALT',       '2jSgnC3oS[knO[eS?NAp_IUX& IjT|Mz=S8Ypw4o#@hKK~@`|b1<t9C2JjxnA;f-' );

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
