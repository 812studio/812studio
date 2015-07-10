<?php
$post = $wp_query->post;
/*
	//If in Writing category
	if ( in_category('30') ) {
	
		include(TEMPLATEPATH . '/single-Writing.php');
	
	//IF in the Web category
	} 
	elseif ( in_category('4') ) {
	
		include(TEMPLATEPATH . '/single-Web.php');
	}
	
	//IF in the Photography category
	 elseif ( in_category('5') ) {
	
		include(TEMPLATEPATH . '/single-Photography.php');
	}	
	
	//Default to Print category
	elseif ( in_category('6') ) {
	
	include(TEMPLATEPATH . '/single-Print.php');
	} 

	//Default to Graphic Design category
	elseif ( in_category('41') ) {
	
	include(TEMPLATEPATH . '/single-Graphic-Design.php');
	} 

	//Default to Graphic Design category
	else {
	
	include(TEMPLATEPATH . '/single-Any.php');
	} 
*/
include(TEMPLATEPATH . '/single-Any.php');