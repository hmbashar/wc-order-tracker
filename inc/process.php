<?php 
// Don't call the file directly
if (!defined('ABSPATH')) exit;

if (!class_exists('CBWCT_ORDER_TRACKER')) {
    return;
}

// Set variables for getting values from input fields
$get_order_number = sanitize_text_field($_POST['order_number']);
$get_phone_number = sanitize_text_field($_POST['phone_number']);

if (empty($get_order_number) || empty($get_phone_number)) { // Check if search fields are empty
    echo apply_filters('cbwct_order_number_phone_number_required', esc_html__('Order Number & Phone field is required', 'cbwct'));
} else {
	

   if (!CBWCT_ORDER_TRACKER::order_number_exists($get_order_number)) {
    echo apply_filters('cbwct_order_is_not_found', esc_html__("Oops! Sorry! {$get_order_number} order is not found! Please check the order or phone number.", 'cbwct'), $get_order_number);
} else {
        $order = wc_get_order($get_order_number); // Retrieve the order
        $order_data = $order->get_data(); // Get the order data

        // Get user phone numbers from billing and shipping forms
        $user_billing_phone_number = isset($order_data['billing']['phone']) ? $order_data['billing']['phone'] : '';
        $user_shipping_phone_number = isset($order_data['shipping']['phone']) ? $order_data['shipping']['phone'] : '';

        // Determine which phone number to use
        $user_phone = !empty($user_billing_phone_number) ? $user_billing_phone_number : (!empty($user_shipping_phone_number) ? $user_shipping_phone_number : 'Unknown phone number');

        // Compare the provided phone number with the one from the order
        if ($get_phone_number === $user_phone) {
            // If phone numbers match, include the progress bar and result templates
            require_once(CBWCT_TRACKER_PATH . '/inc/templates/progressbar.php'); 
            require_once(CBWCT_TRACKER_PATH . '/inc/templates/result.php');
        } else {
            echo apply_filters('cbwct_phone_mismatch', esc_html__('The provided phone number does not match our records.', 'cbwct'), $get_order_number);
        }
    }
}
?>
