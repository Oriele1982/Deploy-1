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
define('DB_NAME', 'deploy-1');

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
define('AUTH_KEY',         '_bJ~%sp9RJP)Py9f6]J$lp2*O3R_!}6O6WBNz>bHRRm}~)6U$<FyPcQapNE97Z:l');
define('SECURE_AUTH_KEY',  '6BVs-YhgKM`?Mx(|hahOx-gR_ht&KH?MF/yC;$A:>Rb6#y7bao11O/RJA 5:)fyX');
define('LOGGED_IN_KEY',    'gD]1:^ ~+WvL#~~Mll]G02Wt/L4(P[O<VKzrd>/^(j_MV:*vd6fL;.a|!aTz}1c|');
define('NONCE_KEY',        '!qpooP/34lRg9)}4eec/,*R8uS?]T;C7c)Ryk`WncWB^y:JOG)bKYtX3eBlstK7.');
define('AUTH_SALT',        'o2}ZVv8T%TE;uDiX![w~9}Yb)@EUz+?`8Ao=v5l)6z= O~FvwSpoE7XFoOHbQ#.A');
define('SECURE_AUTH_SALT', 'DkFt=sZ@Ez&>U(W}a0r#&.8H+[*7A%8x$phUc`@-:0kT(inW>JiIbO:YhQ2!j}S-');
define('LOGGED_IN_SALT',   'wIL>%ED_zhl^5tttz9)%Dx/laU)re-C@>2yiJ,op?!VV}>:EAuwRM;]RC~hB)|P9');
define('NONCE_SALT',       'aICo_{Pp)J)OGD&/RAZV){zOGWlam@iFk6stQQ=XR8Y`mJ&xiuuQ(KKYd*^zE ^1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
