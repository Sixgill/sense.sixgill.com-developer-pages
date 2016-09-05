<div id="social-buttons-panel" class="social-buttons <?php echo $socialButtonsClasses; ?>">
	<?php
		$socialList = array(
			array(
				"href" => getFacebookShareLink(get_the_title(), get_the_permalink()),
				"image_src" => "/wp-content/themes/sixgill/images/social/facebook.svg",
				"image_alt" => "Facebook share icon"
			),
			array(
				"href" => getTwitterShareLink(get_the_title()." - ".wp_get_shortlink()),
				"image_src" => "/wp-content/themes/sixgill/images/social/twitter.svg",
				"image_alt" => "Twitter share icon"
			),
			array(
				"href" => getLinkedinShareLink(get_the_title(), get_the_permalink()),
				"image_src" => "/wp-content/themes/sixgill/images/social/linkedin.svg",
				"image_alt" => "Linkedin share icon"
			),
			array(
				"href" => getMailtoShareLink(get_the_title(), get_the_permalink()),
				"image_src" => "/wp-content/themes/sixgill/images/social/email.svg",
				"image_alt" => "Email share icon"
			)
		);

		foreach($socialList as $social) {
	 ?>
	<a
		class="social-buttons-link"
		href="<?php echo $social['href']; ?>"
		target="_blank"
	>
		<img
			src="<?php echo $social['image_src']; ?>"
			alt="<?php echo $social['image_alt']; ?>"
			class="sociual-buttons-icon"
		>
	</a>

	<?php
		}
	 ?>
</div>
