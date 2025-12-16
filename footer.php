    <!-- Inicia la Plantilla del Footer -->
    <footer id="contacto" class="bg-oxford-blue text-mint-cream border-t border-powder-blue/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Columna 1: Información de la Empresa -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-4">
                        <div class="text-yale-blue">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/lion_icon_126113.ico" alt="iconLogo">
                        </div>
                        <h2 class="text-2xl font-bold"><?php bloginfo('name'); ?></h2>
                    </div>
                    <p class="mt-4 text-powder-blue/80">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
    
                <!-- Columna 2: Enlaces Rápidos -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold tracking-wider uppercase">Enlaces Rápidos</h3>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu',
                        'container'      => 'nav',
                        'container_class'=> 'mt-4 flex flex-col space-y-2',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>
    
                <!-- Columna 3: Formulario de Contacto -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold tracking-wider uppercase">Contáctanos</h3>
                    <!-- Este formulario necesita un backend. Se recomienda usar un plugin como Contact Form 7 o WPForms. -->
                    <form id="footer-contact-form" class="mt-4 space-y-4" method="POST">
                        <div>
                            <label for="footer-nombre" class="sr-only">Nombre</label>
                            <input type="text" id="footer-nombre" name="footer-nombre" required placeholder="Tu Nombre Completo"
                                class="w-full px-3 py-2 bg-berkeley-blue/30 border border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition placeholder:text-powder-blue/50">
                        </div>
                        <div>
                            <label for="footer-email" class="sr-only">Email</label>
                            <input type="email" id="footer-email" name="footer-email" required placeholder="Tu Correo Electrónico"
                                class="w-full px-3 py-2 bg-berkeley-blue/30 border border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition placeholder:text-powder-blue/50">
                        </div>
                        <div>
                            <label for="footer-mensaje" class="sr-only">Mensaje</label>
                            <textarea id="footer-mensaje" name="footer-mensaje" rows="3" required placeholder="¿En qué podemos ayudarte?"
                                class="w-full px-3 py-2 bg-berkeley-blue/30 border border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition placeholder:text-powder-blue/50"></textarea>
                        </div>
                        <button type="submit" class="w-full px-5 py-2 text-sm font-bold text-mint-cream bg-yale-blue rounded-lg hover:bg-berkeley-blue transition-colors">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
    
            <!-- Barra Inferior del Footer -->
            <div class="mt-16 pt-8 border-t border-powder-blue/20 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-powder-blue/60">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
                <div class="flex items-center gap-4">
                    <!-- Iconos de redes sociales (ejemplo) -->
                    <a href="#" class="text-powder-blue/60 hover:text-yale-blue transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-powder-blue/60 hover:text-yale-blue transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                    <a href="#" class="text-powder-blue/60 hover:text-yale-blue transition-colors">
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zM8.21 10.891V16.5H5.5V8.21h2.71v1.459h.039a3.484 3.484 0 013.135-1.625c3.355 0 3.975 2.21 3.975 5.082v5.864h-2.81v-5.197c0-1.238-.025-2.831-1.725-2.831-1.725 0-1.99 1.348-1.99 2.742V16.5H8.21z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Termina la Plantilla del Footer -->
    <!-- Modal de Contacto -->
    <div id="contacto-modal" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4 backdrop-blur-sm">
        <div class="w-full max-w-lg rounded-xl bg-mint-cream dark:bg-oxford-blue shadow-2xl overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-start gap-4">
                    <h3 class="text-2xl font-bold text-oxford-blue dark:text-mint-cream">Solicitar Asesoría</h3>
                    <button type="button" class="modal-close p-2 -m-2 rounded-full text-oxford-blue dark:text-mint-cream hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <p class="mt-2 text-berkeley-blue dark:text-powder-blue">
                    Déjenos sus datos y uno de nuestros expertos se pondrá en contacto con usted a la brevedad.
                </p>
                <!-- Este formulario necesita un backend. Se recomienda usar un plugin como Contact Form 7 o WPForms. -->
                <form id="modal-contact-form" class="mt-6 space-y-4" method="POST">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-berkeley-blue dark:text-powder-blue mb-1">Nombre Completo</label>
                        <input type="text" id="modal-nombre" name="modal-nombre" required
                            class="w-full px-3 py-2 bg-white dark:bg-berkeley-blue/30 border border-powder-blue/50 dark:border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-berkeley-blue dark:text-powder-blue mb-1">Correo Electrónico</label>
                        <input type="email" id="modal-email" name="modal-email" required
                            class="w-full px-3 py-2 bg-white dark:bg-berkeley-blue/30 border border-powder-blue/50 dark:border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition">
                    </div>
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-berkeley-blue dark:text-powder-blue mb-1">Teléfono (Opcional)</label>
                        <input type="tel" id="modal-telefono" name="modal-telefono"
                            class="w-full px-3 py-2 bg-white dark:bg-berkeley-blue/30 border border-powder-blue/50 dark:border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition">
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-berkeley-blue dark:text-powder-blue mb-1">¿Cómo podemos ayudarle?</label>
                        <textarea id="modal-mensaje" name="modal-mensaje" rows="4" required
                            class="w-full px-3 py-2 bg-white dark:bg-berkeley-blue/30 border border-powder-blue/50 dark:border-powder-blue/20 rounded-md focus:ring-yale-blue focus:border-yale-blue transition"></textarea>
                    </div>
                    <div class="flex justify-end gap-4 pt-2">
                        <button type="button" class="modal-close px-5 py-2 text-sm font-bold text-oxford-blue dark:text-mint-cream bg-powder-blue/50 dark:bg-berkeley-blue/50 rounded-lg hover:bg-powder-blue dark:hover:bg-berkeley-blue transition-colors">Cancelar</button>
                        <button type="submit" class="px-5 py-2 text-sm font-bold text-mint-cream bg-yale-blue rounded-lg hover:bg-berkeley-blue transition-colors">Enviar Solicitud</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modales de Servicios -->
    <!-- <div id="servicio-ti-modal" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4 backdrop-blur-sm">
        <div class="w-full max-w-2xl rounded-xl bg-mint-cream dark:bg-oxford-blue shadow-2xl overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-start gap-4">
                    <h3 class="text-2xl font-bold text-oxford-blue dark:text-mint-cream">Servicios Gestionados de TI</h3>
                    <button type="button" class="modal-close p-2 -m-2 rounded-full text-oxford-blue dark:text-mint-cream hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-4 max-h-[60vh] overflow-y-auto pr-2 text-berkeley-blue dark:text-powder-blue">
                    <ul class="space-y-4">
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Mesa de Servicio:</strong> Brindamos soporte integral de TI bajo las mejores prácticas ITIL, asegurando atención rápida, soluciones efectivas y continuidad operativa.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Monitoreo de Plataformas Tecnológicas – NOC:</strong> Garantiza la estabilidad y disponibilidad de tus sistemas con nuestro monitoreo 24/7. Detectamos y resolvemos incidencias antes de que impacten tus operaciones.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Servicios Profesionales de TI:</strong> Ofrecemos soluciones personalizadas para fortalecer, optimizar y proteger tu infraestructura tecnológica.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Seguridad Física:</strong> Protege la esencia digital y operativa de tu empresa con soluciones avanzadas de seguridad física y electrónica.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">CCTV:</strong> Refuerza la seguridad de tus instalaciones con servicios de videovigilancia inteligente y control de acceso.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Control de Acceso:</strong> Optimiza la gestión de ingresos y seguridad en tus instalaciones mediante soluciones de control de acceso avanzadas.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Ciberseguridad:</strong> Diseñamos el escudo digital que tu empresa necesita con estrategias integrales de protección frente a amenazas.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Ethical Hacking:</strong> Fortalece tu entorno digital mediante pruebas éticas que revelan vulnerabilidades antes de que sean explotadas.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Auditorías de Seguridad:</strong> Realizamos auditorías basadas en ISO 27001 para detectar brechas y fortalecer tus procesos tecnológicos.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Análisis de Vulnerabilidades:</strong> Identifica y mitiga riesgos tecnológicos con análisis detallados que refuerzan tus defensas digitales.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">SOC (Centro de Operaciones de Seguridad):</strong> Monitoreamos, analizamos y respondemos a incidentes de seguridad en tiempo real desde nuestro SOC especializado.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Capacitaciones en Ciberseguridad:</strong> Fomentamos la cultura de seguridad digital mediante programas de formación y concientización personalizados.</li>
                    </ul>
                </div>
                <div class="mt-6 text-right">
                    <button type="button" class="modal-close px-5 py-2 text-sm font-bold text-mint-cream bg-yale-blue rounded-lg hover:bg-berkeley-blue transition-colors">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="infraestructura-modal" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4 backdrop-blur-sm">
        <div class="w-full max-w-2xl rounded-xl bg-mint-cream dark:bg-oxford-blue shadow-2xl overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-start gap-4">
                    <h3 class="text-2xl font-bold text-oxford-blue dark:text-mint-cream">Infraestructura Tecnológica</h3>
                    <button type="button" class="modal-close p-2 -m-2 rounded-full text-oxford-blue dark:text-mint-cream hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-4 max-h-[60vh] overflow-y-auto pr-2 text-berkeley-blue dark:text-powder-blue">
                    <ul class="space-y-4">
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Mantenimiento de Equipos (Correctivo y Preventivo):</strong> Maximiza la vida útil de tus activos tecnológicos con mantenimiento preventivo y correctivo continuo.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Cableado Estructurado:</strong> Diseñamos e implementamos cableado estructurado eficiente y escalable para garantizar conectividad confiable y adaptable.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Servidores:</strong> Ofrecemos soluciones robustas y seguras en servidores, administradas por especialistas en Linux, Solaris, AIX y Windows Server.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Virtualización e Hiperconvergencia:</strong> Moderniza tu infraestructura con soluciones que simplifican la administración y mejoran la eficiencia.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Networking:</strong> Diseñamos e implementamos redes físicas y virtuales seguras y de alto rendimiento.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Monitoreo y Gestión:</strong> Supervisamos el desempeño de tus activos tecnológicos para garantizar la continuidad de tus servicios.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Almacenamiento y Backup:</strong> Protege tu información más valiosa con soluciones de almacenamiento físico o en la nube, totalmente automatizadas.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Cloud (Servicios en la Nube):</strong> Accede a entornos digitales escalables, seguros y personalizados para ejecutar aplicaciones o administrar plataformas.</li>
                    </ul>
                </div>
                <div class="mt-6 text-right">
                    <button type="button" class="modal-close px-5 py-2 text-sm font-bold text-mint-cream bg-yale-blue rounded-lg hover:bg-berkeley-blue transition-colors">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="gestion-modal" class="modal fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4 backdrop-blur-sm">
        <div class="w-full max-w-2xl rounded-xl bg-mint-cream dark:bg-oxford-blue shadow-2xl overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-start gap-4">
                    <h3 class="text-2xl font-bold text-oxford-blue dark:text-mint-cream">Gestión Estratégica de Portafolio de Proyectos</h3>
                    <button type="button" class="modal-close p-2 -m-2 rounded-full text-oxford-blue dark:text-mint-cream hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-4 max-h-[60vh] overflow-y-auto pr-2 text-berkeley-blue dark:text-powder-blue">
                    <ul class="space-y-4">
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Gestión Integral del Portafolio de Proyectos:</strong> Implementamos soluciones modernas de gestión que proporcionan visibilidad total sobre operaciones y recursos, basadas en PMBOK, CMMI y MSF.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Gobernabilidad y Estrategia de TI:</strong> Fortalecemos la gobernabilidad tecnológica alineando objetivos corporativos con inversiones estratégicas en tecnología.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Optimización de Recursos y Toma de Decisiones:</strong> Ayudamos a priorizar y administrar las iniciativas que generan mayor impacto y retorno de inversión.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Gestión Estratégica del Portafolio IT:</strong> Combinamos análisis técnico y visión corporativa para seleccionar y gestionar iniciativas tecnológicas clave.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Componentes Clave del Portafolio IT:</strong> Evaluamos aplicaciones, infraestructura y proyectos para maximizar la eficiencia y alineación estratégica.</li>
                        <li><strong class="font-semibold text-oxford-blue dark:text-mint-cream">Beneficios de la Gestión Estratégica de Portafolio IT:</strong> Ofrecemos claridad, eficiencia, mejor toma de decisiones y alineación tecnológica con los objetivos empresariales.</li>
                    </ul>
                </div>
                <div class="mt-6 text-right">
                    <button type="button" class="modal-close px-5 py-2 text-sm font-bold text-mint-cream bg-yale-blue rounded-lg hover:bg-berkeley-blue transition-colors">Cerrar</button>
                </div>
            </div>
        </div>
    </div> -->

    <?php wp_footer(); ?>
</body>

</html>