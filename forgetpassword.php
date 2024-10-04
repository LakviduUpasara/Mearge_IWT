<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles/Forgetpasswored.css">
</head>
<body>
  

    <div class="form-container">
        <div class="form-login">
            <form action="send_otp.php" method="post" id="forgotPasswordForm">
                <h2 id="sign-heading2">Forgot Password</h2>

                <div class="form-elements">
                    <label for="Email">Enter your email address</label>
                    <input type="email" id="Email" name="Email" placeholder="Enter your email address" required>
                </div>

                <div class="form-elements">
                    <button type="submit" name="submit" value="Send OTP">Send OTP</button>
                </div>

                <div class="form-elements">
                    <a href="login.php">Go back to Sign In</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
