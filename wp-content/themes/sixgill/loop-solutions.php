<?php
while ( $subpages->have_posts() ) : $subpages->the_post();
?>
	<li class="solutions-icon-item">
		<div class="solutions-icon-image">
			<img src="<?php the_field('icon_image'); ?>">
		</div>
		<div class="solutions-icon-caption">
			<?php echo get_the_title(); ?>
		</div>
		<div class="solutions-icon-link">
			<a href="<?php echo get_the_guid(); ?>"> Learn more	</a>
		</div>
	</li>
<?php endwhile; wp_reset_postdata(); ?>
