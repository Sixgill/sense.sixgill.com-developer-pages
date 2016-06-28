<section class="no-border swiper_wrapper clearfix">
	<div class="swiper-slide slider-subpage">
		<div class="slider-text-subpage">
			<div id="post-title-slider" class="title-slider-subpage">
				<?php echo $post->post_title; ?>
			</div>
			<dev id="post-subtitle-slider" class="single-post-subtitle font-size-title-subtitle">
				<?php echo get_field('subtitle'); ?>
			</dev>
		</div>
	</div>
</section>

<div id="first-block-with-image" class="first-block-images-subpage">
	<div id="first-left-container" class="first-left-container-subpage fleft full-height-container-subpage">
		<div class="first-text-subpage">
			<h1 class="font-size-title-first-text"><?php echo get_field('one_title_subpage'); ?></h1>
			<p class="color-2e2e2e"><?php echo get_field('one_text_subpage'); ?></p>
		</div>
	</div>

	<div id="first-right-container" class="first-right-container-subpage fleft full-height-container-subpage">
		<img src="<?php echo get_field('one_image_subpage'); ?>" alt="" class="image-subpage"/>
	</div>
</div>

<div id="second-block-with-image" class="second-block-images-subpage no-mobile-portrait-display no-mobile-landscape-display">
	<div id="second-left-container" class="center second-left-container-subpage fleft full-height-container-subpage">
		<img src="<?php echo get_field('second_image_subpage'); ?>" alt="" class="full-height-container-subpage"/>
	</div>

	<div id="second-right-container" class="second-right-container-subpage fleft full-height-container-subpage">
		<div class="second-text-subpage">
			<h1 class="font-size-title-first-text"><?php echo get_field('second_title_subpage'); ?></h1>
			<p><?php echo get_field('second_text_subpage'); ?></p>
		</div>
	</div>
</div>

<div id="second-block-with-image" class="second-block-images-subpage no-desktop-display no-tablet-display">
	<div id="second-right-container" class="second-right-container-subpage fleft full-height-container-subpage">
		<div class="second-text-subpage">
			<h1 class="font-size-title-first-text"><?php echo get_field('second_title_subpage'); ?></h1>
			<p><?php echo get_field('second_text_subpage'); ?></p>
		</div>
	</div>
	<div id="second-left-container" class="center second-left-container-subpage fleft full-height-container-subpage">
		<img src="<?php echo get_field('second_image_subpage'); ?>" alt="" class="full-height-container-subpage"/>
	</div>
</div>

<div id="block-with-link" class="block-link-subpage">
	<div id="left-block" class="left-block-subpage fleft full-height-container-subpage">
		<div style="display:table-cell; vertical-align: middle;">
			<div class="title-left-block-subpage line-height-1-8"><?php echo get_field('title_left_button_subpage'); ?></div>
			<div class="text-left-block-subpage"><?php echo get_field('text_left_button_subpage'); ?></div>
		</div>
	</div>

	<div id="right-block" class="right-block-subpage fleft full-height-container-subpage">
		<div style="display:table-cell; vertical-align: middle;">
			<div class="title-left-block-subpage line-height-1-8"><?php echo get_field('title_right_button_subpage'); ?></div>
			<div class="text-left-block-subpage"><?php echo get_field('text_right_button_subpage'); ?></div>
		</div>
	</div>
</div>

<!-- Content-->
	<div id="single-post-content" class="content-wrap no-bottom-padding no-padding-top">
		<div class="container-subpage clearfix centerno-margin-top">
			<div class="topmargin-lg">
					<?php echo get_field('general_text'); ?>
			</div>
		</div>
  </div>
<!-- #content end -->
