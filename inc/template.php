<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

		
	$order = wc_get_order( 987 );
	$order_data = $order->get_data(); // The Order data

?>


	<div class="alishop-tracking-container">
		<div class="alishop-tracking">
			<div class="alishop-tracking-title">
				<h2>Order Tracker</h2>
			</div>


			<div class="alishop-tracking-porgressbar">
				<div class="alishop-tracking-progress" style="width: 40%;"></div>				
				  <div class="alishop_wc_traking_steps">
				  	<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/place-order.png'; ?>" title="Order" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active"></div>
				    	
				    </div><!--/ Single Step-->

					<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/payment.png'; ?>" title="Payment Pending" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active ali-wc-payment"></div>
				    	
				    </div>
				    <!--/ Single Step-->
					<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/hold.png'; ?>" title="On Hold" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active ali-wc-hold"></div>
				    	
				    </div>
				    <!--/ Single Step-->
					<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/processing.png'; ?>" title="Processing" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active ali-wc-processing"></div>
				    	
				    </div>
				    <!--/ Single Step-->
					<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/delivery.png'; ?>" title="Shipping" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active ali-wc-shipping"></div>
				    	
				    </div>
				    <!--/ Single Step-->
					<!--Single Step-->
				    <div class="alishop_wc_traking_step">				    	
				    	<div class="alishop-wc-traking-img">
				    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/delivered.png'; ?>" title="delivered" alt="delivery">
				    	</div>
				    	<div class="alishop-wc-traking-round active ali-wc-delivered"></div>
				    	
				    </div>
				    <!--/ Single Step-->

				  </div>	

			</div>

			<div class="alishop-tracking-list">
				<table>
					<tr>
						<td>Order ID:</td>
						<td><?php echo esc_html($order->get_id()); ?></td>
					</tr>
					<tr>
						<td>Order Date</td>
						<td><?php echo esc_html($order->post->post_title); ?></td>						
					</tr>
					<tr>
						<td>Order Status</td>
						<td><?php echo esc_html(ucwords($order->get_status())); ?></td>						
					</tr>
					<tr>
						<td>Last Update</td>
						<td><?php echo esc_html($order_data['date_modified']->date('d-M-y @ h:i:s A')); ?></td>
					</tr>

					<?php 
						$i = 0;
						foreach ($order->get_items() as $item_key => $item ):
							$i++;
					?>
						<tr>
							<td>Product name: (<?php echo esc_html($i); ?>)</td>					
							<td><a href="<?php the_permalink($item->get_product_id());?>"> <?php echo esc_html($item->get_name()); ?></a></td>						
						</tr>
						
					<?php endforeach; ?>

					<tr>
						<td>Customer Name:</td>
						<td><?php echo esc_html($order_data['billing']['first_name']); ?> <?php echo esc_html($order_data['billing']['last_name']); ?></td>
					</tr>
					<tr>
						<td>Customer Notes:</td>
						<td>Ytrds</td>
					</tr>
					<tr>
						<td>Deadline:</td>
						<td>2016-08-17</td>
					</tr>
					<tr>
						<td>Start Date:</td>
						<td>2016-08-01</td>
					</tr>
					<tr>
						<td>Budget</td>
						<td>$60,000</td>
					</tr>
					<tr>
						<td>Implementation</td>
						<td>2016-11-01 10:07:35</td>
					</tr>
					<tr>
						<td>Project ID:</td>
						<td>1234567</td>
					</tr>
					<tr>
						<td>Project name:</td>
						<td>Web Content Management Integration </td>
					</tr>
					<tr>
						<td>Project notes:</td>
						<td>New process to be included</td>
					</tr>
					<tr>
						<td>Customer Notes:</td>
						<td>Ytrds</td>
					</tr>
					<tr>
						<td>Deadline:</td>
						<td>2016-08-17</td>
					</tr>
					<tr>
						<td>Start Date:</td>
						<td>2016-08-01</td>
					</tr>
					<tr>
						<td>Budget</td>
						<td>$60,000</td>
					</tr>
					<tr>
						<td>Implementation</td>
						<td>2016-11-01 10:07:35</td>
					</tr>
				</table>
			</div>
			<div class="alishop-tracking-from">
				<form>
					<label for="fname">Product ID:</label>
					<input type="text" id="fname" name="fname" placeholder="Product ID..."> 
					<input type="submit" value="Track Project">
				</form>
			</div>
		</div>
	</div>


<?php get_footer();