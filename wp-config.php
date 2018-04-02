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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gJoYik1s9MwXhNEs7qco++7zGOONPRS7PXV3q+zjr7XxRNJ0g0glb0peXlpTSBmUCCioOoTTrh0EtX+NnEhq8w==');
define('SECURE_AUTH_KEY',  '/c0xBFcOrL+jbPFcZkoxmxfOLVQDBGjy1aoF0knMnEx2WB9e5PyJWeS/rqtKOnXLbuRzt8WFAoWbXw33DTffNQ==');
define('LOGGED_IN_KEY',    'mNGb0amPEj5WEAM+R5qrvWLb7uDda9cA63z2AVao0+NkjsknAX8dFC3UYuW37/YN8BImlFEiDZ9yolS//r2uGQ==');
define('NONCE_KEY',        'JUpr1YFCS+FHvE54QDQxC4+KpG3mNYXfO/TX936kyKw8sEufRigjjwIOdJhAVnRIy6BPU6jW/MEbLKqNnNKAHw==');
define('AUTH_SALT',        'MnKGWPzSI7qgKrJIEZ9I9Z8GEt1TV5YXlmfxeouttZ6qjHhBGyFsqAjL6bnGH7jxoG0tc5Gfbjfusy2Vp7DvKg==');
define('SECURE_AUTH_SALT', '4ThlS24YDNOVURW6hZduzTwgc0+EnX7ge/a+cAFLsk06+V44z3EvFcWD1FFaqEwFs2gkIlCIIZUPITdaC7gtaA==');
define('LOGGED_IN_SALT',   'MsSS9u4Rq2TikFbzlUV2dxnq6mPOjeqwqf+ZLX04enHMDXhMiwsEOPMmp2z6LJeJSEE8l37QF0P7ETmx2+dK2A==');
define('NONCE_SALT',       'DxL7UH3kfQcJngHM5Ik9RZrxMcEZmIxb1le2epDjT9LgnN2ZLuef8OzAFy9+gNfzlDFMO1fnqPv8Kh5oqekjCA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
