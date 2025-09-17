let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
let searchIcon = document.querySelector('.search-icon'); // Corrected selector
let searchForm = document.querySelector('.search-form'); // Corrected selector

menu.onclick = () => {
    navbar.classList.toggle('active');
};

// Assuming you have a search icon element with class 'search-icon'
// If the search form is always visible, you might not need this.
if (searchIcon) {
    searchIcon.onclick = () => {
        searchForm.classList.toggle('active');
    };
}