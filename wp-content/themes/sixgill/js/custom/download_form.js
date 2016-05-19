jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	$('.yikes-easy-mc-form').on('submit', function() {
		if($('p.yikes-easy-mc-error-message').length!=0) {
			$('button.close').trigger('click');
			window.open(window.currentDownloadLink, "_blank");
		}
	});
});
