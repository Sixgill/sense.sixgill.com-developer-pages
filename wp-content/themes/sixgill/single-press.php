<a name="top"></a>

<!-- Content-->
<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
	$ptitle = get_the_title();
?>
<section id="content">
	<div id="single-page-content" class="container-fluid clearfix background-white no-margin nopadding">
		<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent" style="padding-top:0px;">
			<?php include(locate_template('fixed_social_buttons.php')); ?>
			<div id="press-text-post" class="col_full press-post">

				<?php if ( has_post_thumbnail()) { ?>
					<div>
						<h3 id="press-date-post" class="press-date no-bottom-margin color-black">
							<?php echo $post->post_title; ?>
						</h3>
						<h4 id="press-author-post" class="press-by-author author-with-date-blogPost">
							<?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?>
						</h4>

						<div class="swiper-slide" style="background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>
						<?php include(locate_template('floating_social_buttons.php')); ?>
					</div>

					<div class="shareIcons-mobile no-desktop-display no-tablet-display">
						<h3 id="press-date-post" class="press-date no-bottom-margin color-black">
							<?php echo $post->post_title; ?>
						</h3>
						<div class="swiper-slide" style="background-position: center; height: 350px; width:100%; margin-bottom: 30px;">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>

						<?php include(locate_template('social_buttons.php')); ?>
						<p id="press-author-post" class="no-bottom-margin color-black normal-font-20-1">
							<?php echo the_time('F j, Y'); ?>
						</p>
						<p class="color-999999 normal-font-20-1" id="press-author-post">
							 Post by <?php echo get_field('author'); ?>
						 </p>
					</div>
					<?php } else { ?>
						<div>
							<h3 id="press-date-post" class="press-date no-bottom-margin color-black">
								<?php echo $post->post_title; ?>
							</h3>
							<?php include(locate_template('social_buttons.php')); ?>

							<h4 id="press-author-post" class="press-by-author author-with-date-blogPost">
								<?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?>
							</h4>
						</div>

						<div class="shareIcons-mobile no-desktop-display no-tablet-display">
							<h3 id="press-date-post" class="press-date no-bottom-margin color-black">
								<?php echo $post->post_title; ?>
							</h3>
							<?php include(locate_template('social_buttons.php')); ?>

							<p id="press-author-post" class="no-bottom-margin color-black normal-font-20-1">
								<?php echo the_time('F j, Y'); ?>
							</p>
							<p class="color-999999 normal-font-20-1" id="press-author-post">
								Post by <?php echo get_field('author'); ?>
							</p>
						</div>

					<?php } ?>

					<?php the_content(); ?>
				</div>

				<?php comments_template( '', true ); ?>

				<div class="col_full center">
					<a href="/company_blog" id="press-button-back" class="button button-large no-bottom-margin btnCompany">
						BACK TO BLOG
					</a>
				</div>
			</div>
		</div>

	</section><!-- #content end -->
<?php endwhile; // end of the loop. ?>
