<section class="no-border swiper_wrapper clearfix solution-subpage-header">
	<div class="swiper-slide slider-subpage">
		<div class="slider-text-subpage">
			<div class="solution-subpage-suptitle">
				<?php echo get_field('suptitle'); ?>
			</div>
			<div class="solution-subpage-title">
				<?php echo $post->post_title; ?>
			</div>
		</div>
	</div>
</section>

<section id="content" class="font-size-0">

	<div class="solution-subpage-first-block">
		<div class="first-left-container-subpage fleft full-height-container-subpage">
			<div class="first-text-subpage">

				<h1 class="solution-subpage-section-title">
					<?php echo get_field('first_section_title'); ?>
				</h1>

				<span class="solution-subpage-first-block-text">
					<?php echo get_field('first_section_text'); ?>
				</span>

			</div>
		</div>

		<div class="solution-subpage-first-block-image-container full-height">
			<img aspectratio="1.63273728" src="<?php echo get_field('first_section_image_desktop'); ?>" alt="" class="display-only-desktop full-width">
			<img aspectratio="0.91346" src="<?php echo get_field('first_section_image_tablet'); ?>" alt="" class="display-only-tablet full-width">
			<img aspectratio="1.5" src="<?php echo get_field('first_section_image_mobile'); ?>" alt="" class="no-tablet-display no-desktop-display full-width">
		</div>
	</div>

	<div id="solution-subpage-second-block" class="solution-subpage-second-block">

		<div class="second-right-container-subpage full-height">
			<div class="second-text-subpage">
				<h1 class="solution-subpage-section-title">
					<?php echo get_field('second_section_title'); ?>
				</h1>
				<?php echo get_field('second_section_text'); ?>
			</div>
		</div>

		<div class="solution-subpage-second-block-image-container center">
			<img id="solution-subpage-second-block-image" src="<?php echo get_field('second_section_image'); ?>" alt="" class="solution-subpage-second-block-image" aspectratio="0.8">
		</div>
	</div>

	<?php
		$leftGallery = get_field('left_gallery_images');
		$rightGallery = get_field('right_gallery_images');
	?>

	<?php if(count($leftGallery) || count($rightGallery)) { ?>
		<div class="solution-subpage-third-block">

			<div class="solution-subpage-viewproccess-block">
				<div class="gallery-description">
					<div class="gallery-description-inner vertical-centered">
						<div class="gallery-description-title">
							<?php echo get_field('title_left_button_subpage'); ?>
						</div>
						<div class="gallery-description-subtitle">
							<?php echo get_field('text_left_button_subpage'); ?>
						</div>
					</div>

					<div class="gallery-links-overlay display-only-desktop">
						<div class="inner-links-contaner vertical-centered">

							<a href="<?php echo $leftGallery[0]['url']; ?>" rel="lightbox[leftGallery]" class="gallery-link">
								<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
								View gallery
							</a>
							<?php
								for($i=1; $i < count($leftGallery); $i++) {
									echo '<a class="hidden" href="'.$leftGallery[$i]['url'].'" rel="lightbox[leftGallery]"></a>';
								}
							?>

							<a href="<?php echo get_field('left_gallery_file'); ?>" class="gallery-download-link">
								<img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="solutions-subpage-icon">
								Download
							</a>

						</div>
					</div>
				</div>
			</div>

			<?php if(is_array($rightGallery) && count($rightGallery)) { ?>
				<div class="solution-subpage-viewproccess-block">
					<div class="gallery-description">
						<div class="gallery-description-inner vertical-centered">
							<div class="gallery-description-title">
								<?php echo get_field('title_right_button_subpage'); ?>
							</div>
							<div class="gallery-description-subtitle">
								<?php echo get_field('text_right_button_subpage'); ?>
							</div>
						</div>
						<div class="gallery-links-overlay display-only-desktop">
							<div class="inner-links-contaner vertical-centered">
								<a href="<?php echo $rightGallery[0]['url']; ?>" rel="lightbox[rightGallery]" class="gallery-link">
									<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
									View gallery
								</a>
								<?php
									for($i=1; $i < count($rightGallery); $i++) {
										echo '<a class="hidden" href="'.$rightGallery[$i]['url'].'" rel="lightbox[rightGallery]"></a>';
									}
								?>

								<a href="<?php echo get_field('left_gallery_file'); ?>" class="gallery-download-link">
									<img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="solutions-subpage-icon">
									Download
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	<div class="solution-subpage-last-block no-bottom-padding no-padding-top font-size-16">
		<div class="container-subpage clearfix center no-margin-top">
			<h1 class="solution-subpage-section-title solution-subpage-last-block-title">
				<?php echo get_field('last_section_title'); ?>
			</h1>

			<h2 class="solution-subpage-bottom-section-subtitle">
				<?php echo get_field('last_section_subtitle'); ?>
			</h2>

			<div class="solution-subpage-bottom-section-content left">
				<div class="solution-subpage-bottom-section-column">
					<?php echo get_field('last_section_text_left_column'); ?>
				</div>
				<div class="solution-subpage-bottom-section-column">
					<?php echo get_field('last_section_text_right_column'); ?>
				</div>
				<?php echo get_field('last_section_text'); ?>
			</div>

		</div>
	</div>

	<div class="solution-subpage-bottom-line"></div>

	<h1 class="solution-subpage-section-title center">
		Additional use cases
	</h1>

	<div class="solution-subpage-bottom-links background-f8f8f8">
		<div class="solution-subpage-bottom-link-col full-height" aspectratio="4.4566">

			<div class="solution-subpage-bottom-link-image-wrapper full-height">
				<div class="vertical-centered">
					<img class="full-width" src="/wp-content/themes/sixgill/images/td/solutions/left-use-case-thumbnail.jpg" aspectratio="1.86">
				</div>
			</div>

			<div class="solution-subpage-bottom-link-text full-height center">
				<div class="vertical-centered solution-subpage-bottom-link-text-width">
					<p class="solution-subpage-bottom-link-description">
						Wordforce Communications and Productivity Solutions
					</p>
					<a href="#" class="solution-subpage-bottom-link">
						Learn More
					</a>
				</div>

			</div>
		</div>

		<div class="solution-subpage-bottom-link-col full-height" aspectratio="4.4566">

			<div class="solution-subpage-bottom-link-image-wrapper full-height">
				<div class="vertical-centered">
					<img class="full-width" src="/wp-content/themes/sixgill/images/td/solutions/left-use-case-thumbnail.jpg" aspectratio="1.86">
				</div>
			</div>

			<div class="solution-subpage-bottom-link-text full-height center">
				<div class="vertical-centered solution-subpage-bottom-link-text-width">
					<p class="solution-subpage-bottom-link-description">
						Wordforce Communications and Productivity Solutions
					</p>
					<a href="#" class="solution-subpage-bottom-link">
						Learn More
					</a>
				</div>

			</div>
		</div>
	</div>

</section>
