jQuery(function($){
	window.screenType = "desktop";
	if(screen.width >= 500 && screen.width<=1200 && (screen.width / screen.height) <= 4/3) {
		window.screenType = "tablet";
	} else if(screen.width<=1200 && (screen.width / screen.height) >= 4/3) {
		window.screenType = "mobile-landscape";
	} else if(screen.width <= 500 && (screen.width / screen.height) <= 4/3) {
		window.screenType = "mobile-portrait";
	}
})
