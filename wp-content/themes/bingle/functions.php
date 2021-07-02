<?php

function bingle_files()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_script('javascript', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&display=swap');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
}

add_action('wp_enqueue_scripts', 'bingle_files');

function bingle_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');

    
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bingle_features');

// Custom logo

function themename_custom_logo_setup() {
  $defaults = array(
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

  add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// register Widget
function bingle_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Button', 'bingle' ),
        'id' => 'btn',
        'description' => __( 'Button', 'bingle' )
    ) );
    }
  
  add_action( 'widgets_init', 'bingle_widgets_init' );