<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
	
	if(!class_exists('CBWCT_ORDER_TRACKER')) {
		return;
	}


?>


	<div class="cbwct-tracking-container">
		<div class="cbwct-tracking">
			<div class="cbwct-tracking-title">
				<h2><?php apply_filters( 'cbwct_order_tracking_heading', esc_html__('Order Tracker', 'cbwet') );?></h2>
			</div>
			
			<!--Tracking Form -->
			<div class="cbwct-tracking-from">
				<form method="POST">
					<div class="cbwct-tracking-form-area">
						<div class="cbwct-tracking-form-field">
							<label for="order_number"><?php apply_filters('cbwct_field_text_order_number', esc_html__('Order Number', 'cbwet'));?></label>
							<input type="text" id="order_number" name="order_number" placeholder="Order Number...">
						</div>
						<div class="cbwct-tracking-form-field">
							<label for="phone"><?php apply_filters('cbwct_field_text_phone_number', esc_html__('Phone Number', 'cbwet'));?></label>
							<input type="text" id="phone" name="phone_number" placeholder="Phone Number..."> 
						</div>
						<div class="cbwct-tracking-form-field cbwct-traking-form-submit">
							<?php wp_nonce_field('cbwct_nonce_data'); ?>							
							<input type="submit" value="<?php apply_filters('cbwct_submit_button_text', esc_html__('Track Order', 'cbwet'));?>">
						</div>	
					</div>					
				</form>
			</div><!--/ Tracking Form -->

			<!-- Pre Loader-->
			<div class="cbwct_result_preload_area">
				<div class="cbwct_result_preload">
					<div></div><div></div><div></div>
				</div>
			</div><!--/ Pre Loader-->
			
			<!-- Show All Output-->
			<div class="cbwct-traking-form-result"></div><!--/ Show All Output-->
			
		</div>
	</div>
