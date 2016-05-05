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
</section>

<section id="content">

</section>

<section id="content">
	<div class="content-wrap" style="padding:0px;">
		<div class="container-fluid center clearfix my_containerSolution blog-container subscribe-block-tablet-mobile">
				<div class="text-left col_full" align="left" style="padding-bottom:0px; margin-bottom: 0px; width: 100%; padding-top: 5px; padding-left: 5px;">
					<hr>
					<?php dynamic_sidebar( 'blog-subscribe-sidebar' ); ?>
					<hr>
				</div>
		</div>
		<div class="container-fluid center clearfix my_containerSolution blog-container">
				<div class="text-left col_half" align="left" style="padding-bottom:55px;width: 70%;">
					<h1 class="h1-blog">Blog</h1>
					<?php
					get_template_part( 'loop-blog'); ?>
				</div>

				<div class="col_two_fifth col_last widget hidden-press-contact subscribe-block" align="left">
					<?php dynamic_sidebar( 'blog-subscribe-sidebar' ); ?>
				</div>
		</div>
	</div>
</section><!-- #content end -->
<?php get_footer(); ?>
