$(document).ready(function(){
    $('.pane_header').click(function(){
        if ($(this).parent().children('div.subitem').is(':visible')){
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
        }
        else {
            $('div.subitem').slideUp().siblings('normal');
            $('.pane_header').removeClass("active");
            $('.pane_header').parent().removeClass("active");
            $(this).toggleClass("active");
            $(this).parent().children('div.subitem').slideToggle().siblings('normal');
            $(this).parent().toggleClass("active");
        }
    });
});