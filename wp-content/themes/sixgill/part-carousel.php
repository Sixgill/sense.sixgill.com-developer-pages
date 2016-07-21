<div class="solution-subpage-gallery-block">
	<div class="solution-subpage-gallery-block-title">
		<?php echo  ?>
	</div>
	<div class="own-carousel-n-controls-wrapper">
		<div class="solution-carousel-button-wrapper no-mobile-landscape-display no-mobile-portrait-display">
			<div id="solution-carousel-button-left" class="solution-carousel-button solution-carousel-button-left">
				<img
					class="solution-carousel-button-image"
					alt="Prev slide button"
					src="<?php echo get_template_directory_uri();?>/images/carousel_left.svg"
				>
			</div>
		</div>
		<div class="own-carousel-outside-wrapper">
			<div
				id="solution-subpage-carousel"
				class="owl-carousel owl-theme"
				autoheight="<?php echo get_field('carousel_auto_height') ? 'on' : 'off'; ?>"
				rewindenabled="<?php echo get_field('rewind_enabled') ? 'on' : 'off'; ?>"
			>

				<?php
					foreach($galleryImages as $slide) {
						echo '
							<div class="item">
								<img
									class="solution-subpage-slide-image"
									src="'.$slide['url'].'"
									alt="'.$slide['alt'].'"
									>
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
		<div class="solution-carousel-button-wrapper no-mobile-landscape-display no-mobile-portrait-display">
			<div id="solution-carousel-button-right" class="solution-carousel-button solution-carousel-button-right">
				<img
					class="solution-carousel-button-image"
					alt="Next slide button"
					src="<?php echo get_template_directory_uri();?>/images/carousel_right.svg"
				>
			</div>
		</div>

		<div id="solution-carousel-mobile-button-left" class="solution-carousel-mobile-button no-desktop-display no-tablet-display">
			<div class="solution-carousel-mobile-button-icon vertical-centered">
				<img
					class="solution-carousel-button-image"
					alt="Prev slide button"
					src="<?php echo get_template_directory_uri();?>/images/carousel_left.svg"
				>
			</div>
		</div>

		<div id="solution-carousel-mobile-button-right" class="solution-carousel-mobile-button no-desktop-display no-tablet-display">
			<div class="solution-carousel-mobile-button-icon vertical-centered">
				<img
					class="solution-carousel-button-image"
					alt="Next slide button"
					src="<?php echo get_template_directory_uri();?>/images/carousel_right.svg"
				>
			</div>
		</div>

	</div>
	<?php if(!empty($galleryFile)) { ?>
		<a
			href="<?php echo $galleryFile; ?>"
			class="solution-subpage-gallery-button-link"
		>
			<div class="solution-subpage-gallery-button">
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
