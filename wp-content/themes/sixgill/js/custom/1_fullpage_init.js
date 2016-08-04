// jQuery(function($) {
// 	homeFullpage = $('#fullpage-products');
// 	productsFullpage = $('#fullpage-products');
// 	var sectionSelector = '.fullpage-section';

// 	/* Init of products page Fullpage */
// 	if(homeFullpage.length) {
// 		homeFullpage.fullpage({
// 			navigation: false,
// 			sectionSelector: sectionSelector,
// 			anchors: ['first-section', 'second-section', 'third-section', 'fourth-section', 'fifth-section', 'last-section', 'footer']
// 		});
// 	}
// });

jQuery(function($) {
	fullpageConfig = $('#fullpage-config');
	if(fullpageConfig.length==0){
		console.log('Fullpage is not implemented on this page');
		return;
	}
	fullpageWrapper = $('#fullpage');
	fullpageSectionSelector = fullpageConfig.attr('fullpage-section-selector');
	fullpageNavigation = (fullpageConfig.attr('fullpage-navigation') === 'true');

	fullpageWrapper.fullpage({
		navigation: fullpageNavigation,
		scrollBar: true,
		sectionSelector: fullpageSectionSelector
	});
});

