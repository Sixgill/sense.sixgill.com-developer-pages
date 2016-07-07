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

	<?php if((count($leftGallery) && is_array($leftGallery)) || (count($rightGallery) && is_array($rightGallery)) ) { ?>
		<div class="solution-subpage-third-block">

			<div class="solution-subpage-viewproccess-block">
				<div class="gallery-description">
					<div class="gallery-description-inner vertical-centered">
						<div class="gallery-description-title">
							<?php echo get_field('left_gallery_title'); ?>
						</div>
						<div class="gallery-description-subtitle">
							<?php echo get_field('left_gallery_subtitle'); ?>
						</div>
					</div>

					<div class="gallery-links-overlay display-only-desktop">
						<div class="inner-links-contaner vertical-centered">

							<a href="<?php echo $leftGallery[0]['url']; ?>" data-lightbox="leftGallery" class="gallery-link swipebox">
								<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
								View gallery
							</a>
							<?php
								for($i=1; $i < count($leftGallery); $i++) {
									echo '<a class="hidden swipebox" href="'.$leftGallery[$i]['url'].'" data-lightbox="leftGallery"></a>';
								}

								$downloadLink = wrapDirectFileLink(get_field('left_gallery_file'));
								if(!empty($downloadLink)) {
							?>
								<div class="clear"></div>
								<a href="<?php echo $downloadLink; ?>" target="_blank" class="gallery-download-link">
									<img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="solutions-subpage-icon">
									Download
								</a>
							<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>

			<?php if(is_array($rightGallery) && count($rightGallery)) { ?>
				<div class="solution-subpage-viewproccess-block">
					<div class="gallery-description">
						<div class="gallery-description-inner vertical-centered">
							<div class="gallery-description-title">
								<?php echo get_field('right_gallery_title'); ?>
							</div>
							<div class="gallery-description-subtitle">
								<?php echo get_field('right_gallery_subtitle'); ?>
							</div>
						</div>
						<div class="gallery-links-overlay display-only-desktop">
							<div class="inner-links-contaner vertical-centered">
								<a href="<?php echo $rightGallery[0]['url']; ?>" data-lightbox="rightGallery" class="gallery-link swipebox">
									<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
									View gallery
								</a>
								<?php
									for($i=1; $i < count($rightGallery); $i++) {
										echo '<a class="hidden swipebox" href="'.$rightGallery[$i]['url'].'" data-lightbox="rightGallery"></a>';
									}

									$downloadLink = wrapDirectFileLink(get_field('right_gallery_file'));
									if(!empty($downloadLink)) {
								?>
									<div class="clear"></div>
									<a href="<?php echo $downloadLink; ?>" target="_blank" class="gallery-download-link">
										<img src="/wp-content/themes/sixgill/images/icons/download-icon.png" alt="" class="solutions-subpage-icon">
										Download
									</a>
								<?php
									}
								?>
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
				<div class="clear"></div>
				<?php echo get_field('last_section_text'); ?>
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

			$leftPageDesktopThumbnail = get_field('desktop_thumbnail', $subpagesLinks[1]);
			$leftPageTabletThumbnail = get_field('tablet_thumbnail', $subpagesLinks[1]);
			$leftPageMobileThumbnail = get_field('mobile_thumbnail', $subpagesLinks[1]);
		?>
		<div class="solution-use-cases-block-content">
				<div class="solution-use-cases-block-half">
					<div class="solution-use-cases-block-image">
						<img class="display-only-desktop" src="<?php echo $leftPageDesktopThumbnail; ?>" alt="">
						<img class="display-only-tablet" src="<?php echo $leftPageTabletThumbnail; ?>" alt="">
						<img class="no-desktop-display no-tablet-display" src="<?php echo $leftPageMobileThumbnail; ?>" alt="">
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
					</div>
					<div class="solution-use-cases-block-subtitle">
						<p class=""><?php echo $rightPage->post_title; ?></p>
						<a href="<?php echo $rightPage->guid; ?>">Learn more</a>
					</div>
				</div>
		</div>


</section>
