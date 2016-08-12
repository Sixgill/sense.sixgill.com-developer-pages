<?php get_header(); ?>

<div class="full-width">
	<a name="top"></a>

	<!-- first section -->

	<!--link more -->
	<a href="#people"	class="scroll-section solution-learn-more-link no-tablet-display">
		<div class="solution-first-section-scroll-link-wrapper">
			<div class="solution-first-section-scroll-link-ico-wrapper">
				<img
					class="solution-first-section-scroll-link-ico responsive-image"
					desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				/>
			</div>
		</div>
	</a>
	<a href="#solution-second-section-tablet"	class="solution-learn-more-link display-only-tablet">
		<div class="solution-first-section-scroll-link-wrapper">
			<div class="solution-first-section-scroll-link-ico-wrapper">
				<img
					class="solution-first-section-scroll-link-ico responsive-image"
					tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				/>
			</div>
		</div>
	</a>

	<a name="solution-first-section"></a>
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

			<div class="solution-first-section-image-wrapper-mobile">
				<img
					class="solution-first-section-image" 
					src="<?php echo get_field('first_section_image_mobile'); ?>"
				>
			</div> 
		</div>

	</div>
	<div id="solution-second-section-tablet"></div>  <!-- navigation div for tablet version-->
	<!-- Second section people -->
	<a name="people"></a>
	<!-- <a name="solution-second-section"></a> -->
	<div id="solution-second-section-desktop" class="solution-section solution-second-section">
		<div class="solution-second-section-block">
			<div class="solution-second-section-text-block">
				<div class="solution-second-section-image-wrapper">
					<img
						class="solution-second-section-image responsive-image"
						desktop-src="<?php echo get_field('people_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('people_section_image_tablet'); ?>"
					>
				</div>
				
				<div class="solution-second-section-block-text">
					<h2 class="solution-second-section-block-title">
						<?php echo get_field('people_section_header'); ?>
					</h2>
					<div class="solution-second-section-block-paragraph">
						<?php echo get_field('people_section_text'); ?>
					</div>
				</div>
			</div>

			<div class="solution-second-section-icons-block">
				<h3 class="solution-second-section-icons-title">
					<?php echo get_field('people_section_icons_title'); ?>
				</h3>
				<div class="solution-second-section-icon-wrapper">
					<?php if(get_field('people_section_icons')) : ?>
						<ul class="solution-second-section-icon-list">

							<?php foreach(get_field('people_section_icons') as $item) : ?>
								<li class="solution-second-section-icon-item">
									<div class="solution-second-section-icon-image">
										<img src="<?php echo $item['people_section_icon_image']; ?>" alt=""> 
									</div>
									<div class="solution-second-section-icon-caption">
										<?php echo $item['people_section_icon_caption']; ?>
									</div>
									<div class="solution-second-section-icon-link">
									<a href="<?php echo $item['people_section_icon_link']; ?>">Learn More</a>	
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Third section Assets -->
	<a name="assets"></a>
	<!-- <a name="solution-third-section"></a> -->
	<div id="solution-third-section" class="solution-section solution-third-section">
		<div class="solution-third-section-block">
			<div class="solution-third-section-image-wrapper">
				<img
					class="solution-third-section-image responsive-image"
					desktop-src="<?php echo get_field('assets_section_image_desktop'); ?>"
					tablet-src="<?php echo get_field('assets_section_image_tablet'); ?>"
				>
			</div>			
			<div class="solution-third-section-block-text">
				<h1 class="solution-third-section-block-title">
					<?php echo get_field('assets_section_header'); ?>
				</h1>
				<div class="solution-third-section-block-paragraph">
					<?php echo get_field('assets_section_text'); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- fourth section Crowds -->
	<a name="crowds"></a>
	<!-- <a name="solution-fourth-section"></a> -->
	<div id="solution-fourth-section" class="solution-section solution-fourth-section">
		<div class="solution-second-section-block">
			<div class="solution-second-section-text-block">
				<div class="solution-second-section-image-wrapper">
					<img
						class="solution-second-section-image responsive-image"
						desktop-src="<?php echo get_field('crowds_section_image_desktop'); ?>"
						tablet-src="<?php echo get_field('crowds_section_image_tablet'); ?>"
					>
				</div>
				
				<div class="solution-second-section-block-text">
					<h2 class="solution-second-section-block-title">
						<?php echo get_field('crowds_section_header'); ?>
					</h2>
					<div class="solution-second-section-block-paragraph">
						<?php echo get_field('crowds_section_text'); ?>
					</div>
				</div>
			</div>
			<div class="solution-second-section-icons-block">
				<h3 class="solution-second-section-icons-title">
					<?php echo get_field('crowds_section_icons_title'); ?>
				</h3>
				<div class="solution-second-section-icon-wrapper">
 					<?php if(get_field('crowds_section_icons')) : ?>
						<ul class="solution-second-section-icon-list">
							<?php foreach(get_field('crowds_section_icons') as $item) : ?>
								<li class="solution-second-section-icon-item">
									<div class="solution-second-section-icon-image">
										<img src="<?php echo $item['crowds_section_icon_image']; ?>" alt=""> 
									</div>
									<div class="solution-second-section-icon-caption">
										<?php echo $item['crowds_section_icon_caption']; ?>
									</div>
									<div class="solution-second-section-icon-link">
										<a href="<?php echo $item['crowds_section_icon_link']; ?>">Learn More</a>	
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>





	
	
	
</div>

<?php get_footer(); ?>
