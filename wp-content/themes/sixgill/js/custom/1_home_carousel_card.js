jQuery(function($){
	if(window.screenType == 'desktop'){
		return;
	}
	var carousel_cards = $('.home-fourth-section-carousel-slide');
	for(var i = 0; i < carousel_cards.length; i++){
			carousel_cards[i].addEventListener("touchstart",(function(index) {
		      return function() {
		        handleTouch(index)
		      };
		    })(i));
	}
	function handleTouch(index){
		var choosed_element = $($(carousel_cards[index]).children(":first")[0]);
		if(carousel_cards[index].choosed){
			choosed_element.removeClass("empty-card");
			carousel_cards[index].choosed = false;
		} else {
			for(var i = 0; i < carousel_cards.length; i++){
				var element = $($(carousel_cards[i]).children(":first")[0]);
				element.removeClass("empty-card");
				carousel_cards[i].choosed = false;
			}
			choosed_element.addClass("empty-card");
			carousel_cards[index].choosed = true;
		}
	}
})