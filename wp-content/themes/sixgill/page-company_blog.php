<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url('../wp-content/themes/sixgill/images/td/hero/dollarphotoclub_79195916_web.jpg'); background-position: center top;"></div>
			</div>
		</div>
	</div>
</section><!-- Content-->
<section id="content">
	<div class="content-wrap" style="padding:0px;">
		<div class="container-fluid center clearfix my_containerSolution" style="padding-top: 0px; margin-left: 5%; margin-top: 20px; margin-right: 10%; max-width: none;">
				<div class="text-left col_half" align="left" style="padding-bottom:55px; width: 70%;">
					<?php get_template_part( 'loop-blog'); ?>
				</div>

				<div class="col_two_fifth col_last widget hidden-press-contact" align="left" style="padding:0px 0px 0px 0px; background-color: #C0C0C5; float: right; width: 25%;">
					TODO: subscribe form
				</div>
		</div>
	</div>
</section><!-- #content end -->
<?php get_footer(); ?>
