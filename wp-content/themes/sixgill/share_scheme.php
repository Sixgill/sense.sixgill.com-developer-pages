	<?php	
	$homeImageId = getPageBySlug('home')->ID;
	$homeImageShare = get_field('post_picture_to_share', $homeImageId); 
	$imageFieldShare = get_field('post_picture_to_share');
	?>

 	<meta property="og:type" content="website" /> 
 	<meta property="og:title" content="<?php echo $post->post_title; ?>" />

 	<meta property="og:image" content="<?php 
 		if (!has_post_thumbnail() && !$imageFieldShare) { 
 			echo $homeImageShare; 
		} else if (!has_post_thumbnail()){
 			echo $imageFieldShare; 
		} else {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			echo $image[0];
		} ?>" 
	/>

 	<meta property="og:url" content="<?php echo wp_get_shortlink(); ?>" />