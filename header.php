<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Security-Policy" content="frame-ancestors 'none'">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Encabezado de la pagina -->
        <!-- Navbar -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg fixed-top bg-opacity-75 bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-flex justify-content-between align-items-center" href="<?php echo esc_url(home_url('/')); ?>">
                    <picture>
                        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/android-chrome-192x192.png">
                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/apple-touch-icon.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/favicon.ico" alt="Logo de Zaitek" width="auto" height="24px" class="d-inline-block align-text-top">
                    </picture>
                    ZAITEK
                </a>
                <?php if (has_nav_menu('primary_menu')):?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php endif; ?>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <?php                    
                        wp_nav_menu( array(
                            'theme_location' => 'primary_menu',
                            'container'      => false, // Bootstrap ya maneja el contenedor
                            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0', // Clases de Bootstrap para la lista
                            'fallback_cb'    => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ));
                    ?>
                </div>
            </div>
        </nav>

        <!-- Creacion de hero según sección o pagina actual -->
        <?php?>
        <div class="bg-hero container-xxl d-flex justify-content-center align-items-center my-5 py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl">
                                <p class="h1 display-1 fw-bolder text-white mb-2 t-shadow">ZAITEK</p>                                
                                <p class="lead fw-normal text-white mb-4 t-shadow">Somos tu aliado en soporte TI, servidores, virtualización, seguridad y desarrollo web, enfocados en soluciones reales, escalables y confiables para empresas que necesitan resultados, no problemas.                                
                                </p>                                
                            </div>
                        </div>                        
                    </div>
                </div>
        </div>
    </header>