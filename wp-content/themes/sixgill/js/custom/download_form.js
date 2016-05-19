jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	var submittedFlag = false;
	var successFlag = false;

	function watchSuccess() {
		if(successFlag) return;
		if(jQuery('p.yikes-easy-mc-success-message').length) {
			$('button.close').trigger('click');
			window.open(window.currentDownloadLink, "_self");
			successFlag = true;
		}
		setTimeout(watchSuccess, 500);
	}

	$('.yikes-easy-mc-form').on('submit', function() {
		if(submittedFlag) return;
 		submittedFlag = true;
		watchSuccess();
	});
});
