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

<?php 
	$OneGalleryList = array();
	$SecondGlleryList = array();

	foreach(get_field('one_gallery') as $logo) : 
		array_push($OneGalleryList, $logo['url']);
	endforeach;

	foreach(get_field('second_gallery') as $logo) : 
		array_push($SecondGlleryList, $logo['url']);
	endforeach;

	$OneGalleryID = "one";
	$SecondGalleryID = "second";
?>

<section id="content" class="font-size-0">
<div id="first-block-with-image" class="first-block-images-subpage">
	<div id="first-left-container" class="first-left-container-subpage fleft full-height-container-subpage">
		<div class="first-text-subpage">
			<h1 class="font-size-title-first-text"><?php echo get_field('one_title_subpage'); ?></h1>
			<p class="color-2e2e2e"><?php echo get_field('one_text_subpage'); ?></p>
		</div>
	</div>
	<div id="first-right-container" class="first-right-container-subpage fleft full-height-container-subpage">
		<img aspectratio="1" src="<?php echo get_field('one_image_subpage'); ?>" alt="" />
	</div>
</div>
<div id="second-block-with-image" class="second-block-images-subpage no-mobile-portrait-display no-mobile-landscape-display">
	<div id="second-left-container" class="center second-left-container-subpage fleft full-height-container-subpage">
		<img  src="<?php echo get_field('second_image_subpage'); ?>" alt="" class="full-height-container-subpage"/>
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


<?php 
if (count($SecondGlleryList) == 0) { ?>

	<div class="container-links">
		<div class="background-content" style="width:100%;">
			<div class="gallery-description">
				<div class="gallery-description-inner vertical-centered" style="width: 50%; margin: auto;">
					<div class="gallery-description-title">
						<?php echo get_field('title_left_button_subpage'); ?>
					</div>
					<div class="gallery-description-subtitle">
						<?php echo get_field('text_left_button_subpage'); ?>
					</div>
				</div>
				<div class="gallery-links-overlay">
					<div class="inner-links-contaner vertical-centered">
						<?php echo '<a href="'.$OneGalleryList[0].'" rel="lightbox['.$OneGalleryID.']" class="gallery-link"><img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="liks-block-icon">View gallery</a>'; ?>
						<a href="#" class="gallery-download-link"><img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="liks-block-icon">Download</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } else { ?>

<div class="container-links">
	<div class="background-content">
		<div class="gallery-description">
			<div class="gallery-description-inner vertical-centered">
				<div class="gallery-description-title">
					<?php echo get_field('title_left_button_subpage'); ?>
				</div>
				<div class="gallery-description-subtitle">
					<?php echo get_field('text_left_button_subpage'); ?>
				</div>
			</div>
			<div class="gallery-links-overlay">
				<div class="inner-links-contaner vertical-centered">
					<?php echo '<a href="'.$OneGalleryList[0].'" rel="lightbox['.$OneGalleryID.']" class="gallery-link"><img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="liks-block-icon">View gallery</a>'; ?>
					<a href="#" class="gallery-download-link"><img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="liks-block-icon">Download</a>
				</div>  
			</div>
		</div>
	</div>
	<div class="background-content">
		<div class="gallery-description">
			<div class="gallery-description-inner vertical-centered">
				<div class="gallery-description-title">
					<?php echo get_field('title_right_button_subpage'); ?>
				</div>
				<div class="gallery-description-subtitle">
					<?php echo get_field('text_right_button_subpage'); ?>
				</div>
			</div>
			<div class="gallery-links-overlay">
				<div class="inner-links-contaner vertical-centered">
					<?php echo '<a href="'.$SecondGlleryList[0].'" rel="lightbox['.$SecondGalleryID.']" class="gallery-link"><img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="liks-block-icon">View gallery</a>'; ?>
					<a href="#" class="gallery-download-link"><img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="liks-block-icon">Download</a>
				</div>  
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- Content-->
	<div id="single-post-content" class="content-subpage content-wrap no-bottom-padding no-padding-top font-size-16">
		<div class="container-subpage clearfix centerno-margin-top">
			<div class="topmargin-lg">
					<?php echo get_field('general_text'); ?>
			</div>
		</div>
	</div>
</section>


<div class="container-links">
	<div class="background-content fleft">
		<div class="gallery-description">
			<div class="gallery-description-inner vertical-centered">
				<div class="gallery-description-title">
					<?php echo get_field('title_left_button_subpage'); ?>
				</div>
				<div class="gallery-description-subtitle">
					<?php echo get_field('text_left_button_subpage'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="background-content fleft">
		<div class="gallery-description">
			<div class="gallery-description-inner vertical-centered">
				<div class="gallery-description-title">
					<?php echo get_field('title_right_button_subpage'); ?>
				</div>
				<div class="gallery-description-subtitle">
					<?php echo get_field('text_right_button_subpage'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	for($i=1; $i < count($OneGalleryList); $i++) {
		echo '<a style="display: none;" href="'.$OneGalleryList[$i].'" rel="lightbox['.$OneGalleryID.']"></a>';
	}

	for($i=1; $i < count($SecondGlleryList); $i++) {
		echo '<a style="display: none;" href="'.$SecondGlleryList[$i].'" rel="lightbox['.$SecondGalleryID.']"></a>';
	}
?>
<!-- #content end -->