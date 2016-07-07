jQuery(function($) {
	$(".footer-subscription-button").click(function() {
		$(this).closest('form').submit();
	});

	$('.input').keypress(function (e) {
	  if (e.which == 13) {
	    $(this).closest('form').submit();
	    return false;
	  }
	});

});
