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



	<a name="home-first-section"></a>
	<div id="home-first-section" class="home-section home-first-section">
		<video autoplay loop muted id="home-video">
			<source src="<?php echo get_field('video_url'); ?>" type="video/mp4">
			<source src="<?php echo get_field('video_url_ogv'); ?>" type="video/ogv">
			<source src="<?php echo get_field('video_url_webm'); ?>" type="video/webm">
		</video>

		<div class="home-first-section-block">
			<div class="home-first-section-block-text">
				<div id="home-text-on-video" data-animate="fadeInDown" class="txtVideo home-video-text-h1">
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

	<div id="home-section-what" class="home-section home-section-what">
		<div class="home-block-what-title-wrapper">
			<div class="home-block-what-subtitle-on-line">
				<?php echo get_field('the_text_on_the_line'); ?>
			</div>
			<hr class="hr-home-suptitle-line no-mobile-portrait-display no-mobile-landscape-display" />
			<div class="home-block-what-title">
				<?php echo get_field('large_text_title'); ?>
			</div>
			<div class="home-block-what-subtitle">
				<?php echo get_field('the_text_below_the_title'); ?>
			</div>
			<hr class="hr-home-suptitle-line" />
		</div>



	</section>

<?php get_footer(); ?>
