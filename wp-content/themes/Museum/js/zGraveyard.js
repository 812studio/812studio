
/*
// I hacked this filtering feature from Kilian Valkhof's article titled, "How to build a fast, simple list filter with jQuery".
// Check it out:
// http://kilianvalkhof.com/2010/javascript/how-to-build-a-fast-simple-list-filter-with-jquery/


jQuery(function ($) {	
	
  // custom css expression for a case-insensitive contains()
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


  function listFilter(header, list) { // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({
	    	"class":"filterform",
	    	"action":"#"
	    	}),
	    
	    label = $("<label>").attr({
	    	"class":"inField"
	    	}).text("Search");
	    	
        input = $("<input>").attr({
        	"class":"filterinput",
        	"type":"text"
        	});
        	        	
    $(form).append(label).append(input).insertAfter(header);

    $(input)
      .change( function () {
        var filter = $(this).val();
        var filterContent = $("div.filter");
        if(filter) {
         // this finds all links in a list that contain the input,
         // and hides the ones not containing the input while showing the ones that do
         
         // $(list).find("div.filter:not(:Contains(" + filter + "))").parent().slideUp();
         // $(list).find("div.filter:Contains(" + filter + ")").parent().slideDown();
         
        $matches = $(list).find('div.filter:Contains(' + filter + ')').parent();
		$('li', list).not($matches).slideUp();
		$matches.slideDown();

        } else {
          $(list).find("li").slideDown();
        }
        return false;
      })
      
    .keyup( function () {
        // fire the above change event after every letter
        $(this).change();
    });
  }


  //ondomready
  $(function () {
    listFilter($("#header"), $("#list"));
  });
  
});

*/
