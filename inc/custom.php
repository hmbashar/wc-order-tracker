<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;



// Show Admin notice if Woocommerce plugin isn't installed.

function cbwct_notice_for_wc_admin_notice(){    

	if (!class_exists( 'WooCommerce' )) {  
		if( ! function_exists('get_plugin_data') ){
			require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}
		$plugin_data = get_plugin_data( CBWCT_TRACKER_PATH .'cbwct.php' );
		$woo_url = 'https://wordpress.org/plugins/woocommerce/';
		
		printf('<div class="notice notice-error">
				<p><a href="%s" target="_blank">Woocommerce</a> Is Required! Woocommerce plugin needs to activated if you want to install the <strong>"%s"</strong> plugin.</p>
			</div>', $woo_url, $plugin_data['Name']);
	}else {
		return false;
	}
 
}
add_action('admin_notices', 'cbwct_notice_for_wc_admin_notice');



if(!class_exists('CBWCT_ORDER_TRACKER')) {

	final class CBWCT_ORDER_TRACKER {
		
		function __construct(){
			
		}

		// progress bar active icon/img condition
		public static function cbwct_wcps($data, $status, $value){

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
				echo esc_attr('cbwct_wc_order_cancelled');
			}else {
				return true;
			}

		}
		// Progress bar individual Background color for valid order
		public static function prograssbar($status) {
			if('pending' === $status) {
				printf('%s', apply_filters( 'cbwct_pending_prograss_percent', '23' ));
			}
			elseif('on-hold' === $status) {
				printf('%s', apply_filters( 'cbwct_on_hold_prograss_percent', '42' ));
			}
			elseif('processing' === $status) {
				printf('%s', apply_filters( 'cbwct_processing_prograss_percent', '61' ));
			}
			elseif('shipped' === $status) {
				printf('%s', apply_filters( 'cbwct_shipped_prograss_percent', '80' ));
			}
			elseif('completed' === $status) {
				printf('%s', apply_filters( 'cbwct_completed_prograss_percent', '100' ));
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
}

// Ajax action function
function cbwct_wc_order_tracking_result() {

	if(wp_verify_nonce( $_POST['Ali_nonce'], 'cbwct_nonce_data' )) {

		require_once(CBWCT_TRACKER_PATH . '/inc/process.php');
	}else {
		echo 'Invalid User';
	}

	exit;
}

add_action('wp_ajax_cbwct_wc_order_tracking_result', 'cbwct_wc_order_tracking_result');
add_action('wp_ajax_nopriv_cbwct_wc_order_tracking_result', 'cbwct_wc_order_tracking_result');


function cbwct_tracker_tamplate_add_page_attribute_dropdown( $post_templates, $wp_theme, $post, $post_type ) {

    $post_templates['template.php'] = __('Order Tracker for WooCommerce');

    return $post_templates;
}

add_filter( 'theme_page_templates', 'cbwct_tracker_tamplate_add_page_attribute_dropdown', 10, 4 );


function cbwct_tracker_load_tamplate( $template ) {

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

add_filter( 'template_include', 'cbwct_tracker_load_tamplate' );

