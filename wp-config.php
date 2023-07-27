
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
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'mutaz' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '>O(tD=!&Q{s GC[ixfNG`L`,E&vMZJ}Ex<FgA?nR)[GMl-S%y-t?(^CF5^K@o_x)' );
define( 'SECURE_AUTH_KEY',  'L|]O<c3}^3*)UWYp<^o/MZ{If{,+t~sD 1XCQM&y~?5K<$I+k1U>!H~zAQ[CS.Ot' );
define( 'LOGGED_IN_KEY',    '@c_=h|D|&$~U,9QE=RmTQ17rve4**ah-RS.u<&cC7>EbNBB7+x}hEua??!k82P&2' );
define( 'NONCE_KEY',        'p:5dz%?RAL==Fie}O,0onr=cq?I,mdrL;7:hEKi>YHiZ0pho9-EvqiNcRhRKXy[}' );
define( 'AUTH_SALT',        'G3Cy!i6U:+@U(6pGSAX;U=kF|KHU3[ $.RyA|IuT6RjsU>lh!j<B/<.36&owL3k|' );
define( 'SECURE_AUTH_SALT', 'jV{NHx H]YKz/e+q,C~U}y($Mg{-15xp{nMi;OV:~n?n6WtJT7.EY+ 4Ctr%v.B(' );
define( 'LOGGED_IN_SALT',   'CEq&gRFm+O(3jppDVy(%6>W.gWwm@pSVRlgF:9)X CFCn!~AX+.SQ$}jW58c*elr' );
define( 'NONCE_SALT',       '>P4$dpYne2Y{[:6Ai{Q3kyUXV_W!EY$;_K#A OU?<QBk^4!>|{ v!32..}g5j3Q=' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


