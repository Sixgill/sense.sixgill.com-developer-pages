jQuery(function($) {
	"use strict";

jQuery(document.body)

// closes when bg clicked

.on('click touchend','#swipebox-slider .current img', function(){

return false;

})

.on('click touchend','#swipebox-slider .current', function(){

jQuery('#swipebox-close').click();

});

jQuery(document.body)

// closes when bg clicked

.on('click touchend','#swipebox-slider .current img', function(){

jQuery('#swipebox-next').click();

});


	$( '.swipebox' ).swipebox();
});
