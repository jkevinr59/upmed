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
define('DB_NAME', 'upmedme_wordpress');

/** MySQL database username */
define('DB_USER', 'upmedme_donny');

/** MySQL database password */
define('DB_PASSWORD', 'rahasiaku');

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
define('AUTH_KEY',         'IyCVYZ&M10:&1pp+.Vt_boXCYea=]*S>{Z66%Qa9q c7,fDb|hV;W|Hf.n(:@0S}');
define('SECURE_AUTH_KEY',  '9uPx?=@MtXiB{~Zk_~l%Dsq?UfTmgJ<^U~ijvwYa!)|Z{mzr*V#0&}iid4Cd9e%I');
define('LOGGED_IN_KEY',    'QaLZkn#E2scIkByx[ueHk.1)FH #N z.mHu2WgU,|1q) X1{!5`PLahtxbBAG(f>');
define('NONCE_KEY',        'tPJUP*%gn 3i=I4WNP?|tp45^n??+v,vAZ0cKfx}n/>O(]3HvNhyrz(4ku&6Tt:Q');
define('AUTH_SALT',        '*Je hE(6Ax(vG;Z0T!g@l%xpdUA&e;cm:G6ft~shrfU]!1<B9XvF<JCE`l<:451N');
define('SECURE_AUTH_SALT', 'fT`fX*<jG)!gr[%1yRkRa{}N}8Vw;9_tIg=[POk HcAjJg;?yW=*pxW+oxMO:*.2');
define('LOGGED_IN_SALT',   '<KH|IK$uabdMo)Oz/C5$Sv6vvm;rFvw%8{(scHTxZnqV/i|ulIw^ujby!i[_F|8q');
define('NONCE_SALT',       'TN#5H76iC[`%2}8BF1xrd-%16j4qT8%v G(+g>j ,DXyyNmALX?6qbS?@-%O:&:b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_artikel';

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
