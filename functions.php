<?php

  function theme_styles() {

    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('google_font', "http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css");
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

  }

  add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {
  // Dynamically for older versions of IE
  global $wp_scripts;

  wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
  wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
  wp_register_script('emulation', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', '', '', false);
  // IE10 viewport bug workaround
  wp_register_script('viewport', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', '', '', true);

  $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
  $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
  $wp_scripts->add_data('emulation', 'conditional', 'lt IE 9');
  $wp_scripts->add_data('viewport', 'conditional', 'lt IE 10');

  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

// Set to true to crop thumbnails
set_post_thumbnail_size( 375, 300, true );

function register_theme_menus() {

  register_nav_menus(
    array(
      'header-menu' => __('Header Menu')
      )
    );
}

add_action('init', 'register_theme_menus');

?>
