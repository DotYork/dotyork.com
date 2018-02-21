$('.js-menuTrigger').on('click', function(e) {
    console.log('hey');
	e.preventDefault();
	$('.js-headerNav').toggleClass('is-active');
	$('.js-header').toggleClass('is-active');
	$(this).toggleClass('is-active');
});

$('.js-headerNav a').on('click', function(e) {
    $('.js-headerNav').toggleClass('is-active');
    $('.js-header').toggleClass('is-active');
    $('.js-menuTrigger').toggleClass('is-active');
});

$('.js-fullHeight').css('height', $(window).height() - 66);
$(window).resize(function() {
    $('.js-fullHeight').css('height', $(window).height() - 66);
});


$('.js-scrollTo').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 300);
    }
});

//  On Load
//  ========

$('.js-equalHeight').matchHeight();







//  On Resize
//  =========

$(window).resize(function() {
    $('.js-equalHeight').matchHeight();
});



//  FB Events
//  =========

$('a[href*="ti.to"]').on('click', function(e) {
    // e.preventDefault();

    console.log('tito');
    fbq('track', 'InitiateCheckout');

    // $(this).trigger('click');
});