jQuery(function($) {
	$('ul:not([class]) li:has(span)').each(function() {
		var biggestFontsize = 0;
		$(this).addClass('has-span');
		$(this).children().each(function() {
			var currentFontsize = $(this).css('font-size').replace(/\D/g,'');
			if(currentFontsize > biggestFontsize) {
				biggestFontsize = currentFontsize;
			}
			$(this).html('<span class="bullet-color">•</span> '+$(this).html());
		});
		$(this).css('margin-bottom', (biggestFontsize/2)+'px');
	});
});
