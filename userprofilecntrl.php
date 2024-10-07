<?php
require './config2.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userID = $_POST["sid"];
    $userFname = $_POST["sfname"];
    $userLname = $_POST["slname"];
    $userEmail = $_POST["semail"];
    $userPwd = $_POST["password"];


   
    if (isset($_POST['updateUser'])) {
        
        if (empty($userFname) || empty($userLname) || empty($userEmail)) {
           
            $_SESSION['error'] = "All fields except password are required!";
        } else {
           
            
            $sql = "UPDATE user_detail SET First_Name=?, Last_Name=?, Email=?, password=? WHERE User_id=?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssssi", $userFname, $userLname, $userEmail, $userPwd, $userID);
            if ($stmt->execute()) {
                $_SESSION['success']= "User details updated successfully!";
                header('location: userprofile.php');
            } else {
                $_SESSION['error']= "Failed to update user details!";
                header('location: userprofile.php');

            }
        }
    } elseif (isset($_POST['deleteUser'])) {
     
        $sql = "DELETE FROM user_detail WHERE User_id=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $userID);
        if ($stmt->execute()) {
            $_SESSION['success']= "User deleted successfully!";
            header('location: userprofile.php');

        } else {
            $_SESSION['error']= "Failed to delete user!";
            header('location: userprofile.php');
        }
    }
}

$con->close();
?>
