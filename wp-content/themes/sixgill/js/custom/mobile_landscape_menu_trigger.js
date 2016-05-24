jQuery(function($) {
	$('#primary-menu-trigger,#overlay-menu-close').click(function() {
		$('section').toggleClass('hide-landscape-mobile');
		$('footer').toggleClass('hide-landscape-mobile');
		return false;
	});
});
