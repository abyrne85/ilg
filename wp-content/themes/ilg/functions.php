<?php

/**
 * wp_enqueue_style( $handle, $src, $deps, $ver, $media );
 *
 * @since 1.0.1
 */
function ilg_load_scripts() {
	/* Load Lato Font Fmaily here instead of using @import */
	wp_enqueue_style( 'lato-google-font', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic', array(), '1.0.1' );
	
	if ( is_child_theme() ) {
		wp_enqueue_style( 'core-theme', get_template_directory_uri() . '/style.css' , array( 'bootstrap', 'calendar' ) );
	}

	
}
add_action('wp_enqueue_scripts', 'ilg_load_scripts');


class Affinity4FocusTransition {

	public $focus_transition = 'focus-snail'; // 'flying-focus', 'focus-hug', 'focus-snail', 'focus-zoom'
	public $focus_transition_script_uri;

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script' ) );
	}

	public function enqueue_script() {
		wp_enqueue_script( 'focus-transition', get_stylesheet_directory_uri() . '/assets/js/focus-transitions/' . $this->focus_transition . '.js', array(), '1.0.0' );
	}

}

new Affinity4FocusTransition;
