jQuery(function($) {
	if(window.screenType != 'desktop') return;

	var homeFullpageWrapper = $('#home-fullpage-wrapper');
	if(!homeFullpageWrapper.length) return;

	homeFullpageWrapper.fullpage({
		navigation: true,
		scrollBar: true,
		sectionSelector: '.home-section',
		verticalCentered: false,
		normalScrollElements: '.modal',
		onLeave: function(index, nextIndex, direction) {
      var vid = document.getElementById("home-video");
      if(nextIndex == 1) {
				vid.play();
			} else {
				vid.pause();
			}
    },
		anchors:['video', 'what', 'chart', 'usecases', 'consumers']
	});

	var isTallEnough = true;
	var minFullpageHeight = 650;
	function checkViewportHeight() {
		if(isTallEnough && window.innerHeight <= minFullpageHeight) {
			$.fn.fullpage.setAutoScrolling(false);
			$.fn.fullpage.setResponsive(true);
			isTallEnough = false;
		} else if(!isTallEnough && window.innerHeight > minFullpageHeight) {
			$.fn.fullpage.setAutoScrolling(true);
			$.fn.fullpage.setResponsive(false);
			isTallEnough = true;
		}
	}
	checkViewportHeight();

	$(window).resize(checkViewportHeight);

	// function checkLayoutWidth() {
	// 	var currentLayoutFlag;
	// 	var currentLayoutWidth = $(window).width();
	// 	//if(currentLayoutWidth>1101 ) { currentLayoutFlag = "desktop"; };
	// 	//if(currentLayoutWidth<1101 &&  $(window).width()>491) { currentLayoutFlag = "tablet"; };
	// 	//if(currentLayoutWidth<490) { currentLayoutFlag = "mobile"; };

	// 	$(window).resize(function() {
	// 		currentLayoutWidth = $(window).width();
	// 		if(currentLayoutWidth>1084 ) {
	// 			if(currentLayoutFlag != "desktop") {
	// 				currentLayoutFlag = "desktop";
	// 				window.setTimeout('location.reload()', 500);
	// 			};	
	// 		};
	// 		if(currentLayoutWidth<1084 &&  $(window).width()>491) {
	// 			if(currentLayoutFlag != "tablet") {
	// 				currentLayoutFlag = "tablet";
	// 				window.setTimeout('location.reload()', 500);
	// 			};
	// 		};
	// 		// if(currentLayoutWidth<490) {
	// 		// 	if(currentLayoutFlag != "mobile") {
	// 		// 		currentLayoutFlag = "mobile";
	// 		// 		console.log(currentLayoutFlag);
	// 		// 	};
	// 		// };
	// 	});
	// };

	function checkLayoutWidth() {
		var myCurrentScreenType = window.screenType;
		console.log(currentScreenType);

		$(window).resize(function() {
			if (currentScreenType == 'desktop' && window.screenType != currentScreenType) {
				console.log('тип экрана поменялся с десктоп на любой другой');
			}
			else if (currentScreenType == 'tablet' && window.screenType == 'desktop') {
				console.log('тип экрана поменялся с tablet на desktop');	
			}
			else if (currentScreenType == 'mobile-portrait' && window.screenType == 'desktop') {
				console.log('тип экрана поменялся с mobile-portrait на desktop');
			}
			else if (currentScreenType == 'mobile-landscape' && window.screenType == 'desktop') {
				console.log('тип экрана поменялся с mobile-landscape на desktop');
			};
		});
	};

	checkLayoutWidth();

});
