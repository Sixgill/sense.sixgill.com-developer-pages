<div id="<?php echo $sidebarType; ?>" class="floating-social-buttons">
	<ul class="share-buttons-list">
		<li>
			<a href="<?php echo getFacebookShareLink(the_title(), the_permalink()); ?>" target="_blank" title="Share on Facebook.">
				<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Facebook" id="image-fecebook-share" class="shareButton-blog">
			</a>
		</li>

		<li>
			<a href="<?php echo getTwitterShareLink(get_the_title()." - ".wp_get_shortlink()); ?>" target="_blank" title="Tweet this!">
				<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Twitter" id="image-twitter-share" class="shareButton-blog">
			</a>
		</li>

		<li>
			<a href="<?php echo getLinkedinShareLink(the_title(), the_permalink()); ?>" target="_blank" title="Share on LinkedIn">
				<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="LinkedIn"  id="image-linkedin-share" class="shareButton-blog">
			</a>
		</li>

		<li>
			<a href="<?php echo getMailtoShareLink(the_title(), the_permalink()); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
				<img src="/wp-content/themes/sixgill/images/td/blog/social_Email.svg" alt="Email"  id="image-linkedin-share" class="shareButton-blog">
			</a>
		</li>
	</ul>
</div>
