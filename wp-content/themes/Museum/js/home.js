jQuery(function($){
	$('#featureSlider').loopedSlider({
		container: ".projector",
		containerClick: false,
		//autoStart: 3000,
		addPagination: true,
		slidespeed: 500
		
		//container: ".projector", //Class/id of main container. You can use "#container" for an id.
		//slides: ".slides", //Class/id of slide container. You can use "#slides" for an id.
		//pagination: "pagination", //Class name of parent ul for numbered links. Don't add a "." here.
		//containerClick: true, //Click slider to goto next slide? true/false
		//autoStart: 0, //Set to positive number for true. This number will be the time between transitions.
		//restart: 0, //Set to positive number for true. Sets time until autoStart is restarted.
		//slidespeed: 300, //Speed of slide animation, 1000 = 1second.
		//fadespeed: 200, //Speed of fade animation, 1000 = 1second.
		//autoHeight: 0, //Set to positive number for true. This number will be the speed of the animation.
		//addPagination: false //Add pagination links based on content? true/false

	});
	
	/*
	//LOOPED CAROUSEL	
	$('#recentWorkCarousel').loopedCarousel({
		container: '.recentWorkContainer', // Class or ID of main container
		slides: '.recentWorkSlides', // Class or ID of slide container
		pagination: '.recentWorkPagination', // Class or ID of pagination container
		autoStart: 0, // Set to positive number for auto start and interval time
		slidespeed: 900, // Speed of slide animation
		fadespeed: 900, // Speed of fade animation
		items: 4, // Items shown
		padding: 15, // Padding between items
		showPagination: true, // Shows pagination links
		vertical: false // Set to true for vertical carousel
	});
	*/
});
