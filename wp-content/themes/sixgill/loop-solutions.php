<?php
	$subpages = getChindrenByParentSlug("solutions");
	$flagPrint = false;

	foreach($subpages as $subpage) {
		$selected = get_field('page_part', $subpage->ID);

	if (is_array($selected) && in_array( $categoryName, $selected ) ) {
			<li class="solutions-icon-item">
				<div class="solutions-icon-image">
					<img src="<?php echo get_field('icon_image', $subpage->ID); ?>">
				</div>
				<div class="solutions-icon-caption">
					<?php echo $subpage->post_title; ?>
				</div>
				<div class="solutions-icon-link">
					<a href="<?php echo $subpage->guid; ?>"> Learn more	</a>
				</div>
			</li>
			<?php
		}
	}
	wp_reset_postdata();
?>
