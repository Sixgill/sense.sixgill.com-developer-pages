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
		sectionSelector: fullpageSectionSelector
	});
});
