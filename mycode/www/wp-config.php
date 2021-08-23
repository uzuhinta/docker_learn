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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'testpass' );

/** MySQL hostname */
define( 'DB_HOST', 'c-mysql' );

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
define( 'AUTH_KEY',         'cwTMbHrPLR3Y}tDNFn,qi< RD899*UBvXD$!NxJR!jHRs{w<~G~r!YswDd3i_u?#' );
define( 'SECURE_AUTH_KEY',  'ucBlY<TQrx,AMoh~lJIy=!,?D4Am`0M/~Aj3y{q$:~5<CG}`H`i$D3xS{)Aqqkw#' );
define( 'LOGGED_IN_KEY',    'g/B1RwvsR^ 0<BF|Kj2oxM|QUlScV+*}ora5gOX<A.P&Q?WPw.=P{xFTqPeFI6W*' );
define( 'NONCE_KEY',        '5TetQxLkm:n]%6-q8S1a;.2:+;@ d]_~Xr=%V_BG8SB1@2n0{}`%%zJs+{52D^1n' );
define( 'AUTH_SALT',        'z9{n@]q|~K;#SKe/i#OthvQIvhFN8:-SntfaqeQ&?m#g7t02#cL`ea,!{27k-27/' );
define( 'SECURE_AUTH_SALT', 'I~(p2=2G~(J_QmR9~DZ@#^gPM1cfZeOZS7w1Z52X|@+H%N/~ Qb{]0Rq),;nAF.>' );
define( 'LOGGED_IN_SALT',   ';W<XRk[mGenVCejG(Mpwq8R+5<LY,8QQC3a*{5}EvxvfQ,l#iF2xJD9*pHPL _uR' );
define( 'NONCE_SALT',       'k+A6?S(eJV*i0lv6I6#69bBm8,9^Jg7ub:=k.xzox8eW=fAxz>`CO6_`E*y1l~J]' );

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

