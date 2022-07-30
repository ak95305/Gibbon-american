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




// Header Logo Check
let header = document.querySelector('#header');
let logoImg = document.querySelector('.logo img');
if(header.classList.contains('white')){
    logoImg.setAttribute('src', 'assets/logo-gibbon-white.png');
}else{
    logoImg.setAttribute('src', 'assets/logo-gibbon.png');
}





$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("#header").addClass("active");
    } else {
       $("#header").removeClass("active");
    }
});