<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'ilg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QE*ppy(ZR6)B#7uj9Vog2TqyO$MmCrcSmx$aa!4Caa9KeLYdpKq%ncXP&^pdgbwl');
define('SECURE_AUTH_KEY',  '6JGHXFGUx@h6SG!4N7GyAisygTLqCKesg&Rdmc8ddWhV2EgM*eRk2^4ywsRXV5wI');
define('LOGGED_IN_KEY',    'NvCl1quor*sgByj7)5j^(p9muerFfwE07*N@%*Hu35rBVwVIzc3HvaM%$6Ec@E9z');
define('NONCE_KEY',        '69fvAKbAGgnYwT3oBIRjCxLgIuvaX4vLpVZh6WlxwC(JIyjX7(@!IggVp$YCNDCh');
define('AUTH_SALT',        'esovQq9hM^n$HeUeodYEZkBsxh*S4F7juexyg!1NphBJ%9ydF2uJXv@FVhwpwXen');
define('SECURE_AUTH_SALT', '7VMD3%vMYpZOcAeXXPWbO@pMg$pY66dv*aPB&bifi67xV9Ic0Z4PokALZER3Igt5');
define('LOGGED_IN_SALT',   '^P6)!x)&6nV&skm2CyiSk5*6pEtb%1lf&Zpl(zqCOpB@YBwS^uKwMkP41)nv2@!U');
define('NONCE_SALT',       'cC*$!CytmARvIpAkb6$q%5@0&YQlz&QN5bP4zYheurU8gkMcR*WOso$B67LqyWgP');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
