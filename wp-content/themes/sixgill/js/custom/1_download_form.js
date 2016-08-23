jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	var submittedFlag = false;

	function watchSuccess() {
		console.log('watchSuccess()');
		var successMessageContainer = $('.mc4wp-success');
		var errorMessageContainer = $('.mc4wp-notice, .mc4wp-error');
		if(successMessageContainer.length) {
			console.log('successMessage');
			$('button.close').trigger('click');
			window.open(window.currentDownloadLink, "_self");
			successMessageContainer.remove();
		}



		if(successMessageContainer.length || errorMessageContainer.length) {
			console.log('end of watchSuccess()');
			submittedFlag = false;
			return;
		}
		setTimeout(watchSuccess, 200);
	}

	$('.mc4wp-form').on('submit', function() {
		if(submittedFlag) return;
		$('.mc4wp-notice, .mc4wp-error').remove();
 		submittedFlag = true;
		watchSuccess();
	});
});
