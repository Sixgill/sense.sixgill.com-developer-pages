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

<?php
	$downloadFileInfo = get_field('resource_file');
	$downloadID = $downloadFileInfo['id'];
	$downloadKey = md5(md5($downloadFileInfo['name']));
	$downloadLink = '/download/?id=' . $downloadID . '&key=' . $downloadKey;
?>

<div class="resource-details" data-download-link="<?php echo $downloadLink; ?>">
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
				<a href="<?php echo get_site_url().$downloadLink; ?>">
					<div class="resource-details-download-form-submit-button button-blue resource-details-download-form-submit-button-temp">
						Download Now
					</div>
				</a>
				<?php /*dynamic_sidebar( 'download-access' );*/ ?>
				<div class="resource-details-download-link hide">
					<p>Downloading will start soon.</p>
					<a href="<?php echo get_site_url().$downloadLink; ?>">Download this resource manually</a>
				</div>
			</div>
		</div>

		<div class="resource-details-share">
			<div class="resource-details-share-header">
				SHARE THIS WEBINAR
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
if(in_array('administrator',  wp_get_current_user()->roles)) {
?>
		<div class="resource-details-share">
			<div class="resource-details-share-header">
				Sharing link (Admin panel)
			</div>
			<div class="resource-details-share-wrapper">
				<input class="js-share-link-input full-width" value="<?php echo get_site_url().$downloadLink; ?>">
				You can test the download link <a href="<?php echo $downloadLink; ?>">here</a>
			</div>
		</div>
<?php
}
?>
	</div>
</div>

<?php endwhile; // end of the loop. ?>
