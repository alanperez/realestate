const toggleButton = document.getElementsByClassName('toggle-button')[0]

const navbarLinks =  document.getElementsByClassName('header__menu')[0]
const navbarLinks2 =  document.getElementsByClassName('header__account')[0]
toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
    navbarLinks2.classList.toggle('active')
})