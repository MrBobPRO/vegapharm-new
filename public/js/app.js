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
// document.querySelector('#scroll-top-button').addEventListener('click', () => {
//     document.body.scrollIntoView({ block: 'start', behavior: 'smooth' });
// })