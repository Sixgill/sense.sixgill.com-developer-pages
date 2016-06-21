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
			if (!blockHeight) {
				blockHeight = $(this).width() * resourceBlockAspectRatio;
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

	$(window).resize(function() {
		blockHeight = 0;
		resizeResourcesContainers();
	});

	resizeResourcesContainers();
});
