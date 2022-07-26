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


// products carousels
let productsCarousel = $('.products-carousel');
productsCarousel.owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ['<span class="material-icons-outlined">west</span>', '<span class="material-icons-outlined">east</span>'],
    items: 4,
    dots: false,
});


// Presence tabs
document.querySelectorAll('.accordion-button').forEach((item) => {
    item.addEventListener('click', (evt) => {
        let targetButton = evt.target;
        let buttonsContainer = targetButton.closest('.accordion-buttons-container');
        let activeButton = buttonsContainer.querySelector('.accordion-button--active');

        // escape multiple same button click
        if (targetButton !== activeButton) {
            activeButton.classList.remove('accordion-button--active');
            targetButton.classList.add('accordion-button--active');

            let contentItem = document.querySelector(`[data-id="${targetButton.dataset.contentId}"]`);
            let content = contentItem.closest('.accordion-content');
            content.querySelector('.accordion-content__item--active').classList.remove('accordion-content__item--active');
            contentItem.classList.add('accordion-content__item--active');
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