jQuery(function($){

	var owl = $("#solution-subpage-carousel");
	var autoHeightOption = (owl.attr('autoheight') == "on");
	var rewindEnabled = (owl.attr('rewindenabled') == "on");

	owl.owlCarousel({

      navigation : false, // Show next and prev buttons
			rewindNav: rewindEnabled,
      slideSpeed : 300,
      paginationSpeed : 400,
			pagination: false,
			singleItem : true,
			lazyLoad : false,
    	autoHeight : autoHeightOption

  });

	$("#solution-carousel-button-left, #solution-carousel-mobile-button-left").click(function(){
    owl.trigger('owl.prev');
  })
  $("#solution-carousel-button-right, #solution-carousel-mobile-button-right").click(function(){
    owl.trigger('owl.next');
  })
});
