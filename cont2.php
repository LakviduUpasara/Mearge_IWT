<?php
// Imesha

session_start(); 

require 'config2.php';


$conn = $con;

function createTicketId($conn)
{         
    $query = "SELECT Ticket_id FROM tickets ORDER BY Ticket_id DESC LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $Ticket_id = $row['Ticket_id'] + 1; 
    } else {
        $Ticket_id = 1; 
    }
    return $Ticket_id;
}

function createContactId($conn)
{         
    $query = "SELECT Contact_id FROM contact_us ORDER BY Contact_id DESC LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $contact_id = $row['Contact_id'] + 1; 
    } else {
        $contact_id = 1; 
    }
    return $contact_id;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tickets'])) {       
        $Ticket_id = createTicketId($conn);
        
        $Subject = $_POST["subject"];
        $Email = $_POST["email"];
        $Message = $_POST["message"];
        $reply = '';
        
        
        $query1 = "INSERT INTO tickets (Ticket_id, Subject, Email, Message, Reply) VALUES (?, ?, ?, ?, ?)";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bind_param('issss', $Ticket_id, $Subject, $Email, $Message, $reply);

        if ($stmt1->execute()) {
            $_SESSION['success'] = "Ticket data inserted successfully";
            header("Location: contactUs.php");
            exit(); 
        } else {
            $_SESSION['error'] = "Ticket data insertion failed: " . $stmt1->error;
            header("Location: contactUs.php");
            exit(); 
        }

    } elseif (isset($_POST['contact'])) {
        $contact_id = createContactId($conn);
        $Name = $_POST["Cname"];
        $Phone_no = $_POST["Phone"];
        $Message = $_POST["cmessage"];
        
      
        $query2 = "INSERT INTO contact_us (Contact_id, Name, Phone_no, Message) VALUES (?, ?, ?, ?)";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bind_param('isss', $contact_id, $Name, $Phone_no, $Message);

        if ($stmt2->execute()) {
            $_SESSION['success'] = "Contact data inserted successfully";
            header("Location: contactUs.php");
            exit(); 
        } else {
            $_SESSION['error'] = "Contact data insertion failed: " . $stmt2->error;
            header("Location: contactUs.php");
            exit(); 
        }
    }
}


$conn->close();
?>
