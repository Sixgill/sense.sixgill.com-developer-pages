<?php get_header(); ?>
<div class="full-width ohidden"> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>

	<div
		class="blog-page-header responsive-background"
		desktop-src="<?php echo get_field('header_image_desktop'); ?>"
		tablet-src="<?php echo get_field('header_image_tablet'); ?>"
		mobile-src="<?php echo get_field('header_image_mobile'); ?>"
		>
		<div class="blog-page-header-wrapper">
			<div class="blog-page-header-suptitle">
				<?php echo get_field("suptitle"); ?>
			</div>
			<div class="blog-page-header-title">
				<?php echo get_field("title"); ?>
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
						<a target="_blank" href="<?php echo get_permalink(); ?>" class="blog-page-post-card-link">
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

									<div class="blog-page-post-card-text no-mobile-portrait-display no-mobile-landscape-display">
										<?php echo get_the_content("") ?>..
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
				<div class="blog-page-subscription-form-wrapper">
					<?php dynamic_sidebar( 'blog-subscribe-sidebar' ); ?>
				</div>
			</div>

			<div class="blog-page-popular-block">
				<div class="blog-page-popular-block-title">
					POPULAR POSTS
				</div>

				<?php
					$args = array(
						'posts_per_page' => 3,
						'paged' => $paged,
						'more' => $more = 0,
						//'meta_key' => 'views',
						//'orderby' => 'meta_value_num',
						'order' => 'DESC',
						'category_name' => 'Blog',
					);
					//'category_name=Blog&posts_per_page=3'
					//meta_key=post_views_count&orderby=meta_value_num&order=DESC
					query_posts($args);
					if (have_posts()) : while (have_posts()) : the_post(); ?>
						<a href="<?php echo get_permalink(); ?>" class="blog-page-popular-post-card-link">
							<div class="blog-page-popular-post-card">
								<div class="blog-page-popular-post-image-wrapper">
									<img
										alt="Post thumbnail"
										class="blog-page-popular-post-image"
										src="<?php the_post_thumbnail_url(); ?>"
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
