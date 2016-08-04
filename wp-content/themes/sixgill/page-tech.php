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
				<h2 class="tech-first-section-block-subtitle">
					<?php echo get_field('first_section_subtitle'); ?>
				</h2>
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

	<a name="products-second-section"></a>
	<div id="products-second-section" class="products-section products-second-section">
		<div class="products-second-section-wrapper">
			<div class="products-second-section-left-col">
				<div class="products-second-section-image-wrapper">
					<img
						class="products-second-section-image responsive-image"
						desktop-src="<?php echo get_field('second_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('second_section_image_tablet'); ?>"
						mobile-src="<?php echo get_field('second_section_image_mobile'); ?>"
					>
				</div>
			</div>
			<div class="products-second-section-right-col">
				<div class="products-second-section-content-wrapper">
					<div class="products-second-section-title">
						<?php echo get_field('second_section_title'); ?>
					</div>
					<div class="products-second-section-text">
						<?php echo get_field('second_section_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
