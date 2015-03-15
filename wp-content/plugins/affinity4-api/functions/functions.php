<?php

require_once( 'paths.php' );
require_once( 'urls.php' );

function affinity4_load_admin_scripts()
{
	global $affinity4_api;
	// wp_enqueue_script( 'rename_menus.js', $plugin_dir_url . '/assets/js/rename_menus.js', array('jquery') );
	wp_enqueue_style( 'affinity4_admin', getBaseUrl() . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'affinity4_load_admin_scripts' );