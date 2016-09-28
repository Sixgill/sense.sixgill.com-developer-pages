jQuery(function($) {
  $('#wrapper').hide();

    $(window).on("load", function() {
        $('#wrapper').fadeIn();
        // return back right dots for home page
        $('#fp-nav').css('opacity', '1');
        $('#loader-wrapper').hide();
	});

});
