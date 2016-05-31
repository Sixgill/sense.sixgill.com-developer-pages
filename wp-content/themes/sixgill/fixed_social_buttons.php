<div class="share-buttons-top no-desktop-display no-tablet-display">
	<div style="width:100%; margin-bottom: 30px;">
		<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook.">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Facebook" id="image-mobile-fecebook-share" class="shareButton-mobile">
		</a>

		<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(html_entity_decode($ptitle)); ?> - <?php echo wp_get_shortlink(); ?>" target="_blank" title="Tweet this!">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Twitter" id="image-mobile-twitter-share" class="shareButton-mobile">
		</a>

		<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="LinkedIn"  id="image-mobile-linkedin-share" class="shareButton-mobile">
		</a>

		<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
			<img src="/wp-content/themes/sixgill/images/td/blog/social_Email.svg" alt="Email" id="image-mobile-email-share" class="shareButton-mobile">
		</a>
	</div>
</div>
