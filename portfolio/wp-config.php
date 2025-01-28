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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd132382sd582025' );

/** Database username */
define( 'DB_USER', 'd132382sa529614' );

/** Database password */
define( 'DB_PASSWORD', '2c2wS4eCqQ6QD3P94' );

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
define('AUTH_KEY',         '6x0ACBi9oFnGPEHB90dOegjU7zgafMiyrUlS8wMah3E8ry2beOwec9jajM3atWye');
define('SECURE_AUTH_KEY',  'Ap3p7qm87Rul6DQbaK3NgKcyr702D3RDfMxF5mvMunmJDFbfpnFsMxpLm6bKjLKb');
define('LOGGED_IN_KEY',    'PKJLt5H26vNyffrPA8Den1uumh5LN8AgxoezCA1zWwEfxh96qvvGewclRdl1YBsO');
define('NONCE_KEY',        'ZlrqJA3D7Cn9sHFcsavQWfLdyMR0QJji9CrxC6Tc98nP6AKH9lR3RzQCoosTJmjS');
define('AUTH_SALT',        'A1Tl6UOcfwt8HdzqGkf40kiuQhzoSDkKDwtOUiamPzt3obxZdu8P5e4gCIfsJXQf');
define('SECURE_AUTH_SALT', '8KbfXqozQfZQkWO3onF3MJM3KKCN6zrBSw1StxvCkWg26AVQqxarSOJzlzbGRlwp');
define('LOGGED_IN_SALT',   '9lcBVuig0YZohbGNxyWWeg3smX1L2OI5UaF0k0j8Yv8xgLvTkHPSeyXlxDz7i6D9');
define('NONCE_SALT',       'BuwqkGkgTLfMLc0UJqUGgSwkzUjrjMrvaXcO0UtBJCjUPdg3jZCt8Choxvnkokb7');

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
$table_prefix = 'bbyd_';

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
