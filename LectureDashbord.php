
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Dashboard</title>
    <link rel="stylesheet" href="styles/lecserdashtempt.css">
    <link rel="stylesheet" href="styles/lecture_course_dashbord.css">

  

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   
    <script src="js/lecdashbord.js" defer></script>
    
</head>
<body>

    <?php   
            include './lecternavbar.php'
            
    ?>

     <!-- Search bar -->
     
            <div class="search-bar">
                <input type="text" placeholder="Search..." id="search-input" name ="Searchkey">
                     <button type="submit"   id="button-search" class="search-button" name ="AnnouSearch-Annousment">
                         <i class="fa fa-search"></i> Search
                     </button>
            </div>


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
