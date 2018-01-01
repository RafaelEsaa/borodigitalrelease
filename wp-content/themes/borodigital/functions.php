<?php

// Register file JS
function add_theme_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/src/js/index.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Upload outstanding image
add_theme_support( 'post-thumbnails' );

// Register Menu
function register_my_menus(){
    register_nav_menus(
        array(
            'top-menu' => __('Menu Superior'),
        )
    );
}
add_action('init', 'register_my_menus');

require_once('bs4navwalker.php');