<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<div
		class="resources-list-header responsive-background"
		desktop-src="<?php the_field("header_image_desktop"); ?>"
		tablet-src="<?php the_field("header_image_tablet"); ?>"
		mobile-src="<?php the_field("header_image_mobile"); ?>"
	>
		<h1 class="resources-list-header-title">
			SIXGILL RESOURCES
		</h1>
		<h2 class="resources-list-header-subtitle">
			Proximity in a Connected World
		</h2>
	</div>
	
	<div class="resources-list">
		<?php echo do_shortcode('[sdm_show_dl_from_category fancy="2" pagination="2"]'); ?>
	</div>

	<?php get_footer(); ?>
