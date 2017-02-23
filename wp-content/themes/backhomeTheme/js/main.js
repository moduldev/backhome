$('.slider_top').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});
var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
var delay = 1000; // Задержка прокрутки
$(document).ready(function() {
    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
        /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
        if ($(this).scrollTop() > top_show) $('#top').fadeIn();
        else $('#top').fadeOut();
    });
    $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
        /* Плавная прокрутка наверх */
        $('body, html').animate({
            scrollTop: 0
        }, delay);
    });
});

$(document).ready(function() {
    $('.law').mouseenter(function () {
        $(".appear_law").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law").css('display','none');

    });
});
/*------------------------------------------*/
$(document).ready(function() {
    $('.law1').mouseenter(function () {
        $(".appear_law1").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law1").css('display','none');

    });
});
/*------------------------------------------*/
$(document).ready(function() {
    $('.law2').mouseenter(function () {
        $(".appear_law2").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law2").css('display','none');

    });
});
/*------------------------------------------*/
$(document).ready(function() {
    $('.law4').mouseenter(function () {
        $(".appear_law4").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law4").css('display','none');

    });
});
/*------------------------------------------*/
$(document).ready(function() {
    $('.law5').mouseenter(function () {
        $(".appear_law5").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law5").css('display','none');

    });
});
/*------------------------------------------*/
$(document).ready(function() {
    $('.law6').mouseenter(function () {
        $(".appear_law6").css('display','inline-block');

    });
});
$(document).ready(function() {
    $('body').mouseout (function () {
        $(".appear_law6").css('display','none');

    });
});
