<?php get_header(); ?>
<div> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>

	<div
		class="blog-page-header responsive-background"
		desktop-src="<?php echo get_field('header_image_desktop'); ?>"
		tablet-src="<?php echo get_field('header_image_tablet'); ?>"
		mobile-src="<?php echo get_field('header_image_mobile'); ?>"
		>
		<div class="blog-page-header-wrapper">
			<div class="blog-page-header-suptitle">
				SIXGILL BLOG
			</div>
			<div class="blog-page-header-title">
				MORE MOBILITY. MORE CONTROL.
			</div>
		</div>
	</div>

	<div class="blog-page-cols-wrapper">
		<div class="blog-page-col-left">

			<?php

				$query = new WP_Query(array ('category_name' => 'Blog'));
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
						<a href="<?php echo get_permalink(); ?>" class="blog-page-post-card-link">
							<div class="blog-page-post-card">
								<div
									class="blog-page-post-card-image responsive-background"
									desktop-src="<?php the_post_thumbnail_url(); ?>"
									tablet-src="<?php the_post_thumbnail_url( array() ); ?>"
									mobile-src="<?php the_post_thumbnail_url(); ?>"
								>
								</div>

								<div class="blog-page-post-card-content-wrapper">
									<div class="blog-page-post-card-title">
										<?php the_title(); ?>
									</div>
									<div class="blog-page-post-card-author-date">
										Post by <?php echo get_field('author'); ?> | <?php the_time('F j, Y'); ?>
									</div>

									<div class="blog-page-post-card-dash no-mobile-portrait-display no-mobile-landscape-display"></div>

									<div class="blog-page-post-card-text">
										<p><?php echo get_the_content("") ?>..</p>
									</div>
								</div>
							</div>
						</a>
						<?php
					}
				} else {
					?>
					Silence is golden
					<?php
				}
				wp_reset_postdata();
			?>


		</div>

		<div class="blog-page-col-right display-only-desktop">
			<div class="blog-page-subscription-block">
				<div class="blog-page-subscription-block-title">
					SUBSCRIBE HERE
				</div>
				<div class="blog-pagee-subscription-form-wrapper">
					<?php dynamic_sidebar( 'blog-subscribe-sidebar' ); ?>
				</div>
			</div>

			<div class="blog-page-popular-block">
				<div class="blog-page-popular-block-title">
					POPULAR POSTS
				</div>

				<?php
					query_posts('meta_key=post_views_count&category_name=Blog&posts_per_page=3&orderby=meta_value_num&order=DESC');
					if (have_posts()) : while (have_posts()) : the_post(); ?>

						<a href="<?php echo get_permalink(); ?>">
							<div class="blog-page-popular-post-card">
								<div class="blog-page-popular-post-image-wrapper">
									<img
										alt="Post thumbnail"
										class="blog-page-popular-post-image"
										src=""
									>
								</div>

								<div class="blog-page-popular-post-content-wrapper">
									<div class="blog-page-popular-post-title">
										<?php the_title(); ?>
									</div>
									<div class="blog-page-popular-post-author-date">
										Post by <?php echo get_field('author'); ?> | <?php the_time('F j, Y'); ?>
									</div>
								</div>
							</div>
						</a>

					<?php
					endwhile; endif;
					wp_reset_query();
				?>


			</div>
		</div>
	</div>

	<?php get_footer(); ?>
