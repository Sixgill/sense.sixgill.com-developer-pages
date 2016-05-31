<form id="searchform"  style="margin-top:5px" class="form-search" role="search" method="get" name="search-form"  action="<?php echo home_url('/'); ?>">
    <div id="search-header-form" class="search-hide">
        <input id="inputSearch" type="search" class="form-control-header"  placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search">
        <input id="inputButton" type="submit" value="" name="search" style="width: 100%;">
    </div>
</form>


