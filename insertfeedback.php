<?php

require 'config2.php';

$lname=$_POST["fname"];
$lemail=$_POST["email"];
$lcourse=$_POST["course"];
$lfeedback=$_POST["feedback"];

$sql="INSERT INTO feedback VALUES('','$lname','$lemail','$lcourse','$lfeedback')";

if($con->query($sql))
{
    echo"<table border>";
    echo "<script>window.location.href = 'feedback.php';</script>";
}
else{

    echo "error".$con->error;
}

$con->close();
?>