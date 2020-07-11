<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	
?>


	<div class="alishop-tracking-container">
		<div class="alishop-tracking">
			<div class="alishop-tracking-title">
				<h2>Order Tracker</h2>
			</div>
			
			<!--Tracking Form -->
			<div class="alishop-tracking-from">
				<form method="GET">
					<div class="alishop-tracking-form-area">
						<div class="alishop-tracking-form-field">
							<label for="order_number">Order Number:</label>
							<input type="text" id="order_number" name="order_number" placeholder="Order Number...">
						</div>
						<div class="alishop-tracking-form-field">
							<label for="phone">Phone:</label>
							<input type="text" id="phone" name="phone" placeholder="Phone Number..."> 
						</div>
						<div class="alishop-tracking-form-field alishop-traking-form-submit">
							<input type="submit" value="Track Order">
						</div>	
					</div>					
				</form>
			</div><!--/ Tracking Form -->

			<?php 
				$get_order_number = $_GET['order_number'];
				$get_phone_number = $_GET['phone'];

				if(empty($get_order_number) || empty($get_phone_number)) { // search field empty check
					printf('%s Order Number & Phone field is required %s', '<h3 class="alishop_notice">', '</h3>');
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
			

			?>

			
		</div>
	</div>


<?php get_footer();