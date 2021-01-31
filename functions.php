<?php
session_start();

if (!function_exists('vv_basicSetup')) {
  function vv_basicSetup() 
  {
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
  }
}

add_action('after_setup_theme', 'vv_basicSetup');

function vv_register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_action( 'init', 'vv_register_my_menu' );
?>