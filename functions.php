<?php

if ( ! function_exists( 'zaytek_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function zaytek_theme_setup() {
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Add support for core block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

        // Register navigation menus.
        register_nav_menus( array(
            'primary_menu' => __( 'Menú Principal', 'zaytek' ),
            'footer_menu'  => __( 'Menú del Pie de Página', 'zaytek' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'zaytek_theme_setup' );


if ( ! function_exists( 'zaytek_enqueue_scripts' ) ) {
    /**
     * Enqueue scripts and styles.
     */
    function zaytek_enqueue_scripts() {
        // Google Fonts
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap', array(), null );

        // Custom Theme Stylesheet (replaces Tailwind CDN)
        wp_enqueue_style( 'zaytek-styles', get_template_directory_uri() . '/css/theme.css', array(), '1.0' );

        // Custom JavaScript files
        wp_enqueue_script( 'zaytek-menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0', true );
        wp_enqueue_script( 'zaytek-servicios', get_template_directory_uri() . '/js/servicios.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'zaytek_enqueue_scripts' );