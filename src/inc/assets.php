<?php // ==== ASSETS ==== //

// Now that you have efficiently generated scripts and stylesheets for your theme, how should they be integrated?
// This file walks you through an approach I use but you are free to do this any way you like

// Load header assets; this should include the main stylesheet as well as any mission critical scripts
function lb_styles() {

  
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );

  wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

  wp_enqueue_style( 'slick_css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.css' );

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'lb_styles' );



function lb_scripts() {

  wp_enqueue_script( 'slick_js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js', ['jquery'], '', false );


  wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', ['jquery'], '', false );

  wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', ['jquery', 'popper_js'], '', false );


  wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/scripts.min.js', ['jquery', 'slick_js'], '', true );
}

add_action( 'wp_enqueue_scripts', 'lb_scripts' );