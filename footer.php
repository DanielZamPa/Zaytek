    <!-- Inicia la Plantilla del Footer -->
    <footer id="contacto" class="bg-dark text-white py-5 border-top border-secondary">
        <div class="container">
            <div class="row g-4">
                <!-- Columna 1: Información de la Empresa -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <picture>
                            <source media="(max-width: 576px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/android-chrome-192x192.png">
                            <source media="(max-width: 768px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/apple-touch-icon.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/icons/logo/favicon.ico"
                                alt="Logo de Zaitek" width="30" height="30" class="d-inline-block align-text-top">
                        </picture>
                        <h2 class="h4 fw-bold mb-0"><?php bloginfo('name'); ?></h2>
                    </div>
                    <p class="text-white-50">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>

                <!-- Columna 2: Enlaces Rápidos -->
                <div class="col-md-4">
                    <h3 class="h5 text-uppercase fw-bold mb-3">Enlaces Rápidos</h3>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu',
                        'container'      => false,
                        'menu_class'     => 'nav flex-column',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>

                <!-- Columna 3: Formulario de Contacto -->
                <div class="col-md-4">
                    <h3 class="h5 text-uppercase fw-bold mb-3">Contáctanos</h3>
                    <!-- Este formulario necesita un backend. Se recomienda usar un plugin como Contact Form 7 o WPForms. -->
                    <form id="footer-contact-form" method="POST">
                        <div class="mb-3">
                            <label for="footer-nombre" class="visually-hidden">Nombre</label>
                            <input type="text" id="footer-nombre" name="footer-nombre" required
                                placeholder="Tu Nombre Completo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="footer-email" class="visually-hidden">Email</label>
                            <input type="email" id="footer-email" name="footer-email" required
                                placeholder="Tu Correo Electrónico" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="footer-mensaje" class="visually-hidden">Mensaje</label>
                            <textarea id="footer-mensaje" name="footer-mensaje" rows="3" required
                                placeholder="¿En qué podemos ayudarte?" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                    </form>
                </div>
            </div>

            <!-- Barra Inferior del Footer -->
            <div
                class="d-flex flex-column flex-sm-row justify-content-between align-items-center py-4 my-4 border-top border-secondary">
                <p class="small text-white-50 mb-0">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los
                    derechos reservados.</p>
                <div class="d-flex gap-3">
                    <!-- Iconos de redes sociales (ejemplo) -->
                    <a href="#" class="text-white-50 link-light">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-white-50 link-light">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-white-50 link-light">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zM8.21 10.891V16.5H5.5V8.21h2.71v1.459h.039a3.484 3.484 0 013.135-1.625c3.355 0 3.975 2.21 3.975 5.082v5.864h-2.81v-5.197c0-1.238-.025-2.831-1.725-2.831-1.725 0-1.99 1.348-1.99 2.742V16.5H8.21z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Termina la Plantilla del Footer -->
    <!-- Modal de Contacto -->
    <div class="modal fade" id="contacto-modal" tabindex="-1" aria-labelledby="contactoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="contactoModalLabel">Solicitar Asesoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-4">
                        Déjenos sus datos y uno de nuestros expertos se pondrá en contacto con usted a la brevedad.
                    </p>
                    <!-- Este formulario necesita un backend. Se recomienda usar un plugin como Contact Form 7 o WPForms. -->
                    <form id="modal-contact-form" method="POST">
                        <div class="mb-3">
                            <label for="modal-nombre" class="form-label">Nombre Completo</label>
                            <input type="text" id="modal-nombre" name="modal-nombre" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-email" class="form-label">Correo Electrónico</label>
                            <input type="email" id="modal-email" name="modal-email" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-telefono" class="form-label">Teléfono (Opcional)</label>
                            <input type="tel" id="modal-telefono" name="modal-telefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-mensaje" class="form-label">¿Cómo podemos ayudarle?</label>
                            <textarea id="modal-mensaje" name="modal-mensaje" rows="4" required
                                class="form-control"></textarea>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>

    </html>