<?php get_header(); ?>
<div class="full-width"> <!-- fullpage wrapper placeholder -->

	<a name="top"></a>
	<a
		href="#second-section"
		class="tech-learn-more-link"
	>
		<div class="tech-first-section-scroll-link-wrapper">
			<div class="tech-first-section-scroll-link-ico-wrapper">
				<img
					class="tech-first-section-scroll-link-ico responsive-image"
					desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				/>
			</div>
		</div>
	</a>
	<div id="tech-first-section" class="tech-section tech-first-section">
		<div class="tech-first-section-block">
			<div class="tech-first-section-image-wrapper">
				<img
					class="tech-first-section-image responsive-image"
					desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
					tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
				>
			</div>
			<div class="tech-first-section-block-text">
				<h1 class="tech-first-section-block-title">
					<?php echo get_field('first_section_title'); ?>
				</h1>
				<div class="tech-first-section-block-paragraph">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>

			<div class="tech-first-section-image-wrapper-mobile">
				<img
					class="tech-first-section-image responsive-image"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
