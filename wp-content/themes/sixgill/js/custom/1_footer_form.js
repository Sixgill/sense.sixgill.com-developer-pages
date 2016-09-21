jQuery(function($) {
	var submittedFlag = false;
	var errorElement = $('footer div.footer-subscribe-error');
	var errorArrow = $('footer div.footer-subscribe-arrow');
	var timerId = null;
	$('footer input.footer-subscription-email').keypress(function (e) {
		if(!timerId){
			timerId = setInterval(watchSubscription, 400);
		}
	});
	$('footer input.footer-subscription-button').click(function() {
		if(!timerId){
			timerId = setInterval(watchSubscription, 400);
		}
	});
	$('footer img.footer-subscribe-error-close').click(function(argument) {
		clearInterval(timerId);
		timerId = null;
		errorElement.hide();
		errorArrow.hide();
	});

	function watchSubscription() {
		var errorMessageContainer = $('footer div.mc4wp-error p');
		var successMessageContainer = $('footer div.mc4wp-success');
		if(errorMessageContainer.length){
			$("footer p.footer-subscribe-error-text")[0].innerHTML = errorMessageContainer[0].innerHTML;
			errorElement.show();
			errorArrow.show();
		}
		if(successMessageContainer.length){
			errorElement.hide();
			errorArrow.hide();
			clearInterval(timerId);
			timerId = null;
		}
	}

	$('footer form.mc4wp-form').on('submit', function() {
		errorElement.hide();
		errorArrow.hide();
	});

});
