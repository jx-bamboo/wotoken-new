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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd1wo41981834634');

/** MySQL database username */
define('DB_USER', 'd1wo41981834634');

/** MySQL database password */
define('DB_PASSWORD', 'GlS_9u.cujwj');

/** MySQL hostname */
define('DB_HOST', 'd1wo41981834634.db.41981834.25e.hostedresource.net:3311');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kzEM%/k@qJCREy6Lp$KT');
define('SECURE_AUTH_KEY',  'd2Ukj$c AHLB)-c*I2/J');
define('LOGGED_IN_KEY',    'C@+Xm6JO$_W5A6BvA/5R');
define('NONCE_KEY',        'GxE(jE9LAZs*!$P7+JjF');
define('AUTH_SALT',        'Mdrb72!7w@#kh_Gghs@r');
define('SECURE_AUTH_SALT', 'Ib//E=OU_b1s+ZpT@@W2');
define('LOGGED_IN_SALT',   'x!CN9/UtWy0O2G6Tt= g');
define('NONCE_SALT',       's4#13_FH )tJrD=qgsfW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_s06mq3g36t_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));

$_SERVER['HTTPS'] = 'ON';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
