<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


function plugin_tamplate_add_page_attribute_dropdown( $post_templates, $wp_theme, $post, $post_type ) {

    $post_templates['template.php'] = __('Alishop WC Tracker');

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
	 		printf('%s', apply_filters( 'alishop_pending_prograss_percent', '23' ));
	 	}
	 	elseif('on-hold' === $status) {
	 		printf('%s', apply_filters( 'alishop_on_hold_prograss_percent', '42' ));
	 	}
	 	elseif('processing' === $status) {
	 		printf('%s', apply_filters( 'alishop_processing_prograss_percent', '61' ));
	 	}
	 	elseif('shipped' === $status) {
	 		printf('%s', apply_filters( 'alishop_shipped_prograss_percent', '80' ));
	 	}
	 	elseif('completed' === $status) {
	 		printf('%s', apply_filters( 'alishop_completed_prograss_percent', '100' ));
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

	// check if order number exists
	public static function order_number_exists($order_number)
		{   
		    if(get_post_type($order_number) == "shop_order")
		    {
		        return true;
		    }
		    else
		    {
		       return false;
		    }
		}


}

// Ajax action function
function alishop_wc_order_tracking_result() {

	if(wp_verify_nonce( $_POST['Ali_nonce'], 'alishop_nonce_data' )) {

		require_once(CB_WC_TRACKER_PATH . '/inc/process.php');
	}else {
		echo 'Invalid User';
	}

	exit;
}

add_action('wp_ajax_alishop_wc_order_tracking_result', 'alishop_wc_order_tracking_result');
add_action('wp_ajax_nopriv_alishop_wc_order_tracking_result', 'alishop_wc_order_tracking_result');

