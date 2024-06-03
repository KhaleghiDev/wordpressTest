<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'gIj679soZpBpOe3ZYPctsuwkeh2w28JbnK9gxwh4I5NKxVGoKRX8MESksml8Vpnr' );
define( 'SECURE_AUTH_KEY',  '1FP0vfIi7TcqQ7OgLZefjacEFsUF7ppZsUSOn1ZOS1CfootIq5Loj5wROAwvycZJ' );
define( 'LOGGED_IN_KEY',    '8sAybH9grfosPAs682uOxqgrqwdHB0o76P3wEEGiTmk2z7JOm8QYrDlXokuOtovl' );
define( 'NONCE_KEY',        'RRbmP7prQIqpcsKoubOLH06mvj9iaXIJXsfzQ6dbYRte76ui3aT3NsX0SHQV94Kx' );
define( 'AUTH_SALT',        'xuew0O4JJSx3KSEw8uDjcd5NA7xHPn1tz43xWw28SMeK8BqRP90LXl8XayiSuZug' );
define( 'SECURE_AUTH_SALT', 'ZSPrsGLgWrtzyLnf2Yh7m8LCPjrzNRYmwMUqUrE4QC2xyfhr4lBmWiuCBdfA11TG' );
define( 'LOGGED_IN_SALT',   '2hq9rBB5xPCWwBf9ROidxFJDLHmVXYFIkjtCjn7T2Mwa0BXQbdfUFZkk0k16OiZD' );
define( 'NONCE_SALT',       'uLRzgTh6apGBCvVNBklF5v7fGDeRXql1H7owBq6z0uDwgbS6qMdUZ0MFhECmfA8h' );

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
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'SCRIPT_DEBUG', false );
define( 'SAVEQUERIES', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
