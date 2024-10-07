<?php

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(isset($_SESSION['error']))
            {
          
                echo" <script>alert(' ". $_SESSION['error']."') ;</script>" ;

            } 
            unset($_SESSION['error']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
    <link rel="stylesheet" href="styles/lecserdashtempt.css">
    <link rel="stylesheet" href="styles/lecture_course_dashbord.css">




</head>
<body>

    <?php include "./Teacher_navbar.php";?>
        <!-- Announcement Section -->
        <div class="announcement">
        <h1 class="announcement-heading">Announcements</h1>
        <div class="announcement-content">
            <?php

                    require './view_lecAnnouncement_Detail.php' ;

                    Loadannousment() ;


            ?>
        </div>
    </div>

    <div class="courses-section">
     <h1>Course Details</h1>
    
        <div class="courses">
            <?php
                    require './courseMangmentcontrol.php';
                    LoadcourseDetail();
            ?>
        </div>
    </div>


        <?php 
             require './footer.php';
        ?>

</body>
</html>