<?php
	$resourcePageID = getPageBySlug('resources')->ID;

	if ( have_posts() ) while ( have_posts() ) : the_post();
	$resourceType = get_field('resource_type');

	$downloadFileInfo = get_field('resource_file');
	$downloadID = $downloadFileInfo['id'];
	$downloadKey = md5(md5($downloadFileInfo['name']));
	$downloadLink = '/download/?id=' . $downloadID . '&key=' . $downloadKey;
?>

<div
	class="resource-details-header responsive-background"
	desktop-src="<?php the_field("header_image_desktop", $resourcePageID); ?>"
	tablet-src="<?php the_field("header_image_tablet", $resourcePageID); ?>"
	mobile-src="<?php the_field("header_image_mobile", $resourcePageID); ?>"
>
	<h1 class="resource-details-header-title ellipsis-2lines">
		SIXGILL RESOURCES -
		<?php echo $resourceType; ?>
	</h1>
	<h2 class="resource-details-header-subtitle ellipsis-2lines">
		<?php the_title(); ?>
	</h2>

	<a
		class="resource-details-download-button-link no-mobile-portrait-display no-mobile-landscape-display"
		href="<?php echo get_site_url().$downloadLink; ?>"
	>
		<div class="resource-details-download-button button-blue">
			Download for Free
		</div>
	</a>
</div>

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
		if(strcasecmp($resourceType, "ebook")==0) {
			?>

			<iframe
				src="/pdfjs/web/viewer.html?file=<?php echo $downloadFileInfo['url']; ?>"
				class="resource-details-pdfviewer"
				webkitallowfullscreen
				mozallowfullscreen
				allowfullscreen
			>
			</iframe>

			<?php
		} else if(strcasecmp($resourceType, "presentation")==0) {
			$presentationSlides = get_field('presentation_slides');
			$isThereSlides = is_array($firstSlides) && count($firstSlides);

			if($isThereSlides) {
				$slidesAutoHeight = get_field('slides_auto_height') ? 'on' : 'off';
				$slidesRewindEnabled = get_field('slides_rewind_enabled') ? 'on' : 'off';
				$carouselTitle = $firstSlidesTitle;
				$carouselSlides = $firstSlides;
				$carouselFile = $firstFile;
				$carouselAutoHeight = $firstAutoHeight;
				$carouselRewindEnabled = $firstRewindEnabled;
				$carouselName = "";
				include(locate_template('part-carousel.php'));
			}


		} else if(strcasecmp($resourceType, "webinar")==0) {
			?>
			<iframe
				src="//player.vimeo.com/video/<?php the_field("vimeo_video_id"); ?>"
				class="resource-details-vimeo-video"
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

	<a
	 	class="resource-details-download-button-link no-mobile-portrait-display no-mobile-landscape-display"
		href="<?php echo get_site_url().$downloadLink; ?>">
		<div class="resource-details-download-button button-blue">
			Download for Free
		</div>
	</a>
</div>

<?php endwhile; // end of the loop. ?>
