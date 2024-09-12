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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '<y9r4A;% u,1x.t$nw5IrU5/qfxetm46jMoV(aetNPo.7n=4/F-/t2L~Drc}ipq6' );
define( 'SECURE_AUTH_KEY',   'ml,}(G7XRCY%IG&o~>ot`C5B?nwJnucO}3dFiM$UFm:B1!9*c3+5MPwwf/yqexfE' );
define( 'LOGGED_IN_KEY',     'bunH84/# 2u.DFDV,t~ !!Jw>EAFw`6T?c&jjb8.ZrHL)T_c0%H)zD`N<X(K]0!<' );
define( 'NONCE_KEY',         '^`B18OG|@5g G@{Cd>w6;4Tia{s]sEgM7mX/>J|9@:f@_z+f|I<f%y^/|naO@55P' );
define( 'AUTH_SALT',         '[+hq<Gh:-L^]s js%xEC1v3=KHN-(G<fWzp*fT[^~2AcoY(c~ob$T1BJ M!7@ li' );
define( 'SECURE_AUTH_SALT',  '9 `HIep8Mj/_SRrP6}=@sT#^v>ZD(&2}Fe0PH6vor*n|R8pGzkbNCBD][fg=m2b]' );
define( 'LOGGED_IN_SALT',    '1X6ijoR6|(=SWHUe_X2;lX,@&{pWpBtP;scmepu:nKP60Rf7ZZu8RK6rBy&xJusk' );
define( 'NONCE_SALT',        'TSETN5GV+6*T@%!fAOlm<b%%es%S<RI+!;@RTN|eos<3S5n{JM}5~e-AH6dL_]`S' );
define( 'WP_CACHE_KEY_SALT', '^39>,$d3@z,devFB*,D`,gcA4b|;8LwxrQFib?091vNmuC&hur ev0pm_8Y[-4[|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
