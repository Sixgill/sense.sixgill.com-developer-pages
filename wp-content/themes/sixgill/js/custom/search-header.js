jQuery(function($) {

   $('#inputButton').on('click', search_header);
   $('#inputSearch').on('blur', search_header_hidden);
    
    function search_header() {
        document.getElementById('inputButton').style.width = '10%';
        $(".search-hide").removeClass("search-hide");
        $("#search-header-form").addClass("search");
        
        document.getElementById('inputSearch').style.display = 'inline-block';
        document.getElementById("inputSearch").focus();
        
        return false;
    }

    function search_header_hidden() {
        if ($('#inputSearch').val() !== "") {
        
        }
        else {
            document.getElementById('inputButton').style.width = '100%';

            $(".search").removeClass("search");
            $("#search-header-form").addClass("search-hide");
            
            document.getElementById('inputSearch').style.display = 'none';    
        }
    }
});
