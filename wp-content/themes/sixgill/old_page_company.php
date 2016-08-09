<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>
	<section id="slider" class="slider-parallax swiper_wrapper clearfix">
		<div class="slider-parallax-inner">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('../wp-content/themes/sixgill/images/td/hero/dollarphotoclub_79195916_web.jpg'); background-position: center center;"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Content-->
	<a name="company"></a>
	<section id="content" class="section-margin-fix">
		<div class="content-wrap" style="padding-bottom:0px;">

			<div class="header-stick background-f8f8f8 no-border indent-from-slider" id="company">
				<div class="container-fluid center clearfix no-border company-top-spacing">
					<div class="col_one_third title-left-col company-top-title-spacing">
						<h1 class="company-h1"><?php echo get_field('about_header'); ?></h1>
					</div>
					<div class="col_two_third col_last text-left text-right-col">
						<?php echo get_field('top_text_left'); ?>
					</div>
				</div>
			</div>

			<div class="clear"></div>
			<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
				<img src="/wp-content/themes/sixgill/images/td/company_fig1.png" alt="" class="full-width"/>
			</div>



			<a name="team"></a>
			<div id="team" class="container-fluid background-white clearfix no-margin nopadding">
				<div class="container-fluid center clearfix my_containerSolution">
					<div class="center">
						<p class="btnInside">
							<?php echo get_field('team_header'); ?>
						</p>
					</div>


					<p class="pCompany">

						<?php if(get_field('team')) : ?>
							<?php $i = 0; foreach(get_field('team') as $item) : $i++; ?>
								<?php if($i == 1) : ?>

									<div class="col_one_third mobile-position-center text-right">
										<img src="<?php echo $item['photo']; ?>" width="170" alt=""/>
									</div>

								<?php else: ?>

									<div class="col_one_third mobile-position-center" align="right">
										<img src="<?php echo $item['photo']; ?>" width="170" alt=""/>
									</div>

								<?php endif; ?>

								<div class="col_two_third col_last text-left" style="padding-bottom:55px;">

									<div class="mobile-position-center">
										<span class="companyName">
											<?php echo $item['name']; ?>
										</span>
										<br>
										<span class="companyJob">
											<?php echo $item['title']; ?>
										</span>
										<br>
									</div>

									<span class="companyDescription">
										<?php echo $item['bold_bio']; ?>
									</span>
									<div class="company-learn-more-text">
										<?php echo $item['regular_bio']; ?>
									</div>

									<div class="mobile-position-center">
										<a class="learn-more-link" href="#">
											Learn More
											<span class="learn-more-expand-icon">
												&or;
											</span>
											<span class="learn-more-close-icon">
												&and;
											</span>
										</a>
									</div>

								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<section id="before_board" class="container-fluid center clearfix no-margin nopadding section-margin-fix">
				<img src="/wp-content/themes/sixgill/images/td/company/00_BoardSection.jpg" class="full-width" alt=""/>
			</section>

			<a name="board"></a>
			<section id="board" class="color-white section-margin-fix">
				<div class="container-fluid center clearfix no-top-margin no-top-padding no-border" style="max-width:1200px; padding-left: 6%; text-align: center;">
					<div class="center">
						<p class="btnInside color-white" style="border-color:#FFF;">
							The Board
						</p>
					</div>
					<p class="pCompany">


						<?php if(get_field('board')) : ?>
							<?php $i = 0; foreach(get_field('board') as $item) : $i++; ?>
								<?php if($i % 3 == 0) : ?>

									<div class="col_one_third col_last" align="left" style="padding:0px 0px 0px 0px;">
										<span class="companyName">
											<?php echo $item['name']; ?>
										</span>
										<br>
										<span class="companyJob">
											<?php echo $item['title']; ?>
										</span>
										<br>
										<div class="hrSmallWhite" align="left"></div>
										<?php echo $item['bio']; ?>
									</div>
									<?php break; ?>
								<?php endif; ?>

								<div class="col_one_third" align="left">
									<span class="companyName">
										<?php echo $item['name']; ?>
									</span>
									<br>
									<span class="companyJob">
										<?php echo $item['title']; ?>
									</span>
									<br>
									<div class="hrSmallWhite" align="left"></div>
									<?php echo $item['bio']; ?>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</p>
				</div>
			</section>

			<div class="clear"></div>
			<div class="container-fluid clearfix background-f8f8f8 no-margin nopadding">
				<img src="/wp-content/themes/sixgill/images/td/company/shape3_v5.png" alt="" class="full-width"/>
			</div>

			<a name="press"></a>
			<section id="press" class="background-white section-margin-fix">

				<div class="container-fluid center no-border clearfix no-top-margin no-padding center" style="max-width:1200px;">
					<div class="center">
						<p class="btnInside company-single-post-title">
							Latest press and news
						</p>
					</div>
				</div>

				<div class="container-fluid center no-border clearfix no-top-margin no-top-padding" style="max-width:1200px; padding-left: 9%; text-align: center;">

					<p class="pCompany">
						<div class="col_half" align="left" style=" margin-bottom: 0px;">
							<?php dynamic_sidebar( 'sixgill-company-latest-press' ); ?>
						</div>
						<div class="col_half" style="margin-right: 0px; margin-bottom: 0px;" align="left">
							<?php dynamic_sidebar( 'sixgill-company-latest-news' ); ?>
						</div>
					</p>
				</div>
				<div class="container clearfix center no-padding">
					<div style="margin-bottom:40px;">
						<a href="/press/" class="button button-large no-bottom-margin btn-news-press news-press-button">
							VIEW ALL NEWS AND PRESS RELEASES
						</a>
					</div>
				</div>
			</section>

		</div>

	</section><!-- #content end -->

	<?php get_footer(); ?>