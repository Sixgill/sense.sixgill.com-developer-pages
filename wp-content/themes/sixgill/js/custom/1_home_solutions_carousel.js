jQuery(function($){
	$("#home-fourth-section-carousel").owlCarousel({
		// Most important owl features
		items : 3, //3 items above 1200px browser width
		itemsDesktop : [1200,3], //3 items more them 1300
		itemsDesktopSmall : false, // disabled - inherit from itemsDesktop option
		itemsTablet: [1300,2], //2 items between 1300 and 500
		itemsMobile : [730,1], //1 items between 640 and 0
		// Navigation
		navigation : true,
		navigationText : ["",""],

		//Pagination
		pagination : false,

		// // Responsive
		responsive: true,
		// responsiveRefreshRate : 200,
		//responsiveBaseWidth: "#home-block-solutions-carousel",

		theme : "home-fourth-section-carousel",

	});
});
