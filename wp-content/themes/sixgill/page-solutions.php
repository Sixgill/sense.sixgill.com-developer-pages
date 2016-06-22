<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax no-border swiper_wrapper clearfix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/hero/dollarphotoclub_84369125_web.jpg'); background-position: center;"></div>
			</div>
		</div>
	</div>
</section>

<!-- Content-->

<section id="content" class="section-margin-fix">

	<div class="content-wrap no-border no-margin nopadding">

		<!-- Header of the section -->
		<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
			<div class="container-fluid center clearfix my_containerSolution">

				<div class="col_one_third title-left-col solutions-top-title-spacing">
					<h1 class="solutions-h1"><?php echo get_field('top_paragraph_title'); ?></h1>
				</div>
				<div class="col_two_third text-right-col col_last">
					<?php echo get_field('top_paragraph'); ?>
				</div>

			</div>
		</div>
		<div class="clear"></div>
		<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
			<img src="/wp-content/themes/sixgill/images/td/solutions_fig1.png" alt="" class="full-width"/>
		</div>

		<a name="people"></a>
		<div id="people" class="container-fluid background-white clearfix no-margin nopadding">
			<div class="container-fluid center clearfix my_containerSolution" style="max-width: interit !important;">
				<div class="col_one_third">
					<img src="<?php echo get_field('people_image'); ?>" class="iconSolutions" alt=""/>
				</div>
				<div class="col_two_third text-right-col-noline col_last">
					<div class="solution-image-title-container">
						<img src="/wp-content/themes/sixgill/images/td/solutions/header_people.png" class="my_headerBoxSolution no-mobile-portrait-display no-mobile-landscape-display" alt=""/>
					</div>
					<div class="my_boxSolution_title no-tablet-display">
						<?php echo get_field('people_header'); ?>
					</div>
					<div class="my_txtSolution">
						<?php echo get_field('people_text'); ?>

						<?php if(get_field('people_list')) : ?>
							<ul class="listSolutions">
								<?php foreach(get_field('people_list') as $item) : ?>
									<li>
										<?php echo $item['people_list_text']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<b style="padding-bottom: 5px;">
						<?php echo get_field('learn_more_people'); ?>
					</b>
					<?php
						global $categoryName;
						$categoryName = "For people";
						include(locate_template('loop-solutions.php'));
					?>

				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
			<img src="/wp-content/themes/sixgill/images/td/solutions_fig2.png" alt="" class="full-width"/>
		</div>


		<a name="assets"></a>
		<div id="assets" class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
			<div class="container-fluid center clearfix my_containerSolution">
				<div class="col_one_third">
					<img src="<?php echo get_field('assets_image'); ?>" class="iconSolutions" alt=""/>
				</div>
				<div class="col_two_third text-right-col-noline col_last">
					<div class="solution-image-title-container">
						<img src="/wp-content/themes/sixgill/images/td/solutions/header_assets.png" class="my_headerBoxSolution no-mobile-landscape-display no-mobile-portrait-display" alt=""/>
					</div>
					<div class="my_boxSolution_title no-tablet-display">
						<?php echo get_field('assets_header'); ?>
					</div>
					<div class="my_txtSolution">
						<?php echo get_field('assets_text'); ?>

						<?php if(get_field('assets_list')) : ?>
							<ul class="listSolutions">
								<?php foreach(get_field('assets_list') as $item) : ?>
									<li>
										<?php echo $item['assets_list_text']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<?php
						global $categoryName;
						$categoryName = "For assets";
						include(locate_template('loop-solutions.php'));
					?>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
			<img src="/wp-content/themes/sixgill/images/td/solutions_fig3.png" alt="" class="full-width"/>
		</div>
		<div class="clearfix"></div>

		<a name="crowds"></a>
		<div id="crowds" class="container-fluid background-white clearfix no-margin nopadding">
			<div class="container-fluid center clearfix my_containerSolution">
				<div class="col_one_third">
					<img src="<?php echo get_field('crowds_image'); ?>" class="iconSolutions" alt=""/>
				</div>
				<div class="col_two_third text-right-col-noline col_last">
					<div class="solution-image-title-container">
						<img src="/wp-content/themes/sixgill/images/td/solutions/header_crowds.png" class="my_headerBoxSolution no-mobile-portrait-display no-mobile-landscape-display" alt=""/>
					</div>
					<div class="my_boxSolution_title no-tablet-display">
						<?php echo get_field('crowds_header'); ?>
					</div>
					<div class="my_txtSolution">
						<?php echo get_field('crowds_text'); ?>

						<?php if(get_field('crowds_list')) : ?>
							<ul class="listSolutions">
								<?php foreach(get_field('crowds_list') as $item) : ?>
									<li>
										<?php echo $item['crowds_list_text']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<b style="padding-bottom: 5px;">
						<?php echo get_field('learn_more_crowds'); ?>
					</b>
					<?php
						global $categoryName;
						$categoryName = "For crowd";
						include(locate_template('loop-solutions.php'));
					?>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->
<?php get_footer(); ?>
