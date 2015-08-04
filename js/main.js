// menu --------

$(document).ready(function Sidenav() {
// Указываем переменные
    var accordion_head = $('.sidenav  li > a'),
        accordion_body = $('.sidenav li > .sub-menu');

// Функция клика
    accordion_head.on('click', function(event) {
// Скрывает открытый раздел по повторному клику
        event.preventDefault();
        if ($(this).attr('class') == 'active'){
            accordion_body.slideUp('fast');
            $(this).removeClass('active');
            return false;
        }
// Открывает следующий, скрывая открытый
        if ($(this).attr('class') != 'active'){
            accordion_body.slideUp('fast');
            $(this).next().stop(true,true).toggle();
            accordion_head.removeClass('active');
            $(this).addClass('active');
        }
    });
});

// Просмотр заказов --------

$('.order-name a').click(function (event) {
    event.preventDefault();
    var box = $(this).closest('li');
    var body = box.find('div.order-desctiption');
    body.slideToggle(300);


    // Toggle icon from up to down
    box.toggleClass('').toggleClass('order-view');
    setTimeout(function () {
        box.resize();
        box.find('[id^=map-]').resize();
    }, 50);
});

$('.profile').tabs();

// Стилизация форм

(function($) {
    $(function() {
        $('input[type=number]').styler();
    })
})(jQuery);


/* Поле отправки файла */

function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }
    var filename = str.slice(i);
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}


// ----- Календарь ----------

$(function(){

    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: '',
        nextText: '',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
            'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
            'Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['ВС','ПН','ВТ','СР','ЧТ','ПТ','СБ'],
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false
    };

    $.datepicker.setDefaults(
        $.extend($.datepicker.regional["ru"])
    );
    $(".form-date").datepicker();
});


//  слайдер

$('.slider ul').slick({
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('.nav-prev').click(function(){
    $('.slider ul').slick('slickPrev');
});

$('.nav-next').click(function(){
    $('.slider ul').slick('slickNext');
});



// Галерея товара

$('.product-image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.product-image-thumbs ul'
});
$('.product-image-thumbs ul').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.product-image',
    dots: false,
    arrows: false,
    focusOnSelect: true
});



$('.thumb-prev').click(function(){
    $('.product-image-thumbs ul').slick('slickPrev');
});

$('.thumb-next').click(function(){
    $('.product-image-thumbs ul').slick('slickNext');
});

$(".product-image-link").fancybox({
    "padding" : 0
});



// Пример - можно удалить
$(".btn-basket").click(function(event) {
    event.preventDefault();
    $.fancybox.open( {href : '#go-basket', padding : 0, closeBtn: false});
});
