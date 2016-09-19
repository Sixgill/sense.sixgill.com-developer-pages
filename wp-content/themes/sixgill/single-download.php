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

<div class="resource-details">
	<div class="resource-details-col-left">
		<div class="resource-details-preview">
			<?php the_field("resource_preview"); ?>
		</div>
		<div class="resource-details-preview-download-tip">
			DOWNLOAD THE WEBINAR TO GET FULL ACCESS
		</div>
	</div>

	<div class="resource-details-col-right">
		<div class="resource-details-download-form">
			<div class="resource-details-download-form-header">
				DOWNLOAD THE WEBINAR
			</div>
			<div class="resource-details-download-form-wrapper">
				<?php dynamic_sidebar( 'download-access' ); ?>
			</div>
		</div>

		<div class="resource-details-share">
			<div class="resource-details-share-header">
				SHARE THIS WEBINAR
			</div>
			<div class="resource-details-share-wrapper">
				<!-- TODO: insert share buttons -->
			</div>
		</div>
	</div>
</div>

<?php endwhile; // end of the loop. ?>
