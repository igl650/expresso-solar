document.addEventListener('DOMContentLoaded', () => {
    // Menu responsivo
    const menuToggle = document.getElementById('menu-toggle');
    const header = document.getElementById('main-header');

    function toggleMenu() {
        header.classList.toggle('nav-active');
        const isExpanded = header.classList.contains('nav-active');
        menuToggle.setAttribute('aria-expanded', isExpanded);
        
        if (isExpanded) {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
    }

    if (menuToggle && header) {
        menuToggle.addEventListener('click', toggleMenu);

        // Escape para fechar
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && header.classList.contains('nav-active')) {
                toggleMenu();
                menuToggle.focus();
            }
        });
    }

    // FAQ Accordion logic (if FAQ is present)
    const faqDetails = document.querySelectorAll('details');
    faqDetails.forEach(targetDetail => {
        targetDetail.addEventListener('click', () => {
            faqDetails.forEach(detail => {
                if (detail !== targetDetail) {
                    detail.removeAttribute('open');
                }
            });
        });
    });
});
