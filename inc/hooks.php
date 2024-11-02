<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

if(!class_exists('CBWCT_ORDER_TRACKER')) {
	return;
}

// Tracking Heading
function cbwct_order_tracking_heading(){
	echo esc_html__('Order Tracker', 'cbwet');
}
add_filter( 'cbwct_order_tracking_heading', 'cbwct_order_tracking_heading');

// Order Number
function cbwct_field_text_order_number(){
	echo esc_html__('Order Number', 'cbwet');
}
add_filter( 'cbwct_field_text_order_number', 'cbwct_field_text_order_number');


// Phone Number
function cbwct_field_text_phone_number(){
	echo esc_html__('Phone Number', 'cbwet');
}
add_filter( 'cbwct_field_text_phone_number', 'cbwct_field_text_phone_number');


// Submit Button text
function cbwct_submit_button_text(){
	echo esc_html__('Track Order', 'cbwet');
}
add_filter( 'cbwct_submit_button_text', 'cbwct_submit_button_text');


// Order and Phone number is required
function cbwct_order_number_phone_number_required() {
    // Return the formatted string with translation support
    return sprintf(
        '<h3 class="cbwct_notice">%s</h3>',
        esc_html__('Order Number & Phone field is required', 'cbwet')
    );
}
add_filter('cbwct_order_number_phone_number_required', 'cbwct_order_number_phone_number_required');


// set limit for showing title in tracking page
function cbwct_product_title_trim_words($value) {
	return 7;
}
add_filter('cbwct_product_title_trim_words', 'cbwct_product_title_trim_words');


// set progress bar percent
function cbwct_shipped_prograss_percent() {
	return 80;
}
add_filter('cbwct_shipped_prograss_percent', 'cbwct_shipped_prograss_percent');


function cbwct_order_is_not_found($value, $order_number) {
    // Return the formatted string with translation support
    $order_not_found = sprintf(
        '%s %s %s %s',
        '<h5 class="cbwct_notice">',
        esc_html__('Oops! Sorry!', 'cbwet'),
        sprintf(
            esc_html__('%s order is not found! Please check order or phone number.', 'cbwet'),
            esc_html($order_number)
        ),
        '</h5>'
    );

    return $order_not_found;
}
add_filter('cbwct_order_is_not_found', 'cbwct_order_is_not_found', 10, 2);
