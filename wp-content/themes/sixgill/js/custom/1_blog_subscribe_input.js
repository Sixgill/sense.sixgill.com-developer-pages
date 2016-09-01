jQuery(function($){
	$('input.blog-page-subscription-email').focusin(function(){
		$(this).addClass('subscribe-email-focus');
	});

	$('input.blog-page-subscription-email').focusout(function(){
		if($(this).val()==='') {
			$(this).removeClass('subscribe-email-focus');
		}
	});
});
