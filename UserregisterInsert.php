<?php

require 'config2.php';

$userFname = $_POST["firstname"];
$userLname = $_POST["lastname"];
$userPhone = $_POST["phone-number"];
$userEmail = $_POST["email"];
$userPwd = $_POST["password"];
$User_role = "teacher";


$sqluser = "INSERT INTO user_detail (First_Name, Last_Name, Phone, Email, Password, User_role) 
            VALUES ('$userFname', '$userLname', '$userPhone', '$userEmail', '$userPwd', '$User_role')";

if ($con->query($sqluser)) {
    echo "<script>alert('Your registration was successfully completed');</script>";
    header("Location: index.php");
} else {
    echo "<script>alert('Registration failed');</script>";
    header("Location: index.php");
    
}

$con->close();

?>
