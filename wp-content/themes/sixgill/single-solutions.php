<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
				<div class="swiper-slide" style="background-color: #004cbf;">
					<div class="slider-caption slider-caption-center">
						<h1 id="post-title-slider" class="press-title"><?php echo $post->post_title; ?></h1>
						<h4 id="post-subtitle-slider" class="press-subtitle"><?php echo get_field('subtitle'); ?></h4>
					</div>
				</div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->

<section id="content">

	<div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">

		<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent">

			<div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px;">

				<?php echo $post->post_content; ?>
			</div>


			<div class="col_full" style="text-align: center;">
				<a href="/solutions/" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO SOLUTIONS</a>
			</div>
		</div>
	</div>

</section><!-- #content end -->
