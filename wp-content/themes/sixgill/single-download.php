<?php
	$resourcePageID = getPageBySlug('resources')->ID;

	if ( have_posts() ) while ( have_posts() ) : the_post();
	$resourceType = get_field('resource_type');
?>

<div
	class="resources-list-header responsive-background"
	desktop-src="<?php the_field("header_image_desktop", $resourcePageID); ?>"
	tablet-src="<?php the_field("header_image_tablet", $resourcePageID); ?>"
	mobile-src="<?php the_field("header_image_mobile", $resourcePageID); ?>"
>
	<h1 class="resources-list-header-title">
		SIXGILL RESOURCES -
		<?php echo $resourceType; ?>
	</h1>
	<h2 class="resources-list-header-subtitle">
		<?php the_title(); ?>
	</h2>
	<a href="<?php echo get_site_url().$downloadLink; ?>">
		<div class="resource-details-download-form-submit-button button-blue resource-details-download-form-submit-button-temp">
			Download for Free
		</div>
	</a>
</div>

<?php
	$downloadFileInfo = get_field('resource_file');
	$downloadID = $downloadFileInfo['id'];
	$downloadKey = md5(md5($downloadFileInfo['name']));
	$downloadLink = '/download/?id=' . $downloadID . '&key=' . $downloadKey;
?>

<div class="resource-details" data-download-link="<?php echo $downloadLink; ?>">

	<div class="resource-details-share">
		<div class="resource-details-share-title">
			Share this <?php echo $resourceType; ?>
		</div>
		<div class="resource-details-share-wrapper">
			<?php
				global $socialButtonsClasses;
				$socialButtonsClasses = "resource-details-share-buttons";
				include(locate_template('social_buttons.php'));
			?>
		</div>
	</div>

	<?php
		if(strcasecmp($resourceType, "ebook")) {
			?>

			<?php
		} else if(strcasecmp($resourceType, "presentation")) {
			?>

			<?php
		} else if(strcasecmp($resourceType, "webinar")) {
			?>
			<iframe
				src="//player.vimeo.com/video/VIDEO_ID?portrait=0&color=333"
				class="resource-detals-vimeo-video"
				width="WIDTH"
				height="HEIGHT"
				frameborder="0"
				webkitallowfullscreen
				mozallowfullscreen
				allowfullscreen
			>
			</iframe>
			<?php
		}
	 ?>

	<div class="resource-details-description">
		<?php the_field("resource_description"); ?>
	</div>

	<a href="<?php echo get_site_url().$downloadLink; ?>">
		<div class="resource-details-download-form-download-button button-blue resource-details-download-form-submit-button-temp">
			Download for Free
		</div>
	</a>
</div>

<?php endwhile; // end of the loop. ?>
