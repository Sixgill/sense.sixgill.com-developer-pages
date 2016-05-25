jQuery(function($) {
	var showFlag = false;

	$('#primary-menu-trigger,#overlay-menu-close').click(function() {
		if(showFlag) {
			$( '#menu-background' ).fadeTo(500, 0, function() {
				$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			});
			$( '#primary-menu' ).fadeTo(400, 0);
		} else {
			$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			$( '#primary-menu, #menu-background' ).fadeTo(500, 1);
		}

		showFlag = !showFlag;
		$( '#show-menu-icon, #close-menu-icon' ).toggleClass("hide");
		return false;
	});
});
