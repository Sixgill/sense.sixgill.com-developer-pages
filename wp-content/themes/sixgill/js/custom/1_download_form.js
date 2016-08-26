jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	var submittedFlag = false;

	function watchSuccess() {
		console.log('watchSuccess()');
		var successMessageContainer = $('div[aria-labelledby="resourcesModalLabel"] .mc4wp-success');
		var errorMessageContainer = $('.mc4wp-notice, .mc4wp-error');
		if(successMessageContainer.length) {
			console.log('successMessage');
			$('div[aria-labelledby="resourcesModalLabel"] button.close').trigger('click');
			window.open(window.currentDownloadLink, "_self");
			successMessageContainer.remove();
		}



		if(successMessageContainer.length || errorMessageContainer.length) {
			submittedFlag = false;
			return;
		}
		setTimeout(watchSuccess, 200);
	}

	$('div[aria-labelledby="resourcesModalLabel"] .mc4wp-form').on('submit', function() {
		if(submittedFlag) return;
		$('div[aria-labelledby="resourcesModalLabel"] .mc4wp-notice, div[aria-labelledby="resourcesModalLabel"]  .mc4wp-error').remove();
 		submittedFlag = true;
		watchSuccess();
	});
});
