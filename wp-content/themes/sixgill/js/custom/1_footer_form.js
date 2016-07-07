jQuery(function($) {
	$(".footer-subscription-button").click(function() {
		$(this).closest('form').submit();
	});

	$('.footer-subscription-email').keypress(function (e) {
	  if (e.which == 13) {
	    $(this).closest('form').submit();
	    return false;
	  }
	});

});
