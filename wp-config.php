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
define('DB_NAME', 'wp_feriaong');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}Hn$JoSdzbiA&sK/]Yi#)P0I f4wvHI=F]Q{3+_`*Y$.xO_7nMnDr8V5IJIE8=Ni');
define('SECURE_AUTH_KEY',  'Z(*>t7C6Vqx #&3poq< SFLz=GSR_7vqVtkHGRKI2ocXws<?tF>).n@T$y.iGc8^');
define('LOGGED_IN_KEY',    '4A04V1T,CNH}ctPVS1PV8E,sM]H7o`txS%QrJbt;b&&1x4s-lW?0 f;66{s%B]Zv');
define('NONCE_KEY',        'IIL_-D[Cp,qkPYa74d8^S${QI>,BmP)v(J_aXa]c7]`i;YFHR.+k-w2mo]e~Gr~F');
define('AUTH_SALT',        'Y}0VuWiUoDoEpQcV*VdTSh2<oBIiYMQxbgH~@/v=#B@Z*W8jmBNMSujI4V9jTil9');
define('SECURE_AUTH_SALT', 'XT:hW*OoGu:7GD,s1<-/OYZHJ,gD.Kdk!y`n:QL;2?0rE8/P14bp;oiOHlE^31B3');
define('LOGGED_IN_SALT',   'TwiK`:M^X!Rj^84A/X/D?o<$@$|v~/_[E8,LWrw9A2g0ZGU_Vl93k@ZD,v-q=xC%');
define('NONCE_SALT',       'i_I8eoR.FD&&q*!zR*P~E? bqW=^yFf=#99`G7O]t$?>d|#y`Y11: O) (m!]KBx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_fong_';

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
