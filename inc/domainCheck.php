<?php 
// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;




// Ajax action function
function cb_domain_check_result() {

    if(wp_verify_nonce( $_POST['data_nonce'], 'cb_domain_search' )) {
        
        $domain = sanitize_text_field($_POST["domain_name"]);
        
        if(isset($domain)){           
            if ( gethostbyname($domain) != $domain ) : ?>
                <div class="cb-domain-name-registered"> 
                    <p>Sorry! <strong><?php echo esc_html($domain); ?></strong> Domain Already taken</p>
                </div>          
            <?php else : ?>
                <div class="cb-domain-name-available">                  
                    <p>Congratulation Domain <strong><?php echo esc_html($domain); ?></strong> is available!</p>
                </div>
            <?php endif;
        }
   }
   exit;
}
add_action('wp_ajax_cb_domain_check_result', 'cb_domain_check_result');
add_action('wp_ajax_nopriv_cb_domain_check_result', 'cb_domain_check_result');