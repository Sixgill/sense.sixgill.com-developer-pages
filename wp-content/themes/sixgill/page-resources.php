<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-color: #004cbf;">
          <div class="slider-caption slider-caption-center">
            <h1 class="press-title">RESOURCES</h1>
          </div>
        </div>
			</div>
		</div>
	</div>
</section><!-- Content-->

<section id="content">

  <div class="content-wrap resources-container resources-background">
		<div class="resources-blocks-container">
			<div style="padding-top: 0px; overflow:hidden;width:100%">
				<!--<?php// echo do_shortcode("[af-portfolio]"); ?>-->
				<?php echo do_shortcode('[sdm_show_dl_from_category category_slug="resources" fancy="2"]'); ?>
			</div>
		</div>

  </div>

</section><!-- #content end -->
<?php get_footer(); ?>
