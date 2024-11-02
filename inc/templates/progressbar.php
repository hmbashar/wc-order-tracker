<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

if(!class_exists('CBWCT_ORDER_TRACKER')) {
	return;
}

?>

	<!-- cbwct Tracking Progress bar-->
	<div class="cbwct-tracking-porgressbar">
		<div class="cbwct-tracking-progress <?php CBWCT_ORDER_TRACKER::order_class($order->get_status());?>" style="width:<?php echo CBWCT_ORDER_TRACKER::prograssbar($order->get_status()); ?>%;">

			<?php CBWCT_ORDER_TRACKER::order_text($order->get_status());?>
				
		</div>			
		<?php 
			if(CBWCT_ORDER_TRACKER::order_class($order->get_status())) {
				require_once('progress.php');
			}	
		?>
	

	</div><!--/ cbwct Tracking Progress bar-->
