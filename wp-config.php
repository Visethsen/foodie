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
define('DB_NAME', 'vsfood10DBadao');

/** MySQL database username */
define('DB_USER', 'vsfood10DBadao');

/** MySQL database password */
define('DB_PASSWORD', 'WFNQt1w6Zt');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'khsZCNP5D#2+;6*]taix.mTaHPeLT6H]SaDO19#5D]1~ht_]xalOWpSeHO56E{3*i');
define('SECURE_AUTH_KEY',  ']hSexeLWDWDP6_6H;+it1~[-h-htZDOhO5H:H;9#ty.qXEPfMXE{EQ6.q$$jub.q');
define('LOGGED_IN_KEY',    '<iuzgNYFcFR7,8J0@kv>vcoV$jvfMcnUB>3M3^}z}z,rYdoVC[4O5!:-:-|sZs~lS');
define('NONCE_KEY',        'lGdK1~[G:-hs]wdKW@kRcJdJ4C[G:8|s|1~kRdiP5H;L2*]x]x.qWqamTAhtdK1KW');
define('AUTH_SALT',        'ZdK4OZC[-!J0B>v>4!oUcvcoVBVgN4!}:~#tZt~lS9KeL1D#9L2~lx8|s~k~lwdGS');
define('SECURE_AUTH_SALT', 'b6TA<y.7.ubj$jubIq+iP6HaH;A<A<2*m*{yeLXcJ0B,7J0@jv>vcnUoUgN4bnUB<');
define('LOGGED_IN_SALT',   'F,yIxi*ufTqbMAXI3.rcNkYJ4VF0!C}@oyjUvfQBcM7>J4,vdO8ZK5|G1_w:~OzkV');
define('NONCE_SALT',       ']]+#ta_:-hOZtZGS9S9K1-#9#t~lqXiP6PbIE{yfq,qXjQxeqWDXiP6.;H;+<u<u*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
