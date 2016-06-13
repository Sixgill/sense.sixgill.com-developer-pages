<div id="search-container-static" class="search-container-static vertical-centered search-border">
	<form class="searchform searchform-static" role="search" method="get" action="<?php echo home_url('/'); ?>">
			<input
				class="search-input search-input-static"
				placeholder="Search"
				value="<?php echo get_search_query(); ?>"
				name="s"
			>
			<div class="search-button search-button-static vertical-centered" role="search-button search-button-static" type="submit" value=""></div>
	</form>
</div>
