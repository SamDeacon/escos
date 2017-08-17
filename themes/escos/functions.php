<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

include_once('lib/cmb2_metaboxes.php');
include_once('lib/cmb2_admin.php');

function register_my_menu() {
  register_nav_menu('footer-menu-1',__( 'Footer Menu 1(left)' ));
  register_nav_menu('main-mobile-menu',__( 'Mobiel Nav (Full menu)' ));
}
add_action( 'after_setup_theme', 'register_my_menu' );


add_action( 'after_setup_theme', 'img_setup' );
function img_setup() {
add_image_size( 'home-banner-image', 1400, 480, true );
add_image_size( 'header', 1400, 400, true );
add_image_size( 'single-header', 1100, 500, true );
add_image_size( 'homepage-box', 360, 360, true );
add_image_size( 'blog-thumbnail', 360, 360, true );
add_image_size( 'blog-thumbnail-small', 200, 200, true );
}

function my_assets() {
	wp_enqueue_style( 'css/main', get_stylesheet_directory_uri() . '/public/css/main.css' );

  if (is_front_page()) {
    wp_enqueue_script( 'js/slick', get_stylesheet_directory_uri() . '/public/scripts/slick.min.js', ['jquery'], '1.0', true );
  }
  wp_enqueue_script( 'js/main', get_stylesheet_directory_uri() . '/public/scripts/main.js', ['jquery'], '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'my_assets' );


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt).'...';
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content).'...';
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
