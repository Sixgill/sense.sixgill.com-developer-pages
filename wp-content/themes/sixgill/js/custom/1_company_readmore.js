jQuery(function($) {
	$('.learn-more-link').click(function() {
		$(this).parent().prev().toggle();
		$(this).find('.learn-more-expand-icon, .learn-more-close-icon').toggle();
	});
});
