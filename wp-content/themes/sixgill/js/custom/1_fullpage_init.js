jQuery(function($) {
	homeFullpage = $('#fullpage-products');
	productsFullpage = $('#fullpage-products');

	/* Init of products page Fullpage */
	if(homeFullpage.length) {
		homeFullpage.fullpage({
			navigation: false,
			sectionSelector: ".products-section",
			anchors: ['first-section', 'second-section', 'third-section', 'fourth-section', 'fifth-section', 'last-section']
		});
	}
});
