	<?php
		$shareImage = get_field('post_picture_to_share');
	?>

 	<meta property="og:type" content="website" />
 	<meta property="og:title" content="<?php echo $post->post_title; ?>" />
	<?php if ($shareImage) { ?>
 		<meta property="og:image" content="<?php echo $shareImage; ?>" />
	<?php } ?>

 	<meta property="og:url" content="<?php echo wp_get_shortlink(); ?>" />
