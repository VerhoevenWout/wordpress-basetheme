<?php

// CREATE MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'main menu' ),
      'secondary-menu' => __( 'secondary menu' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );


// CREATE SIDEBAR
function website_name_widgets_init() {
	register_sidebar( array(
		'name' => __( 'General Widget', 'website_name' ),
		'id' => 'general-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'init', 'website_name_widgets_init' );


// DELETE ADMIN BAR
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// ALLOW POST THUMBNAILS
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
  add_theme_support('post-thumbnails');
  add_image_size( 'intro-video', 300, 250, true );
  add_image_size( 'last-news', 300, 90, true );
  add_image_size( 'three-box', 300, 149, true );
  add_image_size( 'list-news', 189, 115, true );
}

// TAG WHEN AVAILABLE WHEN EDITING A POST
function wpa_45815($arr){
    $arr['theme_advanced_blockformats'] = 'h3,h4,p,blockquote';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'wpa_45815');


// THEMES SUPPORT
add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Defaults',
		'menu_title'	=> 'Defaults',
	));
}

// ACTIVE MENU
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
      $classes[] = 'active ';
  }
  return $classes;
}

// REGISTER AN EDITOR STYLESHEET
function wpdocs_theme_add_editor_styles() {
add_editor_style( 'assets/css/style-editor.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
