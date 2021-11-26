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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Sds+I07DTQbpcIGmcfANHPNFPx3RXaIHkE5FmJVj/Y9ZI+SEm9vBlGjQKF5ZVQzWxga3LeaYVcbL/9xjH1eQWw==');
define('SECURE_AUTH_KEY',  'n357+okamKGzWj5/lEMIjhA0WChSFTEwjUSqybxJW9uMpFczKjQ27D+8ZVzmbOmYSg4dMpFgehPaII3lRz8g+A==');
define('LOGGED_IN_KEY',    'cetlKR0rUo+pXq/T01+xYE9WeQ0QaScfTwCAgzr3D4Nek0k14KfcEy7cSAZBHkwpbvlO6bWnCzdsKVW0n63qYw==');
define('NONCE_KEY',        'OTjpAvg50Ng52bemYa/YE+v5o785sj/7h0T4jLKI2gDR9MGDGUljpQw6wFM4FzfpSDbwikvH39ZAXQC8feoTRQ==');
define('AUTH_SALT',        'HuloJXZqs+I4UFPyFiSAqHqDfkV+dkye40Kbtc7jv/lC9OjT7oB4VaGTDkJXZEENhsdmDjkfgQ4ql9s7GqMLfQ==');
define('SECURE_AUTH_SALT', 'EcES9jR1Ks4rYO+R8mxFJ2+0SPqrueH2hnzkMIgItmzHnovq8y7j4tE3ksF3Xm/yqkSpZn9/8KDi9I+scEBnaQ==');
define('LOGGED_IN_SALT',   'A0sRjXBQiHTRmNI308y/iwcw3JqAC0E+qlxPiRHtYb6TaQlwdnNzMh9XU033ioNWOSrIo4/NYoF55kmhs7uyMQ==');
define('NONCE_SALT',       'focTG0OOggkl4pybAYwa5JiWmpNRWyVnie3bh0o19/6nzzuPVqtA9J6uNDZ+L+Xd3xur5JRwv5MfcLaTkHUq2A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
