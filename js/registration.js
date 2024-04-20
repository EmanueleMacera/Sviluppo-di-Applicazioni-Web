document.getElementById("signupForm").addEventListener("submit", function(event) {
    var error = false;
    
    // Check Firstname
    var firstnameErr = document.getElementById("firstnameError");
    var firstnameInput = document.getElementById("firstname");
    if(firstnameInput.value === ""){
        firstnameErr.innerHTML = "Please enter your firstname";
        error = true;
    }
    else {
        firstnameErr.innerHTML = "";
    }
    
    // Check Lastname
    var lastnameErr = document.getElementById("lastnameError");
    var lastnameInput = document.getElementById("lastname");
    if(lastnameInput.value === ""){
        lastnameErr.innerHTML = "Please enter your lastname";
        error = true;
    }
    else {
        lastnameErr.innerHTML = "";
    }
    
    // Check Email
    var emailErr = document.getElementById("emailError");
    var emailInput = document.getElementById("email");
    if(emailInput.value === ""){
        emailErr.innerHTML = "Please enter your email";
        error = true;
    }
    else {
        emailErr.innerHTML = "";
    }
    
    // Check Password
    var passwordErr = document.getElementById("passwordError");
    var passwordInput = document.getElementById("pass");
    if(passwordInput.value.length < 8){
        passwordErr.innerHTML = "Password should be at least 8 characters";
        error = true;
    }
    else {
        passwordErr.innerHTML = "";
    }
    
    // Check Confirm Password
    var confirmErr = document.getElementById("confirmError");
    var confirmInput = document.getElementById("confirm");
    if(confirmInput.value !== document.getElementById("pass").value){
        confirmErr.innerHTML = "Passwords do not match";
        error = true;
    }
    else {
        confirmErr.innerHTML = "";
    }
    
    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    }
    else {
        var successMsg = document.getElementById("regSucc");
        successMsg.innerHTML = "Registration successful";
    }
});
