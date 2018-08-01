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
define('DB_NAME', 'shopifybranch');

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
define('AUTH_KEY',         '|dVRfWjBaJb>wpgqQoQq1(q<N%}V>= fM!Qg gabJ93MZs^CQu1=^}%7m*sn-H!K');
define('SECURE_AUTH_KEY',  'n~IytI1qiii|ID-b|>G-7/6n>qVNuI|5Uc3dJT[`ba1xTHOnamP97TSgZb2@3:k$');
define('LOGGED_IN_KEY',    '^n!@?ddo`C/%.(.cMmAuPi9t<;*bB!_y,X*]p,`]Np-Au0!s|gK9Jc2M^1ui4GIH');
define('NONCE_KEY',        '#N&XDJ <*|SSP.RE.mzaxf5rIS1c&m4FpO.K<$fmOah2OwlwJ:Z5qs(.+{kw47k}');
define('AUTH_SALT',        'pDF;43ysah>{Yuys`}KC10-9!~=7=WBj(6VX3B?vl3zp/U[Gy `wOm(NtnoD0eur');
define('SECURE_AUTH_SALT', 'l*uS&p7`ck()cv~cT7kk>yI1f~AQ(]veQd=DM,Kr4E2I:lNi&~kBj{H)`NZS.j(0');
define('LOGGED_IN_SALT',   '|=~1YOYEi{Pg(~wV)SR[^$:nz/2*lQ,Yx<hIWF1i%0ive%3ps^f](DTNm20zG.W{');
define('NONCE_SALT',       'WP6h?IfD8#wQuy[&FkV.0E0psgy-V, 6.`B:+i9Lc<it+@8Ln;]<=3C~yqW<n$m8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_shop';

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
