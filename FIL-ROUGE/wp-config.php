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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FIL-ROUGE' );

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
define( 'AUTH_KEY',         'gEMtJaEO18Qr3DcNVqX14YYgeXkq7RUF0TbM5qb3pLz9x1ifz2bqI6oS8FIJhd2w' );
define( 'SECURE_AUTH_KEY',  '6MKeLYzW2xdRu9P9yIqUdwnN8jG9uQrrbjqMbnpY7aVEDVuV3HpUVYTr6aOMamB5' );
define( 'LOGGED_IN_KEY',    'XtxE6Gd3Jhekb5ZMeNASiSigFdDWMeBfCC3OM6GqDp1LTpnanIrXBoH3PRuPvHeF' );
define( 'NONCE_KEY',        'R1G8O2HkuGEpEdn5nijew8NznfnkvQrMtqQlLK0Za2ArzG9xEA8sbabYOZMFwKeT' );
define( 'AUTH_SALT',        'JHtw9JkpbpFSl0wI4ntcBuI3V0k9NeBAUKsmmsqrIhFyPb2MZB0vRzZzzGsJQ5Ru' );
define( 'SECURE_AUTH_SALT', '7GJ4QMsSKEYTmApmXXu73P4c9eMckSs1XPkDhdMOhe5NLUVWkdy99MOQei4q0YF9' );
define( 'LOGGED_IN_SALT',   'iFWa0Xx4YXUkKHTf07bLAVRdlvyN0ji4wZZOPjZtQ4lBb4zn3I4VVPvYrjVnlw01' );
define( 'NONCE_SALT',       'aVFOem0SoHvR6DwSfc4zlgB5eLu9WcO5bQ8l56qMsK6ZM2usoVQaMPlU3QqIDZ9H' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
