<!--Nadeeja - home page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel= "stylesheet" href="./styles/index.css">
    <link rel ="stylesheet" href ="styles/signpopup.css" >
    <link rel ="stylesheet" href ="styles/feedbackSlider.css" >
</head>
<body>

     <div class="banner">
        <!--Navigation bar creating with logo--> 

        <?php
        include "./navbar.php";
        ?>
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



        <!--Feedbacks-->
        <div class="feedback-tricker">
            <div class="label">Feedback</div>
            <ul class="headlines">
                <li class="active">TechWave is super easy to navigate!😃</li>
                <li>I love the variety of courses available! 😍</li>
                <li>The instructors are knowledgeable and engaging. 👩‍🏫</li>
                <li>The website runs smoothly, and I haven’t encountered any glitches. 😊</li>
                <li>I love the variety of courses available! 😍 There's something for every level of teacher, and the content is very thorough. I can’t wait to explore more!</li>
                <li>Customer support was quick to respond when I had a question! 🙌</li>
                <li>Getting a certificate after completing the courses is a nice touch! 😁 It adds value to my professional profile and feels rewarding!</li>
                <li>I’d love to see more community engagement, like group projects or discussions! 🤗</li>
                <li>Getting a certificate after completing the courses is a great touch! 😁 It adds real value to my professional profile and gives me something tangible to show for my efforts.</li>
            </ul>
        </div>
        <!--Js file of courses slider-->
        <script src="js\feedbackSlider.js"></script>

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

    
      
     <?php
        include "footer.php";
        ?>
    
</body>
</html>