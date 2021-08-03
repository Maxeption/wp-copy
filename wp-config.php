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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'Txm9Rrv;SrT}YCpq&f^uaXFCh@&xV*g743?}#ED-IEvIi)I$WblC<C[Aa&@GcM4#' );
define( 'SECURE_AUTH_KEY',  ',,pv)XbK`OSEX/wJWV?07{TY^~S9X]x[NOx/AI>ET7BMI/7fT29x4AdOVuqzC!R[' );
define( 'LOGGED_IN_KEY',    '!Ma}(j^Ri=J1NF+=,hQc7.3OKwV9#dP.rSO_]4ICXQk1U|hl]Ms&t&e:Uu@!6x&$' );
define( 'NONCE_KEY',        'OvixIO&06pNEI2q`v+ MgwCzR}25(ChMSH<zYHcevAtoCM{Tr.&<o_?)WB!k/j(?' );
define( 'AUTH_SALT',        '|12%g@AA>F2Nv:xNu=U#.bujP~9Q-lZ.4r^q(4o0C!4}KxUUF}ahIO#z]qrN/2[,' );
define( 'SECURE_AUTH_SALT', 'zu)41?T4/6$5`u#7(y;bVW&Vm|1s2EH1Du|/$;=#w0xUC7M*oT&z2,b|c[~zfWpP' );
define( 'LOGGED_IN_SALT',   'bXwTp5]B _UIV$_`yQ8=^z/9g&3WsT]|,1!Mw ~uZ!4iZ+sj(2g4$t(KY_K$=m|X' );
define( 'NONCE_SALT',       '.q*6SxJVOe?)}?><PJ(q-k.`,l9<K/o&@*K)}dNb4W!5irol4|xVkHe2NvV]`I-.' );

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
