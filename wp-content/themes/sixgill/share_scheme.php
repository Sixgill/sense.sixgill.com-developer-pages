	<!-- FACEBOOK META TAGS -->
	<?php
		$shareImage = get_field('post_picture_to_share');
	?>

 	<meta property="og:type" content="website" />
 	<meta property="og:title" content="<?php echo $post->post_title; ?>" />
	<?php if ($shareImage) { ?>
 		<meta property="og:image" content="<?php echo $shareImage; ?>" />
 		<meta property="og:image:secure_url" content="<?php echo $shareImage; ?>" />
	<?php } ?>

 	<meta property="og:url" content="<?php echo wp_get_shortlink(); ?>" />
 	<!-- TWITTER META TAGS -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@SixgillTech">
	<meta name="twitter:title" content="<?php echo $post->post_title; ?>">
	<meta name="twitter:description" content="<?php echo get_field('subtitle'); ?>">
	<?php if ($shareImage) { ?>
 		<meta property="twitter:image" content="<?php echo $shareImage; ?>" />
	<?php } ?>