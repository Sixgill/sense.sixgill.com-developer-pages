jQuery(function($) {
	var submittedFlag = false,
			formContainerClassSelector = '.resource-details-download-form-wrapper',
			formSelector = formContainerClassSelector + ' .mc4wp-form',
			successMessageSelector = formContainerClassSelector + ' .mc4wp-success',
			noticeMessageSelector = formContainerClassSelector + ' .mc4wp-notice',
			errorMessageSelector = formContainerClassSelector + ' .mc4wp-error',
			downloadLink = $('.resource-details').attr('data-download-link');

	function watchSuccess() {
		console.log('watchSuccess');
		var successMessageContainer = $(successMessageSelector);
		var errorMessageContainer = $(noticeMessageSelector + ', ' + errorMessageSelector);
		if(successMessageContainer.length) {
			console.log('successMessage');
			console.log('downloadLink '+ downloadLink);
			window.open(downloadLink, "_self");
		}

		if (successMessageContainer.length || errorMessageContainer.length) {
			console.log('success or error message');
			submittedFlag = false;
			return;
		}
		setTimeout(watchSuccess, 200);
	}

	$(formSelector).on('submit', function() {
		console.log('download form submit');
		if(submittedFlag) return;
 		submittedFlag = true;
		watchSuccess();
	});

	$(".js-share-link-input").on("click", function () {
		$(this).select();
	});
});
