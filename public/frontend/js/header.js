   
        // JavaScript to toggle the mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // JavaScript to highlight the active page
        document.addEventListener('DOMContentLoaded', () => {
            let currentPath = window.location.pathname.split('/').pop().replace('.html', '');
            if (currentPath === '' || currentPath === 'index') { // Handle index.html or root path
                currentPath = 'início'; // Or whatever your default page's data-page is
            }

            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                const pageName = link.dataset.page;
                if (pageName === currentPath) {
                    link.classList.add('text-text-primary', 'font-bold');
                    link.classList.remove('text-text-black');
                } else {
                    link.classList.add('text-text-black');
                    link.classList.remove('text-text-primary', 'font-bold');
                }
            });
        });
   