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

function mk_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Press release list page widget', 'mk' ),
		'id'            => 'sixgill-press-list',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}

add_action( 'widgets_init', 'mk_widgets_init' );


 ?>
