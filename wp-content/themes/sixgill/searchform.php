<form
	class="search-form  <?php echo $searchFormClasses; ?>"
	role="search"
	method="get"
	action="<?php echo home_url('/'); ?>"
>
  <input name="s" type="text" class="search-form-input" required>
  <input class="search-form-submit" type="submit" value="">
  <div class="search-form-placeholder">
    <img class="search-form-placeholder-icon" src="http://dev-sixgill.pantheonsite.io/wp-content/themes/sixgill/images/search_icon.svg">
    Search...
  </div>
</form>
