jQuery(function($) {
	window.menuShowFlag = false;
	var flag = false
	var savedScroll;

	$('#primary-menu-trigger').click(function() {
		if(flag) {
			$( '.full-page-wrapper' ).removeClass('hide');
			$( '#menu-background' ).fadeTo(500, 0, function() {
				$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			});

			$( '#primary-menu' ).fadeTo(400, 0, function() {

				$(window).scrollTop(savedScroll);


			});
		} else {
			
			savedScroll = $(window).scrollTop();
			$( '.full-page-wrapper' ).addClass('hide');
			$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			$( '#primary-menu, #menu-background' ).fadeTo(500, 1);
		}
		$('#mobile-table-search').toggleClass("show");
		// $( '#content' ).toggleClass("show");
		flag = !flag;

		window.menuShowFlag = flag;
		// window.menuShowFlag = !window.menuShowFlag;

		$('section').toggleClass('hide');
		$(' footer ').toggleClass('hide');
		// $( '#content' ).toggleClass("hide");
				

		$( '#show-menu-icon, #close-menu-icon' ).toggleClass("hide");
		return false;
	});


});