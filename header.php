<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/logo/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Security-Policy" content="frame-ancestors 'none'">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <?php wp_head(); ?>
</head>

<body class="d-flex flex-column" <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Encabezado de la pagina -->
        <!-- Navbar -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" alt="Logo de Zaitek" class="d-inline-block align-text-center">
                    Zaitek
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
        <div class="hero container-xxl d-flex justify-content-center align-items-center h-100 bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                                <h1 class="display-1 fw-bolder text-white mb-2">ZAITEK</h1>                                
                                <p class="lead fw-normal text-white-50 mb-4">Somos tu aliado en soporte TI, servidores, virtualización, seguridad y desarrollo web, enfocados en soluciones reales, escalables y confiables para empresas que necesitan resultados, no problemas.                                
                                </p>                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." width="600px" height="400px"></div>
                    </div>
                </div>
        </div>
    </header>