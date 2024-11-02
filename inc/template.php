<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
	
	if(!class_exists('CBWCT_ORDER_TRACKER')) {
		return;
	}

	get_header();

	// get template markup
	require_once( CBWCT_TRACKER_PATH . '/inc/template-markup.php'); 

	get_footer();