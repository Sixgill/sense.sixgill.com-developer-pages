jQuery(function($) {
	window.menuShowFlag = false;
	var isMenuShown = false;
	var savedScroll;
	window.onScreenTypeChanged(function(newScreenTypeName) {
		$('.primary-menu' ).removeAttr("style");
		$('#menu-background' ).removeAttr("style");
		$('.primary-menu' ).removeClass("stick-to-right");
		$('#menu-background').removeClass("fill-opacity");
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
		$('#menu-background').addClass("hide");
		$('.primary-menu' ).removeClass("hide");
	}
	function forTablet(){
		$('#primary-menu-trigger').off();
		$('#close-menu-icon-tablet').off();
		$('#menu-background').removeClass("hide");
		$('.primary-menu').removeClass("hide");
		$('#primary-menu-trigger').click(function() {
			$('.primary-menu' ).addClass("stick-to-right");
				$('#menu-background').addClass("fill-opacity");
		});
		$('#close-menu-icon-tablet').click(function() {
			$('.primary-menu' ).removeClass("stick-to-right");
				$('#menu-background').removeClass("fill-opacity");
		});
	}
	function forMobile(){
		$('#primary-menu-trigger').off();
		$('#menu-background').addClass("hide");
		$('.primary-menu').addClass("hide");
		$('.primary-menu-trigger-mobile').removeClass("clicked");
		$('#primary-menu-trigger').click(function() {
			if(isMenuShown) {
				$( '.primary-menu' ).fadeTo(500, 0,function(){
					$('.primary-menu' ).addClass("hide");
					isMenuShown = false;
				});
			} else {
				$('.primary-menu' ).removeClass("hide");
				$( '.primary-menu' ).fadeTo(500, 1);
				isMenuShown = true;
			}
			$('.primary-menu-trigger-mobile').toggleClass("clicked");
			window.menuShowFlag = isMenuShown;
		});
	}
});