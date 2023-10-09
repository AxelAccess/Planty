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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'tGb1mmzr2GpaGCOopMuqu9ruwURfiPfSfFnPP+qO/EG1nABENt6b8l2TBMHi+nbQ3fXIV7bRBM9/IEDtdyA6gQ==');
define('SECURE_AUTH_KEY',  'KGuup+lb57xfRqbJuLSiEz8iHooldb6gSUm61EaaHyUjFbaEyBNV7Rp8j2zqHlTshzT2OkdY6YBTJ6lPWlDbbw==');
define('LOGGED_IN_KEY',    'JfbI4nLvUMN+wVK1fIx56GOsitemHa3/NIsslP7nt52+r6bFyl8cSlNN9Q3BsLoj0Oh0J6bNd9tg5AlcFysfwg==');
define('NONCE_KEY',        '5IGQwL2xg5aRUj3dAaxsf7DNx8SA3YGK9rKKe+X9VfAbkgYmIkTn4BOJnZWhHu+5JDF02NaGPeZjxphvVMYQHw==');
define('AUTH_SALT',        'YuUqc5KDajkp+lO1xOCwevzj26ti+t5oBxCOfENpfTuAwFg+xV8djZPVUmIEET3bomDrmyFaEiW+suZZER41QQ==');
define('SECURE_AUTH_SALT', 'LJdm4oKAt80Yn23GFHulug91UTTyGMO4bkRPomUZ0UuS/Fvr/Uiw8hA0eOZllaSGi6KyqCta0YjDEQKDUajU3w==');
define('LOGGED_IN_SALT',   'vmVqQvEwIhS75ZRQqBTRWlbYBMsalUglyf1AbJIfgXzNeekmOwjvbFv4ldahGfVoRSO/xxWdSM9MiDU1OKVzZA==');
define('NONCE_SALT',       'FemzCCYX44Y228/rJbinRdep8T5dFajatVTLOB69IHZjsoS6YPNkF3TIx8TYkrWoh8NOL40Fa9WlXP3pHtqEog==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
