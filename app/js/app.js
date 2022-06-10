//modal
$('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    $('.modal').toggleClass('is-visible');
});

//menu responsive
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('header__active');
        $('body').toggleClass('lock');
    });
});

//year footer
let date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;

//menu fixed
window.onscroll = () => {
    const menu = document.querySelector('.header');
    const Y = window.scrollY;

    if (Y > 300) {
        menu.classList.add('menu-fixed');
    } else if (Y < 100) {
        menu.classList.remove('menu-fixed');
    }
}

wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animate__animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
wow.init();