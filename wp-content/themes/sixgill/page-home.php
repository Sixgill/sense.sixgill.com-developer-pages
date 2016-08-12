 <?php get_header(); ?>

<a
	href="#what"
	class="home-learn-more-link"
>
	<div class="home-first-section-scroll-link-wrapper">
		<div class="home-first-section-scroll-link-text">
			What's Sixgill?
		</div>
		<div class="home-first-section-scroll-link-ico-wrapper">
			<img
				class="home-first-section-scroll-link-ico responsive-image"
				desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
				tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
			/>
		</div>
	</div>
</a>

<div id="home-fullpage-wrapper" class="full-width">
	<div id="home-first-section" data-anchor="video" class="home-section home-first-section">
		<video autoplay loop muted id="home-video" class="home-first-section-video display-only-desktop">
			<source src="<?php echo get_field('video_url'); ?>" type="video/mp4">
			<source src="<?php echo get_field('video_url_ogv'); ?>" type="video/ogv">
			<source src="<?php echo get_field('video_url_webm'); ?>" type="video/webm">
		</video>

		<div class="home-first-section-block">
			<div class="home-first-section-block-text">
				<div class="home-first-section-text">
					<?php echo get_field('blue_header_text_below_video'); ?>
				</div>
				<button
					id="home-button-on-video"
					data-toggle="modal"
					data-target="#myModal"
					class="button button-green no-bottom-margin btnSchedule"
				>
					Schedule a Demo
				</button>
			</div>
		</div>
	</div>

	<div id="home-second-section" data-anchor="what" class="home-section home-second-section">
		<div class="home-second-section-wrapper">
			<div class="home-second-section-header-wrapper">
				<div class="home-second-section-header-top">
					<div class="home-second-section-header-top-line"></div>
					<div class="home-second-section-header-top-title">
						<?php get_field('second_section_sup_title'); ?>
					</div>
					<div class="home-second-section-header-top-line"></div>
				</div>
				<h2 class="home-second-section-title">
					<?php get_field('second_section_title'); ?>
				</h2>
				<div class="home-second-section-subtitle">
					<?php get_field('second_section_sub_title'); ?>
				</div>
			</div>
			<div class="home-second-section-content-wrapper">
				<div class="home-second-section-row">
					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconCheckmark.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								<?php get_field('second_section_first_block_title'); ?>
							</h3>
							<?php get_field('second_section_first_block_text'); ?>
						</div>
					</div>

					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconEngine.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								<?php get_field('second_section_second_block_title'); ?>
							</h3>
							<?php get_field('second_section_second_block_text'); ?>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<div class="home-second-section-row">
					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconTruck.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								<?php get_field('second_section_third_block_title'); ?>
							</h3>
							<?php get_field('second_section_third_block_text'); ?>
						</div>
					</div>

					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconTarget.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								<?php get_field('second_section_fourth_block_title'); ?>
							</h3>
							<?php get_field('second_section_fourth_block_text'); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="home-third-section" data-anchor="chart" class="home-section home-third-section">
		<div class="home-third-section-wrapper">
			<h2 class="home-third-section-title">
					Sixgill Sense<sup class="home-third-section-title-tm">TM</sup> tracks, determines, and acts on the changing proximity of people, places and things.
			</h2>
			<div class="home-third-section-image-wrapper">
				<img class="home-third-section-image responsive-image"
          desktop-src="/wp-content/themes/sixgill/images/home/infographic.svg"
          tablet-src="/wp-content/themes/sixgill/images/home/infographic.svg"
          mobile-src="/wp-content/themes/sixgill/images/home/mobile_infographic.svg"
        >
			</div>
			<div class="home-third-section-bottom-part-wrapper">
				<div class="home-third-section-bottom-part-text">
					See what the Sixgill Sense Platform can do for your company.
				</div>
				<a href="/products/" class="button button-blue home-third-section-button">
					View Products
				</a>
			</div>
		</div>
	</div>

	<div id="home-fourth-section" data-anchor="usecases" class="home-section home-fourth-section">
		<div class="home-fourth-section-wrapper">
			<div class="home-fourth-section-header-wrapper">
				<h2 class="home-fourth-section-title">
					<?php get_field('fourth_section_title'); ?>
				</h2>
				<div class="home-fourth-section-subtitle">
					<?php get_field('fourth_section_subtitle'); ?>
				</div>
				<a href="/solutions/" class="home-fourth-section-link">
					Explore Example Use Cases
				</a>
			</div>
			<div class="home-fourth-section-carousel-wrapper">
				<div id="home-fourth-section-carousel" class="home-fourth-section-carousel">
					<?php query_posts
					(array(
						'post_parent' => 36,
						'post_type' => 'page'
						));
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="home-fourth-section-carousel-slide">
							<div class="home-fourth-section-carousel-image-wrapper">
								<?php the_post_thumbnail('home-solutions-slider');?>
							</div>
							<div class="home-fourth-section-carousel-text-wrapper">
								<div class="home-fourth-section-carousel-text-caption-wrapper">
									<span class="home-fourth-section-carousel-text-caption">
										<?php the_title();?>
									</span>
								</div>
								<div class="home-fourth-section-carousel-text-content-wrapper">
									<hr class="home-fourth-section-carousel-text-content-line">
									<div class="home-fourth-section-carousel-text-content">
										<?php echo limit_words(get_field('first_section_text'), '20'); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="home-fourth-section-carousel-link-more">
										> Learn More
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; else: endif;  wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="home-fifth-section" data-anchor="consumers" class="home-section home-fifth-section">
		<div class="home-fifth-section-wrapper">
			<div class="home-fifth-section-header-wrapper">
				<div class="home-fifth-section-dash"></div>
				<h2 class="home-fifth-section-title">
					<?php get_field('fifth_section_title'); ?>
				</h2>
				<div class="home-fifth-section-subtitle">
					<?php get_field('fifth_section_subtitle'); ?>
				</div>
			</div>

			<div class="home-fifth-section-logos-wrapper">
        <?php foreach(get_field('logos') as $logo) : ?>
          <div class="home-fifth-section-logo-wrapper">
  					<img class="home-fifth-section-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
  				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
