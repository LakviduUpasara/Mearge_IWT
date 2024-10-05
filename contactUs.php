<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../styles/contactUs_style.css">
</head>
<body>


<!-- Navgtion bar set -->


  <?php 

   include 'navbar.php';

  ?>


<div class= "popup">

<div class ="close-btn" id ="close-btn" onclick="closeModal()">&times;</div>

    <div class="from-login">

        <form action="logcontrl.php" method="post" id="loginForm">
                <h2 id="sign-heading2">Sign In</h2>

            <div class="form-elements">
                <p id="message"><?php echo isset($_GET['error']) ? $_GET['error'] : ''; ?></p>

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

<div class="container">

  <div class="header">
    <h1>TeachWave Online Teacher Training</h1>
    <p>Online Techer Traning System</p>
  </div>

  <div class="content">

    <div class="left-column">
      <h2>Contact Us</h2>
      <div class="contact-info">
        <p>Office</p>
        <p>123 Street, New York, USA</p>
        <p>Mobile</p>
        <p>+012 345 67890</p>
        <p>Email</p>
        <p>info@example.com</p>
      </div>
    </div>

<<<<<<< Updated upstream

    <div class="footer">

    <?php
        include "footer.php";
     ?>

    </div>
       
    
 
=======
    <div class="right-column">
      <form>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value=""><br><br>
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" value=""><br><br>
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" value=""><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Send Message">
      </form>
    </div>

  </div>

  <div class="footer">
    <p>Quick Link</p>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contacts</a></li>
      <li><a href="#">Privacy And Policy</a></li>
    </ul>
  </div>

</div>
<!--footer  connection-->

<?php

        include 'footer.php' ;

?>

>>>>>>> Stashed changes
</body>
</html>