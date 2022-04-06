/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var toggleButton = document.getElementsByClassName('toggle-button')[0];
var navbarLinks = document.getElementsByClassName('header__menu')[0];
var navbarLinks2 = document.getElementsByClassName('header__account')[0];
toggleButton.addEventListener('click', function () {
  navbarLinks.classList.toggle('active');
  navbarLinks2.classList.toggle('active');
});
/******/ })()
;