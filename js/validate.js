/* Form validation */

/* Follows the format of validate.js from section 4 */

function validateForm(form) {
	var reason = "";
	reason += validateName(form.name);
	reason += validateComment(form.comment);
    
	if (reason != "") {
		event.preventDefault();
    	alert("Please make the following changes:\n" + reason);
    	return false;
	}
    return true;
}

function validateName(field) {
    var error = "";
    var legalname = /[A-Za-z\s-]/;
    if (field.value.length == 0) {
        field.className = 'missing';
        error = "Please enter a name.\n";
    }
    else if (field.value.length > 100){
        field.className = 'invalid';
        error = "The name you entered was too long. Please limit to 100 characters or less.\n";
    }
    else if(legalname.test(field.value)) {
        field.className = '';
    }
	else {
		field.className = 'invalid';
		error = "Please enter a valid name.\n";
    }
	return error;
}

function validateComment(field) {
    var error = "";
    var legalcomment = /[A-Za-z\s-0-9]+/;
    
    if (field.value.length == 0) {
        field.classComment = 'missing';
        error = "Please enter a comment.\n";
    }
    else if(legalcomment.test(field.value)) {
        field.classComment = '';
    }
    else {
		field.classComment = 'invalid';
		error = "Please enter a valid comment.\n";
    }
	return error;
}