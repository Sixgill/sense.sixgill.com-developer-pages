<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mk
 */
?>
<!-- External JavaScripts -->
	<script type="text/javascript" src="http://ideasendesarrollo.com/weezlabs/sixgill/js/plugins.js"></script>

	<!-- Footer Scripts  -->
	<script type="text/javascript" src="http://ideasendesarrollo.com/weezlabs/sixgill/js/functions.js"></script>
  

  <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
  	ga('create', 'UA-75098635-1', 'auto');
  	ga('send', 'pageview');
	</script>
  
	<script>
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
		var scrollPosition = $(document).scrollTop();
		$('nav ul div a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('nav ul div a').removeClass("active");
				currentLink.addClass("active");
			}
			else{
				currentLink.removeClass("active");
			}
		});
	}
</script>

<!-- MODAL Contact -->
<div id="myModalContact" class="modal fade" tabindex="-1">
<div class="modal-dialog">
<div class="modal-body">
<div class="modal-content">
<div class="modal-header" style="background-color: #57b82a;">

<button class="close" type="button" data-dismiss="modal">×</button>
<h4 id="myModalLabel2" class="modal-title" style="color: #fff;" align="center">CONTACT</h4>
</div>
<div class="modal-body" align="center">

310.220.4238
<a href="mailto:sales@sixgill.com">sales@sixgill.com</a>

SANTA MONICA
312 Arizona Avenue
Santa Monica, CA 90401

<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.0426494208914!2d-118.49943728478584!3d34.01711618061547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cf828fe6fb%3A0x98334bfc7af2a7bf!2s312+Arizona+Ave%2C+Santa+Monica%2C+CA+90401!5e0!3m2!1sen!2sus!4v1458203894011" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

</div>
</div>
</div>
</div>
</div>
	<div id="gotoTop" class="icon-angle-up"></div>


		
	</div><!-- #mk-page-wrapper -->

	
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
