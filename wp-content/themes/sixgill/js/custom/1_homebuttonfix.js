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
	var isMenuScheduleButtonVisible = false;

	function checkHomeButton() {
		if(isMenuScheduleButtonVisible) {
			if(isScrolledIntoView(homeScheduleButton)) {
				menuScheduleButton.toggle();
				isMenuScheduleButtonVisible = false;
			}
		} else if(!isScrolledIntoView(homeScheduleButton)) {
			 menuScheduleButton.toggle();
			 isMenuScheduleButtonVisible = true;
		}
	}

	if(homeScheduleButton.length) {
		checkHomeButton();
		$(window).scroll(checkHomeButton);
	}


});
