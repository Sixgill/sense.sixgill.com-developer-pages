<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">
	<div class="content-wrap no-bottom-padding">
		
		<hr class="title-dotted-border header-search display-only-desktop">
			<div id="tablet" class="background-search no-desktop-display margin-table-search">
				<div class="search-form-container form-page-search padding-search">
					<?php get_search_form(); ?>
				</div>
			</div>
		<div id="tablet" class="background-search display-only-desktop">
			<div class="search-form-container form-page-search padding-search">
				<?php get_search_form(); ?>
			</div>
		</div>
		
		<section class="header-stick" style="    padding-top: 80px;">
			<div class="container-fluid clearfix search-container">	
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
