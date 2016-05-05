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
		<div class="blog-post-preview-header">
			<p class="blog-post-suptitle"><?php the_time('F j, Y'); ?> | by <?php echo get_field('author'); ?></p>
			<a href="<?php echo get_permalink(); ?>" class="blog-post-title"><?php the_title(); ?></a>

		</div>
		<?php the_content(""); ?>
<?php
	}
} else {
	?>
		TODO: think about no posts message here
	<?php
}

// Restore original Post Data

?>
