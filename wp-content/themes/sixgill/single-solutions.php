<a name="top"></a>
<section id="slider" class="slider-parallax no-border swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url('../../wp-content/themes/sixgill/images/td/hero/dollarphotoclub_79195916_web.jpg'); background-position: center top;">
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

<div id="first-block-with-image" class="" style="height:365px; width: 100%; background-color: #f8f8f8;">
	<div id="first-left-container" class="" style="width: 50%; height: 100%; display: inline-block; float: left;">
		<div class="" style="margin: 67px 65px 70px 77px;">
			<h1 style="font-size:30px;"><?php echo get_field('one_title_subpage'); ?></h1>
			<p style="color:#2e2e2e;"><?php echo get_field('one_text_subpage'); ?></p>
		</div>
	</div>

	<div id="first-right-container" class="" style="width: 50%; height: 100%; display: inline-block; float: left; text-align: center;">
		<img src="<?php echo get_field('one_image_subpage'); ?>" alt=""/>
	</div>
</div>

<div id="second-block-with-image" class="" style="height:365px; width: 100%;">
	<div id="second-left-container" class="" style="width: 44%; height: 100%; display: inline-block; float: left; text-align: center;">
		<img src="<?php echo get_field('second_image_subpage'); ?>" alt="" style="height:100%"/>
	</div>

	<div id="second-right-container" class="" style="width: 56%; height: 100%; display: inline-block; float: left;">
		<div class="" style="margin: 67px 65px 70px 0;">
			<h1 style="font-size:30px;"><?php echo get_field('second_title_subpage'); ?></h1>
			<p><?php echo get_field('second_text_subpage'); ?></p>
		</div>
	</div>
</div>

<div id="block-with-button" class="" style="height:133px; width: 100%;">
	<div id="left-button" class="" style="width: 50%; height: 100%; display: inline-block; float: left; text-align: center; background-color: #2e2e2e; display:table;">
		<div style="display:table-cell; vertical-align: middle;">
			<p style="color: white; margin-bottom:0px"><?php echo get_field('title_left_button_subpage'); ?></p>
			<p style="color: white; margin-bottom:0px"><?php echo get_field('text_left_button_subpage'); ?></p>
		</div>
	</div>

	<div id="right-button" class="" style="width: 50%; height: 100%; display: inline-block; float: left; text-align: center; background-color: #2e2e2e; border-left: 1px solid #9C9C9C; display:table;">
		<div style="display:table-cell; vertical-align: middle;">
			<p style="color: white; margin-bottom:0px"><?php echo get_field('title_right_button_subpage'); ?></p>
			<p style="color: white; margin-bottom:0px"><?php echo get_field('text_right_button_subpage'); ?></p>
		</div>
	</div>
</div>

<!-- Content-->
<section id="content">
	<div id="single-post-content" class="content-wrap no-bottom-padding no-padding-top">
		<div class="container-fluid clearfix centerno-margin-top">
			<div class="topmargin-lg">
					<?php echo get_field('general_text'); ?>
			</div>
		</div>
  </div>
</section>
<!-- #content end -->
