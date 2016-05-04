<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/single_header_desktop.png'); background-position: center;">
					<div class="slider-caption slider-caption-center">
						<h1 class="press-title"><?php echo $post->post_title; ?></h1>
						<h4 class="press-subtitle"><?php echo get_field('subtitle'); ?></h4>
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
			<div class="col_full" style="text-align: left; margin-bottom: 30px;">
				<h3 class="press-date"><?php echo the_time('F j, Y'); ?> by <?php echo get_field('author'); ?></h3>
				<?php echo $post->post_content; ?>
			</div>

			<div class="col_full" style="text-align: center;">
				<a href="/company_blog" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO BLOG</a>
			</div>
		</div>
	</div>

</section><!-- #content end -->
