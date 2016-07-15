<section class="no-border swiper_wrapper clearfix solution-subpage-header">
	<div
		class="swiper-slide slider-subpage"
		style="background-image: url('<?php echo get_field('header_image'); ?>');"
	>
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
			<img
				src="<?php echo get_field('first_section_image_desktop'); ?>"
				alt=""
				class="solution-subpage-first-block-image display-only-desktop"
			>

			<img
				src="<?php echo get_field('first_section_image_tablet'); ?>"
				alt=""
				class="solution-subpage-first-block-image display-only-tablet"
			>

			<img
				src="<?php echo get_field('first_section_image_mobile'); ?>"
				alt=""
				class="solution-subpage-first-block-image no-tablet-display no-desktop-display"
			>
		</div>
	</div>

	<div id="solution-subpage-second-block" class="solution-subpage-second-block">
		<div class="solution-subpage-second-block-wrapper">
			<h1 class="solution-subpage-section-title">
				<?php echo get_field('second_section_title'); ?>
			</h1>
			<?php echo get_field('second_section_text'); ?>
		</div>
	</div>

	<a name="presentation"></a>
	<?php
		$galleryImages = get_field('gallery_images');
		$galleryFile = wrapDirectFileLink(get_field('gallery_file'));
		if(is_array($galleryImages) && count($galleryImages)) {
	?>
		<div class="solution-subpage-gallery-block">

			<div class="solution-subpage-gallery-block-title">
				VIEW THE PROCESS
			</div>
			<div class="own-carousel-n-controls-wrapper">
				<div class="solution-carousel-button-wrapper">
					<div id="solution-carousel-button-left" class="solution-carousel-button solution-carousel-button-left">
						&lt;
					</div>
				</div>
				<div class="own-carousel-outside-wrapper">
					<div id="solution-subpage-carousel" class="owl-carousel owl-theme">

						<?php
							foreach($galleryImages as $slide) {
								echo '
									<div class="item">
										<img class="solution-subpage-slide-image" src="'.$slide['url'].'" alt="'.$slide['alt'].'">
										<div class="solution-subpage-slide-info">
											<div class="solution-subpage-slide-title">
												'.$slide['title'].'
											</div>
											<div class="solution-subpage-slide-description">
												'.$slide['description'].'
											</div>
										</div>
									</div>
								';
							}
						?>
					</div>
				</div>
				<div id="solution-carousel-button-left" class="solution-carousel-button solution-carousel-button-right">
					&gt;
				</div>
			</div>
			<?php if(!empty($galleryFile)) { ?>
				<a
					href="<?php echo $galleryFile; ?>"
					class="solution-subpage-gallery-button-link"
				>
					<div class="solution-subpage-gallery-button solution-subpage-gallery-download-button">
						<img
							src="/wp-content/themes/sixgill/images/td/solutions/subpage_download_icon.png"
							class="solution-subpage-gallery-button-icon vertical-centered"
						>

						<div class="solution-subpage-gallery-button-title-wrapper vertical-centered">
							Download Presentation
						</div>
					</div>
				</a>
			<?php } ?>


	</div>
	<?php } else { ?>
		<div class="solution-subpage-viewprocess-placeholder"></div>
	<?php } ?>

	<div class="solution-subpage-last-block-wrapper">
		<div class="solution-subpage-last-block no-bottom-padding no-padding-top font-size-16">
			<div class="solution-subpage-bottom-section-content">
				<h1 class="solution-subpage-section-title solution-subpage-last-block-title">
					<?php echo get_field('last_section_title'); ?>
				</h1>

				<h2 class="solution-subpage-bottom-section-subtitle">
					<?php echo get_field('last_section_subtitle'); ?>
				</h2>

				<div class="solution-subpage-bottom-section-column">
					<?php echo get_field('last_section_text_left_column'); ?>
				</div>
				<div class="solution-subpage-bottom-section-column">
					<?php echo get_field('last_section_text_right_column'); ?>
				</div>
				<div class="clear"></div>
				<div class="solution-subpage-last-section-text-wrapper">
					<?php echo get_field('last_section_text'); ?>
				</div>
			</div>
		</div>
	</div>

		<div class="col_full">
			<div class="green-line"></div>
		</div>

		<div class="col_full center">
			<div class="solution-subpage-section-title">Additional Use Cases</div>
		</div>
		<?php
			$subpagesLinks = getSolutionsSubpagesLinks(get_the_ID());
			$leftPage = get_post($subpagesLinks[0]);
			$rightPage = get_post($subpagesLinks[1]);

			$leftPageDesktopThumbnail = get_field('desktop_thumbnail', $subpagesLinks[0]);
			$leftPageTabletThumbnail = get_field('tablet_thumbnail', $subpagesLinks[0]);
			$leftPageMobileThumbnail = get_field('mobile_thumbnail', $subpagesLinks[0]);

			$rightPageDesktopThumbnail = get_field('desktop_thumbnail', $subpagesLinks[1]);
			$rightPageTabletThumbnail = get_field('tablet_thumbnail', $subpagesLinks[1]);
			$rightPageMobileThumbnail = get_field('mobile_thumbnail', $subpagesLinks[1]);
		?>
		<div class="solution-use-cases-block-content">
				<div class="solution-use-cases-block-half">
					<div class="solution-use-cases-block-image">
						<img class="display-only-desktop" src="<?php echo $leftPageDesktopThumbnail; ?>" alt="">
						<img class="display-only-tablet" src="<?php echo $leftPageTabletThumbnail; ?>" alt="">
						<img class="no-desktop-display no-tablet-display" src="<?php echo $leftPageMobileThumbnail; ?>" alt="">

						<!-- <img src="<?php echo get_template_directory_uri();?>/images/Solutions/solution-use-cases-audit-image-500x265.png" alt=""> -->
					</div>
					<div class="solution-use-cases-block-subtitle">
						<p class=""><?php echo $leftPage->post_title; ?></p>
						<a href="<?php echo $leftPage->guid; ?>">Learn more</a>
					</div>
				</div>
				<div class="solution-use-cases-block-half">
					<div class="solution-use-cases-block-image">
						<img class="display-only-desktop" src="<?php echo $rightPageDesktopThumbnail; ?>" alt="">
						<img class="display-only-tablet" src="<?php echo $rightPageTabletThumbnail; ?>" alt="">
						<img class="no-desktop-display no-tablet-display" src="<?php echo $rightPageMobileThumbnail; ?>" alt="">

						<!-- <img src="<?php echo get_template_directory_uri();?>/images/Solutions/solution-use-cases-workforse-image-500x265.png" alt=""> -->
					</div>
					<div class="solution-use-cases-block-subtitle">
						<p class=""><?php echo $rightPage->post_title; ?></p>
						<a href="<?php echo $rightPage->guid; ?>">Learn more</a>
					</div>
				</div>
		</div>


</section>
