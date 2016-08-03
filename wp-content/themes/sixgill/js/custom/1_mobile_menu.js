jQuery(function($) {
	window.menuShowFlag = false;
	var savedScroll;

	$('#primary-menu-trigger').click(function() {
		if(window.menuShowFlag) {
			$( '#menu-background' ).fadeTo(500, 0, function() {
				$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			});
			$( '#primary-menu' ).fadeTo(400, 0, function() {
				$(window).scrollTop(savedScroll);
			});
		} else {
			savedScroll = $(window).scrollTop();
			$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			$( '#primary-menu, #menu-background' ).fadeTo(500, 1);
		}
		$('#mobile-table-search').toggleClass("show");

		window.menuShowFlag = !window.menuShowFlag;

		$('section').toggleClass('hide-landscape-mobile');
		$('footer').toggleClass('hide-landscape-mobile');

		$( '#show-menu-icon, #close-menu-icon' ).toggleClass("hide");
		return false;
	});
});
