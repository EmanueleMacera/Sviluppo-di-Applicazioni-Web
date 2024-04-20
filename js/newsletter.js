document.getElementById("newsletterForm").addEventListener("submit", function (event) {
    var error = false;

    // Check subject
    var subjectErr = document.getElementById("subjectError");
    var subjectInput = document.getElementById("subject");
    if (subjectInput.value === "") {
        subjectErr.innerHTML = "Please enter the email subject";
        error = true;
    } else {
        subjectErr.innerHTML = "";
    }

    // Check text
    var textErr = document.getElementById("textError");
    var textInput = document.getElementById("newsletter");
    if (textInput.value === "") {
        textErr.innerHTML = "Please enter the email content";
        error = true;
    } else {
        textErr.innerHTML = "";
    }

    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    } else {
        var successMsg = document.getElementById("sendSuccess");
        successMsg.innerHTML = "Email sent successfully";
    }
});
