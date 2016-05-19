<?php
	get_header();
	$post = get_post();
	$categorySlug = get_the_category()[0]->slug;
	if($categorySlug == "blog") {
		get_template_part( 'single-blog');
	} else {
		get_template_part( 'single-press');
	}
	get_footer();
?>
