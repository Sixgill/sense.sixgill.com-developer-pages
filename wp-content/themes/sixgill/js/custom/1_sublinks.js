jQuery(function($) {

	var sublinks = [];

	function SubsectionLinkInfo(menuLink, section, selector) {
		this.menuLink = menuLink;
		this.section = section;
		this.selector = selector;
	}

	$('.menu-sublink').each(function() {
		var link = $(this);
		var selector = $(this).attr('href');
		var selectedSection = $(selector);
		if(!selectedSection.length) {
			return;
		}

		var currentSublink = new SubsectionLinkInfo(
			link,
			selectedSection,
			selector
		);
		console.log('sublink');
		sublinks.push(currentSublink);
		console.log(currentSublink.selectedSection, 'selectedSection');
		window.onScrolledTo(
			currentSublink.section,
			function() {
				sublinks.forEach(function(sublink) {
					console.log("isScrolledTo", sublink.selector, selector);
					if(sublink.selector == selector) {
						sublink.menuLink.addClass('active');
					} else {
						sublink.menuLink.removeClass('active');
					}
				});
			},
			function() {
				console.log("isScrolledOut", currentSublink.selector);
				currentSublink.menuLink.removeClass('active');
			}
		);

	});

});
