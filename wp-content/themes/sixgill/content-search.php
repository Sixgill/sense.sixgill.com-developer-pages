<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

			<a href="<?php echo get_permalink(); ?>" id="post-title-page-blog" style="color:#0051c6; font-size: 18px; font-weight: bold;" >
				<?php the_title(); ?>
			</a>	
    	
    <?php the_excerpt(); ?>
	
</article>