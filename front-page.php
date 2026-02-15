<?php get_header(); ?>

<!-- Contenido de la pagina -->
<main>
    <!-- La sección de "hero" principal ya se carga desde header.php -->

    <section id="presentacion" class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold">¿Quiénes Somos?</h2>
                    <p class="lead text-muted">En Zaytek, somos un equipo de expertos apasionados por la tecnología,
                        dedicados a ofrecer soluciones integrales que impulsan la eficiencia y seguridad de su
                        infraestructura tecnológica. Con años de experiencia en el sector, nos especializamos en
                        servicios gestionados de TI, infraestructura tecnológica y gestión estratégica de portafolio de
                        proyectos, adaptándonos a las necesidades únicas de cada cliente.</p>
                </div>
            </div>
            <!-- La sección de equipo (team-grid) se puede desarrollar aquí con tarjetas de Bootstrap -->
        </div>
    </section>

    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold">Nuestras Soluciones</h2>
                    <p class="lead text-muted">Entendemos que cada componente de su arquitectura es vital. Ofrecemos
                        soporte para una amplia gama de dispositivos y sistemas.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Tarjeta 1: Servicios Gestionados -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/ServiciosTI.jpg"
                            class="card-img-top" alt="Servicios Gestionados de TI"
                            style="height: 225px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title h5 fw-bold">SERVICIOS GESTIONADOS DE TI</h3>
                            <p class="card-text flex-grow-1">
                                Ofrecemos un monitoreo proactivo, mantenimiento preventivo y soporte técnico continuo
                                para asegurar el rendimiento óptimo y la seguridad de sus sistemas.
                            </p>
                            <div class="mt-auto pt-3">
                                <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                    data-bs-target="#servicio-ti-modal">
                                    Ver detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2: Infraestructura -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/Infraestructura.jpg"
                            class="card-img-top" alt="Infraestructura Tecnológica"
                            style="height: 225px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title h5 fw-bold">INFRAESTRUCTURA TECNOLÓGICA</h3>
                            <p class="card-text flex-grow-1">
                                Diseñamos, implementamos y mantenemos infraestructuras tecnológicas robustas y
                                escalables, incluyendo servidores, redes y sistemas de almacenamiento.
                            </p>
                            <div class="mt-auto pt-3">
                                <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                    data-bs-target="#infraestructura-modal">
                                    Ver detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3: Gestión Estratégica -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/assets/img/Planeacion.jpg"
                            class="card-img-top" alt="Gestión Estratégica de Proyectos"
                            style="height: 225px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title h5 fw-bold">GESTIÓN ESTRATÉGICA DE PROYECTOS</h3>
                            <p class="card-text flex-grow-1">
                                Optimizamos la selección y gestión de sus proyectos tecnológicos para alinearlos con los
                                objetivos de su negocio, maximizando el retorno de inversión.
                            </p>
                            <div class="mt-auto pt-3">
                                <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                    data-bs-target="#gestion-modal">
                                    Ver detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold">¿Necesita Soporte Experto?</h2>
                    <p class="lead text-muted">¿Listo para garantizar la estabilidad y el rendimiento de su
                        infraestructura? Contáctenos para una asesoría personalizada y sin compromiso.</p>

                    <button type="button" class="btn btn-primary btn-lg mt-4" data-bs-toggle="modal"
                        data-bs-target="#contacto-modal">
                        Solicitar Asesoría
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>