<?php
	$resourcePageID = getPageBySlug('resources')->ID;
?>
<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<div
	class="resources-list-header responsive-background"
	desktop-src="<?php the_field("header_image_desktop", $resourcePageID); ?>"
	tablet-src="<?php the_field("header_image_tablet", $resourcePageID); ?>"
	mobile-src="<?php the_field("header_image_mobile", $resourcePageID); ?>"
>
	<h1 class="resources-list-header-title">
		SIXGILL RESOURCES -
		<?php echo wp_get_post_terms($id, 'sdm_categories')[0]->name; ?>
	</h1>
	<h2 class="resources-list-header-subtitle">
		<?php the_title(); ?>
	</h2>
</div>

<?php endwhile; // end of the loop. ?>
