<?php

//adding the CSS and JS files
function site_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;900&display=swap', false );
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'site_setup');


//adding theme support
function site_init(){
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'site_init');


//projects post type
function custom_post_type(){
  register_post_type('project', 
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project'
      ),
      'menu-icon' => 'dashicons-forms',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'commments'
      )
    )
  );
}

//functions to flush theme rewrites
function theme_prefix_cpt_init() {
  register_post_type('projects');
}

function theme_prefix_rewrite_flush() {
  flush_rewrite_rules();
}

add_action('init', 'custom_post_type');

add_action( 'init', 'theme_prefix_cpt_init' );

add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );

?>