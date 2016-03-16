<?php
    /**************************************************************
    *          Menus
    ***************************************************************/
    if ( function_exists( 'register_nav_menu' ) ) {
        register_nav_menus(
        array(
        'main'   => __('Main', 'framework'),
        )
        );
        register_nav_menus(
        array(
        'footer'   => __('Footer', 'framework'),
        )
        );
    }
    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    /**************************************************************
    *          Tumbnails
    ***************************************************************/

    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
    add_theme_support( 'custom-header' );
  
    function wv_wp_title( $title, $sep ) {
        global $paged, $page;

        if ( is_feed() )
        return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'webvirtue' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'wv_wp_title', 10, 2 );

    function wp_scripts_styles(){
        wp_enqueue_style( 'wv-style', get_stylesheet_uri() );
        wp_enqueue_script("jquery");
        wp_enqueue_script("wv-jquery-js",get_template_directory_uri() . '/js/jquery.js');
        wp_enqueue_script("wv-bootstrap-min-js",get_template_directory_uri() . '/js/bootstrap.min.js');
        //wp_enqueue_script("wv-jquery-1.5.1-js",get_template_directory_uri() . '/js/jquery-1.5.1.js');
        wp_enqueue_script("wv-jquery.videoBG-js",get_template_directory_uri() . '/js/jquery.videoBG.js');
        wp_enqueue_script("wv-Script-js",get_template_directory_uri() . '/js/script.js');
        
    }
    add_action( 'wp_enqueue_scripts', 'wp_scripts_styles' );

    /**
    override get_search_form()
    */
    function wv_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
        <input name="s" id="s" type="text" class="src search-input" value="' . get_search_query() . '" />
        <input type="submit" id="searchsubmit"  class="submit" value="" />
        </form>';

        return $form;
    }

    add_filter( 'get_search_form', 'wv_search_form' );

    function wv_the_title($before = '', $after = '', $echo = true) {
        if(is_category() || is_tag())
        $title = single_cat_title('', false);
        if(is_page() || is_single())
        $title = get_the_title();
        if(is_search())
        $title = __('Search for : ').get_search_query();
        $title_array = explode( " ", $title );
        $title_array[0] = $title_array[0];
        $title = implode(" ",$title_array);
        if ( strlen($title) == 0 )
        return;

        $title = $before . $title . $after;

        if ( $echo )
        echo $title;
        else
        return $title;
    }
    function wv_breadcrumb(){
        global $post,$wp_query;

        $nav = '<aside class="about-bottom-area">';
        $nav.='<li><a href="/stevenciobo/index.html">'.__('Home').'</a></li>';
        if(is_front_page()){
            $nav.='<li><a href="'.home_url().'"><span class="red">'.__('News').'</a></span></li>';
        }else{
            $nav.='<li><a href="'.home_url().'">'.__('News').'</a></li>';   
        }
        //print_r($post);
        if(is_page() && $post->post_parent){
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                //$nav .= '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id  = $page->post_parent;
            }
            $nav.=implode("",array_reverse($breadcrumbs));
            $nav .= '<li><span class="red">' . get_the_title($post->ID) . '</span></li>';
        }elseif(is_page() && !$post->post_parent){
            $nav .= '<li><span class="red">' . get_the_title($post->ID) . '</span></li>';
        }elseif(is_category()){

            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) $nav.= '<li>'.get_category_parents($parentCat, TRUE,"</li><li>" ).'</li>';

            $nav .='<li><span class="red">' . single_cat_title('', false) . '</span></li>';
        }elseif(is_single()){
            $cat = get_the_category();
            $cat = $cat[0];
            $nav.= '<li>'.get_category_parents($cat, TRUE,"</li><li>" ).'</li>';
            $tags = get_the_tags($post->ID);
            //print_r($tags);
            if(!empty($tags)){
                $tag = array_pop(array_reverse($tags));
                $nav .='<li><a href="'.get_tag_link($tag->term_id). '">'.$tag->name.'</a></li>';
            }
            $nav .='<li><span class="red">' . $post->post_title . '</span></li>';

        }elseif(is_tag()){
            $tag_obj = $wp_query->get_queried_object();
            $nav .='<li><span class="red">' . $tag_obj->name . '</span></li>';
        }elseif(is_search()){
            $nav .='<li><span class="red">'.__('Search').'</span></li>';
        }
        $nav.='</aside>';

        echo $nav;

    }
    function custom_excerpt_length( $length ) {
        return 63;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    function new_excerpt_more( $more ) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    if ( ! function_exists( 'webvirtue_entry_meta' ) ) :
    /**
    * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
    *
    * Create your own webvirtue_entry_meta() to override in a child theme.
    *
    * @since webvirtue 1.0
    *
    * @return void
    */
    function webvirtue_entry_meta() {
        if ( is_sticky() && is_home() && ! is_paged() )
        echo '<span class="featured-post">' . __( 'Sticky', 'webvirtue' ) . '</span>';

        if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
        webvirtue_entry_date();

        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'webvirtue' ) );
        if ( $categories_list ) {
            echo '<span class="categories-links">' . $categories_list . '</span>';
        }

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'webvirtue' ) );
        if ( $tag_list ) {
            echo '<span class="tags-links">' . $tag_list . '</span>';
        }

        // Post author
        if ( 'post' == get_post_type() ) {
            printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_attr( sprintf( __( 'View all posts by %s', 'webvirtue' ), get_the_author() ) ),
            get_the_author()
            );
        }
    }
    endif;

    if ( ! function_exists( 'webvirtue_entry_date' ) ) :
    /**
    * Prints HTML with date information for current post.
    *
    * Create your own webvirtue_entry_date() to override in a child theme.
    *
    * @since webvirtue 1.0
    *
    * @param boolean $echo Whether to echo the date. Default true.
    * @return string The HTML-formatted post date.
    */
    function webvirtue_entry_date( $echo = true ) {
        if ( has_post_format( array( 'chat', 'status' ) ) )
        $format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'webvirtue' );
        else
        $format_prefix = '%2$s';

        $date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
        esc_url( get_permalink() ),
        esc_attr( sprintf( __( 'Permalink to %s', 'webvirtue' ), the_title_attribute( 'echo=0' ) ) ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
        );

        if ( $echo )
        echo $date;

        return $date;
    }
    endif;

    if ( ! function_exists( 'webvirtue_paging_nav' ) ) :
    /**
    * Displays navigation to next/previous set of posts when applicable.
    *
    * @since webvirtue 1.0
    *
    * @return void
    */
    function webvirtue_paging_nav() {
        global $wp_query;

        // Don't print empty markup if there's only one page.
        if ( $wp_query->max_num_pages < 2 )
        return;
    ?>
    <nav class="navigation paging-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'webvirtue' ); ?></h1>
        <div class="nav-links">

            <?php if ( get_next_posts_link() ) : ?>
            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'webvirtue' ) ); ?></div>
            <?php endif; ?>

            <?php if ( get_previous_posts_link() ) : ?>
            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'webvirtue' ) ); ?></div>
            <?php endif; ?>

        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
        }
    endif;       
?>
