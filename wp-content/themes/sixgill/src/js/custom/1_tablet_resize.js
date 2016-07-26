jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag && $(window).width()>1200) {
			$('#primary-menu-trigger').trigger('click');
		}

		if($(window).width()>1200) {
			$('#primary-menu').css('opacity', '1');
		}

	});
});
