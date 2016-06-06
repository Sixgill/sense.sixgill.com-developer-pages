<?php
	$globalSocialButtonsInfoId = getPageBySlug('global-social-buttons')->ID;

	$facebookLink = get_field('facebook_link', $globalSocialButtonsInfoId);
	$twitterLink = get_field('twitter_link', $globalSocialButtonsInfoId);
	$linkedinLink = get_field('linkedin_link', $globalSocialButtonsInfoId);
?>

<div class="global-social-buttons-container global-social-buttons-list">
	<hr class="global-social-buttons-separator">
	<div>
		<a href="<?php echo $facebookLink; ?>" class="menu-social-link" target="_blank">
			<img width="13px" src="/wp-content/themes/sixgill/images/td/blog/facebook_normal.svg">
		</a>

		<a href="<?php echo $twitterLink; ?>" class="menu-social-link" target="_blank">
			<img width="22px" src="/wp-content/themes/sixgill/images/td/blog/twitter_normal.svg">
		</a>

		<a href="<?php echo $linkedinLink; ?>" class="menu-social-link" target="_blank">
			<img width="22px" src="/wp-content/themes/sixgill/images/td/blog/linkedin_normal.svg">
		</a>
	</div>
</div>
