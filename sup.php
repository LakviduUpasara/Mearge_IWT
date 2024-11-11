<?php

//imesha
require 'config2.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


//update

$id = $_POST["ticket_id"];
$reply = $_POST["reply"];

if(empty($id) || empty ($reply))
{
    echo"All feilds are required";
}
else
{
   $rep = "UPDATE tickets set Reply ='$reply' WHERE Ticket_id = $id ";

   if($con->query($rep))//
    {
        $_SESSION['success'] = "successfully completed" ;
        header("Location: supportDashboard.php");

    
    }
    else
    {
        $_SESSION['error'] = "unsuccessfully completed" ;
        header("Location: supportDashboard.php");
    }

}


//delete

$tickId = $_POST['tick_id'];

$sqlDel = "DELETE  FROM tickets  WHERE Ticket_id = '$tickId' ";

if($con->query($sqlDel))
{
    $_SESSION['success'] = "successfully completed" ;
    header("Location: supportDashboard.php");



}else{
    $_SESSION['error'] = "unsuccessfully completed" ;
    header("Location: supportDashboard.php");

}


?>