document.getElementById("updatepassForm").addEventListener("submit", function(event) {
    var error = 0;
	
    // Check old password
    var err = document.getElementById("oldpassError");
    var elm = document.getElementById("oldpass");
    if(elm.value == ""){
        err.innerHTML = "Insert old password";
        error = error + 1;
    }
    else {
        // Per riportare alla situazione iniziale
        err.innerHTML = "";
    }
	
    // Check new Password
    err = document.getElementById("newpassError");
    elm = document.getElementById("newpass");
    if(elm.value.length < 8){
        err.innerHTML = "Insert at least 8 characters";
        error = error + 1;
    }
    else {
        // Per riportare alla situazione iniziale
        err.innerHTML = "";
    }
	
    // Check Confirm
    err = document.getElementById("confpassError");
    elm = document.getElementById("confpass");
    if(elm.value != document.getElementById("newpass").value){
        err.innerHTML = "Passwords do not match";
        error = error + 1;
    }
    else {
        // Per riportare alla situazione iniziale
        err.innerHTML = "";
    }
	
    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    }
	else {
		var succ = document.getElementById("uptSucc");
		succ.innerHTML = "Success change";	
	}
});
