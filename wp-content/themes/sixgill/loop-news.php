<?php
$args = array (
	'category_name'          => 'news',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>
		<div class="blog-post-preview-header">
			<a href="<?php echo get_field('source_link'); ?>" target="_blank" id="post-title-page-blog" class="press-post-source" >
				<?php echo get_field('source_title'); ?>
			</a>
			<p id="post-subtitle-and-author" class="blog-post-suptitle press-post-suptitle" style="color:#999999">
				<?php the_time('F j, Y'); ?>
			</p>
			<a href="<?php echo get_permalink(); ?>" id="post-title-page-blog" class="press-post-title" >
				<?php the_title(); ?>
			</a>

		</div>
		<?php
			the_content("read more");
		?>
<?php
	}
}
wp_reset_postdata();
?>
