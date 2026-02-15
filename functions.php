<?php
/**
 * Zaytek Theme Functions and Definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zaytek
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Reemplaza con la versión de tu tema.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */

function zaytek_setup() {
    // 1. Registrar las ubicaciones de los menús
    register_nav_menus(
        array(
            'primary_menu' => 'Menú Principal',
            'footer_menu'  => 'Menú Footer',
        )
    );

    // Soporte básico del tema
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'zaytek_setup');

// 2. Agregar clase 'nav-item' a los <li> del menú para Bootstrap
function zaytek_menu_css_class($classes, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary_menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'zaytek_menu_css_class', 10, 3);

// 3. Agregar clase 'nav-link' a los <a> del menú para Bootstrap
function zaytek_menu_link_attributes($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary_menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'zaytek_menu_link_attributes', 10, 3);

function zaytek_scripts(){
    // llamado Bootstrap css local desde node_modules
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.3.3');

    //Estilos css
	wp_enqueue_style( 'zaytek-style', get_stylesheet_uri(),  array(), _S_VERSION);
	wp_enqueue_style( 'zaytek-bg-patern', get_template_directory_uri() . '/css/global.css', array(), '2.0');

    //Scripts de bootstrap desde node_modules
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
}

add_action( 'wp_enqueue_scripts', 'zaytek_scripts' );
?>