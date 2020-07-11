<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


function plugin_tamplate_add_page_attribute_dropdown( $post_templates, $wp_theme, $post, $post_type ) {

    $post_templates['template.php'] = __('CB WC Tracker');

    return $post_templates;
}

add_filter( 'theme_page_templates', 'plugin_tamplate_add_page_attribute_dropdown', 10, 4 );


function load_tamplate_from_plugin( $template ) {

    if(  get_page_template_slug() === 'template.php' ) {
		
        if ( $theme_file = locate_template( array( 'template.php' ) ) ) {
            $template = $theme_file;
        } else {
            $template = plugin_dir_path( __FILE__ ) . 'template.php';
        }
    }

    if($template == '') {
        throw new \Exception('No template found');
    }

    return $template;
}

add_filter( 'template_include', 'load_tamplate_from_plugin' );



class ALI_SHOP_WC {
 	
 	function __construct(){
 		
 	}

 	// progress bar active icon/img condition
	public static function alishop_wcps($data, $status, $value){

		if($data == $status) {			
			echo esc_html($value);			
		}

	}
	// Progress bar text for invalid order
	public static function order_text($status){
		 
	 	if('cancelled' === $status) {
	 		printf('The order has been %s, Please contact support', ucwords($status));
	 	}
	 	elseif('refunded' === $status) {
	 		printf('The order has been %s, Please contact support', ucwords($status));
	 	}
	 	elseif('failed' === $status) {
	 		printf('The order has been %s, Please contact support', ucwords($status));
	 	}

	}

	// Progress bar Background color for invalid order
	public static function order_class($status){
		 
	 	if('cancelled' === $status || 'refunded' === $status || 'failed' === $status ) {
	 		echo esc_attr('alishop_wc_order_cancelled');
	 	}else {
	 		return true;
	 	}

	}
	// Progress bar individual Background color for valid order
	public static function prograssbar($status) {
	 	if('pending' === $status) {
	 		printf('%s', '23');
	 	}
	 	elseif('on-hold' === $status) {
	 		printf('%s', '42');
	 	}
	 	elseif('processing' === $status) {
	 		printf('%s', '61');
	 	}
	 	elseif('shipped' === $status) {
	 		printf('%s', '80');
	 	}
	 	elseif('completed' === $status) {
	 		printf('%s', '100');
	 	}
	}

	// find payment method name from selected gateway ID
	public static function selected_gateway_name($selected) {

		$payment_method = WC()->payment_gateways->payment_gateways();		

		if(array_key_exists($selected, $payment_method)) {
			$payment_method_title = $payment_method[$selected]->title;
			echo $payment_method_title;
		}else {

			echo 'No exists';
		}

	}
}

