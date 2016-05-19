<?php
	$subpages = getChindrenByParentSlug("solutions");
	foreach($subpages as $subpage) {
		if(get_field('page_part', $subpage->ID) == $categoryName ) {
			?>
			<div class="blog-post-preview-header">
				<a href="<?php echo $subpage->guid; ?>">
					<?php echo $subpage->post_title; ?>
				</a>
			</div>
			<?php
		}
	}
?>
