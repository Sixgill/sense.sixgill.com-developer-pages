<?php
$args = array (
	'category_name'          => $categoryName,
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>
		<div id="post-title-page-blog" class="blog-post-preview-header">
			<a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?></a>
		</div>

<?php
	}
} else {

}

// Restore original Post Data

/* Restore original Post Data */
wp_reset_postdata();
?>

