<div class="full-width ohidden full-page-wrapper blog-post-wrapper"> <!-- fullpage wrapper placeholder -->
	<a name="top"></a>

	<div
		class="blog-post-header responsive-background"
		<?php
			$filterFlag = get_field('blue_filter', false, false);
			$desktop = get_field("header_image_desktop");
			$tablet = get_field("header_image_tablet");
			$mobile = get_field("header_image_mobile");

			echo 'desktop-src='.$desktop.' tablet-src='.$tablet.' mobile-src='.$mobile;
		?>


	>
		<div class="blog-post-header-filter <?php echo $filterFlag == '1' ? '' : 'hide'?>"></div>
		<div class="blog-post-header-container">
			<h1 class="blog-post-header-title ellipsis-3lines">
				<?php echo $post->post_title; ?>
			</h1>
			<div
				class="blog-post-header-subtitle
					ellipsis-2lines-desktop ellipsis-3lines-tablet ellipsis-2lines-mobile-portrait ellipsis-2lines-mobile-landscape"
			>
				<?php echo get_field('subtitle'); ?>

			</div>
		</div>
	</div>

	<div class="blog-post-content-wrapper">
		<?php
			if ( have_posts() ) while ( have_posts() ) : the_post(); wpb_set_post_views(get_the_ID());
		?>
		<?php include(locate_template('social_buttons.php')); ?>

		<div class="blog-post-content-wrapper-line no-tablet-display no-desktop-display"></div>

		<div class="blog-post-author-date">
			<?php echo get_field('author'); ?> | <?php the_date('m/d/Y'); ?>
		</div>


		<div class="blog-post-content">
			<?php the_content(); ?>
		</div>

		<div class="singe-blog-navigation">
			<?php $current =  get_permalink();
			if (get_previous_post()) { ?>
			<div class="singe-blog-navigation-previous">
				<a class="no-mobile-landscape-display no-mobile-portrait-display singe-blog-navigation-text" href="<?php $prev_post = get_adjacent_post(); echo get_permalink($prev_post->ID);?>">
					<span class="singe-blog-navigation-previous-arrow"></span>PREVIOUS POST
				</a>
				<a class="no-tablet-display no-desktop-display singe-blog-navigation-text" href="<?php $prev_post = get_adjacent_post(); echo get_permalink($prev_post->ID);?>">
					<span class="singe-blog-navigation-previous-arrow"></span>PREVIOUS
				</a>
			</div>
			<?php } ?>

			<?php if (get_next_post()) { ?>
			<div class="singe-blog-navigation-next">
				<a class="no-mobile-landscape-display no-mobile-portrait-display singe-blog-navigation-text" href="<?php $next_post = get_adjacent_post(0,'',0); echo get_permalink($next_post->ID);?>">
					NEXT POST<span class="singe-blog-navigation-next-arrow"></span>
				</a>
				<a class="no-tablet-display no-desktop-display singe-blog-navigation-text" href="<?php $next_post = get_adjacent_post(0,'',0); echo get_permalink($next_post->ID);?>">
					NEXT<span class="singe-blog-navigation-next-arrow"></span>
				</a>
			</div>
			<?php } ?>
		</div>

		<?php wpb_get_post_views(get_the_ID()); endwhile; wp_reset_query(); // end of the loop. ?>
	</div>
