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
define('DB_NAME', 'lincoln');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '8Wbzy7}X-_v_qx({)}57N+0*u0jKJl[(rg2?Wk+EH,_;,K~H=k<woP4@2s-3Z.b:');
define('SECURE_AUTH_KEY',  '@+X`XOPB;!l@bQUb`=7td#wz4F=cEd;Xu{?EZsr?le[4`SJW:@~Yx#+-z|OxQx|r');
define('LOGGED_IN_KEY',    'Q8:#VIlq_<,9gTm[ld)dJK_~{s< vo_xJm(Mms8yXoWZm(0/l:~uH6$1)0sS^/Mf');
define('NONCE_KEY',        ' jxU#f5>&e>[A&Ysa,N-$R2!B~You-H`fsC@+XZ=3AM6gW`Rm| 9>;g2o{R6AfQ>');
define('AUTH_SALT',        '1+VJe?<OS_ZS~1c}$mU]=-<<,+Dt4k<1^U7QzO}rs(E3J#tF+sEOnupr5u//T:Pv');
define('SECURE_AUTH_SALT', 'Dy#Z@u,k`=UFq5iyTa+,0/VNu%Etyz1QM#MeF*F>]__IDTn[^cO=cjP$D+|9^+4j');
define('LOGGED_IN_SALT',   'j3 oijstod{C^-r+Qt+LQkgN4|Sq],.U,q4ms prlY+}^/!M^nT+]HzP7{pE(06@');
define('NONCE_SALT',       '&@.!j<FosW#TSZ(| Uy{= /<m:99/tiC+t>0;-|-Z)xZO)0kWfWh@k9LCke09p6b');

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
