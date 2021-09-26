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
define('DB_NAME', 'u653035174_wp_vulnweb');

/** MySQL database username */
define('DB_USER', 'u653035174_wp_vulnweb');

/** MySQL database password */
define('DB_PASSWORD', 'Vulnweb123');

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
define('AUTH_KEY',         'H<dZ:I*~Z#Ui9,_XZ_8eQsEx .|qsj6lF<=luOB/Bu7z1KQ[`naB9}Nf<`bGze,9');
define('SECURE_AUTH_KEY',  'n>6Ry+QtHBcju)~>1RQBe@*tG.vzs2 09r<E[MOS/ /YbSC=T1FC/7N)>19@;=k3');
define('LOGGED_IN_KEY',    'VxVS|AhyB_d4)ke@87^7l#m*BMP2ib+jB_:$ZTnjZ<5nq/^]n6Z3_0tOQs7Kf9wE');
define('NONCE_KEY',        ':G%AlkhJ_hdK1C#IW|UnR/b>ZHUyv=:@w_Sa=J:W%M0MD`7CN:+a`yB1A~D*!rn?');
define('AUTH_SALT',        'q+G;Xm?iEIr*CW:xLDC#V8>:6BcTc~IuJ$;63Pt$XwOin-#ZmgL]%8a(eD!(v5.$');
define('SECURE_AUTH_SALT', 'pxU[saSu+u{!nbDg_~!}Gt.Pqx+l(o[Z7VH(buH2-WP;AoY|4>akc,1b^]@D$6%r');
define('LOGGED_IN_SALT',   '}6VVf#OI6VOCPIqs9048AlsY`[%J.soZdiv=bJ#:A}yCFqiyzRp?H`?)iH8.cU`l');
define('NONCE_SALT',       'p`_G3{,%NmPjyD7PLFmD))W IKla4.fwmtU%*:bon(a(`Q_jG*kbco)p Ou4ne|*');

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





















/** SITE http://p1.hol.es/wp-vulnweb/ */
