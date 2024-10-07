function validateForm(event) {

    // Get values from the form fields
    let firstName = document.getElementById("firstname").value;
    let lastName = document.getElementById("lastname").value;
    let phoneNumber = document.getElementById("phone-number").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;

    // Check if any field is empty and alert the user
    if (!firstName) {
        alert("First name must be filled out");
        return false;
    } else if (lastName === "") {
        alert("Last name must be filled out");
        return false;
    } else if (phoneNumber === "") {
        alert("Phone number must be filled out");
        return false;
    } else if (email === "") {
        alert("Email must be filled out");
        return false;
    } else if (password === "") {
        alert("Password must be filled out");
        return false;
    } else if (confirmPassword === "") {
        alert("Confirm password must be filled out");
        return false;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
    
}



