function validateForm(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get values from the form fields
    const firstName = document.getElementById("firstname").value;
    const lastName = document.getElementById("lastname").value;
    const phoneNumber = document.getElementById("phone-number").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    // Check if any field is empty and alert the user
    if (firstName === "") {
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
        
    }else
    {

          // If all checks pass, submit the form
            document.getElementById("form").submit();
            return true;
    }

  
}