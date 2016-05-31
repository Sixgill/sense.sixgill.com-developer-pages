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

function getChindrenByParentSlug($slug){

	$args = array(
	'name'        => $slug,
	'post_type'   => 'page',
	'post_status' => 'publish',
	'numberposts' => 1
	);

	$result = new WP_Query($args);

	$lookup = array(
		'post_parent' => $result->post->ID,
		'post_status' => 'any'
	);

	$childpages = get_children($lookup);

	return $childpages;
}

function sixgill_widgets_init() {

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

function pagination($pages = '', $range = 4) {  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
//         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 ) {
             echo "<a href='".get_pagenum_link($paged - 1)."'> <img src=\"/wp-content/themes/sixgill/images/icons/left-page.png\" style=\"height: 30px; margin-right:20px;\"> </a>";
         }
         else {
             echo "<img src=\"/wp-content/themes/sixgill/images/icons/left-no-page.png\" style=\"height: 30px; margin-right:20px;\">"; 
         }
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span style=\"margin-right:10px;\" class=\"current\"><ins><b>".$i."</b></ins></span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\" style=\"margin-right:10px; color: black;\">".$i."</a>";
             }
         }
             
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {
            echo "...";
            echo "<a href='".get_pagenum_link($pages)."' style=\"margin-right:20px; margin-left:10px; color: black;\"> ".$pages." </a>";
        }

        if ($paged < $pages ) {
            echo "<a href=\"".get_pagenum_link($paged + 1)."\"> <img src=\"/wp-content/themes/sixgill/images/icons/right-page.png\" style=\"height: 30px; \"> </a>"; 
        }
         else {
             echo "<img src=\"/wp-content/themes/sixgill/images/icons/right-no-page.png\" style=\"height: 30px;\">"; 
         }
     }
}

add_filter('excerpt_more', function($more) {
	return '...';
});

add_action( 'widgets_init', 'sixgill_widgets_init' );

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
set_post_thumbnail_size(600, 315, false);
add_image_size( 'spec_thumb', 1000, 350, true );
add_image_size( 'solutions-thumbnails', 300, 650, false );

?>
