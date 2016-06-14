<div id="search-container-compact" class="search-container-compact vertical-centered search-border">
	<form id="searchform-compact" class="searchform searchform-compact" method="get" action="<?php echo home_url('/'); ?>">
		<input
			id="search-input-compact"
			class="search-input search-input-compact"
			name="s"
			value="<?php echo get_search_query(); ?>"
			placeholder="Search"
			>
		<div id="search-button-compact" class="search-button-hitbox">
			<div
				class="search-button search-button-compact vertical-centered"
			>
			</div>
		</div>
	</form>
</div>
