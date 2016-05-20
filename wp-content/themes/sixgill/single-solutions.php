<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide slider-title-adjust" style="background-color: #004cbf;">
					<div class="slider-caption slider-caption-center">
						<h1 id="post-title-slider" class="single-post-title">
							<?php echo $post->post_title; ?>
						</h1>
						<h4 id="post-subtitle-slider" class="single-post-subtitle">
							<?php echo get_field('subtitle'); ?>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Content-->
<section id="content">

  <div class="content-wrap" style="padding-bottom:0px;">

    <section class="header-stick">
	    <div class="container-fluid clearfix center solution-subpage-container">
				<div class="left-aligned subsolution-left-aligned">
					<div class="solutions-subpage-text <?php if(!has_post_thumbnail()) echo "solution-subpage-onlytext" ?>">
						<?php the_content(); ?>
					</div>
					<div class="solutions-subpage-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
	    </div>
			<div class="col_full" style="text-align: center;">
				<a href="/solutions/" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">
					BACK TO SOLUTIONS
				</a>
			</div>
    </section>

  </div>

</section><!-- #content end -->
