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
        $subject =$_POST['Subject'];
        $email = $_POST['email'];
        $message =$_POST['message'];
    
        // Insert data into the tickets table
        $sql = "INSERT INTO tickets (Subject, Email, Message) VALUES ('?', '?', '?')";
    
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

