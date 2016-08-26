<?php
	$subpages = getChindrenByParentSlug("solutions");
	$flagPrint = false;

	foreach($subpages as $subpage) {
		$selected = get_field('page_part', $subpage->ID);

	if (is_array($selected) && in_array( $categoryName, $selected ) ) {
			if (!$flagPrint) {
				$flagPrint = true; ?>
			<b style="padding-bottom: 5px;">
				<?php echo get_field($supTitleCategory); ?>
			</b>
			<?php } ?>
			<div class="solutions-subpages-list">
				<a href="<?php echo $subpage->guid; ?>">
					<?php echo $subpage->post_title; ?>					
				</a>
				<img src="<?php echo get_field('first_section_image_mobile', $subpage->ID); ?>">
			</div>
			<?php
		}
	}
	wp_reset_postdata();
?>
