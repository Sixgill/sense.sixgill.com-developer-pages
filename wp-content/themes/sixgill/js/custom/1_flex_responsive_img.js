jQuery(function($) {
	var stretchedResponsiveImages = $('.aspectwidthfix');

	stretchedResponsiveImages.each(function() {
		var currentImage = $(this);
		var currentImageNaturalWidth, currentImageNaturalHeight;

		function waitForImage() {
			currentImageNaturalHeight = currentImage.prop('naturalHeight');
			currentImageNaturalWidth = currentImage.prop('naturalWidth');
			if(!currentImageNaturalHeight && !currentImageNaturalWidth) {
				setTimeout(waitForImage, 100);
			} else {
				imageReadyFunc();
			}
		}
		waitForImage();

		function imageReadyFunc() {
			function fixImageAspectRatio() {
				var currentZoomRatio = currentImage.height() / currentImageNaturalHeight;
				currentImage.width(currentImageNaturalWidth * currentZoomRatio);
			}

			$(window).resize(function() {
				fixImageAspectRatio();
			});

			fixImageAspectRatio();

		}
	});
});
