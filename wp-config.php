<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'wp_pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M^_O&WJk}m##OI{*n7OO$KE@)]DD9HO}W^jNWo2euwgwLYVmp5(M:v6_QSXmdEIO');
define('SECURE_AUTH_KEY',  ']q!kdj1GqRS2>G%.=pytE(lFyFr#u+P}(G`#G`R4*D6u0:Xs?YM@?GQ+wu3|M1k_');
define('LOGGED_IN_KEY',    '82X=z2V=bPbT*Y6s4z*Q)by,UDd:JrOSaQu0OgX^T5G5QRF|=6 Ig-n{MTethS&V');
define('NONCE_KEY',        'F`Y~0Q *HZxbDER+y@DYQGj8fKjTPd(Ql39(pC9aI qo0qY1ANV*f/>_FD1uf9_D');
define('AUTH_SALT',        'ZT;q.q$g jP8p;X~.S|*! !t!!aM3JlcZ41;J`GbU!Kn4h>a:OQ!><o)!3L)D)QC');
define('SECURE_AUTH_SALT', '=mOc<_C6qnkYK4&wsUI(/2KHJ 9CnTiWk[3lYPo^vx)k:f!OZuUaDPpYEYBVs(y.');
define('LOGGED_IN_SALT',   'WA*jVn_R;3I lC,M9!%[m+Ki@7~/>cW@8FHVCB1_TW!+m2G^xWYy fqn^8`QI6]Y');
define('NONCE_SALT',       ';l@,i#nuv)-rBj&p6~(Pb_it7UB_.AxN#5,79u$EVQE>(ElhnY`2X/9<^E!h}s]1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
