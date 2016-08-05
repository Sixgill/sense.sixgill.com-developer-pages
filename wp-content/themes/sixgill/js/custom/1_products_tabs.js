jQuery(function($) {

	var productsTabsInfo = [];
	var productsTabRightCol = $('.products-last-section-right-col');

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
				productsTabRightCol.addClass('bubble-' + currentTabInfo.tabID);
			} else {
				currentTabInfo.logoLink.removeClass('selected');
				currentTabInfo.contentDivLink.addClass('hide');
				productsTabRightCol.removeClass('bubble-' + currentTabInfo.tabID);
			}
		});
	});
});