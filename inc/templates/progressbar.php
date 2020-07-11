<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


?>

	<!-- Alishop Tracking Progress bar-->
	<div class="alishop-tracking-porgressbar">
		<div class="alishop-tracking-progress <?php ALI_SHOP_WC::order_class($order->get_status());?>" style="width:<?php echo ALI_SHOP_WC::prograssbar($order->get_status()); ?>%;">

			<?php ALI_SHOP_WC::order_text($order->get_status());?>
				
		</div>			
		<?php 
			if(ALI_SHOP_WC::order_class($order->get_status())) {
				require_once('progress.php');
			}	
		?>
	

	</div><!--/ Alishop Tracking Progress bar-->
