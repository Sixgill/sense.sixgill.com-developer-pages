<?php get_header(); ?>

<div class="full-width">
	<a name="top"></a>

	<div id="products-first-section" class="products-section products-first-section">
		<div class="products-first-section-block">
			<div
				class="products-first-section-image-wrapper responsive-background"
				desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
				tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
			>
			</div>

			<div class="products-first-section-content">
				<h1 class="products-first-section-content-title">
					<?php echo get_field('first_section_title'); ?>
				</h1>
				<div class="products-first-section-content-text">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>

			<div class="products-first-section-image-wrapper-mobile">
				<img
					class="products-first-section-image responsive-image"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div>
		</div>

		<a
			href="#sense"
			class="scroll-section products-learn-more-link"
		>
			<div class="products-first-section-scroll-link-wrapper">
				<!--<div class="products-first-section-scroll-link-text">
					Learn More
				</div>-->
				<div class="products-first-section-scroll-link-ico-wrapper">
					<img
						class="products-first-section-scroll-link-ico responsive-image"
						desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
						tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
					/>
				</div>
			</div>
		</a>
	</div>

	<a name="sense"></a>
	<div id="sense" class="products-section products-second-section">
		<div class="inline-block full-width">
			<div class="products-second-section-image-wrapper">
				<img
					class="products-second-section-image "
					src="<?php echo get_field('second_section_image'); ?>"
				>
			</div>
			<div class="products-second-section-text">
				<?php echo get_field('second_section_text'); ?>
			</div>
		</div>
	</div>
	<div id="products-panel-placeholder" class="products-panel-placeholder"></div>
	<div id="products-fixed-panel" class="products-fixed-panel">

		<div data-section-link="#products-third-section" class="products-fixed-panel-col" id="products-fixed-panel-col-track">
			<div class="products-fixed-panel-col-content">
				<div class="products-fixed-panel-icon-wrapper">
					<img
						class="products-fixed-panel-icon"
						src="<?php echo get_template_directory_uri();?>/images/products/products_panel_track_ico.svg"
					>
				</div>
				<div class="products-fixed-panel-title">
					Track
				</div>
			</div>
		</div>

		<div data-section-link="#products-fourth-section" class="products-fixed-panel-col" id="products-fixed-panel-col-determine">
			<div class="products-fixed-panel-col-content">
				<div class="products-fixed-panel-icon-wrapper">
					<img
						class="products-fixed-panel-icon"
						src="<?php echo get_template_directory_uri();?>/images/products/products_panel_determine_ico.svg"
					>
				</div>
				<div class="products-fixed-panel-title">
					Determine
				</div>
			</div>
		</div>

		<div data-section-link="#products-fifth-section"  class="products-fixed-panel-col" id="products-fixed-panel-col-act">
			<div class="products-fixed-panel-col-content">
				<div class="products-fixed-panel-icon-wrapper">
					<img
						class="products-fixed-panel-icon"
						src="<?php echo get_template_directory_uri();?>/images/products/products_panel_track_act.svg"
					>
				</div>
				<div class="products-fixed-panel-title">
					Act
				</div>
			</div>
		</div>

	</div>

	<a name="products-third-section"></a>
	<div id="products-third-section" class="products-section products-third-section">
		<div class="products-third-section-wrapper">
			<div class="products-third-section-left-col">
				<div
					class="products-third-section-image-wrapper responsive-background"
					tablet-src="<?php echo get_field('third_section_image_tablet'); ?>"
					>
					<img
						class="products-third-section-image responsive-image aspectwidthfix"
						desktop-src="<?php echo get_field('third_section_image_desktop'); ?>"
					>
				</div>
			</div>
			<div class="products-third-section-right-col">
				<div class="products-third-section-content-wrapper">
					<div class="products-third-section-header-wrapper">
						<div class="products-third-section-ico-wrapper">
							<img
								class="products-third-section-ico"
								src="<?php echo get_template_directory_uri();?>/images/products/third_section_icon.svg"
							>
						</div>
						<div class="products-third-section-title-wrapper">
							<div class="products-third-section-title">
								<?php echo get_field('third_section_title'); ?>
							</div>
							<div class="products-third-section-subtitle">
								<?php echo get_field('third_section_subtitle'); ?>
							</div>
						</div>
					</div>
					<div class="products-third-section-line"></div>
					<div class="products-third-section-text">
						<?php echo get_field('third_section_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="products-fourth-section"></a>
	<div id="products-fourth-section" class="products-section products-fourth-section">
		<div class="products-fourth-section-wrapper">

			<div class="products-fourth-section-left-col">
				<div class="products-fourth-section-content-wrapper">
					<div class="products-fourth-section-header-wrapper">
						<div class="products-fourth-section-ico-wrapper">
							<img
								class="products-fourth-section-ico"
								src="<?php echo get_template_directory_uri();?>/images/products/fourth_section_icon.svg"
							>
						</div>
						<div class="products-fourth-section-title-wrapper">
							<div class="products-fourth-section-title">
								<?php echo get_field('fourth_section_title'); ?>
							</div>
							<div class="products-fourth-section-subtitle">
								<?php echo get_field('fourth_section_subtitle'); ?>
							</div>
						</div>
					</div>
					<div class="products-fourth-section-line"></div>
					<div class="products-fourth-section-text">
						<?php echo get_field('fourth_section_text'); ?>
					</div>
				</div>
			</div>

			<div class="products-fourth-section-right-col">
				<div class="products-fourth-section-image-wrapper">
					<img
						class="products-fourth-section-image responsive-image"
						desktop-src="<?php echo get_field('fourth_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('fourth_section_image_tablet'); ?>"
					>
				</div>
			</div>

		</div><a name="products-fourth-section"></a>
	</div>

	<a name="products-fifth-section"></a>
	<div id="products-fifth-section" class="products-section products-fifth-section">
		<div class="products-fifth-section-wrapper">
			<div class="products-fifth-section-left-col">
				<div
					class="products-fifth-section-image-wrapper responsive-background"
					tablet-src="<?php echo get_field('fifth_section_image_tablet'); ?>"
				>
					<img
						class="products-fifth-section-image responsive-image aspectwidthfix"
						src="<?php echo get_field('fifth_section_image'); ?>"
						desktop-src="<?php echo get_field('fifth_section_image_desktop'); ?>"
					>
				</div>
			</div>
			<div class="products-fifth-section-right-col">
				<div class="products-fifth-section-content-wrapper">
					<div class="products-fifth-section-header-wrapper">
						<div class="products-fifth-section-ico-wrapper">
							<img
								class="products-fifth-section-ico"
								src="<?php echo get_template_directory_uri();?>/images/products/fifth_section_icon.svg"
							>
						</div>
						<div class="products-fifth-section-title-wrapper">
							<div class="products-fifth-section-title">
								<?php echo get_field('fifth_section_title'); ?>
							</div>
							<div class="products-fifth-section-subtitle">
								<?php echo get_field('fifth_section_subtitle'); ?>
							</div>
						</div>
					</div>
					<div class="products-fifth-section-line"></div>
					<div class="products-fifth-section-text">
						<?php echo get_field('fifth_section_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="ancillary"></a>
	<div id="ancillary" class="products-section products-last-section no-mobile-portrait-display no-mobile-landscape-display">
		<h2 class="products-last-section-title">
			<?php echo get_field('last_section_title'); ?>
		</h2>
		<div class="products-last-section-wrapper">
			<div class="products-last-section-left-col">
				<div data-tabid="reach" class="products-last-section-tab-logo selected">
					<img
						class="products-last-section-tab-image products-last-section-tab-logo-image-active"
						src="<?php echo get_template_directory_uri();?>/images/products/products_reach_tab_logo.svg"
					>
					<img
						class="products-last-section-tab-logo-image"
						src="<?php echo get_template_directory_uri();?>/images/products/products_reach_tab_logo_active.svg"
					>
				</div>
				<div data-tabid="sync" class="products-last-section-tab-logo">
					<img
						class="products-last-section-tab-image products-last-section-tab-logo-image-active"
						src="<?php echo get_template_directory_uri();?>/images/products/products_sync_tab_logo.svg"
					>
					<img
						class="products-last-section-tab-logo-image"
						src="<?php echo get_template_directory_uri();?>/images/products/products_sync_tab_logo_active.svg"
					>
				</div>
				<div data-tabid="assist" class="products-last-section-tab-logo">
					<img
						class="products-last-section-tab-logo-image products-last-section-tab-logo-image-active"
						src="<?php echo get_template_directory_uri();?>/images/products/products_assist_tab_logo.svg"
					>
					<img
						class="products-last-section-tab-logo-image"
						src="<?php echo get_template_directory_uri();?>/images/products/products_assist_tab_logo_active.svg"
					>
				</div>
			</div>
			<div class="products-last-section-right-col">
				<div class="products-last-section-bubble">
					<div id="products-tab-reach" class="products-last-section-text">
						<h3 class="products-last-section-col-title">
							<?php echo get_field('last_section_reach_title'); ?>
						</h3>
						<?php echo get_field('last_section_reach_text'); ?>
					</div>
					<div id="products-tab-sync" class="products-last-section-text hide">
						<h3 class="products-last-section-col-title">
							<?php echo get_field('last_section_sync_title'); ?>
						</h3>
						<?php echo get_field('last_section_sync_text'); ?>
					</div>
					<div id="products-tab-assist" class="products-last-section-text hide">
						<h3 class="products-last-section-col-title">
							<?php echo get_field('last_section_assist_title'); ?>
						</h3>
						<?php echo get_field('last_section_assist_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="products-last-section-mobile" class="products-section products-last-section no-desktop-display no-tablet-display">
		<h2 class="products-last-section-title">
			<?php echo get_field('last_section_title'); ?>
		</h2>
		<!-- REACH -->
		<div class="products-last-section-tab-logo">
			<img
				class="products-last-section-tab-logo-image"
				src="<?php echo get_template_directory_uri();?>/images/products/products_reach_tab_logo_active.svg"
			>
		</div>
		<h3 class="products-last-section-col-title">
			<?php echo get_field('last_section_reach_title'); ?>
		</h3>
		<?php echo get_field('last_section_reach_text'); ?>
		<!-- SYNC -->
		<div class="products-last-section-tab-logo">
			<img
				class="products-last-section-tab-logo-image"
				src="<?php echo get_template_directory_uri();?>/images/products/products_sync_tab_logo_active.svg"
			>
		</div>
		<h3 class="products-last-section-col-title">
			<?php echo get_field('last_section_sync_title'); ?>
		</h3>
		<?php echo get_field('last_section_sync_text'); ?>
		<!-- ASSIST -->
		<div class="products-last-section-tab-logo">
			<img
				class="products-last-section-tab-logo-image"
				src="<?php echo get_template_directory_uri();?>/images/products/products_assist_tab_logo_active.svg"
			>
		</div>
		<h3 class="products-last-section-col-title">
			<?php echo get_field('last_section_assist_title'); ?>
		</h3>
		<?php echo get_field('last_section_assist_text'); ?>
	</div>


<?php get_footer(); ?>
