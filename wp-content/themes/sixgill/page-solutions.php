<?php get_header(); ?>

<div class="full-width full-page-wrapper">
	<a name="top"></a>

	<!-- first section -->

	<a name="solutions-first-section"></a>
	<div id="solutions-first-section" class="solutions-section solutions-first-section">
		<div class="solutions-first-section-block">
			<div class="solutions-first-section-image-wrapper responsive-background"
				class="solutions-first-section-image responsive-background"
				desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
				tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
			>
			</div>

			<div class="solutions-first-section-block-text">
				<h1 class="solutions-first-section-block-title">
					<?php echo get_field('first_section_header'); ?>
				</h1>
				<div class="solutions-first-section-block-paragraph">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>

			<div class="solutions-first-section-image-wrapper-mobile">
				<img
					class="solutions-first-section-image responsive-image"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div>
		</div>
		<!--link more link -->
		<a
			href="#people"
			class="scroll-section solutions-learn-more-link"
		>
			<div class="solutions-first-section-scroll-link-wrapper">
				<div class="solutions-first-section-scroll-link-ico-wrapper">
					<img
						class="solutions-first-section-scroll-link-ico responsive-image"
						desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
						tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					/>
				</div>
			</div>
		</a>
		<a
			href="#people-tablet-link"
			class="scroll-section solutions-learn-more-link display-only-tablet"
		>
			<div class="solutions-first-section-scroll-link-wrapper">
				<div class="solutions-first-section-scroll-link-ico-wrapper">
					<img
						class="solutions-first-section-scroll-link-ico responsive-image"
						desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
						tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					/>
				</div>
			</div>
		</a>
		<!--link more link end-->
	</div>
	<div id="people-tablet-link"></div>  <!-- navigation div for tablet version-->
	<a id="people"></a>
	<div class="solutions-section solutions-second-section js-a-people">
		<div class="solutions-second-section-block">
			<div class="solutions-second-section-text-block">
				<div class="solutions-second-section-image-wrapper">
					<img
						class="solutions-second-section-image responsive-image"
						desktop-src="<?php echo get_field('people_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('people_section_image_tablet'); ?>"
					>
				</div>

				<div class="solutions-second-section-block-text">
					<h2 class="solutions-second-section-block-title">
						<?php echo get_field('people_section_header'); ?>
					</h2>
					<div class="solutions-second-section-block-paragraph">
						<?php echo get_field('people_section_text'); ?>
					</div>
				</div>
			</div>

			<?php
			global $subpages;

			$subpages = getChindrenByParentSlug("solutions", array(
				'meta_query'	=> array(
					'relation'		=> 'OR',
					array(
						'key'	  	=> 'page_part',
						'value'	  	=> 'people',
						'compare'	=> 'LIKE',
					),
				),
			));
			if($subpages->post_count) {
			?>
				<div class="solutions-second-section-icons-block">
					<h3 class="solutions-second-section-icons-title">
						<?php echo get_field('people_section_icons_title'); ?>
					</h3>
					<div class="solutions-second-section-icon-wrapper">
						<ul class="solutions-second-section-icon-list">
							<?php include(locate_template('loop-solutions.php')); ?>
						</ul>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<!-- Third section Assets -->
	<a id="assets"></a>
	<div class="solutions-section solutions-third-section js-a-assets">
		<div class="solutions-third-section-block">
			<div class="solutions-third-section-image-wrapper">
				<img
					class="solutions-third-section-image responsive-image"
					desktop-src="<?php echo get_field('assets_section_image_desktop'); ?>"
					tablet-src="<?php echo get_field('assets_section_image_tablet'); ?>"
				>
			</div>
			<div class="solutions-third-section-block-text">
				<h1 class="solutions-third-section-block-title">
					<?php echo get_field('assets_section_header'); ?>
				</h1>
				<div class="solutions-third-section-block-paragraph">
					<?php echo get_field('assets_section_text'); ?>
				</div>
			</div>
			<?php
			global $subpages;

			$subpages = getChindrenByParentSlug("solutions", array(
				'meta_query'	=> array(
					'relation'		=> 'OR',
					array(
						'key'	  	=> 'page_part',
						'value'	  	=> 'assets',
						'compare'	=> 'LIKE',
					),
				),
			));
			if($subpages->post_count) {
			?>
				<div class="solutions-third-section-icons-block">
					<h3 class="solutions-third-section-icons-title">
						<?php echo get_field('assets_section_icons_title'); ?>
					</h3>
					<div class="solutions-third-section-icon-wrapper">
						<ul class="solutions-third-section-icon-list">
							<?php include(locate_template('loop-solutions.php')); ?>
						</ul>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<!-- fourth section Crowds -->
	<a id="crowds"></a>
	<div class="solutions-section solutions-fourth-section js-a-crowds">
		<div class="solutions-second-section-block">
			<div class="solutions-second-section-text-block">
				<div class="solutions-second-section-image-wrapper">
					<img
						class="solutions-second-section-image responsive-image"
						desktop-src="<?php echo get_field('crowds_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('crowds_section_image_tablet'); ?>"
					>
				</div>

				<div class="solutions-second-section-block-text">
					<h2 class="solutions-second-section-block-title">
						<?php echo get_field('crowds_section_header'); ?>
					</h2>
					<div class="solutions-second-section-block-paragraph">
						<?php echo get_field('crowds_section_text'); ?>
					</div>
				</div>
			</div>
			<?php
			global $subpages;

			$subpages = getChindrenByParentSlug("solutions", array(
				'meta_query'	=> array(
					'relation'		=> 'OR',
					array(
						'key'	  	=> 'page_part',
						'value'	  	=> 'crowd',
						'compare'	=> 'LIKE',
					),
				),
			));
			if($subpages->post_count) {
			?>
				<div class="solutions-second-section-icons-block">
					<h3 class="solutions-second-section-icons-title">
						<?php echo get_field('crowds_section_icons_title'); ?>
					</h3>
					<div class="solutions-second-section-icon-wrapper">
						<ul class="solutions-second-section-icon-list">
							<?php include(locate_template('loop-solutions.php')); ?>
						</ul>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

</div>

<?php get_footer(); ?>
