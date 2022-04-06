// Toggle on Hamburger Menu Click
let hamburgerBtn = $('.navbar-toggler');
let menuOuterLayer = $('.outerLayer');
let openCloseBtn = [hamburgerBtn,menuOuterLayer];
//Loop through elements i can click to open and close menu
openCloseBtn.forEach(controlSideMenu => {
    controlSideMenu.on('click',function() {
        $('.side-menu').toggleClass('open-menu');
        $('.hamburger-icon').toggleClass('is-opened');
        $(document.body).toggleClass('lock-scroll'); //Lock screen scroll when added to body
    }); 
});
//Navbar
$(function(){
  // $(document).ready(function(){
    let scroll = $(document).scrollTop();
    let navHeight = $('#headerNav').outerHeight();
    console.log(scroll);
    $(window).on('scroll',function () {
        let scrolled = $(document).scrollTop();
        console.log('scrolled');
        if(scrolled > navHeight){
            $('#headerNav').addClass('animated');
        }else{
            $('#headerNav').removeClass('animated');
        }

        if (scrolled > scroll) {
            $('#headerNav').removeClass('sticky');
        }else{
            $('#headerNav').addClass('sticky');
        }

        scroll = $(document).scrollTop();
    });
  // });
});