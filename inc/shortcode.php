<?php 
// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

// Register Shortcode
function alishop_wc_shortcode($attrs, $content = NULL) {
	ob_start();
	extract(shortcode_atts(array(

		'post_type' =>'post'

	), $attrs));

		require_once( CB_WC_TRACKER_PATH . '/inc/template.php'); 

	return ob_get_clean();
}
add_shortcode('alishop-wc-tracker', 'alishop_wc_shortcode');
