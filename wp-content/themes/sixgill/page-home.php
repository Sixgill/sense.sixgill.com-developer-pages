<?php get_header(); ?>
<div
	 id="fullpage-config"
	 fullpage-section-selector="home-page-section"
	 fullpage-navigation="true"
>
<a name="top"></a>
<section id="slider" class="force-full-screen full-screen height-video-container home-page-section fp-auto-height">
	<div class="force-full-screen full-screen dark section nopadding no-margin noborder ohidden height-video-container">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" >
				<div id="text-and-button-on-video" class="home-video-background">
					<h1 id="home-text-on-video" data-animate="fadeInDown" class="txtVideo home-video-text-h1">
					<?php echo get_field('blue_header_text_below_video'); ?>
					</h1>
					<button id="home-button-on-video" data-animate="fadeInDown" data-toggle="modal" data-target="#myModal" class="button button-green no-bottom-margin btnSchedule">
					Schedule a Demo
					</button>
				</div>
			</div>
			<div class="slider-learn-more-link no-mobile-portrait-display no-mobile-landscape-display">
				<a href="#what">
					<div class="home-first-section-scroll-link-wrapper">
						<div class="home-first-section-scroll-link-text">
							Learn More
						</div>
						<div class="home-first-section-scroll-link-ico-wrapper">
							<!-- <img
								class="home-first-section-scroll-link-ico responsive-image"
								desktop-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
								tablet-src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
							/> -->
							<img 
							class="home-first-section-scroll-link-ico"
							src="<?php echo get_template_directory_uri();?>/images/icon_down.png"
							/>
						</div>
					</div>
				</a>
			</div>
		</div>
		


		<div id="myVideo" class="video-wrap">
			<video id="home-video" poster="<?php echo get_field('top_banner'); ?>" preload="none" loop autoplay muted>
				<source src="<?php echo get_field('video_url'); ?>" type="video/mp4">
				<source src="<?php echo get_field('video_url_ogv'); ?>" type="video/ogv">
				<source src="<?php echo get_field('video_url_webm'); ?>" type="video/webm">
			</video>
			<div id="home-grid-video" class="video-overlay applying-layer-copperOnVideo" ></div>
		</div>
	</div>
</section>
<!-- Content-->
<a name="what"></a>
<section id="content">
	<section id="what" class="container-fluid center clearfix no-margin nopadding section-margin-fix full-screen-height home-page-section fp-auto-height">
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
		<div class="home-block-what-wrapper">
			<div class="home-block-what-col">
				<div class="home-block-what-item">
					<img class="home-block-what-item-icon no-mobile-portrait-display no-mobile-landscape-display" src="<?php echo get_field('section_what_block-1_icon'); ?>" alt=""/>
					<div class="home-block-what-item-title"> <?php echo get_field('section_what_block-1_title'); ?> </div>
					<div class="home-block-what-item-text"> <?php echo get_field('section_what_block-1_text'); ?> </div>
				</div>
				<div class="clear"></div>
				<div class="home-block-what-item">
					<img class="home-block-what-item-icon no-mobile-portrait-display no-mobile-landscape-display" src="<?php echo get_field('section_what_block-2_icon'); ?>" alt=""/>
					<div class="home-block-what-item-title"> <?php echo get_field('section_what_block-2_title'); ?> </div>
					<div class="home-block-what-item-text"> <?php echo get_field('section_what_block-2_text'); ?> </div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="home-block-what-col">
				<div class="home-block-what-item">
					<img class="home-block-what-item-icon no-mobile-portrait-display no-mobile-landscape-display" src="<?php echo get_field('section_what_block-3_icon'); ?>" alt=""/>
					<div class="home-block-what-item-title"> <?php echo get_field('section_what_block-3_title'); ?> </div>
					<div class="home-block-what-item-text"> <?php echo get_field('section_what_block-3_text'); ?> </div>
				</div>
				<div class="clear"></div>
				<div class="home-block-what-item">
					<img class="home-block-what-item-icon no-mobile-portrait-display no-mobile-landscape-display" src="<?php echo get_field('section_what_block-4_icon'); ?>" alt=""/>
					<div class="home-block-what-item-title"> <?php echo get_field('section_what_block-4_title'); ?> </div>
					<div class="home-block-what-item-text"> <?php echo get_field('section_what_block-4_text'); ?> </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<a name="products"></a>
	<section id="products" class="container-fluid center clearfix no-margin nopadding section-margin-fix full-screen-height home-page-section fp-auto-height">
		<div id="home-block-products-title" class="home-block-products-title"><?php echo get_field('text_productions'); ?></div>
		<img id="home-image-infographic" src="<?php echo get_field('flow_chart_image'); ?>" class="home-block-products-diagram display-only-desktop" alt=""/>
		<!-- 		<img id="home-image-infographic" src="/wp-content/themes/sixgill/images/4-Home/infographic.svg" class="home-block-products-diagram display-only-desktop" alt=""/> -->
		<img id="home-image-infographic" src="<?php echo get_field('flow_chart_image'); ?>" class="home-block-products-diagram display-only-tablet" alt=""/>
		<img id="home-image-mobile-infographic" src="<?php echo get_field('flow_chart_image_mobile_size'); ?>" class="home-diagram hidden-bottom-imageDiagram no-desktop-display no-tablet-display" alt=""/>
		<!-- 		<img id="home-image-mobile-infographic" src="/wp-content/themes/sixgill/images/4-Home/mobile_infographic.svg" class="home-diagram hidden-bottom-imageDiagram no-desktop-display" alt=""/> -->
		<div class="clear"></div>
		<div id="home-block-products-subtitle" class="home-block-products-subtitle"><?php echo get_field('before_button_text'); ?></div>
		<a href="/products/" id="home-button-infographic" class="button button-blue">
			View Products
		</a>
	</section>
	<a name="solutions"></a>
	<section id="solutions" class="clearfix center no-margin nopadding section-margin-fix full-screen-height home-page-section fp-auto-height" >
		<div class="home-block-solutions-title">
			<?php echo get_field('solution_title'); ?>
		</div>
		<div class="home-block-solutions-subtitle">
			<?php echo get_field('solution_subtitle'); ?>
		</div>
		<a class="home-block-solutions-see-more-link" href="/solutions/">See All Use Cases</a>
		<div id="home-block-solutions-carousel" class="home-block-solutions-carousel">
			<?php query_posts
			(array(
				'post_parent' => 36,
				'post_type' => 'page'
				));
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="home-block-solutions-carousel-slide">
					<div class="carousel-image-wrapper">
						<?php the_post_thumbnail('home-solutions-slider');?>
					</div>
					<div class="carousel-text-wrapper">
						<div class="carousel-text-caption-wrapper">
							<span class="carousel-text-caption">
								<?php the_title();?>
							</span>
						</div>
						<div class="carousel-text-content-wrapper">
							<hr class="carousel-text-content-line">
							<div class="carousel-text-content">
								<?php echo limit_words(get_field('first_section_text'), '29'); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="carousel-text-content-link-more">> Learn More</a>
						</div>
					</div>
				</div>
			<?php endwhile; else: endif;  wp_reset_query(); ?>
		</div>
	</section>
	<a name="clients"></a>
	<section id="clients" class="center section-margin-fix home-page-section fp-auto-height">
		<hr class="home-block-clients-line-before-title">
		<div class="home-block-clients-title">
			<?php echo get_field('logos_title'); ?>
		</div>
		<p class="home-block-clients-subtitle">
			<?php echo get_field('logos_subtitle'); ?>
		</p>
		<div class="home-logos">
			<?php foreach(get_field('logos') as $logo) : ?><div class="home-logo-container center"><div class="vertical-centered"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></div></div><?php endforeach; ?>
			<!-- 			<div class="home-logo-container full-width no-margin">
					<a href="/company/" id="home-button-image-company" class="button button-large no-bottom-margin btnCompany">
							VIEW COMPANY
					</a>
			</div> -->
		</div>
	</section>
</section><!-- #content end -->
</div>
<?php get_footer(); ?>