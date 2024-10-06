<?php
//imesha
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require 'config2.php';

if ($_SERVER($_POST[ "REQUEST _METHOD" ] == "POST") )
{

    if (isset($_POST['submit'])) {
        // Retrieve form data
        $subject = mysqli_real_escape_string($conn, $_POST['Subject']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
    
        // Insert data into the tickets table
        $sql = "INSERT INTO tickets (Subject, Email, Message) VALUES ('$subject', '$email', '$message')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New ticket created successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close the connection
    $conn->close();


}

?>

