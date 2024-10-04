<?php

//imesha
require 'config5.php';

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
       echo "success";
    }
    else
    {
        echo "unsuccessful".$con->error;
    }

}


//delete

$tickId = $_POST['tick_id'];

$sqlDel = "DELETE  FROM tickets  WHERE Ticket_id = '$tickId' ";

if($con->query($sqlDel))
{
    echo "Deleted 'tickId'";
}else{
    echo "couldn't delete";
}


?>


