<div class="compact-search-container vertical-centered search-border">
	<form id="searchform-compact" class="searchform searchform-compact" method="get" action="<?php echo home_url('/'); ?>">
		<input
			class="search-query search-query-compact"
			name="s"
			value="<?php echo get_search_query(); ?>"
			placeholder="Search"
			>
		<div class="search-button search-button-compact vertical-centered"></div>
	</form>
</div>
