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
function zaytek_scripts() {
	// Carga nuestra hoja de estilos principal.
	wp_enqueue_style( 'zaytek-style', get_template_directory_uri() . '/css/theme.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'zaytek_scripts' );

/**
 * Registra las ubicaciones de los menús de navegación.
 */
function zaytek_register_nav_menu() {
    register_nav_menus( array( 'primary_menu' => __( 'Menú Principal', 'zaytek' ) ) );
}
add_action( 'after_setup_theme', 'zaytek_register_nav_menu' );