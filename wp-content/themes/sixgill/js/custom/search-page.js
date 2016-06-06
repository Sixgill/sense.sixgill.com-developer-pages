jQuery(function($) {
	var searchOpenned = false;
	//Chache DOM search
	var searchQueryInput = $('#pageInputForm, #menuInputFormHeader, #pageInputFormHeader');
	var searchButton = $('#spageButtonForm, #menuButtonFormHeader, #pageButtonFormHeader');
	var searchForm = $('#pageSearchForm, #menuSearchFormHeader, #pageSearchFormHeader');
  
	function validateSearchForm(searchQuery) {
		//TODO: improve validation
		//Validation passed: true
		//Otherwise: false
		var validationResult = true;
		if(searchQuery.length==0) {
			validationResult = false;
		}
		//Add here more conditions with validationResult = false action
		return validationResult;
	}
  
	searchForm.submit(function(event) {
		if(!validateSearchForm(searchQueryInput.val())) {
			event.preventDefault();
		}
	});
  
	searchButton.click(function() {
		if(searchQueryInput.val().length==0) {
			
		} 
	});
  
});
