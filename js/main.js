// menu --------

$(document).ready(function() {
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



$(".btn-basket").click(function(event) {
    event.preventDefault();
    $.fancybox.open( {href : '#go-basket', padding : 0, closeBtn: false});
});