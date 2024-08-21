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
define( 'DB_NAME', 'asapinsurance' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'NewPassword' );

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
define( 'AUTH_KEY',         '6387Pr=`26$X`C[Bq-Uwjwh7[9QBFe)VKwrF(Oqmc[}0TW%D03u>sZ,j~UpG#,U/' );
define( 'SECURE_AUTH_KEY',  '$N_XVB5|/z^/+&aW~|e Waz5#X=1Q|{W<3_N+FJ~A[|R&@J.3S4 KR-M~n[(3M*{' );
define( 'LOGGED_IN_KEY',    'I4jrbwsP4&~ry!)Up7xJ.Xpc[wo|g|]axAAk?]@o/UN%nw%0YUXju=R?YdiN#y=;' );
define( 'NONCE_KEY',        'l(e3hlrEnh?[`jnc8JGgjUVy,W)f,!0tW|MRu+;P11BZa:5@;<rXrcuyJFh&LW Y' );
define( 'AUTH_SALT',        '_Y_$54XZoB@MS@skPo=/_<U^GTO}{xZ/LnnBT}&aKN2!C#>@zQto{Ub6g:Ur$GHs' );
define( 'SECURE_AUTH_SALT', '5^64-EDV<o[bC0@}F; `3?y*j VQt $.T/.:!V_^?fq+fs4EY,DnN9]=wbml]sGv' );
define( 'LOGGED_IN_SALT',   'DdcX-h@Q6gLw/ts|9Ed`xf|NUdajB3(c%,VBb3OQ)mMNYK@?-H9+}fj2R=UG`IF`' );
define( 'NONCE_SALT',       'x,kj-CK; c[~Ak;Ep|ok_?NoP{[cyKWFY <82L0i:5zu#X@<%oE#|p2:!Qa2*C]G' );

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
