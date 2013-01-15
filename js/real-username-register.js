/*
 * Automatically build the username when rules apply, current rules are ...
 * 
 * if after entering the first and last name the username is empty, then fill it in using the 
 * a concatentaion of those two fields
 * 
 */
function customBuildUsername() {
	// make references to form fields
	$firstName = "#edit-field-name-first-0-value";
	$lastName  = "#edit-field-name-last-0-value";
	$userName  = "#edit-name";
	
	// replace username
	$($firstName + ',' + $lastName).bind("blur", function(e) {
		if (   $($lastName).val().length  > 0
			&& $($firstName).val().length > 0  
		    && $($userName).val().length == 0 ) {
			      
			$($userName).val(
	    		  $($firstName).val()
	    		 + ' ' 
	             + $($lastName).val()
			);
		}
	});
	
}

/*
 * do all necessary functions after document load
 */
$(document).ready( function() {

	/*
	 * username logic
	 */
	customBuildUsername();

});
