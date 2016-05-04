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
			<span style="padding-right: 10px;"><?php the_time('F j, Y'); ?></span>
			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			<p class="blog-post-author">by <?php echo get_field('author'); ?></p>
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
