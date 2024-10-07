<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>

        <link rel="stylesheet" href="styles/lecture_course_dashbord.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <script src="js/lecdashbord.js" defer></script>
        <script src="js/coursemarnagment.js" defer></script>
        <script src ="./js/massege.js"></script>
</head>
<body>


        </div>

         <?php   
                include './lecternavbar.php' ;
         ?>
            <!-- Courses Section -->
         <div class="button-container">

            <div class="course-btn">
            <button  id="create-course-btn" onclick="openModal();">Create a Course</button >
            </div>

            <div class="course-btn">
            <button  id="Update-course-btn"onclick="openModal()";>Update a Course</button>
            </div>

            <div class="course-btn">
            <button id="delete-course-btn"onclick="openModal()";>Delete a Course</button >
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
        
        </div>
        <!-- Popup Form for Creating Course -->
        <div class="popup" id="popup-form">

                <div class ="close-btn" id ="close-btn " onclick="closeModal();">&times;</div>
            
                <form action="./courseMangmentcontrol.php" method="POST" enctype="multipart/form-data">


                 <h2 id="create-course-heding">Create Course</h2>
                 <p id="message"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>

                 <div class="form-elements">  
                        <label for="course_name">Course Id:</label><br>
                        <input type="text" id="course_id" name="course_id" required>
                </div>
                <div class="form-elements">  
                    <label for="course_name">Course Name:</label><br>
                    <input type="text" id="course_name" name="course_name" required>
                </div>
                <div class="form-elements">
                    <label for="lecturer_name">Lecturer Name:</label><br>
                    <input type="text" id="lecturer_name" name="lecturer_Name" required><br>
                </div>
                <div class="form-elements">
                    <label for="course_image">Course Image:</label><br>
                    <input type="file" id="course_image" name="course_image" accept=".jpg ,.jpeg,.png" value=""><br>
                </div>
                <div  class="form-elements">
                    <button type="submit" id = "create-course" class="submit-button-style" name  ="create-course">Create Course </button>
                </div>
                <div  class="form-elements">
                    <button type="submit" id = "delete-course" class="submit-button-style" name  ="delete-course" onclick =" confirmDelete()">Delete Course </button>
                </div>

                <div  class="form-elements">
                    <button type="submit" id = "Update-course" class="submit-button-style"name  ="Update-course">Update Course </button>
    
                </div>
        </form>
    </div>

   

       
    <?php 
             require './footer.php';
 ?>
</body>
</html>
