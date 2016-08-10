jQuery(function($){
	$("#home-fourth-section-carousel").owlCarousel({
		// Most important owl features
		items : 3, //3 items above 1200px browser width
		itemsDesktop : [1200,3], //3 items between 1200px and 300px
		itemsDesktopSmall : false, // disabled - inherit from itemsDesktop option
		itemsTablet: [1200,2], //2 items between 1200 and 600
		itemsMobile : [500,1], //1 items between 600 and 0
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

	})
});
