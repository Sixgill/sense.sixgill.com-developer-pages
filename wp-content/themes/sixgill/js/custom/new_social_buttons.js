jQuery(function($) {
	var fixedFlag = false;
	var sidebarFloating = $('#sidebar-floating');
	var sidebarFixed = $('#sidebar-fixed');
	var contentDiv = $('#press-text-post');
	var sidebarHeight = sidebarFloating.height();
	var contentScrollHeight = contentDiv.offset().top + contentDiv.height();
	var hist = 100;

	function hideSidebar(sidebar) {
		sidebar.css('opacity', 0);
		sidebar.css('z-index', -1);
	}

	function showSidebar(sidebar) {
		sidebar.css('opacity', 1);
		sidebar.css('z-index', 100);
	}

	function checkSidebar() {
		console.log('check');
		// Check sidebar offset
		var contentDivLeftOffset = contentDiv.offset().left;
		var contentDivParentLeftOffset = contentDiv.parent().parent().offset().left;
		var sidebarWidth = sidebarFloating.width();

		var fixedSidebarTopOffset = contentDiv.offset().top + contentDiv.height() - sidebarFixed.height() - hist;
		var leftSpace = contentDivLeftOffset - contentDivParentLeftOffset;
		var leftPos = (leftSpace - sidebarWidth)/2;
		var fixedLeftPos = 0 - leftSpace + leftPos + parseInt(contentDiv.parent().css('padding-left').replace("px", ""));

		sidebarFloating.css('left', leftPos+contentDivParentLeftOffset);
		sidebarFixed.css('left', fixedLeftPos);
		sidebarFixed.css('top', fixedSidebarTopOffset);
		// Sidebar is under content block
		if(contentScrollHeight - hist < sidebarHeight + sidebarFloating.offset().top) {
			console.log('bottom');
			hideSidebar(sidebarFloating);
			showSidebar(sidebarFixed);
		//Sidebar is above content block
		} else if(contentScrollHeight - hist > sidebarHeight + sidebarFloating.offset().top) {
			console.log('floating');
			hideSidebar(sidebarFixed);
			showSidebar(sidebarFloating);
		}
	}

	window.onscroll = window.onresize = window.onload = checkSidebar;
});
