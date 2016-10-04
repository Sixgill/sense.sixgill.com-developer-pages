<form
	class="search-form  <?php echo $searchFormClasses; ?>"
	role="search"
	method="get"
	action="<?php echo home_url('/'); ?>"
>
	<?php
		$searchQuery = "";
		if($displaySearchQuery) {
			$searchQuery = get_search_query();
		}
	 ?>
  <input name="s" type="text" class="search-form-input" required value="<?php echo $searchQuery; ?>">
  <input class="search-form-submit" type="submit" value="">
  <div class="search-form-placeholder">
    <img class="search-form-placeholder-icon" src="/wp-content/themes/sixgill/images/search_icon.svg">
    Search...
  </div>
</form>
