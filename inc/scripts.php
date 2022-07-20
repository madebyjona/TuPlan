<?php
function load_scripts() {

  // wp_enqueue_script('ajax', get_template_directory_uri(). '/assets/js/script.js', array('jquery'), NULL, true);

  wp_localize_script('ajax' , 'wpAjax',
    array('ajaxUrl' => admin_url('admin-ajax.php'))  
  );

}

add_action( 'wp_enqueue_scripts', 'load_scripts' );