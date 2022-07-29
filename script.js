// HAMBURGER
let hamburgerIcon = document.querySelector('.hamburger');
let navListBox = document.querySelector('.nav-list');
// let headerBar = document.querySelector('.header-bar');

hamburgerIcon.addEventListener('click', () => {
    hamburgerIcon.classList.toggle('active');
    navListBox.classList.toggle('active');
    // headerBar.classList.toggle('active');
    document.body.classList.toggle('overflow-hidden');
});

