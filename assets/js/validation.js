function validateForm() {
	var username = document.getElementById("registerUsername").value;
	var email = document.getElementById("registerEmail").value;
	var pw = document.getElementById("registerPassword").value;
    var validatePW = document.getElementById("validatePassword").value;

	if (username == null || username == "" || email == null || email == "" || pw == null || pw == "") {
		alert("Please insert values in every box!");
		return false;
	}
	else if (email != null || email != ""){
		return validateEmail()
	}
}

function validateEmail()   
{
	var email = document.getElementById("registerEmail").value;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  
	{  
		return true;
	}  
    alert("You have entered an invalid email address!")  
    return false;
}  