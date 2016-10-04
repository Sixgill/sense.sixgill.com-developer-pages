jQuery(function($) {
	$('#wrapper').css('opacity', '1');
	$('#loader-wrapper').hide();
	$('#fp-nav').css('opacity', '1');

	$(window).on("load", function() {
        // return back right dots for home page
        $('#fp-nav').css('opacity', '1');
    });

});