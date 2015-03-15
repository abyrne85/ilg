<?php
namespace Affinity4API\Classes;

class AccessibleNav
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array(__CLASS__, 'loadScripts'));
	}

	public static function loadScripts()
	{
		wp_enqueue_script('accessible-nav', getBaseUrl() . '/assets/js/accessible-nav.js', array('jquery'), '1.0', true);
	}
}