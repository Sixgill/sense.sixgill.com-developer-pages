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
		
		if(device.tablet()) {
			$('body').removeClass('no-touch');
		}

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
