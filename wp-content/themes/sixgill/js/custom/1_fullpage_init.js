jQuery(function($) {

	function afterFullpageLoad () {
		function changeScreenHandler(newScreenType, oldScreenType){
			var desktopToNonDesktop = (oldScreenType == 'desktop') && (newScreenType != 'desktop');
			var nonDesktopToDesktop = (oldScreenType != 'desktop') && (newScreenType == 'desktop');
			if (desktopToNonDesktop) {
				$.fn.fullpage.setAutoScrolling(false);
				$.fn.fullpage.setResponsive(true);
			}
			else if (nonDesktopToDesktop) {
				$.fn.fullpage.setAutoScrolling(true);
				$.fn.fullpage.setResponsive(false);
			}
		}
		window.onScreenTypeChanged(changeScreenHandler, false);
		changeScreenHandler(window.screenType, 'desktop');
	}

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
		anchors:['video', 'what', 'chart', 'usecases', 'consumers'],
		afterRender: afterFullpageLoad
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


});
