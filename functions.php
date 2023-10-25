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
  wp_dequeue_style('wp-block-library');
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '0.0.6');
  wp_enqueue_script( 'custom_js', get_template_directory_uri().'/index.js', array( 'jquery' ), '0.0.5', true );
}

add_action('wp_enqueue_scripts', 'vv_basic_enqueue_scripts');

add_filter('wpcf7_autop_or_not', '__return_false');

function vv_register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_action( 'init', 'vv_register_my_menu' );

function vv_latest_projects_shortcode($atts) { 
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );

	$args = array(
		'numberposts' => 6,
		'post_type' => 'project',
	);

	$projects = get_posts( $args );

	if ( $projects ) {
		$result = "<div class='projects'>";
		foreach ( $projects as $post ) :
      $tags = get_the_tags($post->ID);
      $tags = array_reverse($tags);

			$result .= "<a class='project' href='".get_the_permalink($post->ID)."'>";
      $result .= "<div class='project-info'>";
      $result .= "<h3 class='project-title'>";
      $result .= get_the_title($post->ID);
      $result .= "</h3>";
      if ( $tags ) {
        $result .= "<div class='project-tags'>";
        foreach ( $tags as $tag ) :
          $result .= "<div class='project-tag'>";
          $result .= $tag->name;
          $result .= "</div>";
        endforeach;
        $result .= "</div>";
      }
      $result .= "</div>";
      $result .= "<img src='".get_the_post_thumbnail_url($post->ID)."' alt='Thumbnail of project: ".get_the_title($post->ID)."' height='150' width='150'>";
      $result .= "</a>";
		endforeach;
		$result .= "</div>";
	}
	
	// Output needs to be return
	return $result;
}

function vv_shortcodes_init() {
  add_shortcode('vv_latest_projects', 'vv_latest_projects_shortcode');
}
add_action( 'init', 'vv_shortcodes_init' );
?>