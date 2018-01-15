<?php
//Register logo for custom theme
function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// Gravity Form for use bootstrap 4
add_filter( 'gform_field_container', 'add_bootstrap_container_class', 10, 6 );
function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
    $id = $field->id;
    $field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
    return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
}

// Register file JS
function add_theme_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/src/js/index.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Upload outstanding image
add_theme_support( 'post-thumbnails' );

// Plugin BS4 navwalker for custom menu with class bootstrap
require_once('bs4navwalker.php');
// Register Menu
function register_my_menus(){
    register_nav_menus(
        array(
            'top-menu' => __('Menu Superior'),
        )
    );
}
add_action('init', 'register_my_menus');

//Register CustomPostType
require __DIR__ . '/vendor/autoload.php';
use PostTypes\PostType;

// Custom Post Type
// Servicios
$servicios = new PostType('servicio');
$servicios->icon('dashicons-cart');
$servicios->labels([
    'add_new_item' => __('Nuevo servicio')
]);
$servicios->register();

// Habilidades
$names = [
    'name' => 'habilidad',
    'singular' => 'Habilidad',
    'plural' => 'Habilidades',
    'slug' => 'habilidades'
];
$habilidades = new PostType($names);
$habilidades->labels([
    'add_new_item' => __('Nueva Habilidad')
]);
$habilidades->register();

// About us
$names = [
    'name' => 'about_us',
    'singular' => 'About Us',
    'plural' => 'About Us',
    'slug' => 'aboutus'
];
$aboutus = new PostType($names);
$aboutus->icon('dashicons-groups');
$aboutus->labels([
    'add_new_item' => __('Título de About Us')
]);
$aboutus->register();

// Slider Home
$names = [
    'name' => 'banner_home',
    'singular' => 'Banner Home',
    'plural' => 'Banner Home',
    'slug' => 'bannerhome'
];
$bannerhome = new PostType($names);
$bannerhome->icon('dashicons-admin-collapse');
$bannerhome->labels([
    'add_new_item' => __('Nuevo Banner Home')
]);
$bannerhome->register();

// Message Validation Gravity Form

add_filter( 'gform_validation_message_1', 'change_message', 10, 2 );
function change_message() {
    return " ";
}