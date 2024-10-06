<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    // Lakvidu Upasara
require './config2.php';
$conn = $con;


function LoadcourseDetail()
{
    require './config2.php'; 
    $query = "SELECT * FROM course_detail";
    $_select_course_deatail = $con->prepare($query);
    $_select_course_deatail->execute();
    $Get_course_detail = $_select_course_deatail->get_result();

    $user_role = $_SESSION['User_role'];

    if ($user_role == 'lecture')
    {
            echo  "<div class = 'display-full-content'> ";
            while ($row = $Get_course_detail->fetch_assoc()) {
                $courseid = $row['Course_id'];
                $Course_Name = $row ['course_name'] ;
                echo "<div class='course-box'>";
                echo "<div class='edit-image'><img src='" . $row['course_image'] . "' alt='" . $row['course_name'] . "'></div>";
                echo "<h2><a href='resource_management.php?course_id=". $courseid . "'>" . $row['course_name'] . "</a></h2>";
                echo "<p>Course Id: " . $row['Course_id'] . "</p>";
                echo "</div>"; 
            }

            echo "</div>";

    }
    elseif ($user_role == 'teacher')
    {
        echo  "<div class = 'display-full-content'> ";
        while ($row = $Get_course_detail->fetch_assoc()) {
            $courseid = $row['Course_id'];
            $Course_Name = $row ['course_name'] ;
            echo "<div class='course-box'>";
            echo "<div class='edit-image'><img src='" . $row['course_image'] . "' alt='" . $row['course_name'] . "'></div>";
            echo "<h2><a href='viewcourseresourse.php?course_id=". $courseid . "'>" . $row['course_name'] . "</a></h2>";
            echo "<p>Course Id: " . $row['Course_id'] . "</p>";
            echo "</div>"; 
        }

        echo "</div>";


    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $course_image = $_FILES['course_image']['name'];
    $target = "images/Uploads/" . basename($course_image); 
    $course_name = $_POST['course_name'];
    $courseid = $_POST['course_id'];
    $lecturer_Name = $_POST['lecturer_Name'];

    if (isset($_POST['create-course'])) {
           
        $insertdata = $conn->prepare("INSERT INTO course_detail (Course_id, course_name, lecturer_name, course_image) VALUES (?, ?, ?, ?)");
        $insertdata->bind_param("isss", $courseid, $course_name, $lecturer_Name, $target);

        if ($insertdata->execute()) {
            
            echo "<script> alert('Course created successfully!'); window.location.href = 'lecture_course_dashbord.php'</script>";
        } else {
           
            $error = "Error creating course: " . $conn->error;
            echo "<script>alert('$error');</script>";
        }
    } elseif (isset($_POST['Update-course'])) {
        
        $updateQuery = "UPDATE course_detail SET course_name = ?, lecturer_name = ?, course_image = ? WHERE Course_id = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param("sssi", $course_name, $lecturer_Name, $target, $courseid);

        if ($stmt->execute()) {
            echo "<script>alert('Course updated successfully!'); window.location.href = 'lecture_course_dashbord.php';</script>";
        } else 
        {
           
            $error = "Error updating course: " . $conn->error;
            echo "<script>alert('$error');</script>";
        }
    }else if (isset($_POST['delete-course'])) {
        
        $course_id = $_POST['course_id'];

        $sql = "delete  from Course_Resources WHERE Course_id = ?";

            $Inseert_resource =  $con->prepare($sql);
            $Inseert_resource ->bind_param('i',$course_id) ;
            if ($Inseert_resource->execute())
            {
                $stmt = $conn->prepare("DELETE FROM course_detail WHERE Course_id = ?");
                $stmt->bind_param("i", $course_id); 
    
                if ($stmt->execute()) {
                        echo "<script>alert('Course deleted successfully!'); window.location.href = 'lecture_course_dashbord.php';</script>";
                 } else {
                          echo "<script>alert('Error deleting course: " . $stmt->error . "'); window.location.href = 'lecture_course_dashbord.php';</script>";
                }   

            }
            else
            {
               
               
            }

    
        
       
    
       
        $stmt->close();
    }
}
?>


