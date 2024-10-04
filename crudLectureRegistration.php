<!--Nadeeja - CRUD of admin Lecture Registration-->

<!--Php connection-->
<?php
     session_start();
    require 'config2.php';

    /* If the form submitted with 'Add' button clicked */
    if (isset($_POST['add']))
    {

     $userId = $_POST["sid"];
     $userFname = $_POST["sfname"];
     $userLname = $_POST["slname"];
     $userPhone = $_POST["sphone"];
     $userEmail = $_POST["semail"];
     $userPwd = $_POST["spwd"];
     $userRole = $_POST["suserRole"];
     
      /*query*/
    $sqluser = "INSERT INTO user_detail
          (User_id, First_Name, Last_Name, Phone, Email, Password, User_role) 
          VALUES ('$userId','$userFname','$userLname','$userPhone','$userEmail','$userPwd','$userRole')";

     /* Execute SQL query and check if the add(submit) was successful */
     if ($con->query($sqluser)) 
     {
        $_SESSION['message'] = "Added Successfully";
        header('location:lecture_registration.php');
    } 
    else 
    {
        echo "Not Added";
    }
    }

    /* If the form submitted with 'update' button clicked */
    if (isset($_POST['update'])) 
    {
     $userId = $_POST["sid"];
     $userFname = $_POST["sfname"];
     $userLname = $_POST["slname"];
     $userPhone = $_POST["sphone"];
     $userEmail = $_POST["semail"];
     $userPwd = $_POST["spwd"];
     $userRole = $_POST["suserRole"];

      /*query*/
     $sqluser = "UPDATE user_detail SET    
                     First_Name='$userFname', 
                     Last_Name='$userLname', 
                     Phone='$userPhone', 
                     Email='$userEmail', 
                     Password='$userPwd',
                     User_role='$userRole'

                 WHERE user_id='$userId'";
     
     /* Execute SQL query and check if the update was successful */
     if ($con->query($sqluser)) 
     {
          $_SESSION['message'] = "Updated Successfully";
          header('location:lecture_registration.php');
      } 
      else 
      {
          echo "Not updated";
      }

    }

       /* Query for Delete button  */
    if (isset($_GET['delete'])) 
    {
	    $userId = $_GET['delete'];
	    mysqli_query($con, "DELETE FROM user_detail WHERE user_id=$userId");
	    $_SESSION['message'] = "Data Deleted Successfully";
	    header('location:lecture_registration.php');
    }

       $con->close();

 ?>