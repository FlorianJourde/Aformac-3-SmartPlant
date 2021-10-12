<?php

function theme_support() {
  add_theme_support('post-thumbnails');
  register_nav_menu('main', 'menu principal');
  add_theme_support( 'custom-logo', array(
		'height'      => 20,
		'width'       => 20,
		'flex-width' => true,
		'flex-height' => true,
	) );
}


function theme_assets() {
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
  wp_enqueue_style('mycss', get_stylesheet_uri());
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
  wp_enqueue_script('bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', ['jquery'], false, true);
}

function theme_menu_cls($classes) {
  $classes[] = 'nav-item';
  return $classes;
}

function theme_menu_attrs($attrs) {
  $attrs ['class'] = 'nav-link';
  return $attrs;
}

function custom_excerpt_length($length) {
  return 100;
}

function custom_post_type() {
  $labels = [
    'name' => 'Genres',
    'singular_name' => 'Genre',
    'add_new_item' => 'Ajouter un genre',
    'edit_item' => 'Modifier un genre',
    'update_item' => 'Update Genre',
    'new_item_name' => 'New Genre Name',
    'search_items' => 'Search Genres',
    'all_items' => 'All Genres',
    'parent_item' => 'Parent Genre',
    'parent_item_colon' => 'Parent Genre:',
    'menu_name' => 'Type',
    // 'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
  ];
  register_taxonomy('genres', ['mushrooms'], [
    'label' => 'Genre',
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    // 'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
  ]);
  register_post_type('encyclopedia', [
    'label' => 'Encyclopédie',
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-palmtree',
    'has_archive' => true,
    'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
    // 'taxonomies' => array( 'category', 'mushrooms' ),
  ]);
  register_post_type('posts', [
    'label' => 'Articles',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-plus-alt',
    'has_archive' => true,
    'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
    // 'taxonomies' => array( 'category', 'flowers' ),
  ]);
  register_post_type('galery', [
    'label' => 'Galerie',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-screenoptions',
    'has_archive' => true,
    'supports' => array('title', 'thumbnail'),
    // 'taxonomies' => array( 'category', 'trees' ),
  ]);
}

do_action('init', 'register_post_type');
add_action('after_setup_theme', 'theme_support');
add_image_size( 'custom-size', 220, 180 );
add_action('wp_enqueue_scripts', 'theme_assets');
add_action('init', 'custom_post_type');
add_filter('excerpt_length', 'custom_excerpt_length', 999);
add_filter('nav_menu_css_class', 'theme_menu_cls');
add_filter('nav_menu_link_attributes', 'theme_menu_attrs');