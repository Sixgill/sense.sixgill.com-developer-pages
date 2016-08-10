<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<iframe id="frame1" class="hidden"></iframe>
	<a name="top"></a>
	<section id="slider" class="slider-parallax swiper_wrapper swiper_wrapper_small clearfix resource-header">
		<h1 class="single-post-title">
			RESOURCES
		</h1>
	</section><!-- Content-->

	<section id="content" class="section-margin-fix">

		<div class="content-wrap resources-container resources-background">
			<div class="resources-blocks-container">
				<?php echo do_shortcode('[sdm_show_dl_from_category category_slug="resources" fancy="2"]'); ?>
			</div>
		</div>

	</section><!-- #content end -->
	<?php get_footer(); ?>
