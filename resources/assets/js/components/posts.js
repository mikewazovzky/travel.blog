/********************** Module Posts: User Page Script ********************/

import { handleImageSelect } from './service';
import { handlePageSelect } from './service';
	
// Set User Form event handlers
export function setEventHandlers() {	
	
	// Hide Select File(s) Buttons 
	$("#pageFile").css("display", "none");
	$("#featuredFile").css("display", "none");
	
	// Change Image to Selected by User and display image file name upon Image Selection
	$("#featuredFile").change(function(evt) {
		handleImageSelect(evt, "#featuredImage", "#featuredInfo");
	});		
	
	// click the Image to simulate Select File click on File Input form
	$("#featuredImage").click(function() {
		$("#featuredFile").click(); 
	});	

	// handle fileSelect -> display page info
	
	// click the Image to simulate Select File click on File Input form
	$("#pageButton").click(function(event) {
		$("#pageFile").click(); 
		event.preventDefault();
		
	});		
	
	// Display file name upon Page Selection
	$("#pageFile").change(function(evt) {
		alert('HELLO!');
		handlePageSelect(evt, "#pageInfo");
	});		
}	