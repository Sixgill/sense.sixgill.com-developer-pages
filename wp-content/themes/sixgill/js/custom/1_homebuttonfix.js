jQuery(function($){
	function isScrolledIntoView(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();

		var elemTop = elem.offset().top;
		var elemBottom = elemTop + elem.height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	var homeScheduleButton = $('#home-button-on-video');
	var menuScheduleButton = $('#menu-schedule-button-wrapper');
	var isMenuScheduleButtonVisible = true;

	window.checkHomeButton() {
		if(isMenuScheduleButtonVisible) {
			if(isScrolledIntoView(homeScheduleButton)) {
				menuScheduleButton.fadeOut();
				isMenuScheduleButtonVisible = false;
			}
		} else if(!isScrolledIntoView(homeScheduleButton)) {
			menuScheduleButton.fadeIn();
			isMenuScheduleButtonVisible = true;
		}
	}

	if(homeScheduleButton.length) {
		window.checkHomeButton();
		$(window).scroll(window.checkHomeButton);
	}


});
