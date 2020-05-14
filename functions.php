<?php 

function load_css(){

    wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all' );
    wp_enqueue_style('stylesheet');
}
 


function load_js() {
   
      wp_enqueue_script('js-file', get_template_directory_uri() . '/script.js', array('jquery'), '', false);
      //or use the version below if you know exactly where the file is
      //wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/myscript.js');
  }

  add_action('wp_enqueue_scripts','load_css');
  add_action('wp_enqueue_scripts', 'load_js');