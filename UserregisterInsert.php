<?php

    require 'config2.php';


    // $userId = $_POST["sid"];
     $userFname = $_POST["sfirstname"];
     $userLname = $_POST["slastname"];
     $userPhone = $_POST["sphone"];
     $userEmail = $_POST["semail"];
     $userPwd = $_POST["spassword"];
     $User_role = "teacher" ;
     
     $sqluser = "INSERT INTO testing VALUES ('','$userFname','$userLname','$userPhone','$userEmail','$userPwd','$User_role')";

    if ($con->query($sqluser)) {
          echo "add successfully";
          
        
        } else {
        echo "Not Added". $con->error;
        }

    $con -> close();


?>