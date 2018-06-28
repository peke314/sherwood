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
define('DB_NAME', 'sherwood_2016');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wrAV+Ex`MDZJ9Pntij)tlHqjZ0]ad.QEQD}j`~6W+Y#+26nx]dN2& !I.KVT?@B!');
define('SECURE_AUTH_KEY',  'C@e*1w,O-|e]3bCQ_-M%oA# ^fj7uC4GV3V?sUX#~]X~yM^LAIR97[U{7(Wibvg|');
define('LOGGED_IN_KEY',    '%9m-4GH3wUs#]XU4]VSl2/vKN|$g*GYDD0[oUGB:lqM^oj[x=8[Y9l,^Q;IG!KYT');
define('NONCE_KEY',        '%=DiZ+|N@0:h@Am(3$EI!+#QW>S.+ZaXHJKvq)dbzWBD!/eg)WV&8g+-fWYY94b}');
define('AUTH_SALT',        'RWJh8jsQok0NCo/Sl<$G.%2& pv9szRN8_MPz&.+L|aOoD(/7JanA+<oP`1L%%HS');
define('SECURE_AUTH_SALT', 'Fz 59Fa&SR_e > zv|ItzOaqH;C$N|J^lBXa[[[f)a-PRip  xQ+(h6fFmUBR^|W');
define('LOGGED_IN_SALT',   '|eBI^-|++)oYOh-h$qf|^O +MyS)*,yqAI0)OvR5k[6`-Rm)5,$+)>l.<,K;zEjp');
define('NONCE_SALT',       'AjaAvg*5G^B;neY{Im7m0$8}1OrWrevUZjGuoct}n~]C7,zwY]>R#$bJH6~cL+KS');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
