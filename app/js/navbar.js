console.log("Soy el navbar.js");

/* eventListener para manejar en el NAV los botones en mobile */

const navOpener = document.querySelector('.nav-hamburger')
const navCloser = document.querySelector('.nav-close')
const navLinks = document.querySelector('.nav-links')

navOpener.addEventListener('click', () => {
    navLinks.classList.add('open-nav')
})
navCloser.addEventListener('click', () => {
    navLinks.classList.remove('open-nav')
})

/* Agrega el .position-fixed al nav */

document.addEventListener("DOMContentLoaded", function () {
    let nav = document.querySelector(".nav-links");
    let buttons = document.querySelector(".nav-buttons");
    let body = document.querySelector("body");
    
    window.addEventListener("scroll", function () {
        let scroll = window.scrollY;

        if (window.innerWidth > 768) {
            if (scroll >= 60) {
                nav.classList.add("position-fixed");
            } else {
                nav.classList.remove("position-fixed");
            }
        }

        if (scroll >= 60) {
            buttons.style.top = '18px';
        } else {
            if (body.classList.contains("landing-page")) {
                buttons.style.top = '18px';
            } else {
                buttons.style.top = '125px';
            }
        }
    });
});

/* end position fixed on nav */

/* Current Page */

document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname;
    let navLinks = document.querySelectorAll('header nav a');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});

/* End Current Page */