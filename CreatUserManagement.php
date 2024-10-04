<!--Nadeeja-->

<!--Php connection-->
<?php
    require 'config2.php';

    /* If the form submitted with 'Add' button clicked */
    if (isset($_POST['add']))
    {

     $userId = $_POST["sid"];
     $userFname = $_POST["sfname"];
     $userLname = $_POST["slname"];
     $userGender = $_POST["sgender"];
     $userEmail = $_POST["semail"];
     $userEducation = $_POST["sedu"];
     $userOccupation = $_POST["soccu"];
     $userUniversity = $_POST["suni"];
     $userPhone = $_POST["sphone"];
     $userLinkedIn = $_POST["slinke"];
     $userWebsite = $_POST["sweb"];
     $userRole = $_POST["suserRole"];

     //query
     $sqluser = "INSERT INTO `user_management` 
          (Id, First_Name, Last_Name, Gender, Email, Education, Occupation, University, Phone, LinkedIn, Website, User_Role) 
          VALUES ('$userId','$userFname','$userLname','$userGender','$userEmail','$userEducation','$userOccupation','$userUniversity','$userPhone','$userLinkedIn','$userWebsite','$userRole')";

     /* Execute SQL query and check if the add(submit) was successful */
     if($con->query($sqluser))
     {
          echo "Successful";
     }
     else{
          echo "Error".$con->error;
     }
    }

    /* If the form submitted with 'update' button clicked */
    if (isset($_POST['update'])) 
    {
     $userId = $_POST["sid"];
     $userFname = $_POST["sfname"];
     $userLname = $_POST["slname"];
     $userGender = $_POST["sgender"];
     $userEmail = $_POST["semail"];
     $userEducation = $_POST["sedu"];
     $userOccupation = $_POST["soccu"];
     $userUniversity = $_POST["suni"];
     $userPhone = $_POST["sphone"];
     $userLinkedIn = $_POST["slinke"];
     $userWebsite = $_POST["sweb"];
     $userRole = $_POST["suserRole"];

     //query
     $sqluser = "UPDATE `user_management` SET    
                     First_Name='$userFname', 
                     Last_Name='$userLname', 
                     Gender='$userGender', 
                     Email='$userEmail', 
                     Education='$userEducation', 
                     Occupation='$userOccupation', 
                     University='$userUniversity', 
                     Phone='$userPhone', 
                     LinkedIn='$userLinkedIn', 
                     Website='$userWebsite', 
                     User_Role='$userRole'
                 WHERE Id='$userId'";
     
     /* Execute SQL query and check if the update was successful */
     if ($con->query($sqluser)) {
         echo "updated successfully";
     } else {
         echo "Not updated";
     }

}

       $con->close();

 ?>