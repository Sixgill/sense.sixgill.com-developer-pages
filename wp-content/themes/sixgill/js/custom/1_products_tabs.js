jQuery(function($) {

	var productsTabsInfo = [];

	function ProductsTabInfo(tabID, logoLink, contentDivLink) {
		this.tabID = tabID;
		this.logoLink = logoLink;
		this.contentDivLink = contentDivLink;
	}

	$('.products-last-section-tab-logo').each(function() {
		var tabID = $(this).attr('data-tabid');
		var contentDivLink = $('#products-tab-' + tabID);
		productsTabsInfo.push(new ProductsTabInfo(tabID, $(this), contentDivLink));
	});

	$('.products-last-section-tab-logo').on('touchstart click', function() {
		var currentTabID = $(this).attr('data-tabid');
		productsTabsInfo.forEach(function(currentTabInfo) {
			if(currentTabInfo.tabID == currentTabID) {
				currentTabInfo.logoLink.addClass('selected');
				currentTabInfo.contentDivLink.removeClass('hide');
			} else {
				currentTabInfo.logoLink.removeClass('selected');
				currentTabInfo.contentDivLink.addClass('hide');
			}
		});
	});
});
