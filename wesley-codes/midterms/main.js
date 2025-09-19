// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    let menu = document.querySelector('#menu-bars');
    let navbar = document.querySelector('.navbar');
    let searchIcon = document.querySelector('.search-icon'); // Assuming you might add a search icon to toggle the form
    let searchForm = document.querySelector('.search-form');

    // Mobile menu toggle
    if (menu && navbar) {
        menu.onclick = () => {
            navbar.classList.toggle('active');
            // Close search form if open
            if (searchForm && searchForm.classList.contains('active')) {
                searchForm.classList.remove('active');
            }
        };
    }

    // Search form toggle (if search icon exists)
    if (searchIcon && searchForm) {
        searchIcon.onclick = () => {
            searchForm.classList.toggle('active');
            // Close mobile menu if open
            if (navbar && navbar.classList.contains('active')) {
                navbar.classList.remove('active');
            }
        };
    }

    // Close mobile menu when clicking on a link
    if (navbar) {
        const navLinks = navbar.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navbar.classList.remove('active');
            });
        });
    }

    // Close mobile menu and search form when clicking outside
    document.addEventListener('click', (e) => {
        if (navbar && !navbar.contains(e.target) && (!menu || !menu.contains(e.target))) {
            navbar.classList.remove('active');
        }
        if (searchForm && !searchForm.contains(e.target) && (!searchIcon || !searchIcon.contains(e.target))) {
            searchForm.classList.remove('active');
        }
    });
});