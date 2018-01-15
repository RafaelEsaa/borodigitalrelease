// Opacity for the menu with you do scroll down
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 200) {
        $('.menu').addClass(' menu-fixed-hover');
        $('.menu-fixed-other-page').addClass(' menu-fixed-hover');
    }
    else if ($(window).scrollTop() < 200){
        $('.menu').removeClass(" menu-fixed-hover ")
        $('.menu-fixed-other-page').removeClass(" menu-fixed-hover ")
    }
});

$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'1', 'translation': 'transition: all 0.8s ease-in-out 0s' },500);
            }
        });
    });
});

// Effect down menu responsive
function myFunction(x) {
    x.classList.toggle("change");
}

$('.gform_wrapper #gform_01 .gform_footer input[type="submit"]').click(function(event) {
    console.log('Hola!');
    /*event.preventDefault();
    console.log('Hola!!!!!');
    var c = confirm('Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse.');
    if (c == true) {
        $(this).closest('form').submit();
    } else {
        alert('no');
    }*/
});