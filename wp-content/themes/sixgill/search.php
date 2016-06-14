<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">
	<div class="content-wrap no-bottom-padding">

		<hr class="title-dotted-border header-search display-only-desktop">

		<div class="searchform-result">
			<?php get_template_part('searchform-static'); ?>
		</div>

		<section class="header-stick search-content">
			<div class="container-fluid clearfix search-container no-padding-left no-padding-right">
				<?php $countResults =  $wp_query->found_posts;?>
				<h1 class="no-margin"><?php if ($countResults > 1) {
					echo "Search Results";
				?>
				</h1> <p class="color-999999 margin-results-search"> <?php echo $countResults; ?> Results </p> <?php
				}
				else {
					echo "Search Result";
				?>
				</h1> <p class="color-999999 margin-results-search"> <?php echo $countResults; ?> Result </p> <?php

				}

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
