$(document).ready(function(){
    //скрываем #back-top
    $('#back-top').hide();
    // появление #back-top
    $(function (){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function(){
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});
