<?php get_header(); ?>
<div class="full-width"> <!-- fullpage wrapper placeholder -->

	<a name="top"></a>
	<a
		href="#tech-second-section"
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

	<a name="tech-second-section"></a>
	<div id="tech-second-section" class="tech-section tech-second-section">
		<div class="tech-second-section-wrapper">
			<div class="tech-second-section-left-col">
				<div class="tech-second-section-image-wrapper">
					<img
						class="tech-second-section-image responsive-image"
						desktop-src="<?php echo get_field('second_section_image_desktop'); ?>"
					>
				</div>
			</div>
			<div class="tech-second-section-right-col">
				<div class="tech-second-section-content-wrapper">
					<div class="tech-second-section-title">
						<?php echo get_field('second_section_title'); ?>
					</div>
					<div class="tech-second-section-text">
						<?php echo get_field('second_section_text'); ?>
					</div>
				</div>
			</div>


		</div>
		<div class="tech-second-section-image-wrapper-mobile no-desktop-display">
			<img
				class="tech-second-section-image responsive-image"
				tablet-src="<?php echo get_field('second_section_image_tablet'); ?>"
				mobile-src="<?php echo get_field('second_section_image_mobile'); ?>"
			>
		</div>
	</div>

	<a name="tech-third-section"></a>
	<div id="tech-third-section" class="tech-section tech-third-section">
		<div class="tech-third-section-wrapper">

			<div class="tech-third-section-left-col">
				<div class="tech-third-section-content-wrapper">
					<div class="tech-third-section-title">
						<?php echo get_field('third_section_title'); ?>
					</div>

					<div class="tech-third-section-text">
						<?php echo get_field('third_section_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="tech-fourth-section"></a>
	<div id="tech-fourth-section" class="tech-section tech-fourth-section">
		<div class="tech-fourth-section-wrapper">

			<div class="tech-fourth-section-left-col">
				<div class="tech-fourth-section-image-wrapper">
					<img
						class="tech-fourth-section-image responsive-image"
						desktop-src="<?php echo get_field('fourth_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('fourth_section_image_tablet'); ?>"
						mobile-src="<?php echo get_field('fourth_section_image_mobile'); ?>"
					>
				</div>
			</div>

			<div class="tech-fourth-section-right-col">
				<div class="tech-fourth-section-content-wrapper">
					<div class="tech-fourth-section-title">
						<?php echo get_field('fourth_section_title'); ?>
					</div>

					<div class="tech-fourth-section-text">
						<?php echo get_field('fourth_section_text'); ?>
					</div>
				</div>
			</div>


		</div>
	</div>

	<?php get_footer(); ?>
