<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/lecture_course_dashbord.css">

</head>
<body>
        <?php include "./Teacher_navbar.php";?>
    

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