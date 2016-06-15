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

<!-- Content-->
<section id="content" class="section-margin-fix">
	<div class="content-wrap no-padding">
		<div class="container-fluid center clearfix my_containerSolution no-top-padding padding-edges">
			<div class=" text-left col_press no-margin-bottom press-content-padding" align="left">

				<div class="press-block-container">
					<h4 class="press-block-title">
						PRESS RELEASES
					</h4>
					<?php get_template_part( 'loop-press'); ?>
				</div>

				<div class="press-block-container">
					<h4 class="press-block-title">
						NEWS
					</h4>
					<?php get_template_part( 'loop-news'); ?>
				</div>

			</div>
			<div class="col_two_fifth col_last widget center background-f8f8f8 pull-right display-only-desktop">
				<div class="title-press-contact">
					<?php echo get_field('header_block'); ?>
				</div>
				<div class="title-press-contact-2">
					<?php echo get_field('title_block'); ?>
				</div>
				<div class="press-contact-info">
					<?php echo get_field('email_press'); ?>
					<?php echo get_field('number_press'); ?>
				</div>
			</div>
		</div>
	</div>

</section><!-- #content end -->
<?php get_footer(); ?>
