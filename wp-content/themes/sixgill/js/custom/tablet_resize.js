jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag) {
			$('#primary-menu-trigger').trigger('click');
		}

		if($(window).width()>998) {
			$('#primary-menu').css('opacity', '1');
		}

	});
});
