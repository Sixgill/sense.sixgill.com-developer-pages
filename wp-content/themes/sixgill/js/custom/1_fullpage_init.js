jQuery(function($) {
	homeFullpage = $('#fullpage-products');
	productsFullpage = $('#fullpage-products');
	var sectionSelector = '.fullpage-section';

	/* Init of products page Fullpage */
	if(homeFullpage.length) {
		homeFullpage.fullpage({
			navigation: false,
			sectionSelector: sectionSelector,
			anchors: ['first-section', 'second-section', 'third-section', 'fourth-section', 'fifth-section', 'last-section', 'footer']
		});
	}
});
