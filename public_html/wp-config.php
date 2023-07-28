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
define( 'DB_NAME', 'educlick' );

/** Database username */
define( 'DB_USER', 'hongan' );

/** Database password */
define( 'DB_PASSWORD', 'ANlol2001@' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          '<bnRA#x;*!EBT)([vh:9w~E>WX/C##kxPF/d/_m~MSR$~aKq$p>mjP4Yd{Bhe#+j' );
define( 'SECURE_AUTH_KEY',   'ul?5)w(p+Mz?tF!KcnhGw)vsIrNbT:sCCI.pxxTxWt^0W>UFQ[zK~yH}OR+&v>@~' );
define( 'LOGGED_IN_KEY',     'N;o4p0:/y;aELk85OK/foK3mHn+]ef[b~N|E43q>2&D]b-v>A^I!q90O985mfE:N' );
define( 'NONCE_KEY',         '38RYnDZg*GQUl9qTjl7={MT( r1,iT1281/2dEWct$+=/&P&%u0H_Mb,QD?~QuO$' );
define( 'AUTH_SALT',         '$+/3+]o*+l^R><HK*B~.J`AKeWFxklPtS^BQ:$Cp|Jd00l<*l}}6)FxN42Y{zM8e' );
define( 'SECURE_AUTH_SALT',  'p}>7 [xuFgj.5e&!D/eNKc+yJxjA<Lk;/cKe-+b>8Cgu#*L$uZc{V(=oVKJQ{(S=' );
define( 'LOGGED_IN_SALT',    'z92,9Jme7RRY:[H@c-[p={phXqWu,;w+aT^0<xlgvD^ef+eJvh({6v(G/i2s|ZCR' );
define( 'NONCE_SALT',        'HENXWAp=;EX{2#W+JtAe#D7K.B315!|+k+yI+W1l(jcAh-#ynK7|n8--!y:bosuW' );
define( 'WP_CACHE_KEY_SALT', '<fZx!aY@BHVps%e9r5dod_fzGr@}HT*7l)EbY;LiD5Ww{Tbq9B*QKlE@3` ?osY{' );


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



define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
