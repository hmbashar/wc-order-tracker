(function($) {

	$('.alishop-tracking-from form').on('submit', function() {
		var OrderNumber = $('.alishop-tracking-form-field input#order_number').val();
		var PhoneNumber = $('.alishop-tracking-form-field input#phone').val();
		var AlishopNonce = $('.alishop-tracking-form-field input#_wpnonce').val();

		$.ajax({
			type: 'post',
			url:alishop_tracker.ajaxurl,
			data: {
				action:'alishop_wc_order_tracking_result',
				order_number:OrderNumber,
				phone_number:PhoneNumber,
				Ali_nonce:AlishopNonce,
			},
			beforeSend:function() {
				$('.alishop_result_preload').addClass('alishop_wc_order_tracker_loader');
			},
			success: function(data) {
				$('.alishop-traking-form-result').html(data);
				$('.alishop_result_preload').removeClass('alishop_wc_order_tracker_loader');				
			}
		});

		return false;
	});

})(jQuery);