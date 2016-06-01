jQuery(function($) {

   $('#inputButton').on('click', search_header);
   $('#inputSearch').on('blur', search_header_hidden);    
    
  function search_header() {
      $('#inputSearch').toggle();
      if ($('#inputSearch').is(":visible")) {
          
          document.getElementById('inputButton').style.width = '10%';
          $(".search-hide").removeClass("search-hide");
          $("#search-header-form").addClass("search");        
          document.getElementById('inputSearch').style.display = 'inline-block';
          
          $('#inputSearch').focus();
          $('#inputButton').attr('type', 'button');
      
      } 
      else {
          if ($('#inputSearch').val()) {
              $('button').attr('type', 'submit');
              
              return;
          }
          else {
              document.getElementById('inputButton').style.width = '100%';
              $(".search").removeClass("search");
              $("#search-header-form").addClass("search-hide");
              
              document.getElementById('inputSearch').style.display = 'none'; 
              $('#inputSearch').hide();
              $('#inputButton').attr('type', 'button');
          }
      }
  }
    
  function search_header_hidden(e) {
      if ((e.relatedTarget || {}).nodeName === 'BUTTON') return;
      if ($('#inputSearch').val()) return;
      
      document.getElementById('inputButton').style.width = '100%';
      $(".search").removeClass("search");
      $("#search-header-form").addClass("search-hide");
      document.getElementById('inputSearch').style.display = 'none'; 
      $('#inputSearch').hide();
      $('#inputButton').attr('type', 'button');
  }
});
