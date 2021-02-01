<?php
session_start();

if (!function_exists('vv_basic_setup')) {
  function vv_basic_setup() 
  {
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
  }
}

add_action('after_setup_theme', 'vv_basic_setup');

function vv_basic_enqueue_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '0.0.1');
}

add_action('wp_enqueue_scripts', 'vv_basic_enqueue_scripts');

function vv_register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_action( 'init', 'vv_register_my_menu' );
?>