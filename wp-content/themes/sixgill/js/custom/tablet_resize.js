jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag && $(window).width()>1000) {
			$('#primary-menu-trigger').trigger('click');
		}

		if($(window).width()>998) {
			$('#primary-menu').css('opacity', '1');
		}

	});
});
