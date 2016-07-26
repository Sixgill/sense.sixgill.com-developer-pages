<section class="no-border swiper_wrapper clearfix solution-subpage-header">
	<div
		class="swiper-slide slider-subpage"
		style="background-image: url('<?php echo get_field('header_image'); ?>');"
	>
		<div class="slider-text-subpage">
			<div class="solution-subpage-suptitle">
				<?php echo get_field('suptitle'); ?>
			</div>
			<h1 class="solution-subpage-title">
				<?php echo $post->post_title; ?>
			</h1>
		</div>
	</div>
</section>

<section id="content" class="font-size-0">

	<div class="solution-subpage-first-block">
		<div class="first-left-container-subpage fleft full-height-container-subpage">
			<div class="first-text-subpage">
				<h2 class="solution-subpage-section-title">
					<?php echo get_field('first_section_title'); ?>
				</h2>
				<span class="solution-subpage-first-block-text">
					<?php echo get_field('first_section_text'); ?>
				</span>
			</div>
		</div>

		<div class="solution-subpage-first-block-image-container full-height">
			<img
				src="<?php echo get_field('first_section_image_desktop'); ?>"
				alt="First block image"
				class="solution-subpage-first-block-image display-only-desktop"
			>
			<img
				src="<?php echo get_field('first_section_image_tablet'); ?>"
				alt="First block image"
				class="solution-subpage-first-block-image display-only-tablet"
			>
			<img
				src="<?php echo get_field('first_section_image_mobile'); ?>"
				alt="First block image"
				class="solution-subpage-first-block-image no-tablet-display no-desktop-display"
			>
		</div>
	</div>

	<div id="solution-subpage-second-block" class="solution-subpage-second-block">
		<div class="solution-subpage-second-block-wrapper">
			<h2 class="solution-subpage-section-title">
				<?php echo get_field('second_section_title'); ?>
			</h2>
			<?php echo get_field('second_section_text'); ?>
		</div>
	</div>

	<a name="presentation"></a>
	<div class="solution-subpage-galleries-wrapper">
		<?php

			$firstSlidesTitle = get_field('first_carousel_title');
			$firstSlides = get_field('first_carousel_slides');
			$firstFile = wrapDirectFileLink(get_field('first_carousel_file'));
			$firstAutoHeight = get_field('first_carousel_auto_height') ? 'on' : 'off';
			$firstRewindEnabled = get_field('first_carousel_rewind_enabled') ? 'on' : 'off';

			$secondSlidesTitle = get_field('second_carousel_title');
			$secondSlides = get_field('second_carousel_slides');
			$secondFile = wrapDirectFileLink(get_field('second_carousel_file'));
			$secondAutoHeight = get_field('second_carousel_auto_height') ? 'on' : 'off';
			$secondRewindEnabled = get_field('second_carousel_rewind_enabled') ? 'on' : 'off';

			$isThereFirstCarousel = is_array($firstSlides) && count($firstSlides);
			$isThereSecondCarousel = is_array($secondSlides) && count($secondSlides);

			if($isThereFirstCarousel) {
				$carouselTitle = $firstSlidesTitle;
				$carouselSlides = $firstSlides;
				$carouselFile = $firstFile;
				$carouselAutoHeight = $firstAutoHeight;
				$carouselRewindEnabled = $firstRewindEnabled;
				$carouselName = "first";
				include(locate_template('part-carousel.php'));
			}

			if($isThereFirstCarousel && $isThereSecondCarousel) {
				?>
				<div class="solution-subgape-carousels-div"></div>
				<?php
			}

			if($isThereSecondCarousel) {
				$carouselTitle = $secondSlidesTitle;
				$carouselSlides = $secondSlides;
				$carouselFile = $secondFile;
				$carouselAutoHeight = $secondAutoHeight;
				$carouselRewindEnabled = $secondRewindEnabled;
				$carouselName = "second";
				include(locate_template('part-carousel.php'));
			}

		?>
	</div>

	<div class="solution-subpage-last-block-wrapper">
		<div class="solution-subpage-last-block no-bottom-padding no-padding-top font-size-16">
			<div class="solution-subpage-bottom-section-content">
				<h2 class="solution-subpage-last-block-title">
					<?php echo get_field('last_section_title'); ?>
				</h2>

				<h3 class="solution-subpage-bottom-section-subtitle">
					<?php echo get_field('last_section_subtitle'); ?>
				</h3>

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

	<?php
	$subpagesLinks = getSolutionsSubpagesLinks(get_the_ID());

	$leftPage = get_post($subpagesLinks[0]);
	$rightPage = get_post($subpagesLinks[1]);
	$additionalUsecasesExist = ($subpagesLinks[0] !==0 || $subpagesLinks[1] !==0);
	if($additionalUsecasesExist) {
	?>

		<div class="full-width center">
			<div class="solution-subpage-section-title">
				Additional Use Cases
			</div>
		</div>
		<div class="solution-use-cases-block-content">
	<?php
	}
	?>


	<?php if($subpagesLinks[0]!=0) {
		$leftPageDesktopThumbnail = get_field('desktop_thumbnail', $subpagesLinks[0]);
		$leftPageTabletThumbnail = get_field('tablet_thumbnail', $subpagesLinks[0]);
		$leftPageMobileThumbnail = get_field('mobile_thumbnail', $subpagesLinks[0]);
		?>
		<div class="solution-use-cases-block-half">
			<div class="solution-use-cases-block-image">
				<img
					class="display-only-desktop" src="<?php echo $leftPageDesktopThumbnail; ?>"
					alt="Use case thumbnail"
				>
				<img
					class="display-only-tablet" src="<?php echo $leftPageTabletThumbnail; ?>"
					alt="Use case thumbnail"
				>
				<img
					class="no-desktop-display no-tablet-display" src="<?php echo $leftPageMobileThumbnail; ?>"
					alt="Use case thumbnail"
				>
			</div>
			<div class="solution-use-cases-block-subtitle">
				<p>
					<?php echo $leftPage->post_title; ?>
				</p>
				<a href="<?php echo $leftPage->guid; ?>">
					Learn more
				</a>
			</div>
		</div>
	<?php
	}

	if($subpagesLinks[1]!=0) {
		$rightPageDesktopThumbnail = get_field('desktop_thumbnail', $subpagesLinks[1]);
		$rightPageTabletThumbnail = get_field('tablet_thumbnail', $subpagesLinks[1]);
		$rightPageMobileThumbnail = get_field('mobile_thumbnail', $subpagesLinks[1]); ?>
		<div class="solution-use-cases-block-half">
			<div class="solution-use-cases-block-image">
				<img
					class="display-only-desktop"
					src="<?php echo $rightPageDesktopThumbnail; ?>"
					alt="Use case thumbnail"
				>
				<img
					class="display-only-tablet" src="<?php echo $rightPageTabletThumbnail; ?>"
					alt="Use case thumbnail"
					>
				<img
					class="no-desktop-display no-tablet-display" src="<?php echo $rightPageMobileThumbnail; ?>"
					alt="Use case thumbnail"
					>
			</div>
			<div class="solution-use-cases-block-subtitle">
				<p>
					<?php echo $rightPage->post_title; ?>
				</p>
				<a href="<?php echo $rightPage->guid; ?>">
					Learn more
				</a>
			</div>
		</div>
	<?php
	}
	if($additionalUsecasesExist) {
 	?>
	</div>
	<?php
	}
	?>
</section>
