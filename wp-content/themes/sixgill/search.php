<?php
	get_header();

	$searchSettingsID = getPageBySlug('search_settings')->ID;

	$countResults =  $wp_query->found_posts;
	$pluralEnding = "";
	if($countResults > 1) {
		$pluralEnding = "S";
	}
	$subtitle =  number_format($countResults)." RESULT".$pluralEnding." FOUND";
?>
<div
	class="search-results-header responsive-background"
	desktop-src="<?php the_field("header_image_desktop", $searchSettingsID ); ?>"
	tablet-src="<?php the_field("header_image_tablet", $searchSettingsID ); ?>"
	mobile-src="<?php the_field("header_image_mobile", $searchSettingsID ); ?>"
>
	<h1 class="search-results-header-title">
		<?php the_field("title", $searchSettingsID ); ?>
	</h1>
	<h2 class="search-results-header-subtitle">
		<?php echo $subtitle; ?>
	</h2>
</div>

<div class="search-results-content">
	<div class="search-results-form-wrapper">
		<?php
			global $searchFormClasses;
			$searchFormClasses = "always-active";
			include(locate_template('searchform.php'));
		?>
	</div>

	<div class="search-results-list">
		<?php

			if( have_posts() ):
				while( have_posts() ): the_post();
					?>

						<div class="search-results-elem">
							<div class="search-results-elem-title">
								<a href="<?php the_permalink(); ?>" class="search-results-elem-link" target="_blank">
									<?php the_title(); ?>
								</a>
							</div>

							<div class="search-results-elem-description">
								<?php
									$outputFieldName = get_field("search_result_field");
									if($outputFieldName) {
										echo custom_field_excerpt($outputFieldName);
									} else {
										the_excerpt("");
									}
								?>
							</div>
						</div>

					<?php
				endwhile;
			endif;
		?>
	</div>

	<div class="pagination">
		<?php the_posts_pagination( array(
											'prev_text'    => __(''),
											'next_text'    => __(''),
		) );  ?>
	</div>
</div>

<?php get_footer(); ?>
