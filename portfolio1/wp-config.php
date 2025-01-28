<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define( 'ITSEC_ENCRYPTION_KEY', 'KkZiR25vWlpTRXVxfXtiMTp0biBUOCNkdn5YOldua1YwJlB0cm8pPCRbeCl7O2ZINERWZSllZn1BQVc4Uz9sOA==' );

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
define( 'DB_NAME', 'd132382sd582054' );

/** Database username */
define( 'DB_USER', 'd132382sa529643' );

/** Database password */
define( 'DB_PASSWORD', 'p74aguUA85RBG2C28' );

/** Database hostname */
define( 'DB_HOST', 'd132382.mysql.zonevs.eu' );

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
define('AUTH_KEY',         'v1WZih14PTjWG3u6iXeisKhQC99GGemR609zJ6DBhuEYDODgfzF2wVwnfMzU9vFz');
define('SECURE_AUTH_KEY',  'iAyxBqUJVlIRyjEcIhdCw8P2w0O51pXvc8U4Jqz0IBlLr3jzB1701u2uoci0dhEB');
define('LOGGED_IN_KEY',    'uBwarUIy6rAxmzs1n0jQ14nSVid8ZGH86zbsz6ek5DKrzh2uzfm0oY6wjLi8GkL5');
define('NONCE_KEY',        '5lZA05EaV7Gmm5cE7A8VONX8UC1bbHKP4KXq6z7NJcKxEivkq00B5UyXrMY8QZDa');
define('AUTH_SALT',        'deJDgAbxObWuc4LdHHmDk4o0adUfEyQqkkMigcf6fg2uuJPqjmdX8HJZlkHa2Tl6');
define('SECURE_AUTH_SALT', 'J1e4MNVpTz7lP7cAfhVy60Ovm3r7O1hpFxum29KlNbgjibRerdv3H19zxEfK9SST');
define('LOGGED_IN_SALT',   'POy7ZsL3pvPJDLBvAr6OGDOyqu4O6mMxFcOEK09UvLns2iy5Zja2lXbNBdbZtPLP');
define('NONCE_SALT',       'PWsxPbLCkYifIwWBVXCZ4D3AOVG3YQU9sWhu4UdVZkP7BwHt5lawL1IVg7u2lvOR');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'fc48_';

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
