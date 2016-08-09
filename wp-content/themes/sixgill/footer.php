	<?php
		$footerInfoId = getPageBySlug('footer-details-contact-popup')->ID;

		$legalLink = get_field('legal_link', $footerInfoId);
		$pressLink = get_field('press_link', $footerInfoId);
		$resourcesLink = get_field('resource_link', $footerInfoId);
		$contactHeader = get_field('contact_header', $footerInfoId);
		$contactText = get_field('contact_text', $footerInfoId);
		$googleMapEmbedCode = get_field('google_map_embed_code', $footerInfoId);
	?>

	<footer id="footer" class="fullpage-section footer font-size-0 center home-section">
		<div class="footer-container ">

			<div class="footer-menu-block">
				<div class="vertical-centered">
					<div class="footer-link-col">
						<a href="<?php echo $legalLink; ?>" class="footer-main-link">
							Legal
						</a>
					</div>

					<div class="footer-link-col">
						<a href="<?php echo $pressLink; ?>" class="footer-main-link">
							Press
						</a>
					</div>

					<div class="footer-link-col">
						<a href="<?php echo $resourcesLink; ?>" class="footer-main-link">
							Resources
						</a>
					</div>

					<div class="footer-link-col">
						<a href="#" data-toggle="modal" data-target="#myModalContact" class="footer-main-link">
							Contact
						</a>
					</div>
				</div>
			</div>

			<div class="footer-top-block">
				<div class="footer-top-block-tablet display-only-tablet">
					<div class="footer-top-text-tablet vertical-centered">
						Stay up to date with Sixgill News and Events
					</div>
				</div>
				<div class="footer-top-block-left">
					<div class="footer-top-block-mobile no-desktop-display no-tablet-display">
						<div class="footer-top-text-mobile">
							Stay up to date with Sixgill News and Events
						</div>
					</div>
					<div class="footer-top-text display-only-desktop desktop-vertical-centered">
						Stay up to date with Sixgill News and Events
					</div>
					<div class="footer-subscription-form-wrapper desktop-vertical-centered">
						<?php dynamic_sidebar( 'footer-subscribe-sidebar' ); ?>
					</div>
				</div>
				<?php
					$globalSocialButtonsInfoId = getPageBySlug('global-social-buttons')->ID;
					$facebookLink = get_field('facebook_link', $globalSocialButtonsInfoId);
					$twitterLink = get_field('twitter_link', $globalSocialButtonsInfoId);
					$linkedinLink = get_field('linkedin_link', $globalSocialButtonsInfoId);
				?>
				<div class="footer-top-block-right">
					<div class="footer-icons-wrapper vertical-centered">
						<a href="<?php echo $facebookLink; ?>" class="footer-social-icon-link" target="_blank">
							<img src="/wp-content/themes/sixgill/images/td/footer/facebook_icon.svg" alt="Facebook icon" class="footer-social-icon-img">
						</a>
						<a href="<?php echo $twitterLink; ?>" class="footer-social-icon-link" target="_blank">
							<img src="/wp-content/themes/sixgill/images/td/footer/twitter_icon.svg" alt="Twitter icon" class="footer-social-icon-img">
						</a>
						<a href="<?php echo $linkedinLink; ?>" class="footer-social-icon-link" target="_blank">
							<img src="/wp-content/themes/sixgill/images/td/footer/linkedin_icon.svg" alt="Linkedin icon" class="footer-social-icon-img">
						</a>
					</div>
				</div>
			</div>

			<div class="footer-bottom-block">
				<div class="footer-copyright-wrapper vertical-centered">
					&copy; Copyright Sixgill, 2016. All Rights Reserved.
				</div>
			</div>

		</div>
	</footer><!-- #footer end -->
</div><!-- #fullpage end -->
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
<style type="text/css" media="screen">
	body,html {
		margin-top: 0px !important;
	}
</>
</body>
</html>
