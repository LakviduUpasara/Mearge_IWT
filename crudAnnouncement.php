<!--Nadeeja - CRUD of admin announcement management-->

<!--Php connection-->
<?php
    session_start();
    require 'config2.php';

    /* Query for Add button */
    if (isset($_POST['add']))
    {

     $id = $_POST["sid"];
     $description = $_POST["sdescription"];
     $topic = $_POST["stopic"];
    
     /*query*/
     $sqluser = "INSERT INTO announcement_detail 
          (Announcement_id, Topic, Description) 
          VALUES ('$id','$topic','$description')";

     /* Execute SQL query and check if the add(submit) was successful */
         if ($con->query($sqluser))
          {
             $_SESSION['message'] = "Added Successfully";
             header('location:manage_announcement.php');
          } 
         else 
         {
            echo "Not Added";
         }
    
    }

    /* Query for Update button  */
    if (isset($_POST['update'])) 
    {
        $id = $_POST["sid"];
        $description = $_POST["sdescription"];
        $topic = $_POST["stopic"];

     /*query*/
     $sqluser = "UPDATE announcement_detail SET    
                    Topic = '$topic',
                     Description='$description'
                     
                 WHERE Announcement_id='$id'";
     
     /* Execute SQL query and check if the update was successful */
     if ($con->query($sqluser)) 
     {
         $_SESSION['message'] = "Updated Successfully";
	     header('location:manage_announcement.php');
     } 
     else 
     {
         echo "Not updated";
     }

    }

    /* Query for Delete button  */

    if (isset($_GET['delete'])) 
    {
	    $id = $_GET['delete'];
	    mysqli_query($con, "DELETE FROM announcement_detail WHERE Announcement_id=$id");
	    $_SESSION['message'] = "Data Deleted Successfully";
	    header('location:manage_announcement.php');
    }

       $con->close();

 ?>