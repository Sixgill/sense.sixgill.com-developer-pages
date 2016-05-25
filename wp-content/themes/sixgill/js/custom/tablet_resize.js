jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag) {
			$('#primary-menu-trigger').trigger('click');
		}
	});
});
