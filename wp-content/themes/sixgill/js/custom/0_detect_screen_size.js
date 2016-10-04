jQuery(function($){
	window.screenType = 'desktop';
	var oldScreenType = window.screenType;
	var execOnScreenTypeChanged = [];

	window.onScreenTypeChanged = function(newCallback, callOnLoad) {
		callOnLoad = typeof callOnLoad == 'undefined' ? callOnLoad : true;
		if (callOnLoad) {
			newCallback(window.screenType, oldScreenType);		
		}
		execOnScreenTypeChanged.push(newCallback);
	}

	function updateScreenType() {
		oldScreenType = window.screenType;
		window.screenType = 'desktop';
		if((window.innerWidth >= 500 && window.innerWidth <=1100 && (window.innerWidth / window.innerHeight) <= 4/3) || (window.innerWidth >= 1001 && window.innerWidth <= 1100)) {
			window.screenType = 'tablet';
		} else if(window.innerWidth<=1000 && (window.innerWidth / window.innerHeight) >= 4/3) {
			window.screenType = 'mobile-landscape';
		} else if(window.innerWidth <= 500 && (window.innerWidth / window.innerHeight) <= 4/3) {
			window.screenType = 'mobile-portrait';
		}

		if(oldScreenType!=window.screenType) {
			execOnScreenTypeChanged.forEach(function(currentCallback) {
				currentCallback(window.screenType, oldScreenType);
			});
		}
	}

	$(window).resize(updateScreenType);
	updateScreenType();
})