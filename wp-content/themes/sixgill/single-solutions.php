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

							<a href="<?php echo $leftGallery[0]['url']; ?>" rel="leftGallery" class="gallery-link swipebox">
								<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
								View gallery
							</a>
							<?php
								for($i=1; $i < count($leftGallery); $i++) {
									echo '<a class="hidden swipebox" href="'.$leftGallery[$i]['url'].'" rel="leftGallery"></a>';
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
								<?php echo get_field('title_right_button_subpage'); ?>
							</div>
							<div class="gallery-description-subtitle">
								<?php echo get_field('text_right_button_subpage'); ?>
							</div>
						</div>
						<div class="gallery-links-overlay display-only-desktop">
							<div class="inner-links-contaner vertical-centered">
								<a href="<?php echo $rightGallery[0]['url']; ?>" rel="rightGallery" class="gallery-link swipebox">
									<img src="/wp-content/themes/sixgill/images/icons/see-icon.png" alt="" class="solutions-subpage-icon">
									View gallery
								</a>
								<?php
									for($i=1; $i < count($rightGallery); $i++) {
										echo '<a class="hidden swipebox" href="'.$rightGallery[$i]['url'].'" rel="rightGallery"></a>';
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
				<?php echo get_field('last_section_text'); ?>
			</div>

		</div>
	</div>
	<!--
	<div class="solution-subpage-bottom-line"></div>



	<h1 class="solution-subpage-section-title center">
		Additional use cases
	</h1>

	<div class="solution-subpage-bottom-links background-f8f8f8">
		<div
			class="solution-subpage-bottom-link-col"
			desktop-aspectratio="4.46"
			tablet-aspectratio="2.9"
			mobile-aspectratio="3.97"
		>

			<div class="solution-subpage-bottom-link-image-wrapper full-height">
				<div class="vertical-centered">
					<img
						class="full-width display-only-desktop"
						src="/wp-content/themes/sixgill/images/td/solutions/left-use-case-thumbnail.jpg"
						desktop-aspectratio="1.86"
					>
					<img
						class="full-width display-only-tablet"
						src="/wp-content/themes/sixgill/images/td/solutions/left-use-case-thumbnail_tablet.jpg"
						tablet-aspectratio="1.21">
					<img
						class="full-width no-desktop-display no-tablet-display"
						src="/wp-content/themes/sixgill/images/td/solutions/left-use-case-thumbnail_moble.jpg"
						mobile-aspectratio="1.1">
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
		-->
		<!--
		<div class="col_full center">
			<a href="/solutions/" id="solutions-button-back" class="button button-large no-bottom-margin btnCompany">
				BACK TO SOLUTIONS
			</a>
		</div>
		-->

		<div class="col_full">
			<div class="green-line"></div> 
		</div>

		<div class="col_full center">
			<div class="solution-subpage-section-title">Additional Use Cases</div>
		</div>

		<div class="solution-use-cases-block-content">
				<div class="solution-use-cases-block-half">
					<div class="solution-use-cases-block-image">
						<img class="display-only-desktop" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-workforse-desktop-image.png" alt="">
						<img class="display-only-tablet" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-workforse-table-image.png" alt="">
						<img class="display-only-mobile-portrait" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-workforse-mobile-image.png" alt="">
						<img class="display-only-mobile-landscape" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-workforse-mobile-image.png" alt="">
					</div>
					<div class="solution-use-cases-block-subtitle">
						<p class="">Workforce Communications and Productivity Solution</p>
						<a href="#">Learn more</a>
					</div>
				</div>
				<div class="solution-use-cases-block-half">
					<div class="solution-use-cases-block-image">
						<img class="display-only-desktop" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-audit-desktop-image.png" alt="">
						<img class="display-only-tablet" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-audit-table-image.png" alt="">
						<img class="display-only-mobile-portrait" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-audit-mobile-image.png" alt="">
						<img class="display-only-mobile-landscape" src="/wp-content/themes/sixgill/images/Solutions/solution-use-cases-audit-mobile-image.png" alt="">
					</div>	
					<div class="solution-use-cases-block-subtitle">	
						<p class="">Mobile Workforce Audit & Compliance Solution</p>
						<a href="#">Learn more</a>
					</div>
				</div>
		</div>


</section>
