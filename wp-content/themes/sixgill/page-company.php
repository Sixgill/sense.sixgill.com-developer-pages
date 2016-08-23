<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>
	<div class="company-section company-first-section">
		<div class="company-first-section-block">
			<div
				class="company-first-section-image-wrapper responsive-background"
				desktop-src="<?php echo get_field('first_section_image_desktop'); ?>"
			>
				<img
					class="company-first-section-image responsive-image"
					tablet-src="<?php echo get_field('first_section_image_tablet'); ?>"
					mobile-src="<?php echo get_field('first_section_image_mobile'); ?>"
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
		</div>

		<a
			href="#leadership"
			class="scroll-section company-learn-more-link"
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
	</div>
	<a name="leadership"></a>
	<div id="leadership" class="company-section company-second-section">
		<div class="inline-block full-width">
			<div class="company-second-section-block">
			<h1 class="company-second-section-block-title">
				<?php echo get_field('leadership_title'); ?>
			</h1>
			<?php foreach(get_field('leadership_staff') as $team) : ?>
				<div class="company-second-section-team">
					<div class="company-second-section-rows">
						<div class="company-second-section-image-wrapper">
							<img class="company-second-section-image" src="<?php echo $team['photo']; ?>">
						</div>
						<div class="company-second-section-team-description">
							<div class="company-second-section-row-item">
								<p class="company-second-section-name"><?php echo $team['name']; ?></p>
							</div>
							<div class="company-second-section-row-item">
								<p class="company-second-section-job"><?php echo $team['title']; ?></p>
							</div>
							<div class="company-second-section-row-item">
								<div class="company-second-section-bio"><?php echo $team['short_bio']; ?></div>
								<div class="company-second-section-bio-full"><br><?php echo $team['more_bio']; ?></div>
								<p class="company-second-section-more-trigger">
									<a class="learn-more-link">
										<span class="learn-more-title">Learn More</span>
										<span class="learn-more-expand-icon">
											&or;
										</span>
										<span class="learn-more-close-icon">
											&and;
										</span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
	<a name="board"></a>
	<div id="board" class="company-section company-third-section">
		<div class="inline-block full-width">
			<div class="company-third-section-text">
				<h1 class="company-third-section-title">
					<?php echo get_field('board_title'); ?>
				</h1>
			</div>
			<div class="company-third-section-rows">
				<?php foreach(get_field('board') as $board) : ?>
					<div class="company-third-section-left company-third-section-row-item">
						<p class="company-third-section-name"><?php echo $board['name']; ?></p>
						<p class="company-third-section-job"><?php echo $board['title']; ?></p>
						<div class="company-third-section-bio">
							<?php echo $board['bio']; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>



	<?php get_footer(); ?>
