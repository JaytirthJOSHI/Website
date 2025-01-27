<?php

define('WP_CACHE', true);

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'IqmTGZvNnUvGTaeE5TtqKXIhiFchE8WwmzkDzi23lMU05aKI8Q26K0I6Qi3oMYUq');
//END Really Simple Security key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37179288_wp630' );

/** Database username */
define( 'DB_USER', '37179288_2' );

/** Database password */
define( 'DB_PASSWORD', '(KSp4WO!34' );

/** Database hostname */
define( 'DB_HOST', 'sql101.byetcluster.com' );

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
define( 'AUTH_KEY',         '2uipvbjuhy1wh9pmzeajlkf3sgjdo4vpy15ll0jwwr57hypjeqk2b04htjvtnoyj' );
define( 'SECURE_AUTH_KEY',  'dg0umwrihyqgkqy71jzd6sfnhzhnrst2oogbd3vzru2jjr5pw0d2fsjmeh45n1dc' );
define( 'LOGGED_IN_KEY',    'owvweyee81wsxqsvfrothz7pdogb3qd4lpyawt7jsr8uwpdnypsugpzmwpfv31di' );
define( 'NONCE_KEY',        'eo0e0ap5zsi6yrjfansbzfgiftp6wdutlytd6xixwpz6r96epvtottnykzuha8rj' );
define( 'AUTH_SALT',        'n8in88tmoui5rxl7adstrvpvnpkbs8dryxpdi6vzxcst08k4xnxxvt2fdev1otek' );
define( 'SECURE_AUTH_SALT', 'x9aatwehwf2qz9ehyam7sluje9aykmde2w8u2ll4uuhpqplbpvohofnrtzdqqsko' );
define( 'LOGGED_IN_SALT',   'jvfhyhxqhatftdydltxcczvo6limga7nteoi9x9bypsykolbswvkrsp537fyj0ch' );
define( 'NONCE_SALT',       'gt9w6zye2xhmdljzp0ywl8303owctdjxi94jhuin4qy0pste9yjwismkbazt88cp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4a_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
