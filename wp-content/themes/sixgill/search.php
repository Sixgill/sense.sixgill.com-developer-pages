<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">
	<div class="content-wrap no-bottom-padding">
		<div id="tablet" class="background-search">
			<div class="search-form-container form-page-search padding-search">
				<?php get_search_form(); ?>
			</div>
		</div>
		
		<section class="header-stick">
			<hr class="title-dotted-border header-search display-only-desktop">
			<div class="container-fluid clearfix search-container">
				
<!--
				<div class="search-form-container form-page-search">
					<?php get_search_form(); ?>
				</div>
-->
				
			<h1 class="no-margin">Search Result</h1>
			<p class="color-999999"> <?php echo $wp_query->found_posts; ?> Results </p>
			
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
				}
				?>
			</div>
		</div>
	</section>
</div>

</section><!-- #content end -->
<?php get_footer();	?>
