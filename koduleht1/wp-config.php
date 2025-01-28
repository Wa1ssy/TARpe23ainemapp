<?php

define( 'ITSEC_ENCRYPTION_KEY', 'ZT4oW19NXXs2PjJFel1wQk1Me1lRT1JzUFN6IThsODg6P2JJak4zZ1tVaWxwMCtKRT4vc0JqbVBjSXxzQmJRMA==' );

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
define( 'DB_NAME', 'd132382sd583355' );

/** Database username */
define( 'DB_USER', 'd132382sa530910' );

/** Database password */
define( 'DB_PASSWORD', 'L3674eBu9Ajt35LPE' );

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
define('AUTH_KEY',         '1TCtziOuHj0q1AB7wKh7R06E9SbuiPQPAQusHGFDaVmVVhGtEzd5zHsV0PU7YkcJ');
define('SECURE_AUTH_KEY',  'ULu0MoGe4RzO0tqm4hPDZ5aQ6EMV7XvwikN7n3SmlUhJozeoftZvu0mDehTUBvr8');
define('LOGGED_IN_KEY',    'jytTvb7gOEBMDf6z8HVliFLFnvNu79EKSSWsE9UQUfBGEJTYGfVMazcEfgUPmxQK');
define('NONCE_KEY',        'UrcPUQscPzqCqQ66z3npm0Jt2IKwRz7IKq3MVmfwocejDPAUIsFm5pTgV91wfWME');
define('AUTH_SALT',        'ZNNuYpq55gFmneoRsbMAUas3c3tsidAfBah8wY9zcZSDD58hOqwritrv8TLraH49');
define('SECURE_AUTH_SALT', 'tFXK9STVGuWqd0WnAQQAlSxsMmvX23UixQT4nn6KMwpdkVfev55YI3sxp2BjkFkk');
define('LOGGED_IN_SALT',   'YL8nGqBY6e6q4Ew6kv8IAg7VnwDJ8QKDJjVnszPrFlG0Vx5i9t90o7gDnS8MFlQm');
define('NONCE_SALT',       'Ng4jwtuflXJBH6fbsDH470vvZDCgPZKS4w0inxTB49f8vXUesiLaiJcNbB2pA8W5');

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
$table_prefix = 'f83x_';

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

/* Multisite */
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'arturpetrovski23.thkit.ee' );
define( 'PATH_CURRENT_SITE', '/koduleht1/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
