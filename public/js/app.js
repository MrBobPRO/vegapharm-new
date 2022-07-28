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

        let contentItem = document.querySelector(`[data-id="${targetButton.dataset.contentId}"]`);
        let content = contentItem.closest('.accordion-content');
        let activeContentItem = content.querySelector('.accordion-content__item--active');

        // hide content if clicked already active button
        if (targetButton === activeButton) {
            activeButton.classList.remove('accordion-button--active');
            activeContentItem.classList.remove('accordion-content__item--active');
        // else show clicked buttons content
        } else {
            if (activeButton) {
                activeButton.classList.remove('accordion-button--active');
            }
            targetButton.classList.add('accordion-button--active');

            if (activeContentItem) {
                activeContentItem.classList.remove('accordion-content__item--active');
            }
            contentItem.classList.add('accordion-content__item--active');
        }
    });
});


// smooth scroll on anchor click
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (evt) {
        evt.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


// Greeting image switcher
document.querySelector('.greeting__image-container').addEventListener('click', (evt) => {
    if (evt.target.tagName === 'IMG') {
        let nextEl = evt.target.nextElementSibling;
        evt.target.classList.remove('visible');
        nextEl ? nextEl.classList.add('visible') : evt.target.parentElement.firstElementChild.classList.add('visible');
    }
});


// ---------------------Products Filtr start---------------------
document.querySelectorAll('.prescription-filter__input').forEach((input) => {
    input.addEventListener('change', (evt) => {
        let oppositeCheckboxId = evt.target.id == 'prescription-otc' ? '#prescription-rx' : '#prescription-otc';
        document.querySelector(oppositeCheckboxId).checked = false;

        ajaxGetProducts();
    });
});

$('#categories-select').selectize({
    onChange(value) {
        ajaxGetProducts();
    }
});

function ajaxGetProducts() {
    let prescriptionCheckbox = document.querySelector('input[name="prescription"]:checked');
    let prescription = prescriptionCheckbox ? prescriptionCheckbox.value : 'all';

    let category_id = document.querySelector('#categories-select').value

    $.ajax({
        type: 'POST',
        url: '/products/ajax-get',
        data: { prescription: prescription, category_id: category_id },
        success: function (result) {
            let listWrapper = document.querySelector('#products-list-wrapper');
            listWrapper.innerHTML = result;
        },
        error: function (xhr) {
            console.log("Ajax products get error: " + xhr.status + " " + xhr.statusText)
        }
    });
}
// ---------------------Products Filtr end---------------------