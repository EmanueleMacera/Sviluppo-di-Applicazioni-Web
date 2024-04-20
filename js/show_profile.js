document.getElementById("showprofileForm").addEventListener("submit", function(event) {
    var error = 0;
    
    // Check Firstname
    var firstnameErr = document.getElementById("firstnameError");
    var firstnameInput = document.getElementById("firstname");
    if(firstnameInput.value === ""){
        firstnameErr.innerHTML = "Please enter your firstname";
        error = error + 1;
    }
    else {
        firstnameErr.innerHTML = "";
    }
    
    // Check Lastname
    var lastnameErr = document.getElementById("lastnameError");
    var lastnameInput = document.getElementById("lastname");
    if(lastnameInput.value === ""){
        lastnameErr.innerHTML = "Please enter your lastname";
        error = error + 1;
    }
    else {
        lastnameErr.innerHTML = "";
    }
    
    // Check Email
    var emailErr = document.getElementById("emailError");
    var emailInput = document.getElementById("email");
    if(emailInput.value === ""){
        emailErr.innerHTML = "Please enter your email";
        error = error + 1;
    }
    else {
        emailErr.innerHTML = "";
    }
    
    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    }
    else {
        var successMsg = document.getElementById("uptSucc");
        successMsg.innerHTML = "Profile updated successfully";
    }
});
