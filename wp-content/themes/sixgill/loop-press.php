<?php
$args = array (
	'category_name'          => 'press-release',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>
		<div class="posts-list">
			<p id="post-subtitle-and-author" class="blog-post-suptitle press-post-suptitle color-999999 display-only-desktop">
				<?php the_time('F j, Y'); ?>
			</p>
			<a href="<?php echo get_permalink(); ?>" id="post-title-page-blog" class="press-post-title" >
				<?php the_title(); ?>
			</a>
			<p id="post-subtitle-and-author" class="blog-post-suptitle press-post-suptitle color-999999 no-desktop-display">
				<?php the_time('F j, Y'); ?>
			</p>
			<?php
				the_content("read more");
			?>
		</div>

<?php
	}
}
wp_reset_postdata();
?>
