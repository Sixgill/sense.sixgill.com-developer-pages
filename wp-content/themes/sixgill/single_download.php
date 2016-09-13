<div
	class="resource-page-header responsive-background"
	desktop-src=""
	tablet-src=""
	mobile-src=""
>
<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
?>
	<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
