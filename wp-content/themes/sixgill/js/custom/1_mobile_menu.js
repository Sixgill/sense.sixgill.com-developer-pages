jQuery(function($) {
	window.menuShowFlag = false;
	var isMenuShown = false;
	var savedScroll;
	window.onScreenTypeChanged(function(newScreenTypeName) {
		$('.primary-menu' ).removeAttr("style");
		$('#menu-background' ).removeAttr("style");
		isMenuShown = false;
		if(newScreenTypeName == "tablet"){
			forTablet();
		} else if(newScreenTypeName == "desktop"){
			forDesktop();
		} else{
			forMobile();
		}
	});
	if(window.screenType == "tablet"){
		forTablet();
	} else if(window.screenType == "desktop"){
		forDesktop();
	} else{
		forMobile();
	}
	function forDesktop(){
		$('.primary-menu' ).removeClass("hide");
		$('body').removeClass("overflow-hide");
	}
	function forTablet(){
		$('#primary-menu-trigger').off();
		$('#close-menu-icon-tablet').off();
		$('body').removeClass("overflow-hide");
		$('#primary-menu-trigger').click(function() {
			$('.primary-menu' ).removeClass("hide");
			$('.primary-menu').animate({
				right:0
			},300,function(){
				$('#menu-background').removeClass("hide");
				$('#menu-background').animate({
					opacity:0.8
				},100);
			});
			$('body').addClass("overflow-hide");
		});
		$('#close-menu-icon-tablet').click(function() {
			$('#menu-background').animate({
				opacity:0
			},300,function(){
				$('#menu-background').addClass("hide");
				$('.primary-menu').animate({
					right:"-50%"
				},300,function(){
					$( '.primary-menu' ).addClass("hide");
					$('body').removeClass("overflow-hide");
				});
			});
		});
	}
	function forMobile(){
		$('#primary-menu-trigger').off();
		$('.primary-menu-trigger-mobile').removeClass("clicked");
		$('body').removeClass("overflow-hide");
		$('#primary-menu-trigger').click(function() {
			if(isMenuShown) {
				$( '.primary-menu' ).fadeTo(500, 0,function(){
					$('.primary-menu' ).addClass("hide");
					$('body').removeClass("overflow-hide");
				});
			} else {
				$('.primary-menu' ).removeClass("hide");
				$('body').addClass("overflow-hide");
				$( '.primary-menu' ).fadeTo(500, 1);
			}
			$('.primary-menu-trigger-mobile').toggleClass("clicked");
			isMenuShown = !isMenuShown;
			window.menuShowFlag = isMenuShown;
		});
	}
});