<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix position-article'); ?>>
	<a href="<?php echo get_permalink(); ?>" id="post-title-page-blog" class="search-post-result" >
		<?php the_title(); ?>
	</a>
	
	<?php the_excerpt(); ?>
	<hr class="fancy-title-without-bottom fancy-title title-dotted-border title-center mobile-hiden-line">
</article>

