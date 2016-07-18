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