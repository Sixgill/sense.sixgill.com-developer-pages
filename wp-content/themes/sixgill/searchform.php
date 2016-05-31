<form id="searchform"  style="margin-top:5px" class="form-search" role="search" method="get"  action="<?php echo home_url('/'); ?>">
    <div class="search">
        <input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search">
        <input type="submit-search" value="">
    </div>
</form>

