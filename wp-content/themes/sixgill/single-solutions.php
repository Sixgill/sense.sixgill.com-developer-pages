<a name="top"></a>
<section id="slider" class="slider-parallax no-border swiper_wrapper clearfix section-margin-fix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-color: #004cbf;">
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
<section id="content" class="section-margin-fix">
  <div id="single-post-content" class="content-wrap no-bottom-padding">
    <div class="container-fluid clearfix center solution-subpage-container">
			<div class="left-aligned subsolution-left-aligned topmargin-lg">
				<div class="solutions-subpage-text <?php if(!has_post_thumbnail()) echo "solution-subpage-onlytext" ?>">
					<?php the_content(); ?>
				</div>
				<div class="solutions-subpage-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
    </div>
		<div class="col_full center">
			<a href="/solutions/" id="solutions-button-back" class="button button-large no-bottom-margin btnCompany">
				BACK TO SOLUTIONS
			</a>
		</div>
  </div>
</section><!-- #content end -->
