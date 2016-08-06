jQuery(function($){
	window.screenType = 'desktop';
	var oldScreenType = window.screenType;
	var execOnScreenTypeChanged = [];

	window.onScreenTypeChanged = function(newCallback) {
		execOnScreenTypeChanged.push(newCallback);
		newCallback(window.screenType);
	}

	function updateScreenType() {
		oldScreenType = window.screenType;
		window.screenType = 'desktop';
		if(screen.width >= 500 && screen.width<=1200 && (screen.width / screen.height) <= 4/3) {
			window.screenType = 'tablet';
		} else if(screen.width<=1000 && (screen.width / screen.height) >= 4/3) {
			window.screenType = 'mobile-landscape';
		} else if(screen.width <= 500 && (screen.width / screen.height) <= 4/3) {
			window.screenType = 'mobile-portrait';
		}

		if(oldScreenType!=window.screenType) {
			execOnScreenTypeChanged.forEach(function(currentCallback) {
				currentCallback(window.screenType);
			});
		}
	}

	$(window).resize(updateScreenType);
	updateScreenType();
})
