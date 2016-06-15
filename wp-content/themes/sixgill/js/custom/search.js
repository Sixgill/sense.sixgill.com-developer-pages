jQuery(function($) {
	var isSearchOpenned = true;
	var compactSearchContainer = $('#search-container-compact');
	var compactSearchButton = $('#search-button-compact');
	var compactSearchInput = $('#search-input-compact');
	var compactSearchForm = $('#searchform-compact');

	function validateSearchQuery(query) {
		var validationResult = true;
		//Not valid if empty
		if(!query.length) {
			validationResult = false;
		} //TODO: add more validation conditions using else if

		return validationResult;
	}

	$('.search-button-hitbox').each(function() {
		var searchForm = $(this).parent();
		var searchQueryInput = searchForm.find('input[name="s"]');
		$(this).click(function(){
			if(validateSearchQuery(searchQueryInput.val())) {
				searchForm.submit();
			}
		});
	});

	function openSearchForm(searchInput, searchContainer) {
			searchContainer.addClass('search-border');
			searchInput.show();
			searchInput.focus();
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

	compactSearchButton.click(function() {
		if(isSearchOpenned) {
			var searchQuery = compactSearchInput.val();
			if(searchQuery.length) {
				if(validateSearchQuery(searchQuery)) {
					compactSearchForm.submit();
				} else {
					//TODO: show validation error
				}
			} else {
				closeSearchForm(compactSearchInput, compactSearchContainer);
			}
		} else {
			openSearchForm(compactSearchInput, compactSearchContainer);
		}
	});

	compactSearchInput.focusout(function() {
		setTimeout(function() {
			hideSearchInputIfEmpty(compactSearchInput, compactSearchContainer);
		}, 100);
	});

	hideSearchInputIfEmpty(compactSearchInput, compactSearchContainer);

});
