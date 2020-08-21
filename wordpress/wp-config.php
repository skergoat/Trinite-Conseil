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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0#3j3Yz;ED6;KF<B]*99Lu?MtVu/je]R?!<6~ T.sr8.KlH&vDz>q0kq{tY/0@]:' );
define( 'SECURE_AUTH_KEY',  '$E|1-j|,W>{*L[]cQH<dQEuv]jtwN]C;n$o,;*;$DE+vn9)P&He% Lr PR~#6Ys6' );
define( 'LOGGED_IN_KEY',    'oIgkOTtU-lWe9,73GSt2;uMZQSIS32533]W9=zQXS5./G%jy/UAx @i*y/WKo,?H' );
define( 'NONCE_KEY',        'd`98FXJm:d5b<rifJn28{E8P>@Yidv(hICXSfFA-9.S6;rNf@1&q9E6C_,600%0[' );
define( 'AUTH_SALT',        'pg( .^p~kmE5N%zClp^%Q_Gg9^lM2`+b[{X&[0AQ1cm^M1GYr.RMYIt; o1%{fR5' );
define( 'SECURE_AUTH_SALT', 'YQ0K(fz9!Q/|jFHM~B gClU%-5b$ $p%SNF:n+)lN%N$JMzqd1ebUIhEk-N/([XA' );
define( 'LOGGED_IN_SALT',   't)b-f`IWL]@o%DFdi|KLq|uZ^Dq:rXTJF$5C|_4mw!OzjAV8a~hoC<3 }Kf9=R_^' );
define( 'NONCE_SALT',       '6Se;>tnpS8]/.La}(#dU_w79DW~ePb7X]S|n!Q/3TEs@P=F3]lEcPx*ha:U:-6NM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tr_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
