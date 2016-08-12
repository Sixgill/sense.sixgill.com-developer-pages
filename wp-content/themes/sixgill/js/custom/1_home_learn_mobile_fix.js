jQuery(function($) {
	var fixedPanelOffset = 121;
	if (window.screenType != 'tablet') return;

	$('.home-learn-more-link').click(function() {
		$('html, body').animate({
        scrollTop: $("[data-anchor='" + $(this).attr('href').substring(1) + "'").offset().top - fixedPanelOffset
    }, 1000);
	});
});
