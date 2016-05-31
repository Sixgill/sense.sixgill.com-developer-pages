<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">

  <div class="content-wrap" style="padding-bottom:0px;">

    <section class="header-stick" >
        <hr class="title-dotted-border header-search">
        
        <div class="container-fluid clearfix" style="margin-bottom:0px; max-width:900px;">
            <div class="search-form-container form-page-search">
                <?php get_search_form(); ?>
            </div>
                
                  
            <h1 style="margin:0">Search Result</h1>
            <p style="color:#999999"> <?php echo $wp_query->found_posts; ?> Results </p>
            
            <?php 
            if( have_posts() ):
                while( have_posts() ): the_post(); 
                    get_template_part('content', 'search');
                endwhile;
            endif;
            ?>
            
            <div id="pagination" class="pagination-search">
                <?php
                if (function_exists("pagination")) {
                    pagination($wp_query->max_num_pages);
                } ?>
            </div>
        </div>
    </section>
  </div>
    
</section><!-- #content end -->
<?php get_footer(); ?>
