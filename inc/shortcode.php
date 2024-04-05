<?php 
// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
if(!class_exists('CBWCT_ORDER_TRACKER')) {
	return;
}

// Register Shortcode
function cbwct_wc_shortcode($attrs, $content = NULL) {
	ob_start();
	extract(shortcode_atts(array(

		'post_type' =>'shop_order'

	), $attrs));

		// get template markup
		require_once( CBWCT_TRACKER_PATH . '/inc/template-markup.php'); 

	

	return ob_get_clean();
}
add_shortcode('cbwct-order-tracker', 'cbwct_wc_shortcode');
