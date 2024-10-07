<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-Up Sign-Up Form</title>
    <link rel="stylesheet" href="styles/userRegistation.css">
    <link rel="stylesheet" href="styles/userReg.css">
</head>
<body>
    <?php 
    // Start the session before any output
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include './navbar.php'; 
    ?>
    
    <!-- The pop-up form -->
    <div class="wrapper">
        <div class="title">Join Now</div>
        <form method="post" action="UserregisterInsert.php" id="form" onsubmit=" return validateForm()">
            <?php
            if (isset($_SESSION['error'])) {
                echo "<script>alert('Your registration was successfully completed');</script>";
            } 
            unset($_SESSION['error']);
            unset($_SESSION['success']);
            ?>
            <div class="field">
                <input type="text" name="firstname" id="firstname" required>
                <label for="firstname">First name</label>
            </div>
            <div class="field">
                <input type="text" name="lastname" id="lastname" required>
                <label for="lastname">Last name</label>
            </div>
            <div class="field">
                <input type="text" name="phone-number" id="phone-number" required>
                <label for="phone-number">Phone Number</label>
            </div>
            <div class="field">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <div class="field">
                <input type="password" name="confirm-password" id="confirm-password" required>
                <label for="confirm-password">Confirm Password</label>
            </div>
            <div class="btn">
                <input type="submit" value="SIGN UP" id="btn" >
            </div>
        </form>
    </div>
    
    <?php include "footer.php"; ?>
    <script src="js/userRegistation.js"></script>
</body>
</html>
