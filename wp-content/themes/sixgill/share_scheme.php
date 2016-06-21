	<?php	
	$homeImageId = getPageBySlug('home')->ID;
	$homeImageShare = get_field('post_picture_to_share', $homeImageId); 
	$customFieldDescriptions = get_field('descriptions_post_to_share');
	$contentPost = $post->post_content;
	$imageFieldShare = get_field('post_picture_to_share');
	?>

 	<meta property="og:type" content="website" /> 
 	<meta property="og:title schema:name" content="<?php echo $post->post_title; ?>" />

 	<link property="og:image schema:image" href="<?php 
 		if (!has_post_thumbnail() && !$imageFieldShare) { 
 			echo $homeImageShare; 
		} else if (!has_post_thumbnail()){
 			echo $imageFieldShare; 
		} else {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			echo $image[0];
		} ?>" 
	/>

 	<link property="og:url schema:url" href="<?php echo wp_get_shortlink(); ?>" />

 	<meta property="og:description schema:description" content="<?php  
		if (strlen($customFieldDescriptions) == 0)  {
			if (strlen($contentPost) < 105) {
 			echo $$contentPost;
			} else {
 			echo substr($contentPost, 0, 105)."...";
			}
		} else {
 			echo $customFieldDescriptions;
		} ?>" 
	/>
