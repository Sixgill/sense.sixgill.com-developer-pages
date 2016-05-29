<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">

  <div class="content-wrap" style="padding-bottom:0px;">

    <section class="header-stick" >
    <div class="container-fluid clearfix" style="margin-bottom:0px; max-width:900px;">

        <h1 style="margin:0">Search Result</h1>
        <p style="color:#999999"> <?php echo $wp_query->found_posts; ?> Results </p>
        
        <div class="search-form-container" style="width:50%; margin: 0 auto;">
            <?php get_search_form(); ?>
        </div>
        		<?php 
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			
			<?php endwhile;
		endif;
		?>
        </div>
    </section>

  </div>

</section><!-- #content end -->
<?php get_footer(); ?>
