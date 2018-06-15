<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/linda06271/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'higherpurpose');

/** MySQL database username */
define('DB_USER', 'hpfadmin');

/** MySQL database password */
define('DB_PASSWORD', '%lSQLxf+0hAO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',        'X:>8*@_r?n$un|{8NnGd8HlBrG-Qe@]~@vfqN j2X-}_ViZW)BU^w62oI5~J,BVR');
 define('SECURE_AUTH_KEY', 'A@(% $CI&/gQ~QG)_i2~5V)w21Vd _*NqvEf!~ZUw./lFx?H<blM#ctmm2LDL8;>');
 define('LOGGED_IN_KEY',   '(xx5e-!TeJds@_S1++S)tXs|*HMtGo|uX^e_(ccpp<{uF02z$[4*0|J%h*yWz^?7');
 define('NONCE_KEY',       '0uuY%`0@zwsp/dY:_Nqw-:QqOy.MxU}W{b.<<k0wLHDJ5t@|4+O+}Kh4G>q?u9)p');
define('AUTH_SALT',        'OfTZq=d0S`;f.q0Ew~PW^F=_17tK%Okea^|noi@U43^,fjWG _OTEj<1R.n.{A*N');
define('SECURE_AUTH_SALT', 'LaW),oD,/t{yM$I3lCN_O<x?YMPx&FX48a cFL.Dm1A{P0a7]QKabL>pv{]ADq`0');
define('LOGGED_IN_SALT',   'z.lb3iMuUt)z1}dn^uxnx69cH2j.R&(W`a%?<D-1=b J/s b)Q(dgOmS=-xW?=oX');
define('NONCE_SALT',       'ST}4cB-u#EHqT^bnzw~XUl2)UCg~uGeP>bEn~?NdVvaH[HqW4H9n9mDyBeHo9BzG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
