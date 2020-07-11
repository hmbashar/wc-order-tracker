<?php
/*
	Plugin Name: CB Woocommerce Product Tracker
	Plugin URI: https://wordpress.org/plugins/cb-wc-tracker
	Description: Check domain name availability for all Top Level Domains using shortcode or widget with search.
	Author: Md Abul Bashar
	Version: 1.0
	Author URI: https://facebook.com/hmbashar
	Text Domain: cbwet

*/

 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

//define URL
define('CB_WC_TRACKER_URL', plugin_dir_url( __FILE__ ));
define('CB_WC_TRACKER_PATH', plugin_dir_path(__FILE__));


//Enqueue Style for Plugin
function cb_domain_checker_scripts(){

	wp_enqueue_style('cb-wc-animate', CB_WC_TRACKER_URL .'css/ali-animate.css');
	wp_enqueue_style('cb-wc-tracker-style', CB_WC_TRACKER_URL .'css/style.css');
	wp_enqueue_style('cb-wc-tracker-responsive', CB_WC_TRACKER_URL .'css/responsive.css');

	wp_enqueue_script( 'cb-wc-trakcer-ajax', CB_WC_TRACKER_URL .'js/ajax-active.js', array('jquery'), 1.0, true );
	
	//wp_localize_script( 'cb-domain-check-ajax', 'CbDomainSearch', array( 'ajaxurl'	=> admin_url('admin-ajax.php')) ); 
}
add_action('wp_enqueue_scripts','cb_domain_checker_scripts');


//Include additional file
require_once( CB_WC_TRACKER_PATH . '/inc/custom.php' );
require_once( CB_WC_TRACKER_PATH . '/inc/shortcode.php' );
require_once( CB_WC_TRACKER_PATH . '/inc/domainCheck.php' );