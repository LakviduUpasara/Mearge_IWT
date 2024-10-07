 <!--Nadeeja - Admin Dashboard-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
    <link rel ="stylesheet" href ="styles\admin_dashboard.css">
    <link rel ="stylesheet" href ="styles\admin_footer.css">
</head>
<body>
    
    <!--Admin navigation bar-->
    <div class="navbar">
                <div class="logo-div">
                    <img src="images/logo.png" alt="logo" class="logo">
                </div>
             <ul>
                <li><a href="Admin_dashboard.php">Dashboard</a></li>
                <li><a href="manage_announcement.php">Manage Announcement</a></li>
                <li><a href="ticket_management.php">Ticket Management</a></li>
                <li><a href="user_management.php">User Management</a></li>
                <li><a href="lecture_registration.php">Lecture Registration</a></li>
            </ul>
            <div class = "logout-side">

    <div class="profile">
        <a href="userprofilemanagement.php">
           <img src="./images/user-icon.png" alt="User Profile">
        </a>
    </div>
    <div>
         <a onclick="confirmLogout();" href="javascript:void(0);" class="logout-label">Logout</a>
    </div>
    </div>
</div>
    <!-- Js file of confirm update -->
    <script src="js/confirmUpdate.js"></script>

        <!--Social media Feedbacks-->
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
        <!--Js file of feedback slider-->
        <script src="js\feedbackSlider.js"></script>


        <!--Courses-->
    <div class="slider">
    <h2 style="text-align: center; margin: 10px 0;">Courses</h2>
        <div class="slides">
            <img class="slide" src="images/course1.png" alt="Image #1">
            <img class="slide" src="images/course2.png" alt="Image #2">
            <img class="slide" src="images/course3.png" alt="Image #3">
            <img class="slide" src="images/course4.png" alt="Image #4">
            <img class="slide" src="images/course5.png" alt="Image #5">
            <img class="slide" src="images/course6.png" alt="Image #6">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <!--Js file of courses slider-->
    <script src="js\courseSlider.js"></script>

<!-- Lecturer Team -->
<button class="obtn" id="openModal">Lecturer Team</button>
<div class="modal" id="modal">
    <div class="modal-inner">
        <h2>Lecture Team</h2>
        <div class="lecture-details">
            <h3>Team Members</h3>
            <ul>
                <li>
                    <strong>Name:</strong> Dr. John Smith<br>
                    <strong>Title:</strong> Head of Department<br>
                    <strong>Email:</strong> john.smith@example.com<br>
                    <strong>Phone:</strong> (123) 456-7890
                </li>
                <li>
                    <strong>Name:</strong> Prof. Jane Doe<br>
                    <strong>Title:</strong> Senior Lecturer<br>
                    <strong>Email:</strong> jane.doe@example.com<br>
                    <strong>Phone:</strong> (098) 765-4321
                </li>
                <li>
                    <strong>Name:</strong> Mr. Alex Brown<br>
                    <strong>Title:</strong> Teaching Assistant<br>
                    <strong>Email:</strong> alex.brown@example.com<br>
                    <strong>Phone:</strong> (555) 555-5555
                </li>
                
            </ul>
        </div>
        <button class="cbtn" id="closeModal">Close</button>
    </div>
</div>

<!-- Support Team -->
<button class="obtn2" id="openSupportModal">Support Team</button>
<div class="modal" id="supportModal">
    <div class="modal-inner">
        <h2>Support Team</h2>
        <div class="support-details">
            <h3>Team Members</h3>
            <ul>
                <li>
                    <strong>Name:</strong> Ms. Emily White<br>
                    <strong>Title:</strong> Support Manager<br>
                    <strong>Email:</strong> emily.white@example.com<br>
                    <strong>Phone:</strong> (111) 222-3333
                </li>
                <li>
                    <strong>Name:</strong> Mr. Liam Green<br>
                    <strong>Title:</strong> Technical Support<br>
                    <strong>Email:</strong> liam.green@example.com<br>
                    <strong>Phone:</strong> (444) 555-6666
                </li>
                <!-- Add more support team members as needed -->
            </ul>
        </div>
        <button class="cbtn" id="closeSupportModal">Close</button>
    </div>
</div>

<!-- Js file of lecturer team and support team popup -->
<script src="js/lecSuppopup.js"></script>

<!--Show number of lecture-->
<?php
    require 'config2.php';

    // Execute the query to count the number of users with the 'Lecture' role
    $result = mysqli_query($con, "SELECT COUNT(User_id) AS lecture_count 
                                    FROM user_detail 
                                        WHERE User_role = 'Lecture'");

    if ($result) 
    {
        if ($row = mysqli_fetch_assoc($result))
        {
            echo "<div class='lecture-count-box'>Number of Lectures: " . $row['lecture_count'] . "</div>";
        } 
        else 
        {
            echo "No lectures found.";
        }
    } 
    else 
    {
        echo "Error fetching lecture count.";
    }
      // Execute the query to count the number of users with the 'Teacher-trainee' role
      $result = mysqli_query($con, "SELECT COUNT(User_id) AS Teacher_trainee_count 
                                        FROM user_detail 
                                            WHERE User_role = 'Teacher-trainee'");

      if ($result) 
      {
          if ($row = mysqli_fetch_assoc($result))
          {
              echo "<div class='teacher-trainee-count-box'>Number of Teacher-trainees: " . $row['Teacher_trainee_count'] . "</div>";
          } 
          else 
          {
              echo "No lectures found.";
          }
      } 
      else 
      {
          echo "Error fetching lecture count.";
      }
    mysqli_close($con);
    
    ?>
<footer>
  <img class="footerLogo" src="./images/logo.png" alt="teachWave logo">
  <p> &copy; 2024 TechWave Online Teacher Training</p>
</footer>
</body>
</html>