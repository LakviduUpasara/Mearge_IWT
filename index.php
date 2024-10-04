<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel= "stylesheet" href="./styles/header_footer.css">
    <link rel= "stylesheet" href="./styles/index.css">
    <link rel ="stylesheet" href ="styles/signpopup.css" >
  

    <!--social media style sheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

        <?php include 'navbar.php'?>
        
     <div class="banner">

        <!--Navigation bar creating with logo--> 

        

        <!--Some detail about aboutus-->
        <div class="about-us">
            <h1>About Us</h1>
            <p>Welcome to TeachWave 
            <br>online teacher training platform</p>

            <!--sign in and join now buttons-->
         
            <div>
                <button class ="home-btn" type="button" id = "body-signinbtn" onclick="openModal()"><span></span>Sign In</button>
                <button class ="home-btn" type="button"><span></span>Join Now</button>

            </div>
        </div>
     </div>

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
      


     </div>
     <!--Footer -->
    <footer>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
            <li><a href="home.php">-Home</a></li>
            <li><a href="About us.php">-About Us</a></li>
            <li><a href="#">-Conatct Us</a></li>
            <li><a href="#">-Privacy And Policy</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Contact Us</h4>
            <p><img src="images/gps.png" alt="gps" class="contact-img"> 160/A, Ekambara state, Gaspe.</p>
            <p><img src="images/phone.png" alt="gps" class="contact-img"> +94 765826516</p>
            <p><img src="images/email.png" alt="gps" class="contact-img"> info@TechWave.com</p>
         </div>

         <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="links">
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    
</body>
</html>