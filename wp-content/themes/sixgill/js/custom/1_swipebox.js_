jQuery(function($) {
	"use strict";
	$(document.body).on('click touchend','#swipebox-slider .current img', function(){
		return false;
	}).on('click touchend','#swipebox-slider .current', function(){
		$('#swipebox-close').click();
	});

	$(document.body).on('click touchend','#swipebox-slider .current img', function(){
		$('#swipebox-next').click();
	});
	
	$( '.swipebox' ).swipebox();
});
