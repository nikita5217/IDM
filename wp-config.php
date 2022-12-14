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
define( 'DB_NAME', 'u899024001_nata' );

/** MySQL database username */
define( 'DB_USER', 'u899024001_nata' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nataproinst24' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Fh#&S Am~57e4&KKm})Qt5=f:cY-jvj6S[V= Slq#fAF;TEOmjkQG~;FO>hak#T+' );
define( 'SECURE_AUTH_KEY',  'O;/2>Moxi,T7Y*[4eHc{:%E0p:#>m4UP0zEwa(CV$d~&*DT}]%[++$+S,WP:ahoE' );
define( 'LOGGED_IN_KEY',    'k=e_.b;#pXL/kfy-bs.X+G&{~-]}_H>1zP gBG3~on?GPqhnUQ<WA~jvi*_kOdQi' );
define( 'NONCE_KEY',        'VXmI~q}b}eW!6#vD.}X(%vwUT7Z^vT4WH%x*gwJj-N!,J2e#m!}v{;%e3.IHA;aE' );
define( 'AUTH_SALT',        'j[Px M}%7)mz~?<pVG/9CPLslx,FNTHlhBjl, U F`el=3.,b@1QFbRN8@=l{7R]' );
define( 'SECURE_AUTH_SALT', '9.{S0Em;2qKB]>OVEv~eyUjniic8+fw^WdI<^g@Ub47J1r+^)nVS9C)5Kb>(>rX`' );
define( 'LOGGED_IN_SALT',   '-kIvGGa/jO .rz:LvTVo<wH&JDIfZEV&nKc;Ot(|u#>a-PiQkioQ<[xUI=HPbWI#' );
define( 'NONCE_SALT',       'BK]BkzHh o#pYmfPQ iJZ5~|P*2osxtoq5AD~0l(u=/Rc8bpa/aU?fAcyYe#[+N}' );

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
