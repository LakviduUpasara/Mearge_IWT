<?php
//imesha

require 'config5.php';
// Database connection
$conn = $con;

function createTicketId($conn)
{         
    $query = "SELECT Ticket_id FROM tickets ORDER BY Ticket_id DESC LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $Ticket_id = $row['Ticket_id'] + 1; // Assuming Ticket_id is the correct column name
    } else {
        $Ticket_id = 1; // Starting Ticket_id if no records exist
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
        $contact_id = $row['Contact_id'] + 1; // Assuming Contact_id is the correct column name
    } else {
        $contact_id = 1; // Starting Contact_id if no records exist
    }
    return $contact_id;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tickets'])) {       
        $Ticket_id = createTicketId($conn);
        // Ticket details
        $Subject = $_POST["subject"];
        $Email = $_POST["email"];
        $Message = $_POST["message"];
        $reply = ''; // Reply can be set as needed
        
        // Prepared statement for inserting ticket
        $query1 = "INSERT INTO tickets (Ticket_id, Subject, Email, Message, Reply) VALUES (?, ?, ?, ?, ?)";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bind_param('issss', $Ticket_id, $Subject, $Email, $Message, $reply);

        if ($stmt1->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Insertion failed: " . $conn->error;
        }
        
    } elseif (isset($_POST['contact'])) {
        $contact_id = createContactId($conn);
        $Name = $_POST["Cname"];
        $Phone_no = $_POST["Phone"];
        $Message = $_POST["cmessage"];
        
        // Prepared statement for inserting contact
        $query2 = "INSERT INTO contact_us (Contact_id, Name, Phone_no, Message) VALUES (?, ?, ?, ?)";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bind_param('isss', $contact_id, $Name, $Phone_no, $Message);

        if ($stmt2->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Insertion failed: " . $conn->error;
        }
    }
}

// Close connection if needed
$conn->close();

?>
