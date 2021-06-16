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
define( 'DB_NAME', 'cv' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5@bs:yqjAD/kMx?5K`C3jm8H`]lG7)2qzx/pMu8RCEXc8 Q>XTJ3=GfKfgeG]A#v' );
define( 'SECURE_AUTH_KEY',  '2ZaH?r7CX)N~fF_3$3:l.f%s*n;E@=>y(a+O,q9ua=&_tD:23q@@xL$Y_4QxOR`0' );
define( 'LOGGED_IN_KEY',    'omv?XIE}nXK,[ u2^8xA9crb^m_}0b[?M9)7z$A-^1yO9n99lzi*b:%q1OlEm:Oc' );
define( 'NONCE_KEY',        'lHIrJyThzVDj%2pdNMEiq)sd$Ox;`nLM.}i@YHxiyHA*5a%FOs6V~!ffTK+i$<.<' );
define( 'AUTH_SALT',        'UP:LgzosKjGDP+2YRr*U)shS_:F44(qUH#(8sM:k(js]nbB/4Q0 XPwW|DOpa@2^' );
define( 'SECURE_AUTH_SALT', 'bU.I>I-H6?+wmji@ k1&ulU{(OAAs/*J@,3bh{.eQGj=lHaIS?A(yAMl`H|Y)}{F' );
define( 'LOGGED_IN_SALT',   '&[I9JEZl3}y(>9xHJljbD6Nli86AiU4x)c.5X>IE9Y^SOslp*Ew0%~gW`8H@]L!l' );
define( 'NONCE_SALT',       'EuYNR_(|1S6IcGq+^::mp14y_Jyxl/(o<mz1_rm,QU76}zWYx*ZN^OKhKOrxf]^J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
