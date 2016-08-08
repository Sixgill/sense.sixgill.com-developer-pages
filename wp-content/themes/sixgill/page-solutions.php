<?php get_header(); ?>

<div class="full-width">
	<a name="top"></a>

	<!-- first section -->
	<a href="#solution-second-section"	class="solution-learn-more-link">
		<div class="solution-first-section-scroll-link-wrapper">
			<div class="solution-first-section-scroll-link-ico-wrapper">
				<img
					class="solution-first-section-scroll-link-ico responsive-image"
					desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				/>
			</div>
		</div>
	</a>
	
	<!-- First section -->
	<div id="solution-first-section" class="solution-section solution-first-section">
		<div class="solution-first-section-block">
			<div class="solution-first-section-image-wrapper">
				<img
					class="solution-first-section-image responsive-image"
					desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
					tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
				>
			</div>
			
			<div class="solution-first-section-block-text">
				<h1 class="solution-first-section-block-title">
					<?php echo get_field('first_section_header'); ?>
				</h1>
				<div class="solution-first-section-block-paragraph">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>

			<!-- <div class="solution-first-section-image-wrapper-mobile">
				<img
					class="solution-first-section-image responsive-image"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div> -->
		</div>
	</div>

	<!-- First section -->
	<div id="solution-second-section" class="solution-section solution-second-section">
		<div class="solution-second-section-block">
			<!--<div class="solution-first-section-image-wrapper">
				<img
					class="solution-first-section-image responsive-image"
					desktop-src="<?php// echo get_field('first_section_image_desktop'); ?>"
					tablet-src="<?php// echo get_field('first_section_image_tablet'); ?>"
				>
			</div>
			
			<div class="solution-first-section-block-text">
				<h1 class="solution-first-section-block-title">
					<?php// echo get_field('first_section_header'); ?>
				</h1>
				<div class="solution-first-section-block-paragraph">
					<?php// echo get_field('first_section_text'); ?>
				</div>
			</div>

			<div class="solution-first-section-image-wrapper-mobile">
				<img
					class="solution-first-section-image responsive-image"
					mobile-src="<?php// echo get_field('first_section_image_mobile'); ?>"
				>
			</div> -->
		</div>
	</div>


	
	
	
</div>

<?php get_footer(); ?>
