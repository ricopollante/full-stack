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




function load_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

}

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }

add_action( 'init', 'register_my_menu' );
add_action('wp_enqueue_scripts', 'load_jquery');
add_action('wp_enqueue_scripts','load_css');
add_action('wp_enqueue_scripts', 'load_js');