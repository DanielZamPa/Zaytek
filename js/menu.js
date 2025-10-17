document.addEventListener('DOMContentLoaded', () => {
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (hamburgerButton && mobileMenu && menuIcon && closeIcon) {
        hamburgerButton.addEventListener('click', () => {
            // Alterna la visibilidad del menú móvil
            mobileMenu.classList.toggle('hidden');

            // Alterna los íconos de hamburguesa y cierre
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Opcional: Cierra el menú al hacer clic en un enlace
        // Usamos delegación de eventos para manejar los clics en los enlaces del menú.
        mobileMenu.addEventListener('click', (event) => {
            if (event.target.tagName === 'A') {
                mobileMenu.classList.add('hidden'); // Oculta el menú
                menuIcon.classList.remove('hidden'); // Muestra el ícono de hamburguesa
                closeIcon.classList.add('hidden'); // Oculta el ícono de cierre
            }
        });
    }
});