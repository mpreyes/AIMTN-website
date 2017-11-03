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
define('DB_NAME', 'wordpressDB');

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
define('AUTH_KEY',         '4F<Q$1dvrpiYKlqQm=Q(3-S uHhX3o~el+j=]m,7?vSY>QjW7-@kcSdl,9>Q5%CK');
define('SECURE_AUTH_KEY',  'lDIpxK70I;x+A9OR6j}}iDu5581OXs;+;|{6?KO(<?J!v[;Whr=V]sTY%KNHCM)-');
define('LOGGED_IN_KEY',    'X$y rXe5IbVh*~D:=?4=%Nqk{<,GB`4SHu^`e:4 J6{k8Ps:8wX2V|1oP+=8J003');
define('NONCE_KEY',        '>3LbYWV7,^m{mu=#FAK^R,>6&SSWj87:RPXt{gy<)*)_C-U5KQI,So_8;,b.Dwy)');
define('AUTH_SALT',        'CY/)Je3(xa(9+/IGy.* *)Ncu^{r4I?@I6PA6N@-0]P7.*;}X^cW57UvUQtrOB+8');
define('SECURE_AUTH_SALT', 'zTRcqokY/Jh$(/>mW2l~)N}FIrt+) 6(JRxh(-g:#YO:yzws+q53t1ZQiZL?5CRp');
define('LOGGED_IN_SALT',   '!tS9AFo|Aqn?5Z?,!IV7-K3=pFb@CmGN+0r@2W2_a)m39;CpZb/~JP!I&9i|I(Yv');
define('NONCE_SALT',       'G>wF.+~%#M9r)gV-FM 1 SE9H.?*tbq0uj=)0q5wQD5EVNw@SP4x!kUzI|gp<6! ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_softwareEngineering';

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
