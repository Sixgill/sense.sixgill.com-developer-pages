<div id="aside-blog">
	<ul class="marginShareButton">
		<li>
			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook."> <img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Facebook" id="image-fecebook-share" class="shareButton-blog"></a>
		</li>

		<li>
			<a href="http://twitter.com/home/?status=<?php echo rawurldecode(html_entity_decode($ptitle)); ?> - <?php echo wp_get_shortlink(); ?>" target="_blank" title="Tweet this!"> <img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Twitter" id="image-twitter-share" class="shareButton-blog"></a>
		</li>

		<li>
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn"><img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="LinkedIn"  id="image-linkedin-share" class="shareButton-blog"></a>
		</li>

		<li>
			<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email"><img src="/wp-content/themes/sixgill/images/td/blog/social_Email.svg" alt="Email"  id="image-linkedin-share" class="shareButton-blog"></a>
		</li>
	</ul>
</div>
