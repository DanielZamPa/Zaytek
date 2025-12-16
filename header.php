<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Encabezado de la pagina -->
        <!-- Navbar -->
    <header>
        <div class="container">
            <div>
                <div class="logo-container sm:hidden">
                    <div class="text-yale-blue">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" alt="iconLogo">
                    </div>
                    <h2><?php bloginfo('name'); ?></h2>
                </div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary_menu',
                    'container'      => 'nav',
                    'container_class'=> 'main-nav md:flex',
                    'menu_class'     => 'flex items-center gap-8 nav-link',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'fallback_cb'    => false,
                ) );
                ?>
                <div id="nav-options" class="flex items-center gap-4">                    
                    <button type="button" data-modal-target="#contacto-modal"
                        class="open-modal btn btn-primary sm:inline-block">Solicitar Asesoría</button>
                    <button id="hamburger-button" class="md:hidden">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'container'      => 'nav',
                'container_class'=> 'flex flex-col items-center gap-4 py-8',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </header>