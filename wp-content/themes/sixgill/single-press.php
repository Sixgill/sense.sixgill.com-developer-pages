<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div id="background-image-header" class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/single_header_desktop.png'); background-position: center;">
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
		<div class="container-fluid center clearfix my_containerSolution">
			<div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px;">
				<h3 id="press-date-post" class="press-date"><?php echo the_time('F j, Y'); ?></h3>
				<?php echo $post->post_content; ?>
			</div>

			<div class="col_full" style="text-align: center;">
				<a href="/press" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO PRESS</a>
			</div>
		</div>
	</div>

</section><!-- #content end -->
