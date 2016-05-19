<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-color: #004cbf;">
					<div class="slider-caption slider-caption-center">
						<h1 id="post-title-slider" class="single-post-title"><?php echo $post->post_title; ?></h1>
						<h4 id="post-subtitle-slider" class="single-post-subtitle"><?php echo get_field('subtitle'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Content-->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section id="content">

		<div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">

			<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent" style="max-width: 1050px;">

                <?php if ( has_post_thumbnail()) { ?>
                    <div class="shareIcons-desktop-tablet">

                        <div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px;">
                            <div style="overflow: hidden;">
                                <div style="width:100%;">
                                    <div style="float: left; width:65%;"> <?php the_content(); ?></div>
                            <div style="float: right; width:30%; text-align: center;"> <?php the_post_thumbnail( 'full' ); ?> </div>
                                </div>
                            </div>
				        </div>
                    </div>
                    <div class="shareIcons-mobile">
                            <div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px;">
                                        <?php the_content(); ?>
                                        <div style=" text-align: center;"> <?php the_post_thumbnail( 'full' ); ?> </div>
				            </div>
                    </div>

                <?php } else { ?>
                        <div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px;">
                            <?php the_content(); ?>
				        </div>
                <?php } ?>


				<div class="col_full" style="text-align: center;">
					<a href="/solutions/" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO SOLUTIONS</a>
				</div>
			</div>
		</div>

	</section><!-- #content end -->
<?php endwhile; // end of the loop. ?>
