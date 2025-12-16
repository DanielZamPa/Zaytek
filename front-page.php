<?php get_header(); ?>

    <!-- Contenido de la pagina -->
    <main>
        <!-- Sección de Inicio -->
        <section id="inicio">

            <!-- Contenedor de Fondo -->
            <div class="container">
                <div class="max-w-3xl">
                    <h1>
                        Soluciones para su Infraestructura Tecnológica</h1>
                    <p>
                        Ofrecemos servicios expertos de mantenimiento
                        y solución de problemas para arquitecturas de servidores y dispositivos, garantizando la
                        continuidad y eficiencia de su negocio.
                    </p>
                    <div class="hero-buttons">
                        <a class="btn btn-primary" href="#servicios">Nuestros Servicios</a>
                        <a class="btn btn-secondary" href="#contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="presentacion">
            <div class="container">
                <div class="section-title">
                    <h2>¿Quiénes Somos?</h2>
                    <p>En Zaytek, somos un equipo de expertos apasionados por la tecnología, dedicados a ofrecer soluciones integrales que impulsan la eficiencia y seguridad de su infraestructura tecnológica. Con años de experiencia en el sector, nos especializamos en servicios gestionados de TI, infraestructura tecnológica y gestión estratégica de portafolio de proyectos, adaptándonos a las necesidades únicas de cada cliente.</p>
                </div>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="card-image">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="servicios">
            <div class="container">
                <div class="section-title">
                    <h2>Soporte Especializado para sus Dispositivos</h2>
                    <p>Entendemos que cada componente de
                        su arquitectura es vital. Ofrecemos soporte para una amplia gama de dispositivos y sistemas.</p>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="card-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ServiciosTI.jpg');">
                        </div>
                        <h3>SERVICIOS GESTIONADOS DE TI</h3>
                        <p>                            
                            Ofrecemos un monitoreo proactivo, mantenimiento preventivo y soporte técnico continuo para asegurar el rendimiento óptimo y la seguridad de sus sistemas..
                        </p>                        
                    </div>
                    <div class="service-card">
                        <div class="card-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Infraestructura.jpg');">
                        </div>
                        <h3>INFRAESTRUCTURA TECNOLÓGICA</h3>
                        <p>                            
                            Diseñamos, implementamos y mantenemos infraestructuras tecnológicas robustas y escalables, incluyendo servidores, redes y sistemas de almacenamiento, adaptadas a las necesidades específicas de su empresa.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="card-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Planeacion.jpg');">
                        </div>
                        <h3>GESTIÓN ESTRATÉGICA DE PORTAFOLIO DE PROYECTOS</h3>
                        <p>                            
                            Optimizamos la selección, priorización y gestión de sus proyectos tecnológicos para alinearlos con los objetivos estratégicos de su negocio, maximizando el retorno de inversión y minimizando riesgos.
                        </p>                        
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-section">
            <div class="container section-title">
                <h2>¿Necesita Soporte Experto?</h2>
                <p>¿Listo para
                    garantizar la estabilidad y el rendimiento de su infraestructura? Contáctenos para una asesoría
                    personalizada y sin compromiso.</p>
                
                <button type="button" data-modal-target="#contacto-modal"
                    class="open-modal btn mt-8">Solicitar Asesoría</button>
            </div>
        </section>
    </main>

<?php get_footer(); ?>