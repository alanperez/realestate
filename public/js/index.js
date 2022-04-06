AOS.init();

let menuToggle = document.querySelector('#navToggle');
let mobileNav  = document.querySelector('#mobileNav');

const toggleMobileNavigation = () => {
    mobileNav.classList.toggle('active');
};

menuToggle.addEventListener('click', toggleMobileNavigation);