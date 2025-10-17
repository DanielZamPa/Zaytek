document.addEventListener('DOMContentLoaded', () => {
    const openModalButtons = document.querySelectorAll('.open-modal');
    const closeModalButtons = document.querySelectorAll('.modal-close');
    const modals = document.querySelectorAll('.modal');

    // Función para abrir un modal
    const openModal = (modal) => {
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    };

    // Función para cerrar un modal
    const closeModal = (modal) => {
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    };

    // Añadir listeners a los botones de abrir
    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalTarget = document.querySelector(button.dataset.modalTarget);
            openModal(modalTarget);
        });
    });

    // Añadir listeners a los botones de cerrar
    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            closeModal(modal);
        });
    });

    // Cerrar modal al hacer clic fuera de él (en el overlay)
    modals.forEach(modal => {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal(modal);
            }
        });
    });

    // Cerrar modal con la tecla 'Escape'
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            const openModal = document.querySelector('.modal.flex');
            if (openModal) {
                closeModal(openModal);
            }
        }
    });
});