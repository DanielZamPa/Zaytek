<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" type="image/x-icon">
    <meta http-equiv="Content-Security-Policy" content="frame-ancestors 'none'">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Encabezado de la pagina -->
        <!-- Navbar -->
    <header class="site-header">
        <div class="container header-container">
            <div class="header-content">
                <div class="logo-container">
                    <div class="text-yale-blue">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" alt="iconLogo">
                    </div>
                    <h2 class="site-title"><?php bloginfo('name'); ?></h2>
                </div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary_menu',
                    'container'      => 'nav',
                    'container_class'=> 'main-navigation',
                    'menu_class'     => 'header-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'fallback_cb'    => false,
                ) );
                ?>
                <div id="nav-options" class="header-actions">
                    <button type="button" data-modal-target="#contacto-modal"
                        class="open-modal btn btn-primary">Solicitar Asesoría</button>
                    <button id="hamburger-button" class="hamburger-button">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6" style="display: none;" fill="none" stroke="currentColor" stroke-width="2"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu" style="display: none;">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'container'      => 'nav', // El contenedor nav ya está
                'container_class'=> 'mobile-navigation',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </header>