<?php
/*
	Plugin Name: Order Tracker for WooCommerce
	Plugin URI: https://wordpress.org/plugins/wc-order-tracker/
	Description: Allow customers to easily track their orders on your WooCommerce store with this order tracking system, powered by AJAX.
	Author: Md Abul Bashar
	Version: 1.2.7
	Author URI: https://facebook.com/hmbashar
	Text Domain: cbwct
	Requires Plugins: woocommerce

*/

 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

//define URL
define('CBWCT_TRACKER_URL', plugin_dir_url( __FILE__ ));
define('CBWCT_TRACKER_PATH', plugin_dir_path(__FILE__));


//Enqueue Style for Plugin
function cbwct_basic_scripts(){

	wp_enqueue_style('cbwct-animate', CBWCT_TRACKER_URL .'css/ali-animate.css');
	wp_enqueue_style('cbwct-tracker-style', CBWCT_TRACKER_URL .'css/style.css');
	wp_enqueue_style('cbwct-tracker-responsive', CBWCT_TRACKER_URL .'css/responsive.css');

	wp_enqueue_script( 'cbwct-tracker-ajax', CBWCT_TRACKER_URL .'js/ajax-active.js', array('jquery'), 1.0, true );
	
	wp_localize_script( 'cbwct-tracker-ajax', 'cbwct_tracker', array( 'ajaxurl'	=> admin_url('admin-ajax.php')) ); 
}
add_action('wp_enqueue_scripts','cbwct_basic_scripts');

// Register textdomain
function cbwct_tracker_textdomain() {
	load_plugin_textdomain( 'cbwct', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'cbwct_tracker_textdomain' );


//Include additional file
require_once( CBWCT_TRACKER_PATH . '/inc/custom.php' );
require_once( CBWCT_TRACKER_PATH . '/inc/shortcode.php' );
require_once( CBWCT_TRACKER_PATH . '/inc/hooks.php' );

