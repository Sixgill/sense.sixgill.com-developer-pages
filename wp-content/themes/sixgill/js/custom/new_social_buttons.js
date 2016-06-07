/*jQuery(function($) {
	$(function() {
		var fixedFlag = false;
		var sidebarFloating = $('#sidebar-floating');
		var sidebarFixed = $('#sidebar-fixed');
		var contentDiv = $('#press-text-post');
		var sidebarHeight = sidebarFloating.height();
		var contentScrollHeight = contentDiv.offset().top + contentDiv.height();
		var hist = 20;

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

		$(window).scroll(checkSidebar());
		$(window).resize(checkSidebar());
});
*/
