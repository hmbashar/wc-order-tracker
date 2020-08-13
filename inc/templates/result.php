<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

if(!class_exists('CBWCT_ORDER_TRACKER')) {
	return;
}

?>
<div class="cbwct-tracking-list">
	<table>
		<tr>
			<td>Order Number:</td>
			<td><?php echo esc_html($order->get_id()); ?></td>
		</tr>
		<tr>
			<td>Order Date</td>			
			<td><?php echo esc_html($order_data['date_created']->date('d-M-y @ h:i:s A')); ?></td>						
		</tr>
		<tr>
			<td>Order Status</td>
			<td><?php echo esc_html(ucwords($order->get_status())); ?></td>	
		</tr>
		<tr>
			<td>Last Update</td>
			<td><?php echo esc_html($order_data['date_modified']->date('d-M-y @ h:i:s A')); ?></td>
		</tr>

			<tr>
				<td>Product:</td>	
				<td>
					<ul>
						<?php 
							$i = 0;
							foreach ($order->get_items() as $item_key => $item ):
								$i++;
						?>
							<li><a href="<?php the_permalink($item->get_product_id());?>"> <?php echo $i. '. '; echo esc_html(wp_trim_words($item->get_name(), apply_filters('cbwct_product_title_trim_words', 8), NULL));?></a></li>
						<?php endforeach; ?>
					</ul>
				</td>	
			</tr>									

		<tr>
			<td>Customer Name:</td>
			<?php if(!empty($order_data['shipping']['first_name'])) : ?>
				<td><?php echo esc_html($order_data['shipping']['first_name']); ?> <?php echo esc_html($order_data['shipping']['last_name']); ?></td>
			<?php else : ?>
				<td><?php echo esc_html($order_data['billing']['first_name']); ?> <?php echo esc_html($order_data['billing']['last_name']); ?></td>
			<?php endif; ?>
		</tr>
		<tr>
			<td>Phone:</td>
			<?php if(!empty($order_data['shipping']['phone'])) : ?>
				<td><?php echo esc_html($order_data['shipping']['phone']); ?></td>
			<?php else : ?>
				<td><?php echo esc_html($order_data['billing']['phone']); ?></td>
			<?php endif; ?>
		</tr>
		<tr>
			<td>Customer Number:</td>
			<td><?php echo esc_html($order_data['customer_id']); ?></td>
		</tr>
		<tr>
			<td>Customer Note:</td>
			<td><?php echo esc_html($order->get_customer_note()); ?></td>
		</tr>
		<tr>
			<td>Delivery Method</td>
			<td><?php echo esc_html($order->get_shipping_method()); ?></td>
		</tr>
		<tr>
			<td>Payment Method</td>
			<td><?php echo esc_html(CBWCT_ORDER_TRACKER::selected_gateway_name($order->get_payment_method())); ?></td>
		</tr>
		<tr>
			<td>Total Amount</td>
			<td><?php echo esc_html(wc_format_decimal($order->get_total(), 2)); ?></td>
		</tr>
	</table>
</div>