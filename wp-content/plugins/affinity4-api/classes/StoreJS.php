<?php
namespace Affinity4API\Classes;

class StoreJs
{
	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );
	}

	public static function scripts()
	{
		wp_enqueue_script( 'storejs', getBaseUrl() . '/assets/js/storejs/store.min.js', array('jquery'), '1.0', true );
	}

}