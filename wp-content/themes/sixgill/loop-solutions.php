<?php
$subpages = getChindrenByParentSlug("solutions");
$flagPrint = false;

foreach($subpages as $subpage) {
	if(get_field('page_part', $subpage->ID) == $categoryName ) {

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
		</div>
		<?php
	}
}
wp_reset_postdata();
?>
