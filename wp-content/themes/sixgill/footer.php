	<?php
		$footerInfoId = getPageBySlug('footer-details-contact-popup')->ID;

		$legalLink = get_field('legal_link', $footerInfoId);
		$pressLink = get_field('press_link', $footerInfoId);
		$resourceLink = get_field('resource_link', $footerInfoId);
		$contactHeader = get_field('contact_header', $footerInfoId);
		$contactText = get_field('contact_text', $footerInfoId);
		$googleMapEmbedCode = get_field('google_map_embed_code', $footerInfoId);
	?>

	<footer id="footer" class="footer">

		<div id="footer-scedule" class="container-fluid no-margin nopadding">
			<div class="footer-widgets-wrap clearfix">
				<div class="col_half footer-learn-text">
					Learn how Sixgill can help your business.
				</div>
				<div class="col_half col_last footer_Schedule no-border">
					<button data-toggle="modal" data-target="#myModal" class="button button-large no-bottom-margin btnSchedule">
						SCHEDULE A DEMO
					</button>
				</div>
			</div>
		</div>

		<div class="container-fluid no-margin nopadding"  style="background-image:url('/wp-content/themes/sixgill/images/td/solutions_credit.png'); background-size:cover;">
			<div class="footer-widgets-wrap clearfix">
				<div class="col_half footer-links-block">
					<a class="footer-link" href="<?php echo $legalLink; ?>">
						LEGAL
					</a>
					&nbsp;
					<a class="footer-link" href="#" data-toggle="modal" data-target="#myModalContact">
						CONTACT
					</a>
					&nbsp;
					<a class="footer-link" href="<?php echo $pressLink; ?>">
						PRESS
					</a>
					&nbsp;
					<a class="footer-link" href="<?php echo $resourceLink; ?>">
						RESOURCES
					</a>
					&nbsp;
				</div>
				<div class="col_half col_last footer_Copy">
					&copy; Copyright Sixgill, 2016. All Rights Reserved.
				</div>
			</div>
		</div>

	</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- MODAL Request a DEMO -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-body">
	        <div class="modal-content">
	          <div class="modal-header" style="background-color:#57B82A;">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
	            <h4 class="modal-title color-white center" id="requestModalLabel">
								REQUEST A DEMO
							</h4>
	          </div>
	          <div class="modal-body center">
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

	<!-- MODAL RESOURCES -->
	<div class="modal fade" style="z-index:9999" id="myResource" tabindex="-1" role="dialog" aria-labelledby="resourcesModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-body">
	        <div class="modal-content">
	          <div class="modal-header background-2e2e2e">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
	            <h4 class="modal-title color-white center" id="resourcesModalLabel">
								DOWNLOAD CORPORATE PRESENTATION
							</h4>
	          </div>
	          <div class="modal-body center">
							<?php dynamic_sidebar( 'download-access' ); ?>
	          </div>
	          <div class="modal-footer center"></div>
	        </div>
	      </div>
		</div>
	</div>
	<!-- END MODAL Request a DEMO -->

	<!-- MODAL Contact -->
	<div class="modal fade" style="z-index:9999" id="myModalContact" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-body">

				<div class="modal-content">
					<div class="modal-header" style="background-color:#57B82A;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title color-white center" id="contactModalLabel">
							<?php echo $contactHeader; ?>
						</h4>
					</div>
					<div class="modal-body center">
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

	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom_build.js"></script>
</body>
</html>
<!-- footer.php end -->
