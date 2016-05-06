<!-- footer.php start -->

<?php
	$footerInfoId = getPageBySlug('footer-details-contact-popup')->ID;

	$legalLink = get_field('legal_link', $footerInfoId);
	$pressLink = get_field('press_link', $footerInfoId);
	$contactHeader = get_field('contact_header', $footerInfoId);
	$contactText = get_field('contact_text', $footerInfoId);
	$googleMapEmbedCode = get_field('google_map_embed_code', $footerInfoId);
?>

<footer id="footer" class="footer">

	<div class="container-fluid nomargin nopadding"  style="background-image:url('/wp-content/themes/sixgill/images/td/solutions_footer.png'); background-size:cover;">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_half footer_Learn">Learn how Sixgill can help your business.</div>
			<div class="col_half col_last footer_Schedule" style="border: 0px solid #FF0004;">
				<button href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule">SCHEDULE A DEMO</button>
			</div>
		</div>
	</div>

	<div class="container-fluid nomargin nopadding"  style="background-image:url('/wp-content/themes/sixgill/images/td/solutions_credit.png'); background-size:cover;">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_half footer_Links">
                <a href="<?php echo $legalLink; ?>">LEGAL</a> &nbsp;
                <a href="#" data-toggle="modal" data-target="#myModalContact">CONTACT</a>&nbsp;
                <a href="<?php echo $pressLink; ?>">PRESS</a> &nbsp;
            </div>
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
					<h4 class="modal-title" id="myModalLabel2" style="color:#FFF;" align="center"><?php echo $contactHeader; ?></h4>
				</div>
				<div class="modal-body" align="center">
					<?php
						echo $contactText;
						echo $googleMapEmbedCode;
					?>
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

<!-- Start of Async HubSpot Analytics Code -->
 <script type="text/javascript">
   (function(d,s,i,r) {
     if (d.getElementById(i)){return;}
     var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
     n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1792815.js';
     e.parentNode.insertBefore(n, e);
   })(document,"script","hs-analytics",300000);
 </script>
<!-- End of Async HubSpot Analytics Code -->

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
<!-- footer.php end -->
