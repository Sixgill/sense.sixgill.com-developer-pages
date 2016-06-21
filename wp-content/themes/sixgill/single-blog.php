<a name="top"></a>

<!-- Content-->
<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<section id="content" class="section-margin-fix">
	<div id="single-page-content" class="container-fluid background-white clearfix no-margin nopadding">
		<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent no-top-padding">
			<?php
				$sidebarType = "sidebar-floating";
				include(locate_template('floating_social_buttons.php'));

				$sidebarType = "sidebar-fixed";
				include(locate_template('floating_social_buttons.php'));
			?>
			<div id="press-text-post" class="col_full post-blog">
				<?php if ( has_post_thumbnail()) { ?>

					<div class="shareIcons-desktop display-only-desktop">
						<h3 id="press-date-post" class="press-date color-black no-bottom-margin">
							<?php echo $post->post_title; ?>
						</h3>
						<h4 id="press-author-post" class="press-by-author author-with-date-blogPost">
							<?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?>
						</h4>

						<div class="swiper-slide full-width blog-post-with-image">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>
						<?php include(locate_template('fixed_social_buttons.php')); ?>
					</div>

					<div class="shareIcons-tablet display-only-tablet">
						<h3 id="press-date-post" class="press-date color-black margin-bottom-post">
							<?php echo $post->post_title; ?>
						</h3>

						<div class="swiper-slide full-width blog-post-with-image">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>
						<?php include(locate_template('fixed_social_buttons.php')); ?>

						<p class="color-black no-bottom-margin normal-font-20-1">
							<?php echo the_time('F j, Y'); ?>
						</p>
						<p class="color-999999 normal-font-18-1">
							Post by <?php echo get_field('author'); ?>
						</p>
					</div>

					<div class="shareIcons-mobile no-desktop-display no-tablet-display">
						<h3 id="press-date-post" class="press-date color-black margin-bottom-title">
							<?php echo $post->post_title; ?>
						</h3>
						<div class="swiper-slide full-width" style="background-position: center; height: 350px;">
							<?php the_post_thumbnail( 'spec_thumb' ); ?>
						</div>

						<?php include(locate_template('fixed_social_buttons.php')); ?>

						<p class="color-black no-bottom-margin normal-font-20-1">
							<?php echo the_time('F j, Y'); ?>
						</p>
						<p class="color-999999 normal-font-20-1 line-height-1 margin-bottom-post" id="press-author-post">
							Post by <?php echo get_field('author'); ?>
						</p>
					</div>
				<?php } else { ?>
					<div class="shareIcons-desktop display-only-desktop">
						<h3 id="press-date-post" class="press-date color-black no-bottom-margin">
							<?php echo $post->post_title; ?>
						</h3>

						<?php include(locate_template('fixed_social_buttons.php')); ?>
						<h4 id="press-author-post" class="press-by-author author-with-date-blogPost">
							<?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?>
						</h4>
					</div>

					<div class="shareIcons-tablet display-only-tablet">
						<h3 id="press-date-post" class="press-date color-black margin-bottom-title">
							<?php echo $post->post_title; ?>
						</h3>

						<p id="press-author-post" class="color-black no-bottom-margin normal-font-20-1">
						<?php echo the_time('F j, Y'); ?></p>
						<p class="color-999999 normal-font-18-1">
							Post by <?php echo get_field('author'); ?>
						</p>
						<?php include(locate_template('fixed_social_buttons.php')); ?>
					</div>

					<div class="shareIcons-mobile no-desktop-display no-tablet-display">
						<h3 class="press-date color-black margin-bottom-title">
							<?php echo $post->post_title; ?>
						</h3>

						<?php include(locate_template('fixed_social_buttons.php')); ?>
						<p class="color-black no-bottom-margin normal-font-13-1">
							<?php echo the_time('F j, Y'); ?></p>
							<p class="color-999999 normal-font-13-1 margin-bottom-title">
								Post by <?php echo get_field('author'); ?>
							</p>
						</div>

					<?php } ?>

					<?php the_content(); ?>
				</div>

				<?php comments_template( '', true ); ?>

				<div class="col_full center">
					<a href="/company_blog" id="blog-button-back" class="button button-large no-bottom-margin btnCompany">
						BACK TO BLOG
					</a>
				</div>
			</div>
		</div>

	</section><!-- #content end -->
<?php endwhile; // end of the loop. ?>
