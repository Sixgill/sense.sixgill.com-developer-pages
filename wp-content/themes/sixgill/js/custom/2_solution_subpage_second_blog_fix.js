jQuery(function($) {
	if(window.screenType == "mobile-landscape" || window.screenType == "mobile-portrait") {
		return;
	}

	var secondBlock = $('#solution-subpage-second-block')
	var secondBlockImage = $('#solution-subpage-second-block-image');
	var secondBlockHeight = 0;
	var secondBlockImageHeight = 0;

	function checkSecondBlockHeight() {
		secondBlockHeight = secondBlock.height();
		secondBlockImageHeight = secondBlockImage.height();
		if(secondBlockHeight < secondBlockImageHeight) {
			secondBlock.height(secondBlockImageHeight);
		}
	}

	$(window).resize(checkSecondBlockHeight);
	checkSecondBlockHeight();
});
