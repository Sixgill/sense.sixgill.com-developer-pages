jQuery(function($) {
	var submittedFlag = false;
	var errorElement = $('footer div.footer-subscribe-error');
	var errorArrow = $('footer div.footer-subscribe-arrow');

	$('footer input.footer-subscription-email').keypress(function (e) {
		  if (e.which == 13) {
		  	setTimeout(watchSubscription, 200);
		  }
	});
	$('footer input.footer-subscription-button').click(function() {
		setTimeout(watchSubscription, 200);
	});
	$('footer p.footer-subscribe-error-close').click(function(argument) {
		errorElement.hide();
		errorArrow.hide();
	});

	function watchSubscription() {
		var errorMessageContainer = $('footer div.mc4wp-error p');
		if(errorMessageContainer.length){
			$("footer p.footer-subscribe-error-text")[0].innerHTML = errorMessageContainer[0].innerHTML;
			errorElement.show();
			errorArrow.show();
		}
	}

	$('footer form.mc4wp-form').on('submit', function() {
		errorElement.hide();
		errorArrow.hide();
	});

});
