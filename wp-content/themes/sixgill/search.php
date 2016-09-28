<?php
	get_header();

	$searchSettingsID = getPageBySlug('search_settings')->ID;

	$countResults =  $wp_query->found_posts;
	$pluralEnding = "";
	if($countResults > 1) {
		$pluralEnding = "S";
	}
	$subtitle =  $countResults." RESULT".$pluralEnding." FOUND";
?>
<div
	class="search-results-header responsive-background"
	desktop-src="<?php the_field("header_image_desktop"); ?>"
	tablet-src="<?php the_field("header_image_tablet"); ?>"
	mobile-src="<?php the_field("header_image_mobile"); ?>"
>
	<h1 class="search-results-title">
		<?php the_field("title") ?>
	</h1>
	<h2 class="search-results-subtitle">
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
					the_title();
				endwhile;
			endif;
		?>
	</div>

	<div class="search-results-pagination">
		<?php the_posts_pagination( array(
											'prev_text'    => __(''),
											'next_text'    => __(''),
		) );  ?>
	</div>
</div>

<?php get_footer(); ?>
