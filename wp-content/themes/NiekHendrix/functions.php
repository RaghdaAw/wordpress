<?php 

function my_custom_styles() {        
    // Enqueue the main CSS file
    wp_enqueue_style( 'mainCss', get_template_directory_uri() . '/css/main.css' );
    
    // Enqueue the main JavaScript file
    wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_styles' );

?>
