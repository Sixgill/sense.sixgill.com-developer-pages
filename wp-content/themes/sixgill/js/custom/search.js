jQuery(function($) {
	var isSearchOpenned = true;
	var compactSearchContainer = $('#search-container-compact');
	var compactSearchButton = $('#search-button-compact');
	var compactSearchInput = $('#search-input-compact');

	function openSearchForm(searchInput, searchContainer) {
			searchContainer.addClass('search-border');
			searchInput.show();
			isSearchOpenned = true;
	}

	function closeSearchForm(searchInput, searchContainer) {
		searchContainer.removeClass('search-border');
		searchInput.hide();
		isSearchOpenned = false;
	}

	function hideSearchInputIfEmpty(searchInput, searchContainer) {
		if(!searchInput.val().length && isSearchOpenned) {
			closeSearchForm(searchInput, searchContainer);
		}
	}

	function toggleSearchForm(searchInput, searchContainer) {
		var result = true;
		if(isSearchOpenned) {
			closeSearchForm(searchInput, searchContainer);
			result = false;
		} else {
			openSearchForm(searchInput, searchContainer);
		}
		return result;
	}

	compactSearchButton.click(function() {
		if(toggleSearchForm(compactSearchInput, compactSearchContainer)) {
			compactSearchInput.focus();
		} else {

		}
	});

	function validateSearchQuery(query) {
		var validationResult = true;
		//Not valid if empty
		if(!query.length) {
			validationResult = false;
		} //TODO: add more validation conditions using else if

		return validationResult;
	}

	compactSearchInput.focusout(function() {
		setTimeout(function() {
			hideSearchInputIfEmpty(compactSearchInput, compactSearchContainer);
		}, 100);
	});

	hideSearchInputIfEmpty(compactSearchInput, compactSearchContainer);

});
