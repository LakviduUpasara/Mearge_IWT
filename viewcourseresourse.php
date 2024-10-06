<?php
        require './config2.php';

        session_start();

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
    <title> Course_Resources</title>
    <link rel="stylesheet" href="styles/Course_Resourse.css">
</head>
<body>      
        
    
            <?php

                    require './Teacher_navbar.php' ;

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
                
                    
                    require './footer.php';
                ?>
</body>
</html>