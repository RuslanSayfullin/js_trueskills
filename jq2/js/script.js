$(document).ready(function(){
    $('li').click(function(){
        var number = $(this).index();
        $('h2').slideUp(400).eq(number).slideDown(400);
        $('p').slideUp(400).eq(number).slideDown(400);
        $('li').removeClass('inactive').addClass('active');
        $('li').not(this).removeClass('active').addClass('inactive');
    });
    $('h2').not(':first').hide();
    $('p').not(':first').hide();
});    