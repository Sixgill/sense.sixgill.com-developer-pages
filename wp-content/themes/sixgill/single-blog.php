<div class="full-width ohidden"> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>

	<div
		class="blog-post-header responsive-background"
		desktop-src="<?php echo get_field("header_image_desktop"); ?>"
		tablet-src="<?php echo get_field("header_image_tablet"); ?>"
		mobile-src="<?php echo get_field("header_image_mobile"); ?>"
	>
		<div class="blog-post-header-wrapper">
			<h1 class="blog-post-header-title">
				How to keep everything under control when you have a successful start-up
			</h1>
			<div class="blog-post-header-subtitle">
				PHIL RESSLER  |  08/19/2016
			</div>
		</div>
	</div>

	<div class="blog-post-content-wrapper">
		<?php
			if ( have_posts() ) while ( have_posts() ) : the_post();
		?>

		



		<?php endwhile; // end of the loop. ?>
	</div>

	<!-- TODO: Implement next and prev buttons -->
