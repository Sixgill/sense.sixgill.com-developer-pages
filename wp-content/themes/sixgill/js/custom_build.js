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
jQuery(function($) {
	$('.resource-link-container').click(function() {
		window.currentDownloadLink = $(this).attr('data-permalink');
	});

	$('.yikes-easy-mc-form').on('submit', function() {
		$('button.close').trigger('click');
		window.open(window.currentDownloadLink, "_blank");
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
