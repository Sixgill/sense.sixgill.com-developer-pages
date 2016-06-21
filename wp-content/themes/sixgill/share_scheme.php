 	<meta property="og:type" content="website" /> 
 	<meta property="og:title schema:name" content="<?php echo $post->post_title; ?>" />

 	<link property="og:image schema:image" href="<?php 
 		if (!has_post_thumbnail()) { 
 			echo get_field('post_picture_to_share'); 
		} ?>" 
	/>

 	<link property="og:url schema:url" href="<?php echo wp_get_shortlink(); ?>" />

 	<meta property="og:description schema:description" content="<?php  
		if (strlen(get_field('descriptions_post_to_share')) == 0)  {
 			echo substr($post->post_content, 0, 80)."...";
		}
		else {
			echo get_field('descriptions_post_to_share')."...";
		} ?>" 
	/>
