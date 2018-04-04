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
define('DB_NAME', 'yommybox_wp915');

/** MySQL database username */
define('DB_USER', 'yommybox_wp915');

/** MySQL database password */
define('DB_PASSWORD', 'm267S)tp4@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '0swa5czvx4sit6dv7psdyz2suarqnl6ieqbgfgpwwhxokltnxygvmfbgms554pl6');
define('SECURE_AUTH_KEY',  'v5g4mzv6nfyk3rmywv8zrbnfpae5xok63yva3ugz6y5voershpsxahbvgrsnvwtb');
define('LOGGED_IN_KEY',    'gwmb72glg5dxynsziv6tqoc4azj9yutpytpcbe6ktym1bud3nnwezjzv3ovw2wai');
define('NONCE_KEY',        'ucpta7agca2qh9tw3rchsrowndgfu9tshzd7shesab2tbzrui1mmud9kws713caf');
define('AUTH_SALT',        'ge6bpmgszrys6nl9p8jfck3vg2hlkkewzs2u9fbm1guh2ibnj2yjdnkyuqnjg5z5');
define('SECURE_AUTH_SALT', '8juusmv81vp322eotr4jx0jvutped6u2rvpyrje2ptavfdgxs3jml5v5xaf8x6hc');
define('LOGGED_IN_SALT',   'ezn78w99desii0nwopajeb5olrrvdvxifvsdbbod52jlhk35rlwxovrws9cmfnj1');
define('NONCE_SALT',       'nfqerlfgvm2ownuhrwiq1ysgbr79kttf8sj5ueflq2kwhvpbvb1isgbf4099gki9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpug_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
