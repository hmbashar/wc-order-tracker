<?php 
	 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

// set variable for getting value from input field
$get_order_number = sanitize_text_field($_POST['order_number']);
$get_phone_number = sanitize_text_field($_POST['phone_number']);


if(empty($get_order_number) || empty($get_phone_number)) { // search field empty check
	do_action( 'alishop_order_number_phone_number_required');	
}else {

	if(!isset($get_order_number)) { //order number empty
		$order = NULL;

	}else {
		
		$order = wc_get_order( $get_order_number ); // set order number

	
		$order_data = $order->get_data(); // The Order data

		// get user phone number from shipping form
		$user_shipping_phone_number = isset($order_data['shipping']['phone']) ? $order_data['shipping']['phone'] : '' ;

		// get user phone number from billing form
		$user_billing_phone_number = isset($order_data['billing']['phone']) ? $order_data['billing']['phone'] : ''; 

		// set phone number value
		if(!empty($user_billing_phone_number)) {
			$user_phone = $user_billing_phone_number;
		}elseif($user_billing_phone_number) {
			$user_phone = $user_billing_phone_number;
		}else {
			$user_phone = '4654654';
		}

		if($get_phone_number === $user_phone || $get_phone_number === $user_phone) {							
				if(!empty($order)) {
					$order_data = $order->get_data(); // The Order data

					require_once( CB_WC_TRACKER_PATH . '/inc/templates/progressbar.php'); 
					require_once( CB_WC_TRACKER_PATH . '/inc/templates/result.php'); 
				}
		}else {
			printf('%s Oops! Sorry! %s order is not found! please check order or phone number %s', '<h5 class="alishop_notice">', $get_order_number, '</h5>');
		}
	}
}
