document.getElementById("loginForm").addEventListener("submit", function (event) {
    var error = false;

    // Check email
    var emailErr = document.getElementById("emailError");
    var emailInput = document.getElementById("email");
    if (emailInput.value === "") {
        emailErr.innerHTML = "Please enter your email";
        error = true;
    } else {
        emailErr.innerHTML = "";
    }

    // Check password
    var passErr = document.getElementById("passError");
    var passInput = document.getElementById("pass");
    if (passInput.value === "" || passInput.value.length < 8) {
        passErr.innerHTML = "Password should have at least 8 characters";
        error = true;
    } else {
        passErr.innerHTML = "";
    }

    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    } else {
        var successMsg = document.getElementById("logSucc");
        successMsg.innerHTML = "Success login";
    }
});
