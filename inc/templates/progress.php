<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


?>

		  <div class="alishop_wc_traking_steps">

		  	<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/place-order.png'; ?>" title="Order" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round"></div>
		    	
		    </div><!--/ Single Step-->

			<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/payment.png'; ?>" title="Payment Pending" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round <?php ALI_SHOP_WC::alishop_wcps('pending', $order->get_status(), 'ali-wc-payment active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/hold.png'; ?>" title="On Hold" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round <?php ALI_SHOP_WC::alishop_wcps('on-hold', $order->get_status(), 'ali-wc-hold active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img class="<?php ALI_SHOP_WC::alishop_wcps('processing', $order->get_status(), 'alishop_progress');?>" src="<?php echo CB_WC_TRACKER_URL . 'img/processing.png'; ?>" title="Processing" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round <?php ALI_SHOP_WC::alishop_wcps('processing', $order->get_status(), 'ali-wc-processing active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/delivery.png'; ?>" title="Shipping" alt="delivery">
		    		<img class="alishop_shipping <?php ALI_SHOP_WC::alishop_wcps('shipped', $order->get_status(), 'active');?>" src="<?php echo CB_WC_TRACKER_URL . 'img/delivery.png'; ?>" title="Shipping" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round <?php ALI_SHOP_WC::alishop_wcps('shipped', $order->get_status(), 'ali-wc-shipping active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="alishop_wc_traking_step">				    	
		    	<div class="alishop-wc-traking-img">
		    		<img src="<?php echo CB_WC_TRACKER_URL . 'img/delivered.png'; ?>" title="delivered" alt="delivery">
		    	</div>
		    	<div class="alishop-wc-traking-round <?php ALI_SHOP_WC::alishop_wcps('completed', $order->get_status(), 'ali-wc-delivered active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

		  </div>	