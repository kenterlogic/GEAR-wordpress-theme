<?php 

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio', 'status', 'quote', 'link', 'aside' ) ); 

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
  add_image_size ( 'large', '720', 'true');
  add_image_size ( 'thumb', '120', '75', 'false');
}
function add_javascript() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'add_javascript');


?>