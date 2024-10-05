<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/signpopup.css">
   



</head>
<body>


<div class= "popup">

<div class ="close-btn" id ="close-btn" onclick="closeModal()">&times;</div>

    <div class="from-login">

        <form action="logcontrl.php" method="post" id="loginForm">
                <h2 id="sign-heading2">Sign In</h2>

            <div class="form-elements">
                <?php 
                    if(isset($_SESSION['error']))
                    {
                        echo "<p id='message'>".$_SESSION['error']."</p>" ;
                        echo" <script>alert('Email or Password is incorrect ') ;</script>" ;

                    } 
                    unset($_SESSION['error']);
                
                ?>

                <label for="Email">Email</label>
                <input type="text" id="Email" name="Email" placeholder="Enter Email Address" required>
            </div>

            <div class="form-elements">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>

            <div class="form-elements">
                <input type="checkbox" id="remember-me" name="remember">
                <label for="remember-me">Remember Me</label>
            </div>

            <div class="form-elements">
                <button type="submit" name="submit" value="Login-now">Sign In</button>
            </div>

            <div class="form-elements">
                <a href="forgetpassword.php">Forget password</a>
     
            </div>
    </div>
        </form>


</div>

<script src ="js/signpopup.js"></script>

<div class="navbar">
    <img src="images/logo.png" alt="logo" class="logo">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutUs.php">About</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
        <li><a href="#" id="nav-signbtn" onclick="openModal()">Sign In</a></li>
        <li><a href="userRegistation.php">Join Now</a></li>
    </ul>
    
</div>





    
</body>
</html>