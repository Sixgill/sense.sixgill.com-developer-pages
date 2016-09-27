<?php
	get_header();

	$searchSettingsID = getPageBySlug('search_settings')->ID;

	$countResults =  $wp_query->found_posts;
	$pluralEnding = "";
	if($countResults > 1) {
		$pluralEnding = "s";
	}
	$subtitle =  "RESULT".$pluralEnding." FOUND";
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

	</h2>
</div>

<div class="search-results-content">
	<div class="search-results-form-wrapper">
		<form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
			<input class="search-form-input">
			<input class="search-form-submit">
		</form>
	</div>

	<div class="search-results-list">

	</div>

	<div class="search-results-pagination">
		<?php the_posts_pagination( array(
											'prev_text'    => __(''),
											'next_text'    => __(''),
		) );  ?>
	</div>
</div>

<?php get_footer(); ?>
