jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	$('.yikes-easy-mc-form').on('submit', function() {
		$('button.close').trigger('click');
		window.open(window.currentDownloadLink, "_blank");
	});
});
