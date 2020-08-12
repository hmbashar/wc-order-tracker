<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


?>

		  <div class="cbwct_wc_traking_steps">

		  	<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img src="<?php echo CBWCT_TRACKER_URL . 'img/place-order.png'; ?>" title="Order" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round"></div>
		    	
		    </div><!--/ Single Step-->

			<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img src="<?php echo CBWCT_TRACKER_URL . 'img/payment.png'; ?>" title="Payment Pending" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round <?php ALI_SHOP_WC::cbwct_wcps('pending', $order->get_status(), 'ali-wc-payment active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img src="<?php echo CBWCT_TRACKER_URL . 'img/hold.png'; ?>" title="On Hold" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round <?php ALI_SHOP_WC::cbwct_wcps('on-hold', $order->get_status(), 'ali-wc-hold active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img class="<?php ALI_SHOP_WC::cbwct_wcps('processing', $order->get_status(), 'cbwct_progress');?>" src="<?php echo CBWCT_TRACKER_URL . 'img/processing.png'; ?>" title="Processing" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round <?php ALI_SHOP_WC::cbwct_wcps('processing', $order->get_status(), 'ali-wc-processing active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img src="<?php echo CBWCT_TRACKER_URL . 'img/delivery.png'; ?>" title="Shipping" alt="delivery">
		    		<img class="cbwct_shipping <?php ALI_SHOP_WC::cbwct_wcps('shipped', $order->get_status(), 'active');?>" src="<?php echo CBWCT_TRACKER_URL . 'img/delivery.png'; ?>" title="Shipping" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round <?php ALI_SHOP_WC::cbwct_wcps('shipped', $order->get_status(), 'ali-wc-shipping active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

			<!--Single Step-->
		    <div class="cbwct_wc_traking_step">				    	
		    	<div class="cbwct-wc-traking-img">
		    		<img src="<?php echo CBWCT_TRACKER_URL . 'img/delivered.png'; ?>" title="delivered" alt="delivery">
		    	</div>
		    	<div class="cbwct-wc-traking-round <?php ALI_SHOP_WC::cbwct_wcps('completed', $order->get_status(), 'ali-wc-delivered active');?>"></div>		    	
		    </div>
		    <!--/ Single Step-->

		  </div>	