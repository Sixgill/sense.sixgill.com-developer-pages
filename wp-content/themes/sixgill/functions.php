<?php

  function getPageContentBySlug($slug) {
    $args = array(
    'name'        => $slug,
    'post_type'   => 'page',
    'post_status' => 'publish',
    'numberposts' => 1
    );
    return get_posts($args)[0]->post_content;
  }

  function getPageBySlug($slug) {
    $args = array(
    'name'        => $slug,
    'post_type'   => 'page',
    'post_status' => 'publish',
    'numberposts' => 1
    );
    return get_posts($args)[0];
  }

  function getCurrentSlug() {

    global $post;

    if ( is_single() || is_page() ) {
      return $post->post_name;
    } else {
      return "";
    }

  }

function getCurrentDir() {
	$base = dirname(__FILE__);
	$path = false;

	if (@file_exists(dirname(dirname($base))."/wp-config.php")) {
		$path = dirname(dirname($base));
	} else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")) {
		$path = dirname(dirname(dirname($base)));
	} else {
		$path = false;
	}

	if ($path != false) {
		$path = str_replace("\\", "/", $path);
	}
	return $path;
}

function sixgill_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Press release list page widget', 'mk' ),
		'id'            => 'sixgill-press-list',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; color:#004CBF; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Company page latest press', 'mk' ),
		'id'            => 'sixgill-company-latest-press',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Company page latest news', 'mk' ),
		'id'            => 'sixgill-company-latest-news',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Subscribe sidebar', 'mk' ),
		'id'            => 'blog-subscribe-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Post social links sidebar', 'mk' ),
		'id'            => 'post-social-links-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sixgill Deck Download Access', 'mk' ),
		'id'            => 'download-access',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
		'after_title'   => '</h4>',
	) );

}

function the_parent_slug() {
  global $post;
  if($post->post_parent == 0) return '';
  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
}

function childrenInformation($name){
 
	global $post;
	$result = new WP_Query('pagename=' . $name);
    
	$lookup = array( 
		'post_parent' => $result->post->ID,
		'post_type'   => 'page',
	);
 
	$childpages = get_children($lookup);
 
	if(count($childpages) > 0){
		foreach($childpages as $k => $post){
			echo  '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
		}
	}
    wp_reset_postdata();
}

add_action( 'widgets_init', 'sixgill_widgets_init' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 315, false);
add_image_size( 'spec_thumb', 1000, 350, true );
add_image_size( 'solutions-thumbnails', 300, 650, false );

?>
