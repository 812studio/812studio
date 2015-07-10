/*
Plugin:				Initial Letter v1.0

	Created:	April, 29 2010
	Author:	 	Benjamin Gandhi-Shepard
	License:	Dual licensed under the MIT and GPL licenses:
 				* http://www.opensource.org/licenses/mit-license.php
 				* http://www.gnu.org/licenses/gpl.html
	
	
Description:	http://812studio.com/initial-letter-style-jquery-plugin
*/



(function($){

	$.fn.initialLetter = function(options) {
	
		var $options = $.extend({}, $.fn.initialLetter.defaults, options);
	
		return this.each(function() {
		
			var $initialLetter = $options.initialLetter;
			var $content = $(this).html();
			var $firstLetter = $('<span>'+$content.charAt(0)+'</span>').addClass($initialLetter);
			
			$(this).html($content.substring(1)).prepend($firstLetter);
			
	 	});
	 	
	 	$.fn.initialLetter.defaults = { initialLetter : 'dropped'	}
		
	};
	 
})(jQuery); 
