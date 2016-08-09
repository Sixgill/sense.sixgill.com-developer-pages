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
	<a name="company-second-section"></a>
	<div id="company-second-section" class="company-section company-second-section">
		<div class="inline-block full-width">
			<div class="company-second-section-text">
			<p>
				Sixgill Sense tracks, determines, and acts on the changing proximity of people, places, and things. Your world is complex. Today�s enterprise has an ever-expanding mobile workforce and increasingly sophisticated, connected assets.

Sixgill Sense allows you to understand and harness this mobility and use it to your advantage, gaining awareness and insight, and driving contextual, proximity-based actions to make your organization safer, more productive and profitable.THIS WILL BE THE TEAM CONTAINER, LATER
</p>
			</div>
		</div>
	</div>
	<div id="company-third-section" class="company-section company-third-section">
		<div class="inline-block full-width">
			<div class="company-third-section-text">
				<h1 class="company-third-section-title">
					The Board
				</h1>
			</div>
			<div class="company-third-section-rows">
				<div class="company-third-section-left company-third-section-row-item">
					<p class="company-third-section-name">Harry Hopper</p>
					<p class="company-third-section-job">Executive Chairman</p>
					<p class="company-third-section-bio"><span class="company-third-section-list-dot">•</span>25+ years investing in 
					   Telecom/Mobile/IT

					<br><br><span class="company-third-section-list-dot">•</span> Columbia Capital, Senior Advisor 
					   (formerly Managing Partner and 
					   Partner 20 yrs; $2.5B under
					   management)

					<br><br><span class="company-third-section-list-dot">•</span> President telecom investment bank, 
					   Entrepreneur/Founder 2 venture 
					   backed 

					<br><br><span class="company-third-section-list-dot">•</span> Boards: Open Mobile, Mobile Posse; 
					   LendPro. Former: MetroPCS (PCS); 
					   Equinix (EQIX), Pegasus (PGTV),  
					   DSL.net (DSLN): Private 5 mobile 
					   operators, 10 Media, IT Service Co.’s

					<br><br><span class="company-third-section-list-dot">•</span> Forbes Midas List
					</p>
				</div>
				<div class="company-third-section-center company-third-section-row-item">
					<p class="company-third-section-name">Phil Ressler</p>
					<p class="company-third-section-job">CEO</p>
					<p class="company-third-section-bio">Phil has been serially involved in building companies and expanding markets for a wide range of innovators in enterprise data availability, comprehension and collaboration spanning the mobile, web, networking and PC eras. See Phil’s full bio above in Team.
					</p>
				</div>
				<div class="company-third-section-right company-third-section-row-item">
					<p class="company-third-section-name">Christopher Rogers</p>
					<p class="company-third-section-job">Director</p>
					<p class="company-third-section-bio"><span class="company-third-section-list-dot">•</span>Co-Founder of Nextel Communications

						<br><br><span class="company-third-section-list-dot">•</span> Director at LightSquared, PlayStar,  
						   and the Wireless Board Registry

						<br><br><span class="company-third-section-list-dot">•</span> Partner at Lumia Capital
					</p>
				</div>
			</div>
		</div>
	</div>
<!-- 	<a name="company-second-section"></a>
	<div id="company-second-section" class="company-section company-second-section">
		<div class="company-second-section-wrapper">
			<div class="company-second-section-block-text">
				<h1 class="company-second-section-block-title">
					Leadership
				</h1>
				<p></p>
			</div>
			<div class="company-second-section-team-container">
				<div class="company-second-section-block-text">
					<h2 class="company-second-section-block-title">
						Phil Ressler
					</h2>
					<p class="company-second-section-team-job">Chief Executive Officer</p>
					<p class="company-second-section-team-bio">Phil has been serially involved in building companies and expanding markets for a wide range of innovators in enterprise data availability, comprehension and collaboration spanning the mobile, web, networking and PC eras.</p>
					<p class="company-second-section-team-bio-toggle">Learn More</p>
				</div>
				
			</div>
		</div>

	</div> -->



	<?php get_footer(); ?>
