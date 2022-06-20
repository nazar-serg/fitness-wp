/*
    wow js
*/
wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animate__animated',
    offset: 0,
    mobile: true,
    live: true
})
wow.init();

/*
    fixed sidebar block blog page
*/
$('.content-area__sidebar').stickit({
    top: 120,
    screenMinWidth: 768
});

/*
    accordion
*/
var acc = document.getElementsByClassName("faq__accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("faq__active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

/*
    modal
*/
$('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    $('.modal').toggleClass('is-visible');
});

/*
    menu responsive
*/
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('header__active');
        $('body').toggleClass('lock');
    });
});

/*
    year footer
*/
let date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;

/*
    menu fixed
*/
window.onscroll = () => {
    const menu = document.querySelector('.header');
    const Y = window.scrollY;

    if (Y > 300) {
        menu.classList.add('menu-fixed');
    } else if (Y < 100) {
        menu.classList.remove('menu-fixed');
    }
}