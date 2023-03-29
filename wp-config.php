<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{VnR3Lxa)?+-iR5W#_K KLH~o)r:]SP{A]>AwcY8(:-~V8*nplvb%%fHQV%]iYYd' );
define( 'SECURE_AUTH_KEY',  'Z|k2Kx5arv^W@W~$VBj:(8bO//Hgm+>z@QUMn97]*FK>i,mg*~Hw}ka{p0L-RRjZ' );
define( 'LOGGED_IN_KEY',    '~PNf<vqv3^bPb`M;:Y):/T rma&hdV+5Uf<<iE6g7l4DH0$gI.i=b#d..G w/QHs' );
define( 'NONCE_KEY',        'lDTi;EPZpzE!#FD8n{6<*jiU0)[#gR3M--O}Vfvj)a;)ZO>ZY~S`f}Y$2ZOuOCVr' );
define( 'AUTH_SALT',        '~/3^)PQnOI)Yn[yaeL&jD5QgTe1kd[xQw)b#4Ci*5>G[#Wd7jK)cTl~m4TKu!K(*' );
define( 'SECURE_AUTH_SALT', 'K`)IH #~Zb/WfuR-]Z(|0pFu8F,7}$-!0e+w|LqU=cynkP^Hx bm^+GFX8`xgZ ^' );
define( 'LOGGED_IN_SALT',   'fO|0/g(t}e.cPuLu84y1<cKA=0RJED^>m:r>|Rr{^3*x5TYnof9B]&hk.Rc4.sGD' );
define( 'NONCE_SALT',       '0ePVBS>~9Xn mTSVoCau{Joh/Di7q>t2xTG]5twBs1u0RQ]UFErFYhqmQ|t64@VS' );

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
