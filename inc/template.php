<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	
?>


	<div class="alishop-tracking-container">
		<div class="alishop-tracking">
			<div class="alishop-tracking-title">
				<h2><?php do_action( 'alishop_order_tracking_heading' );?></h2>
			</div>
			
			<!--Tracking Form -->
			<div class="alishop-tracking-from">
				<form method="POST">
					<div class="alishop-tracking-form-area">
						<div class="alishop-tracking-form-field">
							<label for="order_number"><?php do_action('alishop_field_text_order_number');?></label>
							<input type="text" id="order_number" name="order_number" placeholder="Order Number...">
						</div>
						<div class="alishop-tracking-form-field">
							<label for="phone"><?php do_action('alishop_field_text_phone_number');?></label>
							<input type="text" id="phone" name="phone" placeholder="Phone Number..."> 
						</div>
						<div class="alishop-tracking-form-field alishop-traking-form-submit">
							<?php wp_nonce_field('alishop_nonce_data'); ?>							
							<input type="submit" value="<?php do_action('alishop_submit_button_text');?>">
						</div>	
					</div>					
				</form>
			</div><!--/ Tracking Form -->

			<!-- Pre Loader-->
			<div class="alishop_result_preload_area">
				<div class="alishop_result_preload">
					<div></div><div></div><div></div>
				</div>
			</div><!--/ Pre Loader-->
			
			<!-- Show All Output-->
			<div class="alishop-traking-form-result"></div><!--/ Show All Output-->
			
		</div>
	</div>


<?php get_footer();