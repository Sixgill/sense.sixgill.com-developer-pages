<?php get_header(); ?>
<section id="slider" class="force-full-screen full-screen">
	<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center">
				<p data-animate="fadeInDown" class="txtVideo">
					<?php
						echo getPageContentBySlug("home-video-text");
					?>
				</p>
				<button data-animate="fadeInDown" href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule" style="margin: 30px 0px 0px 0px;">SCHEDULE A DEMO</button>
			</div>
		</div>

		<div id="myVideo" class="video-wrap">
			<video poster="/wp-content/themes/sixgill/images/td/videos/videoscreenshot_beginning.jpg" preload="none" loop autoplay muted>
				<source src="/wp-content/themes/sixgill/images/td/videos/background-vid_1.mp4" type="video/mp4" />
				 <source src="/wp-content/themes/sixgill/images/td/videos/background-vid_1.ogv" type="video/ogv" />
				<source src="/wp-content/themes/sixgill/images/td/videos/background-vid_1.webm" type="video/webm" />
			</video>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
		</div>
	</div>
</section>

<!-- Content-->
	<a name="what"></a>
	<section id="content">

	<section id="what" class="container-fluid center clearfix nomargin nopadding">
		<section id="what2" class="container-fluid center clearfix" style="background-image: url('/wp-content/themes/sixgill/images/td/home/shapes1_1.jpg'); background-position:top; background-repeat:no-repeat; background-size:cover; background-color:#FFF; padding-top:195px; border:0px solid #FF0004;">
			<div align="center" style="margin-top:0px;">
				<?php echo getPageContentBySlug("home-text-2"); ?>
			</div>
		</section>

		<section id="after_what2" class="container-fluid center clearfix nomargin nopadding">
			<img src="/wp-content/themes/sixgill/images/td/home/00_FocusSection_v2.jpg" width="100%" alt=""/>
		</section>

	</section>

	<a name="products"></a>
	<section id="products" class="container-fluid center clearfix nomargin nopadding" style="background-image: url('/wp-content/themes/sixgill/images/td/home/00_BlueShape.jpg'); background-size:cover; height:171px;">
		<div class="home3Tit_SixGill"><?php echo getPageContentBySlug("home-text-3"); ?></div>
	</section>


	<section id="below_products" class="container-fluid center clearfix nomargin nopadding" align="center" style="padding-bottom:0px;">
		<img src="/wp-content/themes/sixgill/images/td/home/infographic.svg" alt="" style="padding:85px 50px 45px 50px;" />
		<div class="clear"></div>
		<a href="/product" class="button button-teal button-large nobottommargin btnSchedule">VIEW PRODUCTS</a>
	</section>

	<section id="after_products" class="container-fluid center clearfix nomargin nopadding">
		<img src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Upper.jpg" width="100%" alt=""/>
	</section>

	<a name="solutions"></a>
	<section id="solutions" class="container-fluid center clearfix nomargin nopadding" style="background-color:#2e2e2e;" >
		<div style="margin-top:20px;">
			<div class="container clearfix">
				<div class="col_one_third">
					<img src="/wp-content/themes/sixgill/images/td/home/iconPeople.png" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
					<?php echo getPageContentBySlug("home-people-proximity"); ?>
				</div>
				<div class="col_one_third">
					<img src="/wp-content/themes/sixgill/images/td/home/iconAssets.png" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
					<?php echo getPageContentBySlug("home-assets-proximity"); ?>
				</div>
				<div class="col_one_third col_last">
					<img src="/wp-content/themes/sixgill/images/td/home/iconCrowds.png" alt="" width="170" style="padding:60px 0px 38px 0px;"/><br>
				 <?php echo getPageContentBySlug("home-crowds-proximity"); ?>
				</div>
				<div style="margin-bottom:20px;">
					<a href="/solutions" class="button button-large nobottommargin btnSolutions" style="margin:30px 0px 0px 0px;">VIEW SOLUTIONS</a>
				</div>
			</div>
		</div>
	</section>

	<section id="before_clients" class="container-fluid center clearfix nomargin nopadding">
		<img src="/wp-content/themes/sixgill/images/td/home/00_IconsSection_Lower.jpg" width="100%" alt=""/>
	</section>

	<a name="clients"></a>
	<section id="clients" style="color:#FFFFFF;" align="center">
		<div style="padding:0px 50px;" align="center">
			<div class="fancy-title title-dotted-border title-center" style="width:720px;">
				<h3 style="font-size:20px; font-weight:normal; color:#383838;">Proven at Consumer Volumes</h3>
			</div>
			<div style="max-width:720px; margin-bottom:35px;">
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_att.jpg" alt="" /></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_rugby.jpg" alt="" /></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyautoshow.jpg" alt="" /></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyfashion.jpg" alt=""/></div>
				<div class="col_one_fifth col_last"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_livenation.jpg" alt=""/></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_lemon.jpg" alt=""/></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_img.jpg" alt=""/></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_hsbc.jpg" alt=""/></div>
				<div class="col_one_fifth"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_auburn.jpg" alt=""/></div>
				<div class="col_one_fifth col_last"><img src="/wp-content/themes/sixgill/images/td/home/logos/logo_nyjets.jpg" alt=""/></div>
				<a href="/company" class="button button-large nobottommargin btnCompany">VIEW COMPANY</a>
			</div>
		</div>
	</section>
</section><!-- #content end -->
<?php get_footer(); ?>
