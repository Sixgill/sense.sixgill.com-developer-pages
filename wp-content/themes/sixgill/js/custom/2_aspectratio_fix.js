jQuery(function($){
	function fixAspectRatios(attrName) {
		console.log(attrName);
		$('['+attrName+']').each(function() {
			var aspectRatio = parseFloat($(this).attr(attrName));
			$(this).height($(this).width() / aspectRatio);
		});
	}

	function fixGlobalAspectRatio() {
		fixAspectRatios('aspectratio');
	}

	function fixDesktopAspectRatio() {
		fixAspectRatios('desktop-aspectratio');
	}

	function fixTabletAspectRatio() {
		fixAspectRatios('tablet-aspectratio');
	}

	function fixMobileLadnscapeAspectRatio() {
		fixAspectRatios('mobilelandscape-aspectratio');
	}

	function fixMobilePortraitAspectRatio() {
		fixAspectRatios('mobileportrait-aspectratio');
	}

	function fixMobileAspectRatio() {
		fixAspectRatios('mobile-aspectratio');
	}

	function bindFixFunction(fixFunction) {
		$(window).resize(fixFunction);
		fixFunction();
	}

	bindFixFunction(fixGlobalAspectRatio);

	if(window.screenType == "desktop") {
		bindFixFunction(fixDesktopAspectRatio);
	} else if(window.screenType == "tablet") {
		bindFixFunction(fixTabletAspectRatio);
	} else if(window.screenType == "mobile-landscape") {
		bindFixFunction(fixMobileLandscapeAspectRatio);
	} else if(window.screenType == "mobile-portrait") {
		bindFixFunction(fixMobilePortraitAspectRatio);
	}

	if(window.screenType == "mobile-landscape" || window.screenType == "mobile-portrait") {
		bindFixFunction(fixMobileAspectRatio);
	}
});
