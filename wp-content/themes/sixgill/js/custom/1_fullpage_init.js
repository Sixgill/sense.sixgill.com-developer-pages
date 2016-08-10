jQuery(function($) {
	var homeFullpageWrapper = $('#home-fullpage-wrapper');
	if(!homeFullpageWrapper.length){
		console.log('Fullpage is not implemented on this page');
		return;
	}

	homeFullpageWrapper.fullpage({
		navigation: true,
		scrollBar: true,
		sectionSelector: '.home-section',
		verticalCentered: false,
		onLeave: function(index, nextIndex, direction){
      var vid = document.getElementById("home-video");
      if(nextIndex == 1) {
				vid.play();
			} else {
				vid.pause();
			}
    }
	});
});
