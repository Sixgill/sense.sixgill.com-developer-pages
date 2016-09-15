jQuery(function($){
	if(window.screenType == 'desktop'){
		return;
	}
	var previous_coordinates = {
		x:null,
		y:null
	};
	var carousel_cards = $('.home-fourth-section-carousel-slide');
	var links = $('.home-fourth-section-carousel-link-more');
	for(var i = 0; i < carousel_cards.length; i++){

			carousel_cards[i].addEventListener('touchstart',(function(index) {
		      return function(evt) {
		        handleTouch(evt,index,true);
		      };
		    })(i));
			carousel_cards[i].addEventListener('touchend',(function(index) {
		      return function(evt) {
		        handleTouch(evt,index,false);
		      };
		    })(i));
		    links[i].addEventListener('touchstart',function(ev){
		    	ev.stopPropagation();
		    });
	}
	function handleTouch(ev,index,touchStarted){
		if(ev.changedTouches.length > 1) {
			previous_coordinates = {
				x:null,
				y:null
			};
			return;
		}
		var current_card = $(carousel_cards[index]);
		var choosed_element = $(current_card.children(':first')[0]);
		if(touchStarted) {
			previous_coordinates.x = ev.touches[0].clientX;
			previous_coordinates.y = ev.touches[0].clientY;
		} else {
			if(previous_coordinates.x && previous_coordinates.y && (previous_coordinates.x == ev.changedTouches[0].clientX && previous_coordinates.y == ev.changedTouches[0].clientY)){
				if(carousel_cards[index].choosed){
					choosed_element.removeClass('empty-card');
					carousel_cards[index].choosed = false;
				} else {
					for(var i = 0; i < carousel_cards.length; i++){
						var element = $($(carousel_cards[i]).children(':first')[0]);
						element.removeClass('empty-card');
						carousel_cards[i].choosed = false;
					}
					choosed_element.addClass('empty-card');
					carousel_cards[index].choosed = true;
				}
			}
		}
	}
})