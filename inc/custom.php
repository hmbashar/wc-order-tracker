<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;


function plugin_tamplate_add_page_attribute_dropdown( $post_templates, $wp_theme, $post, $post_type ) {

    $post_templates['template.php'] = __('CB WC Tracker');

    return $post_templates;
}

add_filter( 'theme_page_templates', 'plugin_tamplate_add_page_attribute_dropdown', 10, 4 );


function load_tamplate_from_plugin( $template ) {

    if(  get_page_template_slug() === 'template.php' ) {
		
        if ( $theme_file = locate_template( array( 'template.php' ) ) ) {
            $template = $theme_file;
        } else {
            $template = plugin_dir_path( __FILE__ ) . 'template.php';
        }
    }

    if($template == '') {
        throw new \Exception('No template found');
    }

    return $template;
}

add_filter( 'template_include', 'load_tamplate_from_plugin' );