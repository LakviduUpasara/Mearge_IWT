<?php
        require './config2.php';

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $course_id = $_GET['course_id']; 
        $query = "SELECT * FROM course_detail WHERE Course_id = ?";
        $get_detail = $con->prepare($query);
        $get_detail->bind_param('i', $course_id); 
        $get_detail->execute();
        $result = $get_detail->get_result();
        $course_detail = $result->fetch_assoc();

        $course_name = $course_detail['course_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
        <link rel="stylesheet" href="styles/Course_Resourse.css">
</head>
<body>
    <?php
        include './lecternavbar.php';

         // Add  course resource

        echo  "<h1>Welcome To : $course_name :  $course_id  </h1>";


        if (isset($_SESSION['successful'])) {
            echo "<p style='color:green;'>".$_SESSION['successful']."</p>";
             echo "<script> alert('".$_SESSION['successful']."')</script>";

             unset($_SESSION['successful']); 

            
        }

        if (isset($_SESSION['error'])) {
            echo "<p style='color:red;'>".$_SESSION['error']."</p>";
            echo "<scripy>  alert('".$_SESSION['error']."')</scripy>";

            unset($_SESSION['error']); 
        }

        //update  course resource


        if (isset($_SESSION['up-successful'])) {
            echo "<p style='color:green;'>".$_SESSION['up-successful']."</p>";
            echo "<script> alert('".$_SESSION['up-successful']."');</script>";
        
            unset($_SESSION['up-successful']); 
        }
        
        if (isset($_SESSION['up-error'])) {
            echo "<p style='color:red;'>".$_SESSION['up-error']."</p>";
            echo "<script> alert('".$_SESSION['up-error']."');</script>";
        
            unset($_SESSION['up-error']); 
        }
        
        // Delete course resource messages
        if (isset($_SESSION['del-successful'])) {
            echo "<p style='color:green;'>".$_SESSION['del-successful']."</p>";
            echo "<script> alert('".$_SESSION['del-successful']."');</script>";
        
            unset($_SESSION['del-successful']); 
        }
        
        if (isset($_SESSION['del-error'])) {
            echo "<p style='color:red;'>".$_SESSION['del-error']."</p>";
            echo "<script> alert('".$_SESSION['del-error']."');</script>";
        
            unset($_SESSION['del-error']); 
        }
        
       

    ?>
        <div class="form-resource">
            <form action="resource_managment_contol.php" method="POST">
                <input type="hidden" name="course_id" value="<?php echo $course_id;?>">

                <div class="form-elements">
                    <label for="resource_ID">Resource ID:</label>
                </div>
                <div class="form-elements">
                    <input type="text" name=" Resource_id" placeholder="Enter Resource ID" required>
                </div>

                <div class="form-elements">
                    <label for="resource_name">Resource Topic:</label>
                </div>
                <div class="form-elements">
                    <input type="text" name="resource_Topic" placeholder="Enter Resource Topic" required>
                </div>

                <div class="form-elements">
                    <label for="resource_name">Resource Link:</label>
                </div>
                
                <div class="form-elements">
                    <input type="text" name="resource_link" placeholder="Paste your Resource Link" required>
                </div>

                <div class="button-container">

                        <div class="resource-btn">
                        <button type="submit" id="Add-Resource-btn" name ="add-resourse">Add Resource</button >
                        </div>

                        <div class="resource-btn">
                        <button type ="submit" id="Update-Resource-btn"  name = "update-resourse">Update  Resource</button>
                        </div>

                        <div class="resource-btn">
                        <button sype = " submit" id="delete-Resource-btn"  name = "delete-resourse">Delete  Resource</button >
                        </div>

                        </div>
                </div>
            </form>
        </div>

    <?php
        $query = "SELECT * FROM course_resources WHERE Course_id = ? ORDER BY Resource_id DESC; ";
        $_select_course_Resourse = $con->prepare($query);
        $_select_course_Resourse->bind_param("i", $course_id);
        $_select_course_Resourse->execute();
        $Get_course_Resourse = $_select_course_Resourse->get_result();
    
      echo "<div class='display-full-content'>";
        while ($row = $Get_course_Resourse->fetch_assoc()) {

            echo "<div class='resource-container'>"; 
                echo "<div class='resource-heading'>";
                        echo "<h2>".$row['Topic']."</h2>";
                echo "</div>"; 
                echo "<div class='resource-body'>"; 
                        echo "<h4>Resource ID: ".$row['Resource_id']."</h4>"; 
                        echo "<a href='".$row['Link']."' target='_blank'><p>".$row['Link']."</p></a>";
                echo "</div>"; 
    
            echo "</div>";
        }
        echo "</div>";




        $Get_course_Resourse->close();

        $con->close() ;
    
        
    ?>
  


</body>
</html>