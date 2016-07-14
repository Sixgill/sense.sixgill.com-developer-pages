<?php
	$globalSocialButtonsInfoId = getPageBySlug('global-social-buttons')->ID;

	$facebookLink = get_field('facebook_link', $globalSocialButtonsInfoId);
	$twitterLink = get_field('twitter_link', $globalSocialButtonsInfoId);
	$linkedinLink = get_field('linkedin_link', $globalSocialButtonsInfoId);
?>

<div class="global-social-buttons-container global-social-buttons-list no-desktop-display">
	<hr class="global-social-buttons-separator">
	<div>
		<a href="<?php echo $facebookLink; ?>" class="menu-social-link" target="_blank">
			<img alt="Share in Facebook" class="global-facebook-icon" src="/wp-content/themes/sixgill/images/td/blog/facebook_normal.svg">
		</a>

		<a href="<?php echo $twitterLink; ?>" class="menu-social-link" target="_blank">
			<img alt="Share in Twitter" class="global-twitter-icon" src="/wp-content/themes/sixgill/images/td/blog/twitter_normal.svg">
		</a>

		<a href="<?php echo $linkedinLink; ?>" class="menu-social-link" target="_blank">
			<img alt="Share in Linkedin" class="global-linkedin-icon" src="/wp-content/themes/sixgill/images/td/blog/linkedin_normal.svg">
		</a>
	</div>
</div>
