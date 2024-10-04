<?php
	require 'config2.php';
?>

<?php
	if ($_POST['update'])
    {   
        $f_id = $_POST['f_id'];
	    $f_course = $_POST['f_course'];
	    $f_feedback = $_POST['f_feedback'];


        if(empty($f_id)||empty($f_course)||empty($f_feedback))
        {
            echo "<script>window.location.href = 'feedback_update.php'; </script>";
        }
        else{
            $query = "UPDATE feedback SET course = '$f_course', feedback = '$f_feedback' WHERE feedback_id  = '$f_id'";

            $data = mysqli_query($con, $query);
        

        if ($data)
        {
           // echo "<script>alert('Record Updated!')</script>";
           // header("Location:Manage_Acc_Page.php");
           
            echo "<script>alert('Edited successfully');window.location.href ='feedback.php'; </script>";
        }
        else{
            echo "<script>alert('Error in update!')</script>";
        }
    }
    }
    mysqli_close($con);
?>