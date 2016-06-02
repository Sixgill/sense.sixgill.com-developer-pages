<?php get_header(); ?>
<iframe id="frame1" class="hidden"></iframe>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper swiper_wrapper_small clearfix section-margin-fix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide resources-page-background">
					<div class="slider-caption slider-caption-center">
						<h1 class="single-post-title">
							RESOURCES
						</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Content-->

<section id="content" class="section-margin-fix">

	<div class="content-wrap resources-container resources-background center">
		<div class="resources-blocks-container">
			<div class="full-width no-top-padding" style="overflow:hidden;">
				<?php echo do_shortcode('[sdm_show_dl_from_category category_slug="resources" fancy="2"]'); ?>
			</div>
		</div>

	</div>

</section><!-- #content end -->
<?php get_footer(); ?>
