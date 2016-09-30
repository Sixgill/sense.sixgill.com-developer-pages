jQuery(function($){
	function isScrolledIntoView(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();

		var elemTop = elem.offset().top;
		var elemBottom = elemTop + elem.height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	var homeScheduleButton = $('#home-button-on-video');
	var menuScheduleButton = $('.menu-schedule-button-link');
	var isMenuScheduleButtonVisible = true;

	window.checkHomeButton = function() {
		if(isMenuScheduleButtonVisible) {
			if(isScrolledIntoView(homeScheduleButton)) {
				menuScheduleButton.fadeTo(500,0,function(){
					menuScheduleButton.addClass("not-visible");
				});
				isMenuScheduleButtonVisible = false;
			}
		} else if(!isScrolledIntoView(homeScheduleButton)) {
			menuScheduleButton.removeClass("not-visible");
			menuScheduleButton.fadeTo(500,1);
			isMenuScheduleButtonVisible = true;
		}
	}

	if(homeScheduleButton.length) {
		window.checkHomeButton();
		$(window).scroll(window.checkHomeButton);
	}


});
