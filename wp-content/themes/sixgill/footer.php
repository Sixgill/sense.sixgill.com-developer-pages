<!-- footer.php start -->
<footer id="footer">

	<div class="container-fluid nomargin nopadding"  style="background-image:url(/wp-content/themes/sixgill/images/td/solutions_footer.png); background-size:cover;">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_half footer_Learn">Learn how Sixgill can help your business.</div>
			<div class="col_half col_last footer_Schedule" style="border: 0px solid #FF0004;">
				<button href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule">SCHEDULE A DEMO</button>
			</div>
		</div>
	</div>

	<div class="container-fluid nomargin nopadding"  style="background-image:url(../wp-content/themes/sixgill/images/td/solutions_credit.png); background-size:cover;">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_half footer_Links"><a href="/legal">LEGAL</a> &nbsp; <a href="#" data-toggle="modal" data-target="#myModalContact">CONTACT</a></div>
			<div class="col_half col_last footer_Copy">&copy; Copyright Sixgill, 2016. All Rights Reserved.</div>
		</div>
	</div>

</footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- MODAL Request a DEMO -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-body">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#57B82A;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel" style="color:#FFF;" align="center">REQUEST A DEMO</h4>
          </div>
          <div class="modal-body" align="center">
						<!--[if lte IE 8]>
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
						<![endif]-->
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
						  hbspt.forms.create({
						    portalId: '1792815',
						    formId: '7b5388d8-0979-4961-ac97-1f36fc2d70c0'
						  });
						</script>

          </div>
          <div class="modal-footer center"></div>
        </div>
      </div>
	</div>
</div>
<!-- END MODAL Request a DEMO -->

<!-- MODAL Contact -->
<div class="modal fade" id="myModalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-body">

			<div class="modal-content">
				<div class="modal-header" style="background-color:#57B82A;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel2" style="color:#FFF;" align="center">CONTACT</h4>
				</div>
				<div class="modal-body" align="center">
					<p>310.220.4238<br>
					<a href="mailto:sales@sixgill.com">sales@sixgill.com</a><br>
					<br>SANTA MONICA<br>
					312 Arizona Avenue<br>
					Santa Monica, CA 90401</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.0426494208914!2d-118.49943728478584!3d34.01711618061547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cf828fe6fb%3A0x98334bfc7af2a7bf!2s312+Arizona+Ave%2C+Santa+Monica%2C+CA+90401!5e0!3m2!1sen!2sus!4v1458203894011" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- END MODAL Contact -->

<!-- External JavaScripts -->
<script type="text/javascript" src="/wp-content/themes/sixgill/js/jquery.js"></script>
<script type="text/javascript" src="/wp-content/themes/sixgill/js/plugins.js"></script>

<!-- Footer Scripts  -->
<script type="text/javascript" src="/wp-content/themes/sixgill/js/functions.js"></script>


<!-- Google Analytics -->
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
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
			//currentLink.removeClass("active");
		}
	});
}

function toggle(showHideDiv, switchTextDiv) {
	var ele = document.getElementById(showHideDiv);
	var text = document.getElementById(switchTextDiv);
	if(ele.style.display == "block") {
				ele.style.display = "none";
		text.innerHTML = "Learn More &#8744;";
		}
	else {
		ele.style.display = "block";
		text.innerHTML = "Learn More &#8743;";
	}
}
</script>

</body>
</html>
<!-- footer.php end -->
