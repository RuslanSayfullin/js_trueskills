$(function(){
    $(".slidebox").hover(function(){
        $(this).find("img").stop().animate({
            top: -325
        }, 500);
    }, function(){
            $(this).find("img").stop().animate({
                top: 0
            }, 500);
    });
});