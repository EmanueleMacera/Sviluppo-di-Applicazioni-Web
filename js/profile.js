document.getElementById("profileForm").addEventListener("submit", function(event) {
    var error = false;
    
    // Check Bio
    var bioErr = document.getElementById("bioError");
    var bioInput = document.getElementById("bio");
    if(bioInput.value === ""){
        bioErr.innerHTML = "Please enter your bio";
        error = true;
    }
    else {
        bioErr.innerHTML = "";
    }
    
    // Do not send form in case of error
    if (error) {
        event.preventDefault();
    }
    else {
        var successMsg = document.getElementById("bioSucc");
        successMsg.innerHTML = "Bio updated successfully";
    }
});
