<?php
//imesha

session_start();

require 'config2.php';

//id generation
$sql = "SELECT S_ticket_id FROM admin_support  ORDER BY S_ticket_id DESC LIMIT 1"; 
$result = $con->query($sql);

if ($result && $result->num_rows > 0)
{   
   $row = $result->fetch_assoc();
   $S_ticket_id = $row['S_ticket_id'] + 1; // Add 1 to the last UserId 
} 
else 
{
   $S_ticket_id = 1; // Starting UserId if no users exist
}




//suppourt_ticket_id goes here
$User_Ticket_id = $_POST["ticketId"];
$Name = $_POST["agentName"];
$Email = $_POST["email"];
$Message = $_POST["message"];
$Reply = '' ;
//reply goes here

$query1 = "INSERT INTO admin_support VALUES ('$S_ticket_id','$User_Ticket_id', '$Email', '$Name', '$Message','')";

if($con->query($query1))//hj 
{
    header("Location:admin_support.php") ;
    echo "success";
}
else{
    header("Location:admin_support.php") ;
    echo "unsuccessful".$con->error;
}

?>

