<?php
require './config2.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userID = $_POST["sid"];
    $userFname = $_POST["sfname"];
    $userLname = $_POST["slname"];
    $userEmail = $_POST["semail"];
    $userPwd = $_POST["password"];

    // Check which button was pressed
    if (isset($_POST['updateUser'])) {
        // Update the user details
        if (empty($userFname) || empty($userLname) || empty($userEmail)) {
            echo "All fields except password are required!";
        } else {
            // Update the user in the database
            
            $sql = "UPDATE user_detail SET First_Name=?, Last_Name=?, Email=?, password=? WHERE User_id=?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssssi", $userFname, $userLname, $userEmail, $userPwd, $userID);
            if ($stmt->execute()) {
                echo "User details updated successfully!";
            } else {
                echo "Failed to update user details!";
            }
        }
    } elseif (isset($_POST['deleteUser'])) {
        // Delete the user
        $sql = "DELETE FROM user_detail WHERE User_id=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $userID);
        if ($stmt->execute()) {
            echo "User deleted successfully!";
        } else {
            echo "Failed to delete user!";
        }
    }
}

$con->close();
?>
