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
define( 'AUTH_KEY',         'eq62.H+]CEu2oP%**k5U]~+&>e*_/]J@5TnXcDW_p#j%Kj]@i6mkW#E}sfRrb:t ' );
define( 'SECURE_AUTH_KEY',  '%3iHh)tdoJ0s}9O3dn42muMy6Ni;3NFJ^+@[Jv0tVm4]p,UdEg/L}m3(+kdmqQ9y' );
define( 'LOGGED_IN_KEY',    'z@ORL4k,lt`[;c`[NiD|l|`7bGaAyzu8=jB6SCqru!{{9Z|GT!5%!%ctbDBsnKPc' );
define( 'NONCE_KEY',        '|c<:0 L?<7hPF=>#Ki8{tTJ~+xapSHc+x,^IzNyYGZ7sDb=1jGvW}v]!:;wbu2gm' );
define( 'AUTH_SALT',        'Lz6gAYu#9k_4~DM!6C{2YsFit;0,SYCf:(JBFX*Q/+N9GP/,0 y,-Xl17QZ;+g:J' );
define( 'SECURE_AUTH_SALT', 'ByN{:xQVCRH-&#C-4Fjp(TO!P#LV@+s(8V#8&_u>:.PxEvHw8Wq[|Q,)g:}%E3(=' );
define( 'LOGGED_IN_SALT',   '*E^~y74i,-/D%sVxnF{D_q,5?uGMep^rJxR!iEXU%/^WvPX}#V 9hIIM)MU(?j :' );
define( 'NONCE_SALT',       '_cNCEIiiR+=o4I(ugD O4#5#)PJy5/r%H98j e/k(i}Hr R+j._puG}~=Ii%P3mH' );

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
