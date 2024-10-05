<?php
require 'config2.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST['uid'];
    $userFname = $_POST['firstname'];
    $userLname = $_POST['lastname'];
    $userPhone = $_POST['phone'];
    $userEmail = $_POST['email'];
    $User_role = 'lecture';

    // Update the lecture's details
    $sqlUpdate = "UPDATE user_detail SET First_Name=?, Last_Name=?, Phone=?, Email=? ,User_role = ? WHERE User_id=?";
    $stmt = $con->prepare($sqlUpdate);
    $stmt->bind_param("sssssi", $userFname, $userLname, $userPhone, $userEmail,$User_role, $userID);
    
    if ($stmt->execute()) {
        echo "<script>alert('Lecture details updated successfully');</script>";
        header("Location:LectureDashbord.php ");
    } else {
        echo "Error: " . $con->error;
    }
}

?>
