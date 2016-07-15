$(function() {
	var resourcesBlocks = $('.resource-block');

	if(resourcesBlocks.length == 0) {
		return;
	}

	var blockHeight = 0;
	var resourceBlockAspectRatio = 1.22;
	// Margin-top/block_height or margin-bottom/block_height ratio
	var resourcesMarginRatio = 0.036;
	var hoverRatio = 1.066;
	var boxShadowSizeRatio = 0.05;
	var boxShadowSize = 0;

	function resizeResourcesContainers() {
		resourcesBlocks.each(function() {
			var blockWidth = $(this).width();
			if (!blockHeight) {
				oldWidth = blockWidth;
				blockHeight = blockWidth * resourceBlockAspectRatio;
				defaultMargin = blockHeight * resourcesMarginRatio;
				boxShadowSize = blockHeight * boxShadowSizeRatio;
			}

			$(this).height(blockHeight);
			$(this).css('margin-top', defaultMargin);
			$(this).css('margin-bottom', defaultMargin);
		});
	}

	if($(window).width() > 1200) {
		resourcesBlocks.mouseenter(function() {
			$(this).css('box-shadow', '0px 0px '+boxShadowSize+'px #c1c1c1')
		});

		resourcesBlocks.mouseleave(function() {
			$(this).css('box-shadow', 'none');
		});
	}


	function recalcResourcesBlocksSizes() {
		blockHeight = 0;
		resizeResourcesContainers();
	}

	function timeoutResizeCheck() {
		console.log('timeoutResizeCheck');
		recalcResourcesBlocksSizes();
		setTimeout(timeoutResizeCheck, 3000);
	}

	setTimeout(timeoutResizeCheck, 1000);

	$(window).on('resize', function() {
		console.log('resize');
		recalcResourcesBlocksSizes();
	});

	$(window).on('orientationchange', function() {
		console.log('orientationchange');
		setTimeout(recalcResourcesBlocksSizes, 1000);
	});

	resizeResourcesContainers();

	if (device.mobile() || device.tablet()){
		resourcesBlocks.click(function() {
			$(this).find('.resource-link').attr({'data-target':'#'});
			window.currentDownloadLink = $(this).find('.resource-link-container').attr('data-permalink');
			$('#myResource').modal('show');
		});
	}
});
