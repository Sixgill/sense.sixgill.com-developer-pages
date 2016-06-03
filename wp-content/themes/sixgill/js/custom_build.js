jQuery(function($){
	$('input.subscribe-email').focusin(function(){
		$(this).addClass('subscribe-email-focus');
	});

	$('input.subscribe-email').focusout(function(){
		if($(this).val()==='') {
			$(this).removeClass('subscribe-email-focus');
		}
	});
});
jQuery(function() {
	$('.learn-more-link').click(function() {
		$(this).parent().prev().toggle();
		$(this).find('.learn-more-expand-icon, .learn-more-close-icon').toggle();
	});
});
(function(root,ns,factory){"use strict";"undefined"!=typeof module&&module.exports?module.exports=factory(ns,root):"function"==typeof define&&define.amd?define("detect-zoom",function(){return factory(ns,root)}):root[ns]=factory(ns,root)})(window,"detectZoom",function(){var devicePixelRatio=function(){return window.devicePixelRatio||1},fallback=function(){return{zoom:1,devicePxPerCssPx:1}},ie8=function(){var zoom=Math.round(100*(screen.deviceXDPI/screen.logicalXDPI))/100;return{zoom:zoom,devicePxPerCssPx:zoom*devicePixelRatio()}},ie10=function(){var zoom=Math.round(100*(document.documentElement.offsetHeight/window.innerHeight))/100;return{zoom:zoom,devicePxPerCssPx:zoom*devicePixelRatio()}},webkitMobile=function(){var deviceWidth=90==Math.abs(window.orientation)?screen.height:screen.width,zoom=deviceWidth/window.innerWidth;return{zoom:zoom,devicePxPerCssPx:zoom*devicePixelRatio()}},webkit=function(){var important=function(str){return str.replace(/;/g," !important;")},div=document.createElement("div");div.innerHTML="1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>0",div.setAttribute("style",important("font: 100px/1em sans-serif; -webkit-text-size-adjust: none; text-size-adjust: none; height: auto; width: 1em; padding: 0; overflow: visible;"));var container=document.createElement("div");container.setAttribute("style",important("width:0; height:0; overflow:hidden; visibility:hidden; position: absolute;")),container.appendChild(div),document.body.appendChild(container);var zoom=1e3/div.clientHeight;return zoom=Math.round(100*zoom)/100,document.body.removeChild(container),{zoom:zoom,devicePxPerCssPx:zoom*devicePixelRatio()}},firefox4=function(){var zoom=mediaQueryBinarySearch("min--moz-device-pixel-ratio","",0,10,20,1e-4);return zoom=Math.round(100*zoom)/100,{zoom:zoom,devicePxPerCssPx:zoom}},firefox18=function(){return{zoom:firefox4().zoom,devicePxPerCssPx:devicePixelRatio()}},opera11=function(){var zoom=window.top.outerWidth/window.top.innerWidth;return zoom=Math.round(100*zoom)/100,{zoom:zoom,devicePxPerCssPx:zoom*devicePixelRatio()}},mediaQueryBinarySearch=function(property,unit,a,b,maxIter,epsilon){function binarySearch(a,b,maxIter){var mid=(a+b)/2;if(0>=maxIter||epsilon>b-a)return mid;var query="("+property+":"+mid+unit+")";return matchMedia(query).matches?binarySearch(mid,b,maxIter-1):binarySearch(a,mid,maxIter-1)}var matchMedia,head,style,div;window.matchMedia?matchMedia=window.matchMedia:(head=document.getElementsByTagName("head")[0],style=document.createElement("style"),head.appendChild(style),div=document.createElement("div"),div.className="mediaQueryBinarySearch",div.style.display="none",document.body.appendChild(div),matchMedia=function(query){style.sheet.insertRule("@media "+query+"{.mediaQueryBinarySearch "+"{text-decoration: underline} }",0);var matched="underline"==getComputedStyle(div,null).textDecoration;return style.sheet.deleteRule(0),{matches:matched}});var ratio=binarySearch(a,b,maxIter);return div&&(head.removeChild(style),document.body.removeChild(div)),ratio},detectFunction=function(){var func=fallback;return isNaN(screen.logicalXDPI)||isNaN(screen.systemXDPI)?window.navigator.msMaxTouchPoints?func=ie10:"orientation"in window&&"string"==typeof document.body.style.webkitMarquee?func=webkitMobile:"string"==typeof document.body.style.webkitMarquee?func=webkit:navigator.userAgent.indexOf("Opera")>=0?func=opera11:window.devicePixelRatio?func=firefox18:firefox4().zoom>.001&&(func=firefox4):func=ie8,func}();return{zoom:function(){return detectFunction().zoom},device:function(){return detectFunction().devicePxPerCssPx}}});jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	var submittedFlag = false;
	var successFlag = false;

	function watchSuccess() {
		if(successFlag) return;
		if(jQuery('p.yikes-easy-mc-success-message').length) {
			$('button.close').trigger('click');
			window.open(window.currentDownloadLink, "_self");
			successFlag = true;
		}
		setTimeout(watchSuccess, 500);
	}

	$('.yikes-easy-mc-form').on('submit', function() {
		if(submittedFlag) return;
 		submittedFlag = true;
		watchSuccess();
	});
});
(function(d,s,i,r) {
	if (d.getElementById(i)){return;}
	var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1792815.js';
	e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
jQuery(function($) {
	$(document).ready(function () {
		$(document).on("scroll", onScroll);

		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");

			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');

			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top+2
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});

	function onScroll(event){
		var windowPos = $(window).scrollTop();
		$('.my_subMenus > a').each(function(index, item) {
			var currentLink = $(this);
			if ($(currentLink.attr("href")).length > 0) {
				var refElement = $(currentLink.attr("href"));
				if (refElement.position().top <= windowPos && (refElement.position().top + refElement.height() + $("#primary-navwrapper").height() ) > windowPos) {
					$('.my_subMenus > a').removeClass("active");
					currentLink.addClass("active");
				} else{
					//currentLink.removeClass("current");
				}
			}
		});
	}
});
jQuery(function($) {
	window.menuShowFlag = false;
	var savedScroll;

	$('#primary-menu-trigger,#overlay-menu-close').click(function() {
		if(window.menuShowFlag) {
			$( '#menu-background' ).fadeTo(500, 0, function() {
				$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
				$('#mobile-table-search').toggleClass("hide");
			});
			$( '#primary-menu' ).fadeTo(400, 0, function() {
				$(window).scrollTop(savedScroll);
			});
		} else {
			savedScroll = $(window).scrollTop();
			$('#mobile-table-search').toggleClass("hide");
			$( '#primary-menu > ul, #menu-background' ).toggleClass("show");
			$( '#primary-menu, #menu-background' ).fadeTo(500, 1);

		}
					$('#mobile-table-search').toggleClass("show");


		window.menuShowFlag = !window.menuShowFlag;

		$('section').toggleClass('hide-landscape-mobile');
		$('footer').toggleClass('hide-landscape-mobile');

		$( '#show-menu-icon, #close-menu-icon' ).toggleClass("hide");
		return false;
	});
});
jQuery(function($) {
	var searchOpenned = false;
	//Chache DOM search
	var searchQueryInput = $('#search-query');
	var searchButton = $('#search-button');
	var searchForm = $('#search-header-form');
	
	function hideSearch() {
		searchOpenned = false;
		searchButton.addClass('closed');
		searchQueryInput.addClass('closed');
	}
	
	function showSearch() {
		searchOpenned = true;
		searchButton.removeClass('closed');
		searchQueryInput.removeClass('closed');
		searchQueryInput.focus();
	}
  
	function validateSearchForm(searchQuery) {
		//TODO: improve validation
		//Validation passed: true
		//Otherwise: false
		var validationResult = true;
		if(searchQuery.length==0) {
			validationResult = false;
		}
		//Add here more conditions with validationResult = false action
		return validationResult;
	}
  
	searchForm.submit(function(event) {
		if(!validateSearchForm(searchQueryInput.val())) {
			event.preventDefault();
		}
	});
  
	searchButton.click(function() {
		if(searchOpenned) {
			if(searchQueryInput.val().length>0) {
				searchForm.submit();
			} else {
				hideSearch();
			}
		} else {
			showSearch();
		}
	});
  
	searchForm.focusout(function() {
		if(searchQueryInput.val().length==0) {
			setTimeout(function() {
				if(searchOpenned) {
					hideSearch();
				}
			}, 100);
		}
	});
});
jQuery(function($){
  if(document.getElementById('single-page-content') && document.getElementById('aside1')){
    // 		alert( 'Высота с учетом прокрутки: ' + document.getElementById('footer').offsetHeight);
		// если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
 		var a = document.querySelector('#aside1'), b = null, P = 0;
 		window.addEventListener('scroll', Ascroll, false);
 		document.body.addEventListener('scroll', Ascroll, false);

 		var headerFooter = document.querySelector('footer').getBoundingClientRect().top;

 		function Ascroll() {

 			var heightStarted = 40;
 			var heightTop = 40;

 			if (document.body.clientWidth <= 775) {
 				heightTop = 0;
 			}

 			if (b == null) {
 				var Sa = getComputedStyle(a, ''), s = '';
 				for (var i = 0; i < Sa.length; i++) {
 					if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
 						s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
 					}
 				}
 				b = document.createElement('div');
 				b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
 				a.insertBefore(b, a.firstChild);
 				var l = a.childNodes.length;
 				for (var i = 1; i < l; i++) {
 					b.appendChild(a.childNodes[1]);
 				}
 				a.style.height = b.getBoundingClientRect().height + heightStarted + 'px';
 				a.style.padding = '0';
 				a.style.border = '0';
 			}
 			var Ra = a.getBoundingClientRect(),
 			R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера

 			var topHeader = -Math.round(Ra.top + b.getBoundingClientRect().height - headerFooter + 0) - document.getElementById('content').offsetHeight + document.getElementById('aside1').offsetHeight;

 			var scrollHeight = Math.max(
				document.body.scrollHeight, document.documentElement.scrollHeight,
 				document.body.offsetHeight, document.documentElement.offsetHeight,
 				document.body.clientHeight, document.documentElement.clientHeight
 			);


 			if (window.pageYOffset  <= 250){
 				a.style.height = b.getBoundingClientRect().height + heightStarted + 'px';

 				b.className = 'stop';
 				b.style.top =  -R - document.getElementById('content').offsetHeight + document.getElementById('aside1').offsetHeight +'px';
 			}
 			else {
 				a.style.height = 0 + 'px';

				P = Ra.top;
 				if (((Ra.top - P) <= 0))  {
 					if (window.pageYOffset >= (document.body.scrollHeight - document.getElementById('footer').offsetHeight - 500) ) {

 						b.className = 'stop';
 						b.style.top =  -R +'px';
					}
 					else {
 						b.className = 'sticky';
						b.style.top = P - 211 - heightTop + 'px';


					}
 				} else {
 					b.className = '';
 					b.style.top = '';
 				}

 			}
 			window.addEventListener('resize', function() {
 				a.children[0].style.width = getComputedStyle(a, '').width
 			}, false);
 		}
 	}
});

jQuery(function($){

  if(document.getElementById('single-page-content') && document.getElementById('aside-blog')){
 
 		//alert( 'Высота с учетом прокрутки: ' + document.getElementById('footer').offsetHeight);
 
 		var a = document.querySelector('#aside-blog'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
 		window.addEventListener('scroll', Ascroll, false);
 		document.body.addEventListener('scroll', Ascroll, false);
 
 		var headerFooter = document.querySelector('footer').getBoundingClientRect().top;
 
 		function Ascroll() {
 
 			var heightStarted = 150;
 			var heightTop = 0;

 			if (document.body.clientWidth <= 775) {
 				heightTop = 0;
 			}

 			if (b == null) {
 				var Sa = getComputedStyle(a, ''), s = '';
 				for (var i = 0; i < Sa.length; i++) {
 					if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
 						s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
 					}
 				}
 				b = document.createElement('div');
 				b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
 				a.insertBefore(b, a.firstChild);
 				var l = a.childNodes.length;
 				for (var i = 1; i < l; i++) {
 					b.appendChild(a.childNodes[1]);
 				}
 				a.style.height = b.getBoundingClientRect().height + heightStarted + 'px';
 				a.style.padding = '0';
 				a.style.border = '0';
 			}
 			var Ra = a.getBoundingClientRect(),
 			R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
 
 			var topHeader = -Math.round(Ra.top + b.getBoundingClientRect().height - headerFooter + 0) - document.getElementById('content').offsetHeight + document.getElementById('aside-blog').offsetHeight;
 
 			var scrollHeight = Math.max(
				document.body.scrollHeight, document.documentElement.scrollHeight,
 				document.body.offsetHeight, document.documentElement.offsetHeight,
 				document.body.clientHeight, document.documentElement.clientHeight
 			);
 
 

 
				P = Ra.top;
 				if (((Ra.top - P) <= 0))  {
 					if (window.pageYOffset >= (document.body.scrollHeight - document.getElementById('footer').offsetHeight - 500) ) {
 
 						b.className = 'stop';
 						b.style.top =  -R +'px';
					}
 					else {
 						b.className = 'sticky';
						b.style.top = P - heightTop + 'px';
 
 
					}
 				} else {
 					b.className = '';
 					b.style.top = '';
 				}
 
 			
 			window.addEventListener('resize', function() {
 				a.children[0].style.width = getComputedStyle(a, '').width
 			}, false);
 		}
 	}
});
jQuery(function($) {
	$(window).resize(function() {
		if(window.menuShowFlag && $(window).width()>1000) {
			$('#primary-menu-trigger').trigger('click');
		}

		if($(window).width()>998) {
			$('#primary-menu').css('opacity', '1');
		}

	});
});
jQuery(function($) {
	$('ul:not([class]) li:has(span)').each(function() {
		var biggestFontsize = 0;
		$(this).addClass('has-span');
		$(this).children().each(function() {
			var currentFontsize = $(this).css('font-size').replace(/\D/g,'');
			if(currentFontsize > biggestFontsize && currentFontsize < 100) {
				biggestFontsize = currentFontsize;
			}
			$(this).html('<span class="bullet-color">•</span> '+$(this).html());
		});
		$(this).css('margin-bottom', (biggestFontsize/2)+'px');
	});
});
