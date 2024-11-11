<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    require "config2.php" ;

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        $course_id=$_POST['course_id'] ;
        $resource_id = $_POST['Resource_id'] ;
        $resouse_topic =$_POST['resource_Topic'] ;
        $recourse_Link =$_POST['resource_link'] ;


    
        if (isset($_POST["add-resourse"]))
        {
            $sql = "INSERT INTO course_resources (Resource_id, Link, Course_id, Topic) VALUES (?,? ,? ,?)";
            $Inseert_resource =  $con->prepare($sql);
            $Inseert_resource ->bind_param('isis',$resource_id ,$recourse_Link ,$course_id,$resouse_topic) ;
            if ($Inseert_resource->execute())
            {
                $_SESSION['successful'] =  "Resource Added Successfully";
                header("Location:resource_management.php?course_id=".$course_id);

            }
            else
            {
                $_SESSION['error'] = "Error Adding Resource";
                header("Location:resource_management.php?course_id=".$course_id);
            }

        }
        elseif  (isset($_POST['update-resourse']))
        {   
            
            $sql = "UPDATE course_resources 
                    SET Link = ?, Course_id = ?, Topic = ? 
                    WHERE Resource_id = ?";

            $Inseert_resource =  $con->prepare($sql);
            $Inseert_resource ->bind_param('isis',$resource_id ,$recourse_Link ,$course_id,$resouse_topic) ;
            if ($Inseert_resource->execute())
            {
                $_SESSION['up-successful'] = "Resource updated successfully";
                header("Location:resource_management.php?course_id=".$course_id);

            }
            else
            {   $_SESSION['up-error'] = "Failed to update resource"; 
                header("Location:resource_management.php?course_id=".$course_id);
            }



        }elseif(isset($_POST["delete-resourse"]))
        {
            $sql = "delete  from Course_Resources WHERE Resource_id = ?";

            $Inseert_resource =  $con->prepare($sql);
            $Inseert_resource ->bind_param('i',$resource_id) ;
            if ($Inseert_resource->execute())
            {
                $_SESSION['del-successful'] = "Resource deleted successfully";
                header("Location:resource_management.php?course_id=".$course_id);
                

            }
            else
            {
                $_SESSION['del-error'] = "Failed to delete resource";
                header("Location:resource_management.php?course_id=".$course_id);
            }


        }
        else 
        {
           // header('Location :resource_management.php?course_id= '. $course_id);
           echo  "Invalid Request";

        }



        
    }


   

?>
