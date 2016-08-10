 <?php get_header(); ?>

<a
	href="#home-second-section"
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
	<div id="home-first-section" class="home-section home-first-section">
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

	<div id="home-second-section" class="home-section home-second-section">
		<div class="home-second-section-wrapper">
			<div class="home-second-section-header-wrapper">
				<div class="home-second-section-header-top">
					<div class="home-second-section-header-top-line"></div>
					<div class="home-second-section-header-top-title">
						We are experts in helping you
					</div>
					<div class="home-second-section-header-top-line"></div>
				</div>
				<h2 class="home-second-section-title">
					TRACK, DETERMINE AND ACT
				</h2>
				<div class="home-second-section-subtitle">
					on the ever-changing relationships between people, places and things essential to your success.
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
								Drive Business Value
							</h3>
							With our market-proven enterprise proximity platform, customers can Track the key people, places, and things that matter to them, Determine proximity and intent, and Act to drive business value.
						</div>
					</div>

					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconEngine.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								Enterprise proximity platform
							</h3>
							Our proximity engine—at the heart of the platform—has normalized 1.5 billion multidimensional measurements and triggered 25 million context-sensitive actions for our customers. And counting.
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
								TURN MOBILITY INTO AN ASSET
							</h3>
							We turn the increasing mobility of the enterprise workforce and the connected nature of the Internet of Things into a business asset, converting vast amounts of location and sensor data into understandable analytics and targeted action.
						</div>
					</div>

					<div class="home-second-section-block">
						<div class="home-second-section-icon-wrapper">
							<img class="home-second-section-icon" src="/wp-content/themes/sixgill/images/home/iconTarget.svg">
						</div>
						<div class="home-second-section-block-content">
							<h3 class="home-second-section-block-title">
								ONE FOCUS
							</h3>
							At Sixgill we have one focus—to enable our customers to embrace mobility as an asset while maintaining the control they need to maximize value.
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="home-third-section" class="home-section home-third-section">
		<div class="home-third-section-wrapper">
			<h2 class="home-third-section-title">
					Sixgill SenseTM tracks, determines, and acts on the changing proximity of people, places and things.
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

	<div id="home-fourth-section" class="home-section home-fourth-section">
		<div class="home-fourth-section-wrapper">
			<div class="home-fourth-section-header-wrapper">
				<h2 class="home-fourth-section-title">
					Proximity for the People, Assets and Crowds
				</h2>
				<div class="home-fourth-section-subtitle">
					Lorem ipsum dolor sit amet consectetur adipisicing elit incidunt ut labore et dolore magna alique minim veniam.
				</div>
				<a href="/solutions/" class="home-fourth-section-link">
					See All Use Cases
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
										Learn More
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; else: endif;  wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="home-fifth-section" class="home-section home-fifth-section">
		<div class="home-fifth-section-wrapper">
			<div class="home-fifth-section-header-wrapper">
				<div class="home-fifth-section-dash"></div>
				<h2 class="home-fifth-section-title">
					PROVEN AT CONSUMER VOLUMES
				</h2>
				<div class="home-fifth-section-subtitle">
					Sixgill provides proximity enablement for mobile apps including mobile program customers of Lemon.
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
