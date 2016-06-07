<div class="share-buttons-top no-desktop-display no-tablet-display">
	<div class="full-width">
		<a href="<?php echo getFacebookShareLink(the_title(), the_permalink()); ?>" target="_blank" title="Share on Facebook.">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Facebook" id="image-mobile-fecebook-share" class="shareButton-mobile">
		</a>

		<a href="<?php echo getTwitterShareLink(get_the_title()." - ".wp_get_shortlink()); ?>" target="_blank" title="Tweet this!">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Twitter" id="image-mobile-twitter-share" class="shareButton-mobile">
		</a>

		<a href="<?php echo getLinkedinShareLink(the_title(), the_permalink()); ?>" target="_blank" title="Share on LinkedIn">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="LinkedIn"  id="image-mobile-linkedin-share" class="shareButton-mobile">
		</a>

		<a href="<?php echo getMailtoShareLink(the_title(), the_permalink()); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Email.svg" alt="Email" id="image-mobile-email-share" class="shareButton-mobile">
		</a>
	</div>
</div>
