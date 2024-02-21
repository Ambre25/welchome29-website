const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');
let isMenuOpen = false;

// Fonction pour ouvrir le menu
function openMenu() {
    navLinks.classList.add('nav-active');
    isMenuOpen = true;
}

// Fonction pour fermer le menu
function closeMenu() {
    navLinks.classList.remove('nav-active');
    isMenuOpen = false;
}

burger.addEventListener('click', () => {
    if (!isMenuOpen) {
        openMenu();
    } else {
        closeMenu();
    }
});

// Empêcher le swipe lorsque le menu est fermé
document.addEventListener('touchmove', (event) => {
    if (!isMenuOpen) {
        event.preventDefault();
    }
});