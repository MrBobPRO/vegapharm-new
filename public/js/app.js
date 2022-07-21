// initialize components
$(document).ready(function () {
    $('.selectize-singular').selectize({
        // options
    });

    $('.selectize-singular-linked').selectize({
        onChange(value) {
            window.location = value;
        }
    });
});


// Ajax CSRF-Token initialization
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// scroll top button
document.querySelector('.scroll-top').addEventListener('click', () => {
    document.body.scrollIntoView({ block: 'start', behavior: 'smooth' });
})


// stars carousels
let starsCarousel = $('.stars-carousel');
starsCarousel.owlCarousel({
    loop: true,
    margin: 32,
    nav: true,
    navText: ['<span class="material-icons-outlined">west</span>', '<span class="material-icons-outlined">east</span>'],
    items: 4,
    dots: false,
});


// achievements carousels
let achievementsCarousel = $('.achievements-carousel');
achievementsCarousel.owlCarousel({
    loop: true,
    margin: 28,
    nav: true,
    navText: ['<span class="material-icons-outlined">west</span>', '<span class="material-icons-outlined">east</span>'],
    items: 4,
    dots: false,
});


// Presence tabs
document.querySelectorAll('[data-action="switch-presence-tab"]').forEach((item) => {
    item.addEventListener('click', (evt) => {
        let targetButton = evt.target;
        let activeButton = document.querySelector('.presence-globe__button--active');

        // escape multiple same button click
        if (targetButton !== activeButton) {
            activeButton.classList.remove('presence-globe__button--active');
            targetButton.classList.add('presence-globe__button--active');

            let tab = document.querySelector('.presence-globe__tabs');
            tab.querySelector('.presence-globe__tabs-item--active').classList.remove('presence-globe__tabs-item--active');
            tab.querySelector(`[data-id="${targetButton.dataset.targetId}"]`).classList.add('presence-globe__tabs-item--active');
        }
    });
});


// smooth scroll on anchor click
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});