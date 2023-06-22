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
define( 'DB_NAME', 'artistportfolio1' );

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
define( 'AUTH_KEY',         '0BrMrnKkDlGhGrIHChyE82F3T3lPCTSq4b8LU4JayBm5mmYpFN42sc6k9uZkbc1I' );
define( 'SECURE_AUTH_KEY',  'l0A9wgNgzEcMJzFyerX0l6jssF7WWO5GPTis8e7GcQja8ZFGouj1qPONblGzlTRH' );
define( 'LOGGED_IN_KEY',    '9UhApJSsPqBwLQBjZk0RGNiKPwHxm6AwfhOrabYDNsuPtFXpV00PyLAF3zkxAbGw' );
define( 'NONCE_KEY',        'c94FS1yxy7yDI7DFNRlSkmAJICjlSb8Tn4a5NBAFqilEze9cTrPUSWyJ8HyCZZZZ' );
define( 'AUTH_SALT',        'rkSaKbiSCJQkjE4MjQR8RapQBwCD8vEBZJJNMDlq5gkTanzIuPnRFjFUEpurw8Cd' );
define( 'SECURE_AUTH_SALT', 'XaqeNxMU7AiM4YmSq5MkyYVPPwayYsw8ThWEWcE0J6uH6E1cz29BKzgWaAnAy3ku' );
define( 'LOGGED_IN_SALT',   'OeBzLpuJAGcVzHaMlOdgfjBZzKhTPBr2MfqdKdrVAIImhhaEZUwXe3ww5cJZ4b3S' );
define( 'NONCE_SALT',       'S1jTZo0x2mI7bXF8zm78AQJnNdSeQbkA8yim2GdPiYfrHjohXoWgJPxVZ0Mmr8Hr' );

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
