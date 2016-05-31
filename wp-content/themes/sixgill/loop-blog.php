<?php
	$args = array (
	'category_name'          => 'Blog',
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			?>
			<div class="posts-list">
				<a href="<?php echo get_permalink(); ?>" class="blog-post-title" >
					<?php the_title(); ?>
				</a>
				<p id="post-subtitle-and-author" class="blog-post-suptitle color-999999">
					<?php the_time('F j, Y'); ?> | by <?php echo get_field('author'); ?>
				</p>
			</div>
			<?php
				the_content("read more");
			?>
			<?php
		}
	} else {
		?>
		Silence is golden
		<?php
	}
	wp_reset_postdata();
?>
