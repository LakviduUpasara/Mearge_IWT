<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel= "stylesheet" href="styles/feedbackstyle.css">
    <link rel= "stylesheet" href="styles/headersithumini.css">

    <!--social media style sheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

     <div class="banner">

        <!--Navigation bar creating with logo--> 
                    <?php

                 include    'Hederfootor.php';
                ManagemntNavbr() ;  

            ?>

        <div class="main-content">
            <h1>Feedback</h1>
            <br>
            <div class="display">
              <!--display feedback-->
              <table class="table">
                  <tr>
                    <th id="f_id"><center>Feedback ID</center></th>
                    <th id="f_name"><center>Name</center></th>
                    <th id="f_email"><center>Email</center></th>
                    <th id="f_course"><center>Course</center></th>
                    <th id="f_feedback"><center>feedback</center></th>
                    <th id="action"><center>Delete</center></th>
                </tr>
                <?php include 'feedback_read.php'; ?>
              </table>

        
            </div>
            <!--feedback form-->
            <div class="feedback-form">
                <form action="insertfeedback.php" method="POST">
      
              <label for="fname">Name :</label>
              <input type="text" name="fname" id="name" placeholder="Enter Name" required>
      
              <label for="email">Email :</label>
              <input type="email" name="email" id="email" placeholder="Enter Email" required>
      
              <label for="course">Course :</label>
              <input type="text" name="course" id="course" placeholder="Enter Course" required>
      
              <label for="feedback">Feedback :</label>
              <textarea name="feedback" id="feedback" placeholder="Enter Feedback"></textarea required>
      
              <div class="buttons">
                <input type="submit" id="button_1" value ="Add" onclick="addFeedback()" >
                <a href="feedback_update.php"><input type="button" id="button_2" value ="Update" name="update" onclick="updatefeedback()" ></a>
              </div>
              </form>
            </div>
          </div>


    
    <!--Footer -->
     <footer>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Conatct Us</a></li>
            <li><a href="#">Privacy And Policy</a></li>
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
<script>
    function addFeedback() {
        alert('Feedback Added Successfully!');
      }
  
      function updateFeedback() {
        alert('Feedback Updated Successfully!');
      }
    </script>
</body>
</html>