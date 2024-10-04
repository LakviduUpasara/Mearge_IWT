<?php

    $con=new mysqli("localhost","root","","teachwavedb");

    if($con->connect_error)
    {
        die("Connection failed ".$con->connect_error);
    }


?>
