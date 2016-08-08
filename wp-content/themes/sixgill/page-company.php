<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>
	<a
		href="#company-second-section"
		class="company-learn-more-link"
	>
		<div class="company-first-section-scroll-link-wrapper">
			<div class="company-first-section-scroll-link-ico-wrapper">
				<img
					class="company-first-section-scroll-link-ico responsive-image"
					desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				/>
			</div>
		</div>
	</a>
	<div id="company-first-section" class="company-section company-first-section">
		<div class="company-first-section-block">
			<div class="company-first-section-image-wrapper">
				<img
					class="company-first-section-image responsive-image"
					desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
				>
			</div>
			<div class="company-first-section-block-text">
				<h1 class="company-first-section-block-title">
					<?php echo get_field('first_section_title'); ?>
				</h1>
				<div class="company-first-section-block-paragraph">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>

			<div class="company-first-section-image-wrapper-mobile">
				<img
					class="company-first-section-image responsive-image"
					tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div>
		</div>
	</div>


	<?php get_footer(); ?>
