jQuery(function($){

	 var owl = $("#solution-subpage-carousel");

	owl.owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
			pagination: false,
			singleItem : true,
    	autoHeight : true

  });

	$("#solution-carousel-button-left").click(function(){
    owl.trigger('owl.prev');
  })
  $("#solution-carousel-button-right").click(function(){
    owl.trigger('owl.next');
  })
});
