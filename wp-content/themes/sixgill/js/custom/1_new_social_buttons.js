jQuery(function($) {
	if(!$('#sidebar-floating').length) return;
	var fixedFlag = false;
	var sidebarFloating = $('#sidebar-floating');
	var sidebarFixed = $('#sidebar-fixed');
	var contentDiv = $('#press-text-post');
	var sidebarHeight = sidebarFloating.height();
	var contentScrollHeight = contentDiv.offset().top + contentDiv.height();
	var hist = 0;
	var searchFormCorrection = $('#search-form-desktop').height();

	function hideSidebar(sidebar) {
		sidebar.css('opacity', 0);
		sidebar.css('z-index', -1);
	}

	function showSidebar(sidebar) {
		sidebar.css('opacity', 1);
		sidebar.css('z-index', 100);
	}

	function checkSidebar() {
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
		var floatingSidebarTopOffset = sidebarFloating.offset().top - searchFormCorrection;
		if(floatingSidebarTopOffset > fixedSidebarTopOffset) {
			hideSidebar(sidebarFloating);
			showSidebar(sidebarFixed);
		} else if(floatingSidebarTopOffset < fixedSidebarTopOffset) {
			hideSidebar(sidebarFixed);
			showSidebar(sidebarFloating);
		}
	}
	checkSidebar();
	$(window).on('scroll', checkSidebar);
	$(window).on('resize', checkSidebar);
});
