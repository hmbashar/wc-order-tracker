(function($) {


	$('.cb-domain-search-form form').on('submit', function() {
		var CbDomainCheckInput = $('.cb-domain-check input#Search').val();
		var CBDomainSearchNonce = $('.cb-domain-check input#Search').attr('data-nonce');
		$.ajax({
			type: 'post',
			url:CbDomainSearch.ajaxurl,
			data:{
				action: 'cb_domain_check_result',
				domain_name:CbDomainCheckInput,
				data_nonce:CBDomainSearchNonce,
			},
			beforeSend:function() {
				$('.cb_domain_check_loader').addClass('cb-domain-lds-ellipsis');
			},
			success: function(data) {
				$('.cb_domain_check_loader').removeClass('cb-domain-lds-ellipsis');
				$('.cb-domain-search-result').html(data);

			}
		});		
		return false
	});
})(jQuery);