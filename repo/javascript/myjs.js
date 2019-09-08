$(function() {
    AOS.init();
    $('body').addClass('stop-scrolling');
    setTimeout(() => {
        $('body').removeClass('stop-scrolling');
    },5000);
});

$(window).on('scroll', () => {
    console.log('here');
    $('.lazy').each(() => {
        if($('.lazy').offset().top + 1 >= $('body').height() - $(window).height()){
            console.log($(this).addClass('animate')); 
            $(this).addClass('animate');
        }
    });
});