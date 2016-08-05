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
		console.log(selector);
		var currentSublink = new SubsectionLinkInfo(
			link,
			selectedSection,
			selector
		);

		sublinks.push(currentSublink);

		window.onScrolledTo(
			currentSublink.section,
			function() {
				sublinks.forEach(function(sublink) {
					if(sublink.selector == selector) {
						sublink.menuLink.addClass('active');
					} else {
						sublink.menuLink.removeClass('active');
					}
				});
			},
			function() {
				currentSublink.menuLink.removeClass('active');
			}
		);

	});

});