<div class="full-width ohidden"> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>

	<div
		class="blog-post-header responsive-background"
		desktop-src="<?php echo get_field("header_image_desktop"); ?>"
		tablet-src="<?php echo get_field("header_image_tablet"); ?>"
		mobile-src="<?php echo get_field("header_image_mobile"); ?>"
	>
		<h1 class="blog-post-header-title ellipsis-3lines">
			<?php echo $post->post_title; ?>
		</h1>
		<div
			class="blog-post-header-subtitle
				ellipsis-2lines-desktop ellipsis-3lines-tablet ellipsis-2lines-mobile-portrait ellipsis-2lines-mobile-landscape"
		>
			<?php echo get_field('subtitle'); ?>
		</div>
	</div>

	<div class="blog-post-content-wrapper">
		<?php include(locate_template('social_buttons.php')); ?>
		<?php
			if ( have_posts() ) while ( have_posts() ) : the_post();
		?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>

	<!-- TODO: Implement next and prev buttons -->
