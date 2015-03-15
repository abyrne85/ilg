<?php
/**
 * Plugin Name: Affinity4 API
 * Description: Affinity4 development helpers, functionality, add-ons and extensions
 * Author: Luke Watts, Affinity4
 * Version: 1.1.0
 */

/**
 * For very old outdated servers running PHP < 5.2
 *
 * @since 1.0.0
 */
if (!defined('PHP_VERSION')) define('PHP_VERSION', phpversion());
if (version_compare(PHP_VERSION, '5.3.2', '<'))
	echo 'Affinity4API Plugin requires a minimum of PHP 5.3.2 to run.<br />
	This server is running on PHP ' . PHP_VERSION . '.';

/**
 * Path and Url helpers
 * Do not use with global scope identifier. Instead use path helpers.
 *
 * @since 1.0.0
 */
define( 'AFFINITY4API_PATH', rtrim( str_replace( '\\', '/', plugin_dir_path( __FILE__ ) ), '/' ) );
define( 'AFFINITY4API_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );

/**
 * Add functions
 *
 * @since 1.1.0
 */
require_once( plugin_dir_path( __FILE__ ) . '/functions/functions.php' );

/**
 * PSR-4 Autoloading Class
 *
 * @since 1.1.0
 */
$autoloader_path = getBasePath() . '/classes/PSR4Autoloader.php';
if ( file_exists( $autoloader_path ) ) {
	require_once( $autoloader_path );
} else {
	echo 'File ' . $autoloader_path . ' could not be located.';
}

/**
 * Add new namespaces and directories to autoload
 *
 * @since 1.1.0
 */
require_once( getBasePath() . '/autoload.php' );


/**
 * Initializing classes
 */
use Affinity4API\Classes\StoreJS as StoreJS;
use Affinity4API\Classes\TextResizer as TextResizer;
// new StoreJS;
new TextResizer;
