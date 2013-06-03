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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rfGFo4FS-46.0rj8]Z7!va/L)2||W}-jON>qx-J{0DI-vA|O#l7MbZA7g,AJg6&y');
define('SECURE_AUTH_KEY',  '!gR?PT*1sTod+}xV2p2;K9/7, <<OEkA()#>}E19b$2Rj,?ME+Gq)%}WhnNN2UHa');
define('LOGGED_IN_KEY',    '_|&!{07<P6+{BDAgNvB{-r)uNb=H+E/`aG:}xn%oMRzIbDc0T})-BK>kBu_jZ;cx');
define('NONCE_KEY',        'P3`a*w!=+xRF0_Y<R@BrI{N:<Ks[G:RWamu+#0~CQMH^~}^Dm1jI|{:K#!8jpdE.');
define('AUTH_SALT',        'H-Ct(N}A*Y/|P|YRB9~XwL+o/WqG%X)W| @6@:5ix})sVnJm%[FN1px<@+rQjo/I');
define('SECURE_AUTH_SALT', '9(h|~<CanPPb80+,j99B &vcpK4BqY`Z%!PV=xwDNX<yc&~W1cekZ)g7~QoqG#sT');
define('LOGGED_IN_SALT',   'R|hqZEv.%1B`|)XB|yVe54*hgLo{Z=hBj/J*dO+#M+cU0gg>|jA.Sgd37& r|/0[');
define('NONCE_SALT',       '!-qVb)$k ;*Hi{,7KMh4-.1@)AE5O$V:Rr}4;{hGhgCs#&=@.<=6gw@1n0K|sF*X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blackmask_';

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
