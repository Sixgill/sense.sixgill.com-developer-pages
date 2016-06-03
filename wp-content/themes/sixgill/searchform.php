<form id="searchform" class="form-search" role="search" method="get" action="<?php echo home_url('/'); ?>">
	<div class="search">
		<input id="inputSearch" type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search">
		<button id="buttonSearch" type="submit" value=""></button>
	</div>
</form>

