<?php
// Registro del menú de WordPress
add_theme_support( 'nav-menus' );
 
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}
//  Main Sidebar - widgets espacios 
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));
//  Footer 1 Sidebar - widgets espacios 
 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  		'name'=>'footer1_widget',
        'before_widget' => '<li class="widget">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));
//  Footer 1 Sidebar - widgets espacios 
 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  		'name'=>'footer2_widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));
//  Footer 1 Sidebar - widgets espacios 
 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  		'name'=>'footer3_widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));
 //  Footer 1 Sidebar - widgets espacios 
 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  		'name'=>'footer4_widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));
  //  Footer 1 Sidebar - widgets espacios 
 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  		'name'=>'bannerp_widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle" style="display:none">',
        'after_title' => '</h3>',
  )); 
 
 
//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);

?>
