<?php get_header(); ?>
<div class="resources-list-page-wrapper"> <!-- fullpage wrapper placeholder -->
	<div
		class="resources-list-header responsive-background"
		desktop-src="<?php the_field("header_image_desktop"); ?>"
		tablet-src="<?php the_field("header_image_tablet"); ?>"
		mobile-src="<?php the_field("header_image_mobile"); ?>"
	>
		<h1 class="resources-list-header-title">
			<?php the_field("title"); ?>
		</h1>
		<h2 class="resources-list-header-subtitle">
			<?php the_field("subtitle"); ?>
		</h2>
	</div>

	<div class="resources-list">
		<?php echo do_shortcode('[sdm_show_dl_from_category fancy="2" pagination="12"]');  ?>
	</div>

	<?php get_footer(); ?>
