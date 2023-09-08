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
define( 'DB_NAME', 'cspaceBlog_db' );

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
define( 'AUTH_KEY',         'gk[Tk0Tm]^!sQMpWQ=g&[J.6y(hn}8<-Aia(aD)#D9(umnAP%MP,O5L@W.gkoZoS' );
define( 'SECURE_AUTH_KEY',  'n{|| Dfl$6f;KDN+*%6*T>AwmvwMr#{Z;0c .&<^([bD{2Z5}D]2gC_MX7R26KrR' );
define( 'LOGGED_IN_KEY',    'o&B3]_AXp2AA9Ivo-)JYf?JFx%-k=9fXZ``[goq!lR]yGo.?i$;Yz4/:@dTU2m?b' );
define( 'NONCE_KEY',        '`tekN_n}-HI&Fjk~}EERho~rzU`z|peBm9tN(*;,q5axQCQzKf^S&3<u$J/tSEZV' );
define( 'AUTH_SALT',        '[!>;RV[{4@vTwD9&.Y1uuAvr4_!*WW4rW@4m&2RsqbA>SbZB.04XgAHeO3+he)I@' );
define( 'SECURE_AUTH_SALT', 'T2dA^Mn3`zA&sjW*6l:X9~ios>jo7wRl/$-2i#+$a<kgz1Z>UT?eIQQ@6<}w~xZH' );
define( 'LOGGED_IN_SALT',   'mcAKx_RW$WF#WM66_HV7j3{<!OS DENu6uEv,du=%6HEmvd=*X^`ycB4y+:zQGWY' );
define( 'NONCE_SALT',       '1$9}pT iu:`Wg0.s?yW7Njy~Ws<C;*>^~!c= T=z#2LOV1Ih`XS~*^M:VR>#iEb&' );

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
