<?php
namespace Affinity4API\Classes;

class TextResizer
{
	public function __construct()
	{
		// add_action( 'wp_enqueue_scripts', array( __CLASS__, 'scripts' ) );
		// add_action( 'wp_footer', array( __CLASS__, 'settings' ) );
		// add_filter( 'the_footer', array( __CLASS__, 'appendSettings' ) );
		add_action( 'wp_head', array( __CLASS__, 'jQuery' ) );
	}

	public static function scripts()
	{
		wp_enqueue_script( 'textresizer', getBaseUrl() . '/assets/libs/rv-font-size/js/rv-jquery-fontsize.min.js', array('jquery', 'storejs'), '0.2.4', false );
		// wp_enqueue_script( 'fontsize', getBaseUrl() . '/assets/js/fontSize/jquery.fontSize.js', array('jquery'), '1.0', false );
	}

	public static function styles() {
		wp_enqueue_style( 'textresizer', getbaseUrl() . '/assets/libs/rv-font-size/css/rvfs.css', '0.2.4', 'all' );
	}

	public static function getSettings()
	{
		$script = '<script>
				jQuery(document).ready(function() {
					// plugin call used in live demo page
					jQuery("#main").fontsize({
					    targetSection: "#main",
					    store: false, // store.min.js required!
					    controllers: {
					        appendTo: "#main",
					        showResetButton: true
					    }
					});	
				});
			</script>';

		return $script;
	}

	public static function settings()
	{
		echo self::getSettings();
	}

	public static function appendSettings()
	{
		$script = self::getSettings();

			$content = sprintf('%s %s', $script, $content);

		return $content;
	}

	public static function jQuery() {
		$script = '<script>
			jQuery(document).ready(function(){
			    jQuery(".increase").fontSize({
			        action: "up",
			        elements: "#main",
			        max: 36
			    });

			    jQuery(".decrease").fontSize({
			        action: "down",
			        elements: "#main",
			        min: 12
			    });
			});
		</script>';
	}
}
