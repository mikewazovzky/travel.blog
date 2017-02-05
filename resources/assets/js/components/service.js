/*************** Module Service: Helper Functions Library ***************/


// Render Image Selected by User
export function handleImageSelect(evt, image, msg) {
	
	var fileList = evt.target.files; // FileList object
	
	// if nothing was selected
	if(fileList.length == 0) {
		return;
	}
	
	// only one file expected
	var file = fileList[0];
	
	// process only image files.
	if (!file.type.match('image.*')) {
		$(msg).text("Only images can be used for Avatar....");
		return;
	}
	
	// async file read
	var reader = new FileReader();
	
	// Closure to capture the file information.
	reader.onload = (function(theFile) {
		return function(e) {
			// Update image and Info 
			$(image).attr("src", e.target.result);
			$(msg).text(file.name);
		};
	})(file);
	
	// Read in the image file as a data URL.
	reader.readAsDataURL(file);
}		
	
// Display Selected file (page) name and read content 
export function handlePageSelect(evt, msg) {
	var fileList = evt.target.files; // FileList object
	
	// if nothing was selected
	if(fileList.length == 0) {
		return;
	}
	var file = fileList[0];
	var reader = new FileReader();
	
	// Closure to capture the file information.
	reader.onload = (function(theFile) {
		return function(e) {
			// Update image and Info 
			$(msg).text(file.name);
		};
	})(file);
	
	// Read the file as text
	reader.readAsText(file);		
}