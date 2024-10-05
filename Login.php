<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/Login.css">
</head>
<body>

    <?php include './navbar.php' ?>

<div class="form-container">

    <form action="" id="loginForm">
        <h2 id="sign-heading2">Sign In</h2>

        <div class="form-elemets">
                         <?php 
                            if(isset($_SESSION['error']))
                            {
                                echo "<p id='message'>".$_SESSION['error']."</p>" ;
                                echo" <script>alert('Email or Password is incorrect ') ;</script>" ;

                            } 
                            unset($_SESSION['error']);
                        
                        ?>
                     </div>

        <div class="form-elements">
            <label for="Email">Email</label>
            <input type="text" id="Email" name="Email" placeholder="Enter Email Address">
        </div>

        <div class="form-elements">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
        </div>

        <div class="form-elements">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember Me</label>
        </div>

        <div class="form-elements">
            <button type="submit" name="submit" value="Login-now">Sign In</button>
        </div>
        <div class="form-elements">
            <a href="./forgetpassword.php">Forget password</a>
        </div>
    </form>
    
</div>

<div class="footer-desing">
<?php

        include "./footer.php" ;
?>
</div>

</body>
</html>
