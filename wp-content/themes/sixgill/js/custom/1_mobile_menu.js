jQuery(function($) {
	window.menuShowFlag = false;
	var isMenuShown = false;
	var primary_menu = $('.primary-menu');
	var background = $('#menu-background');
	var menu_trigger = $('#primary-menu-trigger');
	var mobile_trigger = $('.primary-menu-trigger-mobile');
	var tablet_close = $('#close-menu-icon-tablet');
	var body = $('body');

	function resetStyles(cb){
		primary_menu.removeAttr("style");
		background.removeAttr("style");
		if(primary_menu.hasClass("stick-to-right")){
			primary_menu.removeClass("stick-to-right");
			background.removeClass("fill-opacity");
		}
		if(body.hasClass("overflow-hide")){
			body.removeClass("overflow-hide");
		}
		isMenuShown = false;
		if(cb){
			cb();
		}
	}
	function handleScreenSize(newScreenTypeName){
		if(newScreenTypeName == "tablet"){
			forTablet();
		} else if(newScreenTypeName == "desktop"){
			forDesktop();
		} else{
			forMobile();
		}
	}
	function offListeners(tablet){
		menu_trigger.off();
		if(tablet){
			tablet_close.off();
		}
	}
	function hideBackground(notMobile){
		if(!background.hasClass("hide")){
			background.addClass("hide");
		}
		if (notMobile) {
			if(primary_menu.hasClass("hide")){
				primary_menu.removeClass("hide");
			}
		} else {
			if(primary_menu.hasClass("hide")){
				primary_menu.addClass("hide");
			}
			mobile_trigger.removeClass("clicked");
		}
	}
	window.onScreenTypeChanged(function(newScreenTypeName) {
		resetStyles(function(){
			handleScreenSize(newScreenTypeName);
		});
	});
	handleScreenSize(window.screenType);
	function forDesktop(){
		hideBackground(true);
	}
	function forTablet(){
		offListeners(true);
		hideBackground(true);
		menu_trigger.click(function() {
			primary_menu.addClass("stick-to-right");
			background.removeClass("hide");
			background.addClass("fill-opacity");
			body.addClass("overflow-hide");
		});
		tablet_close.click(function() {
			primary_menu.removeClass("stick-to-right");
			background.removeClass("fill-opacity");
			background.addClass("hide");
			body.removeClass("overflow-hide");
		});
	}
	function forMobile(){
		offListeners(false);
		hideBackground(false);
		menu_trigger.click(function() {
			if(isMenuShown) {
				primary_menu.fadeTo(500, 0,function(){
					primary_menu.addClass("hide");
					body.removeClass("overflow-hide");
					isMenuShown = false;
				});
			} else {
				primary_menu.removeClass("hide");
				primary_menu.fadeTo(500, 1);
				body.addClass("overflow-hide");
				isMenuShown = true;
			}
			mobile_trigger.toggleClass("clicked");
			window.menuShowFlag = isMenuShown;
		});
	}
});