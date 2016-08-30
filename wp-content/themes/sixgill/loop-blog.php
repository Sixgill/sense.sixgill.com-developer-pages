<?php

	$query = new WP_Query(array ('category_name' => 'Blog'));
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			?>
			<?php echo get_permalink(); ?>
			<?php the_time('F j, Y'); ?> | by <?php echo get_field('author'); ?>
			<?php the_post_thumbnail_url( array(100, 100) ); ?>
			<?php the_title(); ?>
			<?php the_content("read more"); ?>
			<?php
		}
	} else {
		?>
		Silence is golden
		<?php
	}
	wp_reset_postdata();
?>
