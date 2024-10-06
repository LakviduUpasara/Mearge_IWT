<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'config2.php'; 
$ticked_id = null;

function creatticketid($con) {
    $sql = "SELECT Ticket_id FROM tickets ORDER BY Ticket_id DESC LIMIT 1"; 
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {   
        $row = $result->fetch_assoc();
        return $row['Ticket_id'] + 1;
    } else {
        return 1; 
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    
    $subject = $_POST['Subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $reply = "Null";

    if (isset($_POST['submit'])) {
        
        $ticked_id = creatticketid($con);

        
        $sql = "INSERT INTO Tickets (Ticket_id, Subject, Email, Message, Reply) 
                VALUES (?, ?, ?, ?, ?)";

        
        if ($stmt = $con->prepare($sql)) {
           
            $stmt->bind_param("issss", $ticked_id, $subject, $email, $message, $reply);

         
            if ($stmt->execute()) {
                echo "New ticket created successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

         
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $con->error;
        }
    }
}


$con->close();
?>
