jQuery(function($) {
	var isMenuOpenned = false;
	var compactSearchContainer = $('#search-container-compact');
	var compactSearchButton = $('#search-button-compact');
	var compactSearchInput = $('#search-input-compact');

	function hideSearchInputIfEmpty(searchInput, searchContainer) {
		if(!searchInput.val().length) {
			searchInput.hide();
			searchContainer.removeClass('search-border');
		}
	}

	function showSearchForm(searchInput, searchContainer) {
		searchContainer.addClass('search-border');
		searchInput.show();
	}

	compactSearchInput.focusin(function() {
		showSearchForm(compactSearchInput, compactSearchContainer);
	});

	compactSearchInput.focusout(function() {
		setTimeout(function() {
			hideEmptySearchInput();
		}, 100);
	});

	hideSearchInputIfEmpty();

});
