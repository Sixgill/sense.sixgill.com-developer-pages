<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content" class="search-result-section">
	<div class="content-wrap no-bottom-padding">

		<hr class="title-dotted-border header-search display-only-desktop">

		<div class="searchform-result">
			<?php get_template_part('searchform-static'); ?>
		</div>

		<section class="header-stick search-content">
			<div class="container-fluid clearfix search-container no-padding-left no-padding-right">
				<p class="no-margin text-search-results line-height-results">
				<?php
				$countResults =  $wp_query->found_posts;
				$pluralEnding = "";
				if($countResults > 1) {
					$pluralEnding = "s";
				}
				echo "Search Result".$pluralEnding;
				?>

			</p>

			<p class="color-999999 margin-results-search">
				<?php
					echo $countResults." Result".$pluralEnding ;
				?>
			</p>

			<?php

				if( have_posts() ):
					while( have_posts() ): the_post();
						get_template_part('content', 'search');
					endwhile;
				endif;
				?>

				<div id="pagination" class="pagination-search no-desktop-display no-tablet-display no-mobile-landscape-display">
					<?php
						if (function_exists("pagination")) {
							pagination($wp_query->max_num_pages, 1);
						}
					?>
				</div>
				<div id="pagination" class="pagination-search no-mobile-portrait-display">
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
