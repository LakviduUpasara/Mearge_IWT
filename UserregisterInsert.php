<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
    $_SESSION['success'] = "Your registration was successfully completed";
    header("Location: index.php");
} else {
    $_SESSION['error'] = "Registration failed";
    header("Location: userRegistation.php");
    
}

$con->close();

?>
