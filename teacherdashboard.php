<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link rel="stylesheet" href="styles/lecture_course_dashbord.css">
    

</head>
<body>

    <?php include "./Teacher_navbar.php";
    
    ?>
    <div class="courses-section">
     <h1>Course Details</h1>
    
        <div class="courses">
            <?php
                    require './courseMangmentcontrol.php';
                    LoadcourseDetail();
            ?>
        </div>
    </div>

    <div class="announcement">
        <h1 class="announcement-heading">Announcements</h1>
        <div class="announcement-content">
            <?php

                    require './view_lecAnnouncement_Detail.php' ;

                    Loadannousment() ;


            ?>
        </div>



    


</body>
</html>