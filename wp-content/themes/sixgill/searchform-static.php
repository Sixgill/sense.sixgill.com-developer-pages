<form class="searchform searchform-static" role="search" method="get" action="<?php echo home_url('/'); ?>">
		<input
			class="searchform searchform-static"
			placeholder="Search"
			value="<?php echo get_search_query(); ?>"
			name="s"
		>
		<div role="search-button search-button-compact" type="submit" value=""></div>
</form>
