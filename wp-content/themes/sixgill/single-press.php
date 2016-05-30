<a name="top"></a>

<!-- Content-->
<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
	$ptitle = get_the_title();
?>
<section id="content">
	<div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
		<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent" style="padding-top:0px;">
			<?php include(locate_template('fixed_social_buttons.php')); ?>
			<div id="press-text-post" class="col_full press-post">

				<?php if ( has_post_thumbnail()) { ?>
					<div class="shareIcons-desktop-tablet">
						<h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000">
							<?php echo $post->post_title; ?>
						</h3>
						<h4 id="press-author-post" class="press-by-author author-with-date-blogPost">
							<?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?>
						</h4>

						<div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>
						<?php include(locate_template('floating_social_buttons.php')); ?>
					</div>

					<div class="shareIcons-mobile">
						<h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000; margin-bottom: 10px;">
							<?php echo $post->post_title; ?>
						</h3>
						<div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>

						<?php include(locate_template('social_buttons.php')); ?>
						<p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#000; margin-bottom: 0px; line-height: 1;"><?php echo the_time('F j, Y'); ?></p>
						<p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#999999; line-height: 1; "> Post by <?php echo get_field('author'); ?></p>
					</div>
					<?php } else { ?>
						<div class="shareIcons-desktop-tablet">
							<h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
							<?php include(locate_template('social_buttons.php')); ?>

							<h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>
						</div>

						<div class="shareIcons-mobile">
							<h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000; margin-bottom: 30px;"><?php echo $post->post_title; ?></h3>
							<?php include(locate_template('social_buttons.php')); ?>

							<p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#000; margin-bottom: 0px; line-height: 1;">
								<?php echo the_time('F j, Y'); ?>
							</p>
							<p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#999999; line-height: 1; ">
								Post by <?php echo get_field('author'); ?>
							</p>
						</div>

						<?php } ?>

						<?php the_content(); ?>
					</div>

					<?php comments_template( '', true ); ?>

					<div class="col_full center">
						<a href="/company_blog" id="press-button-back" class="button button-large nobottommargin btnCompany">
							BACK TO BLOG
						</a>
					</div>
				</div>
			</div>

		</section><!-- #content end -->
	<?php endwhile; // end of the loop. ?>
