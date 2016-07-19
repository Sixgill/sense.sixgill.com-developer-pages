jQuery(function($){
	if(screen.width < 1000) {
		$('.gallery-description-inner').on("click touchstart", function() {
			$(this).parent().find('.gallery-link').trigger('click');
			console.log('click');
		});
	}
});
