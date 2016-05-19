<?php
get_header();
$post = get_post();
$parent_id = wp_get_post_parent_id($post->ID);
$parentSlug = "";
if($parent_id!=0) {
	$parentSlug = get_page($parent_id)->post_name;
}
echo $parentSlug;
if($parentSlug == "solutions") {
	get_template_part( 'single-solutions');
}
get_footer();
?>
