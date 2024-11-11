function EmailValidation()
{
    document.getElementById('emailForm').addEventListener('submit', function(event) {
        const emailInput = document.getElementById('email').value;
        const errorMessage = document.getElementById('error-message');
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(emailInput)) {
            errorMessage.textContent = 'Please enter a valid email address.';
            event.preventDefault();  
        } else {
            errorMessage.textContent = '';  
        }
    });

}