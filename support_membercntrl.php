<?php
//imesha
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require 'config2.php';

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

