/********************** Module User: User Page Script ********************/

import { handleImageSelect } from './service';

// hanle User Form Submit 
function handleUserFormSubmit(event) {
	
	//  check if passwords match
	var pass = $("#userForm input[name='password']").val();
	var pass2 = $("#userForm input[name='password_confirmation']").val();
	var error = "";
	
	if(pass != pass2) {
		error = "Passwords do not match.";
	}
	if(pass.length < 6) {
		error = "Password is too short. Minimum length - 6 simbols.";
	}
	if (error != "") {		
		alert(error);
		event.preventDefault(); // stop form submission
		// reset passwords
		$("#userForm input[name='password']").val("");
		$("#userForm input[name='password_confirmation']").val("");		
	}
	return true;	
}
	
// Set User Form event handlers
export function setEventHandlers() {	
	
	// hide Select File(s) Button on File Input Form
	$("#userFile").css("display", "none");	
	
	// Change Image to Selected by User upon Image Selection
	$("#userFile").change(function(evt) {
		handleImageSelect(evt, "#userImage", "#userInfo");
	});		
	
	// click the Image to simulate Select File click on File Input form
	$("#userImage").click(function() {
		$("#userFile").click(); 
	});	
	
	// handle User Form Submit 
	$("#userForm").submit(function(event) {
		handleUserFormSubmit(event);
	});					
}	