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
define('DB_NAME', 'Dhakacrime_DataBase');

/** MySQL database username */
define('DB_USER', 'DhakaCrimeUser');

/** MySQL database password */
define('DB_PASSWORD', 'plokijuh143A!');

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
define('AUTH_KEY',         'tjywzzywrgnnlp1ung3riom2sssclvwigezp7rpqd12rdh5gb71r1sdmtxkvrfs4');
define('SECURE_AUTH_KEY',  'clbt7blty2faizyq8xpfjhadelxokckfhcxvo1n3hs2jk2rqmusmsyoc4xi6kipl');
define('LOGGED_IN_KEY',    '2s8dwdcyh7nwfydjkndhstt6d0gdirsdzqw7mwuo6wewjfjzol2rwde9255impp8');
define('NONCE_KEY',        'vc062anbqumeidzxh3hr41dib5dogvlysmbkoemvfsqbzywkemsqbpnmxatfpsee');
define('AUTH_SALT',        'agfxuangbp9hpk4vzft3hdmzwtrhp7mzjytagnvlmwjlzsmmykx5q3p1l6afmyai');
define('SECURE_AUTH_SALT', 'eurd5tnggtwq54oilik5wtqidz1siyuxkb6l5r66mkmhdpateripevtc0u0mgp1w');
define('LOGGED_IN_SALT',   'tkahioywrsly21ggb8zbiskbhpbr35y6ukmlmueh0sx9urkrwce0nd71jexrrtjq');
define('NONCE_SALT',       'mcqbdav2vqvpg34lsmenlm3fptsjqf17qlf9foaoa2c1yvwonzwb5qrkkqzqlaol');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'awjmn_';

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
