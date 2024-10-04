<?php

include_once 'config2.php';

?>

<?php
// Check if 'id' is set in the GET request (you will typically pass the 'id' in the URL)
if (isset($_GET['feedback_id'])) {
    // Get the Item_ID from the URL
    $feedback_id = $_GET['feedback_id'];

    // SQL DELETE query to remove the row with the matching Item_ID
    $query = "DELETE FROM feedback WHERE feedback_id = '$feedback_id'";

    // Execute the query
    $data = mysqli_query($con, $query);

    // Check if the query was successful
    if ($data) {
        // Step 1: Resequence the Job_IDs after deletion
        $resequence_query = "
        SET @new_id = 0;
        UPDATE feedback SET feedback_id = (@new_id := @new_id + 1);
        
        -- Step 2: Optionally reset the AUTO_INCREMENT value
        ALTER TABLE jobs AUTO_INCREMENT = 1;
        ";
        mysqli_multi_query($con, $resequence_query); // Use multi_query for multiple queries
        
        // Notify the user and redirect to the jobs view page
        echo "<script>alert('Job Removed Successfully!');</script>";
        header("Location:feedback.php");
        exit();
        } else {
        echo "<script>alert('Error in deletion!')</script>";
        }

}

// Close the database connection
mysqli_close($con);
?>