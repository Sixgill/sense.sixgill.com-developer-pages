jQuery(function($) {
	var searchOpenned = false;
	//Chache DOM search
	var searchQueryInput = $('#search-query');
	var searchButton = $('#search-button');
	var searchForm = $('#search-header-form');

	function hideSearch() {
		searchOpenned = false;
		searchButton.addClass('closed');
		searchQueryInput.addClass('closed');
	}

	function showSearch() {
		searchOpenned = true;
		searchButton.removeClass('closed');
		searchQueryInput.removeClass('closed');
		searchQueryInput.focus();
	}

	function validateSearchForm(event, form) {
		var validationResult = true;
		if(searchQuery.length == 0) {
			validationResult = false;
		}
		return validationResult;
	}

	searchForm.submit(function(event) {
		if(!validateSearchForm(searchQueryInput.val())) {
			event.preventDefault();
		}
	});

	searchButton.click(function() {
		if(searchOpenned) {
			if(searchQueryInput.val().length>0) {
				searchForm.submit();
			} else {
				hideSearch();
			}
		} else {
			showSearch();
		}
	});

	searchForm.focusout(function() {
		if(searchQueryInput.val().length==0) {
			setTimeout(function() {
				if(searchOpenned) {
					hideSearch();
				}
			}, 100);
		}
	});

});
