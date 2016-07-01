jQuery(function($){
	if(screen.width < 1000) {
		$('.gallery-description-inner').click(function() {
			$(this).parent().find('.gallery-link').trigger('click');
			console.log('click');
		});
	}
});
