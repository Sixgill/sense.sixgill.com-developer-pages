<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url('../wp-content/themes/sixgill/images/td/hero/dollarphotoclub_79195916_web.jpg'); background-position: center top;"></div>
			</div>
		</div>
	</div>
</section>

<!-- Content-->
<a name="company"></a>
<section id="content">
	<div class="content-wrap" style="padding-bottom:0px;">

		<div class="header-stick" id="company" style="background-color:#F8F8F8; border:0px solid #FF0004;">
			<div class="container-fluid center clearfix" style="padding-top:75px; max-width:1100px;  border:0px solid #FF0004;">
        <div class="col_one_third my_titSolutions">THE COMPANY</div>
				<div class="col_two_third col_last text-left my_txtSolutions">
					<p class="pSolutions">
					<?php echo getPageContentBySlug("company-the-company"); ?>
					</p>
				</div>
			</div>
		</div>

		<div class="clear"></div>
		<div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
			<img src="/wp-content/themes/sixgill/images/td/company_fig1.png" alt="" width="100%"/>
		</div>



	<a name="team"></a>
	<div id="team" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
		<div class="container-fluid center clearfix my_containerSolution">
			<div align="center"><p class="btnInside">OUR TEAM</p></div>

			<p class="pCompany">
						<div class="col_one_third mobile-position-center text-right"><img src="/wp-content/themes/sixgill/images/td/company/tbn_phil.png" width="170" alt=""/></div>
						<div class="col_two_third col_last text-left" style="padding-bottom:55px;">
							<?php echo getPageContentBySlug("team-phil-ressler"); ?>
						</div>

						<div class="col_one_third mobile-position-center" align="right"><img src="/wp-content/themes/sixgill/images/td/company/tbn_jeff.png" width="170" alt=""/></div>
						<div class="col_two_third col_last" align="left" style="padding-bottom:55px;">
							<?php echo getPageContentBySlug("team-jeff-ester"); ?>
						</div>

						<div class="col_one_third mobile-position-center" align="right"><img src="/wp-content/themes/sixgill/images/td/company/tbnmike.png" width="170" alt=""/></div>
						<div class="col_two_third col_last" align="left" style="padding-bottom:55px;">
							<?php echo getPageContentBySlug("team-mike-horowitz"); ?>
						</div>

						<div class="col_one_third mobile-position-center" align="right"><img src="/wp-content/themes/sixgill/images/td/company/tbnshawn.png" width="170" alt=""/></div>
						<div class="col_two_third col_last" align="left" style="padding-bottom:55px;">
							<?php echo getPageContentBySlug("team-shawn-gunn"); ?>
						</div>

						<div class="col_one_third mobile-position-center" align="right"><img src="/wp-content/themes/sixgill/images/td/company/tbnarnold.png" width="170" alt=""/></div>
						<div class="col_two_third col_last" align="left" style="padding-bottom:55px;">
							<?php echo getPageContentBySlug("team-arnold-waldstein"); ?>
						</div>

						<div class="col_one_third mobile-position-center" align="right"><img src="/wp-content/themes/sixgill/images/td/company/tbnjohn.png" width="170" alt=""/></div>
						<div class="col_two_third col_last" align="left" style="padding-bottom:0px;">
							<?php echo getPageContentBySlug("team-john-dohm"); ?>
						</div>

					</p>

		</div>
	</div>



		<section id="before_board" class="container-fluid center clearfix nomargin nopadding">
			<img src="/wp-content/themes/sixgill/images/td/company/00_BoardSection.jpg" width="100%" alt=""/>
		</section>

		<a name="board"></a>
		<section id="board" style="background-color:#2e2e2e; color:#FFFFFF;">
			<div class="container-fluid center clearfix notopmargin notoppadding" style="max-width:1200px;  border:0px solid #FF0004; padding-left: 6%; text-align: center;">
				<div align="center"><p class="btnInside" style="color:#FFFFFF; border-color:#FFF;">The Board</p></div>
				<p class="pCompany">
						<div class="col_one_third" align="left">
							<?php echo getPageContentBySlug("company-harry-hopper"); ?>
						</div>
						<div class="col_one_third" align="left">
							<?php echo getPageContentBySlug("company-phil-ressler"); ?>
						</div>
						<div class="col_one_third col_last" align="left" style="padding:0px 0px 0px 0px;">
							<?php echo getPageContentBySlug("company-christopher-rogers"); ?>
						</div>
					</p>
			</div>
		</section>

		<div class="clear"></div>
		<div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
			<img src="/wp-content/themes/sixgill/images/td/company/shape3_v5.png" alt="" width="100%"/>
		</div>

		<section id="press" style="background-color:#ffffff;">
			<div class="container-fluid center clearfix notopmargin notoppadding" style="max-width:1200px;  border:0px solid #FF0004; padding-left: 6%; text-align: center;">
				<div align="center"><p class="btnInside" style="width: 370px;">Latest press and news</p></div>
				<p class="pCompany">
					<div class="col_half" align="left">
						<?php dynamic_sidebar( 'sixgill-company-latest-press' ); ?>
					</div>
					<div class="col_half" style="margin-right: 0px;" align="left">
						<?php dynamic_sidebar( 'sixgill-company-latest-news' ); ?>
					</div>
				</p>
			</div>
		</section>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>
