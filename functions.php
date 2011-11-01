<?php 

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio', 'status', 'quote', 'link', 'aside' ) ); 

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
  add_image_size ( 'large', '540', 'true');
  add_image_size ( 'thumb', '80', 'true');
}



?>