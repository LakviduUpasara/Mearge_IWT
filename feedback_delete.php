<?php

include_once 'config2.php';

?>

<?php

if (isset($_GET['feedback_id'])) {
    
    $feedback_id = $_GET['feedback_id'];

   
    $query = "DELETE FROM feedback WHERE feedback_id = '$feedback_id'";

    
    $data = mysqli_query($con, $query);

    
    if ($data) {
       
        $resequence_query = "
        SET @new_id = 0;
        UPDATE feedback SET feedback_id = (@new_id := @new_id + 1);
        
        -- Step 2: Optionally reset the AUTO_INCREMENT value
        ALTER TABLE jobs AUTO_INCREMENT = 1;
        ";
        mysqli_multi_query($con, $resequence_query); 
        
 
        echo "<script>alert('Job Removed Successfully!');</script>";
        header("Location:feedback.php");
        exit();
        } else {
        echo "<script>alert('Error in deletion!')</script>";
        }

}


mysqli_close($con);
?>