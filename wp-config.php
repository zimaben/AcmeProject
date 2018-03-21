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
define('DB_NAME', 'wp_acme');

/** MySQL database username */
define('DB_USER', 'acme');

/** MySQL database password */
define('DB_PASSWORD', 'Tankless1!');

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
define('AUTH_KEY',         '#5hmE9iwW;$Y%>8%50eqcAHEg@lDxW_<4|t`D+Km.8h<;Bq^S0CFY3M}F$FkBpT6');
define('SECURE_AUTH_KEY',  '=o3x8Gd-cklkC[h93g1<;`o<L!?vz@bM?jI#Ydr2g+eS#iHi`po]gFKfPz%6<`N-');
define('LOGGED_IN_KEY',    '2|P86]q=CV/~YwYk*;@hm}M=&bqPO;C)iYy(FFK]NiZ0:uF${4eC;W^Tl&d2V9kH');
define('NONCE_KEY',        'x}[^tRW)67SiyxoE43q.Dj>Xp6wZG}DC*nQ?<.{MO(Yu3UD(7F$d@:U]1tb)%DTf');
define('AUTH_SALT',        'jB_wO%rb5kbl!P9jolEJSyNoBFT4#HC/fEvtP@JT^x@Gj5RS}{b]CIW >Kw=dlul');
define('SECURE_AUTH_SALT', 'D*!B{:,-RieJ]K(d$lkrc0UPl0/J`4w2iZcQ0.El(fWnYW?vn3`E~H<M;CDJ0*h~');
define('LOGGED_IN_SALT',   'Hsu[zDC-~0_#]jqjZ{(),Z]mWV^.f-G4x[n5{nuLa?_Luy/)ZB/fO{ZBU:}t.#7)');
define('NONCE_SALT',       '(/$su3A(z/{j9(x@No.eP}_eO*QdU)Od0*{p34SXz<z ! vxL@cB4 Ua)E9Ph(I%');

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
