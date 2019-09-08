$(function() {
    AOS.init();

    window.setTimeout(function() {
        $(window).scrollTop(0); 
    }, 80);

    $('body').addClass('stop-scrolling');
    setTimeout(() => {
        $('body').removeClass('stop-scrolling');
    },5000);
});

$(window).on('scroll', () => {
    $('.lazy').each(() => {
        if($('.lazy').offset().top + 1 >= $('body').height() - $(window).height()){
            console.log($(this).addClass('animate')); 
            $(this).addClass('animate');
        }
    });
});