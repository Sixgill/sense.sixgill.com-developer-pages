  <meta property="og:type" content="website" /> 
  <meta property="og:title schema:name" content="<?php echo $post->post_title; ?>" />
  <link property="og:image schema:image" href="<?php echo get_field('post_picture_to_share'); ?>" />
  <link property="og:url schema:url" href="<?php echo wp_get_shortlink(); ?>" />
  <meta property="og:description schema:description" content="<?php  
  if (strlen(get_field('descriptions_post_to_share')) == 0)  {
  	echo the_content("read more");
  }
  else {
  	echo get_field('descriptions_post_to_share');
  }
?>" />
  <meta property="og:site_name" content="<?php the_content(); ?>"/>
