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

	function checkDecktopLayoutSwitching() {
		var currentScreenType = window.screenType;
		//console.log(currentScreenType);

		window.onScreenTypeChanged(function(newScreenTypeName) {
			if (currentScreenType == 'desktop') {
				if(newScreenTypeName != 'desktop') {
					//console.log('desktop -> любой другое разрешение');
					setTimeout(function () {
						location.reload()
					}, 100);
				};
			} else {
				if(newScreenTypeName == 'desktop') {
					//console.log('любой другое разрешение -> desktop');
					setTimeout(function () {
						location.reload()
					}, 100);
				};
			};
			currentScreenType = newScreenTypeName;
		});

	};

	checkDecktopLayoutSwitching();

});
