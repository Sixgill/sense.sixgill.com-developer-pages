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

}

add_action( 'widgets_init', 'sixgill_widgets_init' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 315, false);
 ?>
