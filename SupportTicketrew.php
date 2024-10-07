<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/admin_tickettable.css">
    <link rel="stylesheet" href="styles/ticket_management.css">
    <link rel="stylesheet" href="styles/support_dahsboard_style.css">
</head>
<body>

    <?php include './sup_nav.php'?>
    <!--table of User Tickets-->
    <div class="table-wrapper">
            <table>
                <tr id="header">
		            <th>User Ticket Id</th>
		            <th>Subject</th>
		            <th>Email</th>
                    <th>Message</th>
                    <th>Reply</th>
                    <th>Action</th>
                 </tr> 
                
            <?php
            require 'config2.php';

            $result = mysqli_query($con, "SELECT Ticket_id, Subject, Email, Message, Reply FROM tickets");
            while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                    <td><?php echo $row["Ticket_id"]; ?></td>
                    <td><?php echo $row["Subject"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Message"]; ?></td>
                    <td><?php echo $row["Reply"]; ?></td>
                    <td><button><a href="crudticketmanagement.php?delete=<?php echo $row["Ticket_id"]; ?>" class="delete" >Delete</a></button></td>
                    </tr>
                    <?php
                }
                    ?>
            </table>
            </div>
             
           
            <!--User Ticket Form-->
            <div class="container">
                <form action="crudticketmanagement.php" method="post">
                    <h2>User Ticket Management</h2>
                    <div class="content">
                       <div class="input-box">
                            <label for="id">Ticket Id</label>
                            <input type="text" name="sid" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="reply">Reply</label>
                            <input type="text" name="sreply" required>
                        </div>
                        
                    <div class="button-container">
                        <button onclick="confirmUpdate()" style="width:100%" type="Submit" name="update">Reply</button>
                    </div>
                    <!-- Js file of confirm update -->
                    <script src="js/confirmUpdate.js"></script>
                    
                </form>
            
        </div>
    </div>


    <footer>
    <img class="footerLogo" src="./images/logo.png" alt="teachWave logo">
    <p> &copy; 2024 TechWave Online Teacher Training</p>
    </footer>  

</body>
</html>