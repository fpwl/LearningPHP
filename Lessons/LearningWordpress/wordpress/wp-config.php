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
define('DB_NAME', 'myFirstWordPressSite');

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
define('AUTH_KEY',         'Q>*%7%[{%ELtpLXe_?;UPo]yj5s@<?/gLGM|-#bplP/|>{qDMKcc=1[535XpY1e*');
define('SECURE_AUTH_KEY',  '.y7?|NVz3eEJtT%H^//rpfv@F.[j2~.C4. wfL@8gH=}MRlzmlw[UkD8CC:.VNk[');
define('LOGGED_IN_KEY',    '~>*^m{Ma$HJ[wKU.bW/CZ#~ai j.Mv.vbI#AYrK7o8}]B]uCC/C ,$c`N2;Y0#Oh');
define('NONCE_KEY',        'k2XBuq=}[*-V,#r0r>/QtV@fsb<|2;V+2tjXj7f(;m=Su-cdzyZ%jXF!uKk$%}[%');
define('AUTH_SALT',        'O0sRaMkb-)6:vI~5a0w$y_~E$v`vh/6l%8O,hVrbyq|<=[I@w7!I1}NzoQ4aX`VU');
define('SECURE_AUTH_SALT', 'm|Jvx6Bk2+QxMEhz4GoG{@Laf^uGz?%(q3)~)9bMEd(Vl-rHxcyu-+j_Zn0-S8;&');
define('LOGGED_IN_SALT',   '1^JB4D-%nEt-VPM=FP-?BL<:3b<<ph%mh2ieXRHC?Th9ZU30wJ_k:[[Stb$jOG`%');
define('NONCE_SALT',       'ot;BIaF:T9$Ed!HT4YN$b+*OSHE>^wv8RoSPOnMJ7<vT@|6?K~)YK] CY<Qi_>k$');

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
