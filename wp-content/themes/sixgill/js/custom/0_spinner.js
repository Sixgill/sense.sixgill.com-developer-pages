jQuery(function($) {
  $('#wrapper').hide();

    $(window).on("load", function() {
        $('#wrapper').css('opacity', '1').show();
        // return back right dots for home page
        $('#fp-nav').css('opacity', '1');
        $('#loader-wrapper').hide();
	});

});
