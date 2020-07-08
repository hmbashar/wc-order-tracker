<?php 
// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

// Register Shortcode
function cb_domain_checker($attrs, $content = NULL) {
	ob_start();
	extract(shortcode_atts(array(

		'post_type' =>'post'

	), $attrs));
?>

<div id="cb-domain-form">
	<div id="cb-domain-search" class="cb-domain-search">
		<!--Search Form -->
		<div class="cb-domain-search-form">
			<form method='GET' action="" id='form' class='pure-form'>
				<div class='input-group small cb-domain-check'>
	     			<input type='text' data-nonce="<?php echo wp_create_nonce('cb_domain_search'); ?>" placeholder="Find your perfect domain name" class='form-control'  id='Search' name='domain' >
	  				<span class='input-group-btn'>
						<button type='submit' id='Submit' class='btn btn-default btn-info'>Search</button>
	 	 			</span>
	    		</div>
			</form>			
		</div><!--/ Search Form -->
		<!--Loader-->
		<div class="cb_domain_check_loader"><div></div><div></div><div></div><div></div></div><!--/ Loader-->
		<?php echo do_shortcode($content); ?>
		<!--Domain Details Page-->
		<div class="cb-domain-details">
			<ul>
				<li><a>View domain price list</a></li>
				<li><a>View domain price list</a></li>
				<li><a>View domain price list</a></li>
			</ul>
		</div><!--/ Domain Details Page-->
		<div class="cb-domain-price">
			<ul>
				<li><a href=""><span>.com</span><sup>tk</sup>950</a></li>
				<li><a href=""><span>.org</span><sup>tk</sup>950</a></li>
				<li><a href=""><span>.net</span><sup>tk</sup>2500</a></li>
				<li><a href=""><span>.bd</span><sup>tk</sup>1250</a></li>
			</ul>
		</div>
		<div class="cb-domain-search-result">
			
		</div>
	</div>
</div>
<?php

	return ob_get_clean();
}
add_shortcode('cb-domain-checker', 'cb_domain_checker');
