<?php get_header(); ?>
<div
	id="fullpage-config"
	fullpage-section-selector = "section"
	fullpage-navigation = "false"
></div>
<a name="top"></a>
<div id="fullpage-debug">
<div
	id="products-first-section"
	class="section products-first-section"
	style="background-image: url('<?php echo get_field('first_section_background'); ?>');"
>
	<div class="products-first-section-block">
		<div class="products-first-section-image-wrapper">
			<div class="vertical-centered">
				<img class="products-first-section-image" src="<?php echo get_field('first_section_image'); ?>">
			</div>
		</div>
		<div class="products-first-section-block-text">
			<div class="vertical-centered">
				<h1 class="products-first-section-block-title">
					<?php echo get_field('first_section_title'); ?>
				</h1>
				<div class="products-first-section-block-paragraph">
					<?php echo get_field('first_section_text'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="products-first-section-scroll-link-wrapper">
		<div class="products-first-section-scroll-link-text">
			Learn More
		</div>
		<div class="products-first-section-scroll-link-ico-wrapper">
			<img
				class="products-first-section-scroll-link-ico"
				src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
			>
		</div>
	</div>
</div>

<div id="products-second-section" class="section products-second-section">
	<div class="vertical-centered">
		<div class="products-second-section-image-wrapper">
			<img
				class="products-second-section-image"
				src="<?php echo get_field('second_section_image'); ?>"
			>
		</div>
		<div class="products-second-section-text">
			<?php echo get_field('second_section_text'); ?>
		</div>
	</div>
</div>

<div class="products-fixed-panel">
	<div class="products-fixed-panel-col">
		<div class="vertical-centered">
			<div class="products-fixed-panel-icon-wrapper">
				<img
					class="products-fixed-panel-icon"
					src="<?php echo get_template_directory_uri();?>\images\products_panel_track_ico.png"
				>
			</div>
			<div class="products-fixed-panel-title">
				Track
			</div>
		</div>
	</div>
	<div class="products-fixed-panel-col">
		<div class="vertical-centered">
			<div class="products-fixed-panel-icon-wrapper">
				<img
					class="products-fixed-panel-icon"
					src="<?php echo get_template_directory_uri();?>\images\products_panel_determine_ico.png"
				>
			</div>
			<div class="products-fixed-panel-title">
				Determine
			</div>
		</div>
	</div>
	<div class="products-fixed-panel-col">
		<div class="vertical-centered">
			<div class="products-fixed-panel-icon-wrapper">
				<img
					class="products-fixed-panel-icon"
					src="<?php echo get_template_directory_uri();?>\images\products_panel_track_act.png"
				>
			</div>
			<div class="products-fixed-panel-title">
				Act
			</div>
		</div>
	</div>
</div>

<div id="products-third-section" class="section products-third-section">
	<div class="products-third-section-left-col">
		<div class="products-third-section-image-wrapper">
			<img
				class="products-third-section-image"
				src="<?php echo get_field('third_section_image'); ?>"
			>
		</div>
	</div>
	<div class="products-third-section-right-col">
		<div class="products-third-section-content-wrapper">
			<div class="products-third-section-header-wrapper">
				<div class="products-third-section-ico-wrapper">
					<img class="products-third-section-ico-wrapper" src="">
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

<div id="products-fourth-section" class="section products-fourth-section">
	<div class="products-fourth-section-left-col">
		<div class="products-fourth-section-header-wrapper">
			<div class="products-fourth-section-ico-wrapper">
				<img
					class="products-fourth-section-ico"
					src="<?php echo get_template_directory_uri();?>\images\products_fourth_section_ico.png"
				>
			</div>
			<div class="products-fourth-section-title-wrapper">
				<div class="products-fourth-section-title">
					<?php echo get_field('forth_section_title'); ?>
				</div>
				<div class="products-fourth-section-subtitle">
					<?php echo get_field('forth_section_subtitle'); ?>
				</div>
			</div>
		</div>
		<div class="products-fourth-section-text">
			<?php echo get_field('forth_section_text'); ?>
		</div>
	</div>
	<div class="products-fourth-section-right-col">
		<div class="products-fourth-section-image-wrapper">
			<img
				class="products-fourth-section-image"
				src="<?php echo get_field('forth_section_image'); ?>"
			>
		</div>
	</div>
</div>

<div id="products-fifth-section" class="section products-fifth-section">
	<div class="products-fifth-section-left-col">
		<div class="products-fifth-section-image-wrapper">
			<img
				class="products-fifth-section-image"
				src="<?php echo get_field('fifth_section_image'); ?>"
			>
		</div>
	</div>
	<div class="products-fifth-section-right-col">
		<div class="products-fifth-section-content-wrapper">
			<div class="products-fifth-section-header-wrapper">
				<div class="products-fifth-section-ico-wrapper">
					<img class="products-fifth-section-ico-wrapper" src="">
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

<div id="products-last-section" class="section products-last-section">
	<h2 class="products-last-section-title">
		<?php echo get_field('last_section_title'); ?>
	</h2>
	<div class="products-last-section-wrapper">
		<div class="products-last-section-left-col">
			<div data-tabid="reach" class="products-last-section-tab-logo selected">
				<img
					class="products-last-section-tab-image products-last-section-tab-image-active"
					src="<?php echo get_template_directory_uri();?>\images\products_reach_tab_logo.png"
				>
				<img
					class="products-last-section-tab-image"
					src="<?php echo get_template_directory_uri();?>\images\products_reach_tab_logo_active.png"
				>
			</div>
			<div data-tabid="sync" class="products-last-section-tab-logo">
				<img
					class="products-last-section-tab-image products-last-section-tab-image-active"
					src="<?php echo get_template_directory_uri();?>\images\products_sync_tab_logo.png"
				>
				<img
					class="products-last-section-tab-image"
					src="<?php echo get_template_directory_uri();?>\images\products_sync_tab_logo_active.png"
				>
			</div>
			<div data-tabid="assist" class="products-last-section-tab-logo">
				<img
					class="products-last-section-tab-image products-last-section-tab-image-active"
					src="<?php echo get_template_directory_uri();?>\images\products_assist_tab_logo.png"
				>
				<img
					class="products-last-section-tab-image"
					src="<?php echo get_template_directory_uri();?>\images\products_assist_tab_logo_active.png"
				>
			</div>
		</div>
		<div class="products-last-section-right-col">
			<div class="products-last-section-bubble">
				<div id="products-tab-reach" class="products-last-section-text">
					<h3 class="products-last-section-title">
						<?php echo get_field('last_section_reach_title'); ?>
					</h3>
					<?php echo get_field('last_section_reach_text'); ?>
				</div>
				<div id="products-tab-sync" class="products-last-section-text">
					<h3 class="products-last-section-title">
						<?php echo get_field('last_section_sync_title'); ?>
					</h3>
					<?php echo get_field('last_section_sync_text'); ?>
				</div>
				<div id="products-tab-assist" class="products-last-section-text">
					<h3 class="products-last-section-title">
						<?php echo get_field('last_section_assist_title'); ?>
					</h3>
					<?php echo get_field('last_section_assist_text'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
