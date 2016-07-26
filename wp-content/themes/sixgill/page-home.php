<?php get_header(); ?>
<section id="slider" class="force-full-screen full-screen height-video-container home-page-section fp-auto-height">
	<div class="force-full-screen full-screen dark section nopadding no-margin noborder ohidden height-video-container">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" >
				<div id="text-and-button-on-video" class="home-video-background">
					<h1 id="home-text-on-video" data-animate="fadeInDown" class="txtVideo home-video-text-h1">
					<?php echo get_field('blue_header_text_below_video'); ?>
					</h1>
					<button id="home-button-on-video" data-animate="fadeInDown" data-toggle="modal" data-target="#myModal" class="button button-large no-bottom-margin btnSchedule">
					SCHEDULE A DEMO
					</button>
				</div>
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
	<section id="what" class="container-fluid center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height">
		<section id="what2" class="container-fluid center clearfix">
			<div class="home-text-2 center">
				<div id="home-subtitle-with-line" class="homeSupTit">
					<span class="homeSupTit-with-line">
						<?php echo get_field('the_text_on_the_line'); ?>
					</span>
				</div>
				<hr class="hr-home-sup-title" />
				<div id="home-block-what2-title" class="homeTit">
					<?php echo get_field('large_text_title'); ?>
				</div>
				<div id="home-block-what2-subtitle" class="homeSubTit">
					<?php echo get_field('the_text_below_the_title'); ?>
				</div>
				<hr class="hr-home-sub-title" />
				<div id="home-main-text">
					<?php echo get_field('main_text'); ?>
				</div>
			</div>
		</section>
		<section id="after_what2" class="container-fluid center clearfix no-margin nopadding section-margin-fix">
			<img id="home-image-background-after_what2" src="/wp-content/themes/sixgill/images/td/home/00_FocusSection_v2.jpg" class="full-width" alt=""/>
		</section>
	</section>
	<a name="products"></a>
	<section id="products" class="container-fluid center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height">
		<div id="home-text-productions" class="home-products-title"><?php echo get_field('text_productions'); ?></div>
	</section>
	<section id="below_products" class="container-fluid center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height">
		<img id="home-image-infographic" src="/wp-content/themes/sixgill/images/td/home/infographic.svg" class="home-diagram display-only-desktop" alt=""/>
		<img id="home-image-mobile-infographic" src="/wp-content/themes/sixgill/images/td/home/mobile_infographic.svg" class="home-diagram hidden-bottom-imageDiagram no-desktop-display" alt=""/>
		<div class="clear"></div>
		<a href="/products/" id="home-button-infographic" class="button button-teal button-large no-bottom-margin btnSchedule">
			VIEW PRODUCTS
		</a>
	</section>
	<section id="after_products" class="container-fluid center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height">
		<img id="home-background-after-products" src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Upper.jpg" class="full-width" alt=""/>
	</section>
	<a name="solutions"></a>
	<section id="solutions" class="container-fluid background-2e2e2e center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height" >
		<div>
			<div class="container clearfix">
				<div class="col_one_third">
					<img id="home-image-proximity-people" src="<?php echo get_field('image_people_home'); ?>" alt=""/>
					<br>
					<div id="home-title-proximity-people" class="home3Tit">
						<?php echo get_field('title_people'); ?>
					</div>
					<div id="home-text-proximity-people" class="home3Txt">
						<?php echo get_field('text_people'); ?>
					</div>
				</div>
				<div class="col_one_third">
					<img id="home-image-proximity-assets" src="<?php echo get_field('image_assets_home'); ?>" alt=""/>
					<br>
					<div id="home-title-proximity-assets" class="home3Tit">
						<?php echo get_field('title_assets'); ?>
					</div>
					<div id="home-text-proximity-assets" class="home3Txt">
						<?php echo get_field('text_assets'); ?>
					</div>
				</div>
				<div class="col_one_third col_last">
					<img id="home-image-proximity-crowds" src="<?php echo get_field('image_crowds_home'); ?>" alt=""/>
					<br>
					<div id="home-title-proximity-crowds" class="home3Tit">
						<?php echo get_field('title_crowds'); ?>
					</div>
					<div id="home-text-proximity-crowds" class="home3Txt">
						<?php echo get_field('text_crowds'); ?>
					</div>
				</div>
				<div>
					<a href="/solutions/" id="home-button-proximity-solutions" class="button button-large no-bottom-margin btnSolutions" style="">
						VIEW SOLUTIONS
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="before_clients" class="container-fluid center clearfix no-margin nopadding section-margin-fix home-page-section fp-auto-height">
		<img id="home-image-background-before_clients" src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Lower.jpg" class="full-width" alt=""/>
	</section>
	<a name="clients"></a>
	<section id="clients" class="color-white center section-margin-fix home-page-section fp-auto-height">
		<div class="center home-clients-block">
			<div class="fancy-title-without-bottom fancy-title title-dotted-border title-center mobile-hiden-line">
				<h3 id="home-text-company-with-line">
				<?php echo get_field('logos_title'); ?>
				</h3>
			</div>
			<p class="logo-subheader">
				<?php echo get_field('logos_subtitle'); ?>
			</p>
			<div class="home-logos">
				<?php foreach(get_field('logos') as $logo) : ?><div class="home-logo-container center"><div class="vertical-centered"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></div></div><?php endforeach; ?>
				<div class="home-logo-container full-width no-margin">
					<a href="/company/" id="home-button-image-company" class="button button-large no-bottom-margin btnCompany">
						VIEW COMPANY
					</a>
				</div>
			</div>
		</div>
	</section>
	</section><!-- #content end -->
	<?php get_footer(); ?>