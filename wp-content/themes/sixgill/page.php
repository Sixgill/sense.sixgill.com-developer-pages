<?php get_header(); ?>
<section id="slider" class="force-full-screen full-screen">
	<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" >
                            <div id="text-and-button-on-video" class="backgroundForTextVideoHome">  

				<p id="home-text-on-video" data-animate="fadeInDown" class="txtVideo sizeForTextVideoHome">
                    <?php echo get_field('blue_header_text_below_video'); ?>
					
				</p>
				<button id="home-button-on-video" data-animate="fadeInDown" href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule" style="margin: 30px 0px 0px 0px;">SCHEDULE A DEMO</button>
			</div>
            </div>
		</div>

		<div id="myVideo" class="video-wrap">
			<video id="home-video" poster="<?php echo get_field('top_banner'); ?>" preload="none" loop autoplay muted>
				<source src="<?php echo get_field('video_url'); ?>" type="video/mp4" />
				 <source src="<?php echo get_field('video_url_ogv'); ?>" type="video/ogv" />
				<source src="<?php echo get_field('video_url_webm'); ?>" type="video/webm" />
			</video>
			<div id="home-grid-video" class="video-overlay applying-layer-copperOnVideo" ></div>
		</div>
	</div>
</section>

<!-- Content-->
	<a name="what"></a>
	<section id="content">

	<section id="what" class="container-fluid center clearfix nomargin nopadding">
		<section id="what2" class="container-fluid center clearfix">
			<div align="center" class="home-text-2">
                
				<div id="home-subtitle-with-line" class="homeSupTit"><span class="homeSupTit-with-line"><?php echo get_field('the_text_on_the_line'); ?></span></div>

<hr class="hr-home-sup-title" />

<div id="home-title-blok-what2" class="homeTit"><?php echo get_field('large_text_title'); ?></div>
<div id="home-subtitle-under-title" class="homeSubTit"><?php echo get_field('the_text_below_the_title'); ?></div>

<hr class="hr-home-sub-title" />
<p id="home-main-text" style="max-width: 650px;" align="left"><?php echo get_field('main_text'); ?></p>
                
			</div>
		</section>

		<section id="after_what2" class="container-fluid center clearfix nomargin nopadding">
			<img id="home-image-background-after_what2" src="/wp-content/themes/sixgill/images/td/home/00_FocusSection_v2.jpg" width="100%" alt=""/>
		</section>

	</section>

	<a name="products"></a>
	<section id="products" class="container-fluid center clearfix nomargin nopadding">
		<div id="home-text-productions" class="home3Tit_SixGill"><?php echo get_field('text_productions'); ?></div>
	</section>


	<section id="below_products" class="container-fluid center clearfix nomargin nopadding" align="center" style="padding-bottom:0px;">
		<img id="home-image-infographic" src="/wp-content/themes/sixgill/images/td/home/infographic.svg" class="home-diagram hidden-top-imageDiagram" alt=""/>
        <img id="home-image-mobile-infographic" src="/wp-content/themes/sixgill/images/td/home/mobile_infographic.svg" class="home-diagram hidden-bottom-imageDiagram" alt=""/>
		<div class="clear"></div>
		<a href="/products" id="home-button-infographic" class="button button-teal button-large nobottommargin btnSchedule">VIEW PRODUCTS</a>
	</section>

	<section id="after_products" class="container-fluid center clearfix nomargin nopadding">
		<img id="home-background-after-products" src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Upper.jpg" width="100%" alt=""/>
	</section>

	<a name="solutions"></a>
	<section id="solutions" class="container-fluid center clearfix nomargin nopadding" style="background-color:#2e2e2e;" >
		<div style="margin-top:20px;">
			<div class="container clearfix">
				<div class="col_one_third">
                    <img id="home-image-proximity-people" src="<?php echo get_field('image_people_home'); ?>" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
                    <div id="home-title-proximity-people" class="home3Tit"><?php echo get_field('title_people'); ?></div>
                    <div id="home-text-proximity-people" class="home3Txt"><?php echo get_field('text_people'); ?></div>
                </div>
				<div class="col_one_third">
					<img id="home-image-proximity-assets" src="<?php echo get_field('image_assets_home'); ?>" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
                    <div id="home-title-proximity-assets" class="home3Tit"><?php echo get_field('title_assets'); ?></div>
                    <div id="home-text-proximity-assets" class="home3Txt"><?php echo get_field('text_assets'); ?></div>				
                </div>

				<div class="col_one_third col_last">
					<img id="home-image-proximity-crowds" src="<?php echo get_field('image_crowds_home'); ?>" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
                    <div id="home-title-proximity-crowds" class="home3Tit"><?php echo get_field('title_crowds'); ?></div>
                    <div id="home-text-proximity-crowds" class="home3Txt"><?php echo get_field('text_crowds'); ?></div>				
                </div>
				<div style="margin-bottom:20px;">
					<a href="/solutions" id="home-button-proximity-solutions" class="button button-large nobottommargin btnSolutions" style="margin:30px 0px 0px 0px;">VIEW SOLUTIONS</a>
				</div>
			</div>
		</div>
	</section>

	<section id="before_clients" class="container-fluid center clearfix nomargin nopadding">
		<img id="home-image-background-before_clients" src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Lower.jpg" width="100%" alt=""/>
	</section>

	<a name="clients"></a>
	<section id="clients" style="color:#FFFFFF;" align="center">
		<div align="center">
			<div class="fancy-title title-dotted-border title-center mobile-hiden-line">
				<h3 id="home-text-company-with-line" style="font-size:20px; font-weight:normal; color:#383838;"><?php echo get_field('logo_header_text'); ?></h3>
			</div>
            
			<div class="home-diagram hidden-top-imageDiagram" style="max-width:720px; margin-bottom:35px;">
                <?php foreach(get_field('logo_images_part1') as $logo) : ?>
                <div class="col_one_fifth"><img id="home-image-company-part1" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></div>
				<?php endforeach; ?>
				<div class="col_one_fifth col_last"><img id="home-last-image-company-part1" src="<?php echo get_field('last_image_logos1'); ?>" alt=""/></div>
            
                <?php foreach(get_field('logo_images_part2') as $logo) : ?>
                <div class="col_one_fifth"><img id="home-image-company-part2" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></div>
				<?php endforeach; ?>
				<div class="col_one_fifth col_last"><img id="home-image-company-part2" src="<?php echo get_field('last_image_logos2'); ?>" alt=""/></div>
				<a href="/company" class="button button-large nobottommargin btnCompany">VIEW COMPANY</a>
			</div>
        <div class="home-diagram hidden-bottom-imageDiagram">
            <div>
                <div style="width: 48%; float: left;"><img id="home-mobile-image-att" src="/wp-content/themes/sixgill/images/td/home/logos/logo_att.jpg" alt="" /></div>
                <div style="width: 48%; float: right; "><img id="home-mobile-image-rugby" src="/wp-content/themes/sixgill/images/td/home/logos/logo_rugby.jpg" alt="" /></div>
            </div>
            <div>
                <div style="width: 48%; float: left;"><img id="home-mobile-image-nyautoshow" src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyautoshow.jpg" alt="" /></div>
                <div style="width: 48%; float: right; "><img id="home-mobile-image-nyfashion" src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyfashion.jpg" alt="" /></div>
            </div>
            <div>
                <div style="width: 48%; float: left;"><img id="home-mobile-image-livenation" src="/wp-content/themes/sixgill/images/td/home/logos/logo_livenation.jpg" alt="" /></div>
                <div style="width: 48%; float: right; "><img id="home-mobile-image-lemon" src="/wp-content/themes/sixgill/images/td/home/logos/logo_lemon.jpg" alt="" /></div>
            </div>
            <div>
                <div style="width: 48%; float: left;"><img id="home-mobile-image-img" src="/wp-content/themes/sixgill/images/td/home/logos/logo_img.jpg" alt="" /></div>
                <div style="width: 48%; float: right; "><img id="home-mobile-image-hsbc" src="/wp-content/themes/sixgill/images/td/home/logos/logo_hsbc.jpg" alt="" /></div>
            </div>
            <div>
                <div style="width: 48%; float: left; padding-bottom: 20px; "><img id="home-mobile-image-auburn" src="/wp-content/themes/sixgill/images/td/home/logos/logo_auburn.jpg" alt="" /></div>
                <div style="width: 48%; float: right; padding-bottom: 20px; "><img id="home-mobile-image-nyjets" src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyjets.jpg" alt="" /></div>
            </div>
            
                        <div class="home-diagram hidden-bottom-imageDiagram" style="max-width:720px;">
 				<a href="/company" id="home-button-image-company" class="button button-large nobottommargin btnCompany">VIEW COMPANY</a>
            </div>
        </div>
    
        
		</div>
	</section>
</section><!-- #content end -->
<?php get_footer(); ?>
