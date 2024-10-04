<!--Nadeeja - CRUD of admin Ticket Management-->

<!--Php connection-->
<?php
     session_start();
    require 'config2.php';

    /*ticket crud for users*/
    /* If the form submitted with 'update' button clicked */
    if (isset($_POST['update'])) 
    {
     $ticketId = $_POST["sid"];
     $ticketReply = $_POST["sreply"];

      /*query*/
     $sqluser = "UPDATE tickets SET    
                     Reply='$ticketReply'
                       
                 WHERE Ticket_id='$ticketId'";
     
     /* Execute SQL query and check if the update was successful */
     if ($con->query($sqluser))
      {
          $_SESSION['message'] = "Updated Successfully";
          header('location:ticket_management.php');
      } 
      else 
      {
          echo "Not updated";
      }

}
   /* Query for Delete button  */
if (isset($_GET['delete'])) {

	$ticketId = $_GET['delete'];
	mysqli_query($con, "DELETE FROM tickets WHERE Ticket_id=$ticketId");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:ticket_management.php');
}

/*ticket crud for users*/
    /* If the form submitted with 'update' button clicked */
    if (isset($_POST['supdate'])) 
    {
     $ticketId = $_POST["sid"];
     $ticketReply = $_POST["sreply"];

      /*query*/
     $sqluser = "UPDATE admin_support SET    
                     Reply='$ticketReply'
                       
                 WHERE S_ticket_id='$ticketId'";
     
     /* Execute SQL query and check if the update was successful */
     if ($con->query($sqluser))
      {
          $_SESSION['message'] = "Updated Successfully";
          header('location:ticket_management.php');
      } 
      else 
      {
          echo "Not updated";
      }

}
   /* Query for Delete button  */
if (isset($_GET['sdelete'])) {

	$ticketId = $_GET['sdelete'];
	mysqli_query($con, "DELETE FROM admin_support WHERE S_ticket_id=$ticketId");
	$_SESSION['message'] = "Data Deleted Successfully";
	header('location:ticket_management.php');
}

       $con->close();

 ?>