<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix section-margin-fix">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div id="products-header-image" class="swiper-slide"></div>
			</div>
		</div>
	</div>
</section>

<!-- Content-->
<section id="content" class="section-margin-fix">
	<div class="content-wrap no-bottom-padding">
		<div class="header-stick no-border background-f8f8f8">
			<div class="container-fluid no-border center clearfix" style="padding-top:75px; max-width:1100px;">
				<div class="col_one_third title-left-col">
					<?php echo get_field('title_header'); ?>
				</div>
				<div class="col_two_third col_last text-left text-right-col">
					<?php echo get_field('top_paragraph'); ?>
				</div>
			</div>
		</div>


		<section class="container-fluid center clearfix no-margin nopadding section-margin-fix">
			<img src="/wp-content/themes/sixgill/images/td/product_fig1.png" alt="" width="100%"/>
		</section>

		<a name="ssense"></a>
		<section id="ssense" class="backround-white section-margin-fix">
			<div class="container-fluid center topmargin-sm no-border" style="max-width:1100px;">
				<div class="col_one_third titleInside text-right"><img src="/wp-content/themes/sixgill/images/td/product/logoSense.svg" alt=""/></div>
				<div class="col_two_third col_last text-left topmargin-sm">
					<?php echo get_field('sixgill_sense_header'); ?>

					<?php echo get_field('track_header'); ?>
					<?php echo get_field('track_text'); ?>

					<?php if(get_field('track_list')) : ?>
						<ul class="listSolutions">
							<?php foreach(get_field('track_list') as $item) : ?>
								<li>
									<?php echo $item['track_list_text']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php echo get_field('determine_header'); ?>
					<?php echo get_field('determine_text'); ?>

					<?php if(get_field('determine_list')) : ?>
						<ul class="listSolutions">
							<?php foreach(get_field('determine_list') as $item) : ?>
								<li>
									<?php echo $item['determine_list_text']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php echo get_field('act_header'); ?>
					<?php echo get_field('act_text'); ?>

					<?php if(get_field('act_list')) : ?>
						<ul class="listSolutions">
							<?php foreach(get_field('act_list') as $item) : ?>
								<li>
									<?php echo $item['act_list_text']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

				</div>
			</div>
		</section>

		<section id="before_ssdk" class="container-fluid center clearfix no-margin nopadding section-margin-fix">
			<img src="/wp-content/themes/sixgill/images/td/product_fig2.png" alt="" width="100%"/>
		</section>

		<a name="ssdk"></a>
		<section id="ssdk" class="background-f8f8f8 section-margin-fix">
			<div id="ssdk-container" class="container-fluid center clearfix no-border no-bottom-margin no-bottom-padding">
				<div class="col_one_third titleInside text-right topmargin-sm">
					<img src="/wp-content/themes/sixgill/images/td/product/logoReach.svg" alt=""/>
				</div>
				<div class="col_two_third col_last text-left topmargin-sm">
					<?php echo get_field('sixgill_reach_text'); ?>

					<?php if(get_field('sixgill_reach_list')) : ?>
						<ul class="listProduct">
							<?php foreach(get_field('sixgill_reach_list') as $item) : ?>
								<li>
									<?php echo $item['sixgill_reach_list_text']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<img src="/wp-content/themes/sixgill/images/td/product_fig3.png" alt="" width="100%"/>
		</section>

		<a name="sassist"></a>
		<section id="sassist" class="background-white section-margin-fix">
			<div class="container-fluid center clearfix no-top-margin no-top-padding no-border no-bottom-margin no-bottom-padding" style="max-width:1100px;">
				<div class="col_one_third titleInside text-right"><img src="/wp-content/themes/sixgill/images/td/product/logoAssist.svg" alt=""/></div>
				<div class="col_two_third col_last text-left topmargin-sm" style="margin-bottom: -20px;">
					<?php echo get_field('sixgill_assist_header'); ?>
					<div class="col_half no-bottom-margin">
						<?php if(get_field('sixgill_assist_list')) : ?>
							<ul class="listProduct no-bottom-margin">
								<?php foreach(get_field('sixgill_assist_list') as $item) : ?>
									<li>
										<?php echo $item['sixgill_assist_list_text']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="col_half col_last">
						<?php if(get_field('sixgill_assist_list_2')) : ?>
							<ul class="listProduct no-bottom-margin">
								<?php foreach(get_field('sixgill_assist_list_2') as $item) : ?>
									<li>
										<?php echo $item['sixgill_assist_list_text_2']; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</section><!-- #content end -->
<?php get_footer(); ?>
