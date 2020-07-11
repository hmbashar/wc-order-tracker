<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

// Tracking Heading
function alishop_order_tracking_heading(){
	echo __('Order Tracker', 'cbwet');
}
add_action( 'alishop_order_tracking_heading', 'alishop_order_tracking_heading');

// Order Number
function alishop_field_text_order_number(){
	echo __('Order Number', 'cbwet');
}
add_action( 'alishop_field_text_order_number', 'alishop_field_text_order_number');


// Phone Number
function alishop_field_text_phone_number(){
	echo __('Phone Number', 'cbwet');
}
add_action( 'alishop_field_text_phone_number', 'alishop_field_text_phone_number');


// Submit Button text
function alishop_submit_button_text(){
	echo __('Track Order', 'cbwet');
}
add_action( 'alishop_submit_button_text', 'alishop_submit_button_text');


// Order and Phone number is required
function alishop_order_number_phone_number_required(){
	printf('%s Order Number & Phone field is required %s', '<h3 class="alishop_notice">', '</h3>');
}
add_action( 'alishop_order_number_phone_number_required', 'alishop_order_number_phone_number_required');

// set limit for showing title in tracking page
function alishop_product_title_trim_words($value) {
	return 7;
}
add_filter('alishop_product_title_trim_words', 'alishop_product_title_trim_words');


// set progress bar percent
//alishop_pending_prograss_percent
//alishop_on_hold_prograss_percent
//alishop_processing_prograss_percent
//alishop_shipped_prograss_percent
//alishop_completed_prograss_percent
function alishop_shipped_prograss_percent($value) {
	return 80;
}
add_filter('alishop_shipped_prograss_percent', 'alishop_shipped_prograss_percent');