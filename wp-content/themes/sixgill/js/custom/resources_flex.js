$(function() {

	var blockHeight = 0;
	var resourceBlockAspectRatio = 1.22;
	// Margin-top/block_height or margin-bottom/block_height ratio
	var resourcesMarginRatio = 0.036;
	var hoverRatio = 1.066;
	var boxShadowSizeRatio = 0.05;
	var boxShadowSize = 0;

	var resourcesBlocks = $('.resource-block');

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

	resourcesBlocks.mouseenter(function() {
		$(this).css('box-shadow', '0px 0px '+boxShadowSize+'px #c1c1c1')
	});

	resourcesBlocks.mouseleave(function() {
		$(this).css('box-shadow', 'none');
	});

	function recalcResourcesBlocksSizes() {
		blockHeight = 0;
		resizeResourcesContainers();
	}

	function timeoutResizeCheck() {
		recalcResourcesBlocksSizes();
		setTimeout(timeoutResizeCheck, 500);
	}

	setTimeout(timeoutResizeCheck, 1000);

	$(window)
		.on('resize', recalcResourcesBlocksSizes())
		.on('orientationchange', setTimeout(recalcResourcesBlocksSizes, 1000));

	resizeResourcesContainers();
});
