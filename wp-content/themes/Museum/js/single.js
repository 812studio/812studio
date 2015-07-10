jQuery(function($) {
		
	//Validator
	$("#commentform").validate({
		errorLabelContainer: $("#commentform div.error")
	});
	
	//In Field Labels
	$("label").inFieldLabels();

	//Fancybox
	$("a[rel^=fancybox], a[href*=upload]").fancybox({
		//'transitionIn'		: 'none',
		//'transitionOut'		: 'none',
		'titleShow'			: false
		//'titlePosition' 	: 'over',
		//'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		//	return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		//}
	});
	
	//Grab first character for Drop Caps
	$("div.entry p:eq(0)").each(function() {
		var text = $(this).html();
		var first = $('<span>'+text.charAt(0)+'</span>').addClass('dropcap');
		$(this).html(text.substring(1)).prepend(first);
	});
	
	$("blockquote").each(function(){
		var text = $(this).html();
		var bq = $("<span class='bq'>&ldquo;</span>");
		$(this).html(text).prepend(bq);
	});
	   
	//Gradient On li's that have a class of children
	//var ListWithChildren = $("li.comment:has(ul)");
	//ListWithChildren.addClass('greyNest');

});

	