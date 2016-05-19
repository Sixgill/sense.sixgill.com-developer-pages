<?php
	get_header();
	$post = get_post();
	$categorySlug = get_the_category()[0]->slug;
	$parentSlug = getPage(wp_get_post_parent_id($post->ID))->post_name;
	echo "<h1>".$parentSlug."</h1>";
	if($categorySlug == "blog") {
		get_template_part( 'single-blog');
	} else if($parentSlug == "solutions") {
		get_template_part( 'single-solutions');
	} else {
		get_template_part( 'single-press');
	}
	get_footer();
?>
