jQuery(function($){

	function initOwlCarousel(carouselName) {
		var owl = $("#"+carouselName+"-solution-subpage-carousel");
		if(!owl.length) return;
		var autoHeightOption = (owl.attr('autoheight') == "on");
		var rewindEnabled = (owl.attr('rewindenabled') == "on");
		var owlCarousel = owl.owlCarousel({

	      navigation : false, // Show next and prev buttons
	      rewindNav: rewindEnabled,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      pagination: false,
	      singleItem : true,
	      lazyLoad : true, // Execute lazy loading
	      autoHeight : autoHeightOption,
	      afterMove: function(elem){
	      	elem
	      	.find('.loading')
	      	.css("min-height", $("#first-solution-subpage-carousel").height());
	      },
	      beforeMove: function(elem){
	      	elem
	      	.find('.owl-item')
	      	.css("min-height", "150px");
	      },
	      afterLazyLoad: function(elem){
	      	elem
	      	.find('.owl-item')
	      	.css("min-height", "150px");
	      }
	  });


		$("#"+carouselName+"-solution-carousel-button-left, #"+carouselName+"-solution-carousel-mobile-button-left").click(function(){
			owl.trigger('owl.prev');
		})
		$("#"+carouselName+"-solution-carousel-button-right, #"+carouselName+"-solution-carousel-mobile-button-right").click(function(){
			owl.trigger('owl.next');
		});

	}

	initOwlCarousel("first");
	initOwlCarousel("second");

});
