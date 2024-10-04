 <!--Nadeeja - Ticket Management-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel ="stylesheet" href ="styles\ticket_management.css">
    <link rel ="stylesheet" href ="styles\admin_dashboard.css">
    <link rel ="stylesheet" href ="styles\admin_tickettable.css">
</head>
<body>

    <!--Admin-dashboard header and Navigation bar-->
    <div class="navbar">
                <div class="logo-div">
                    <img src="images/logo.png" alt="logo" class="logo">
                </div>
             <ul>
                <li><a href="Admin_dashboard.php">Dashboard</a></li>
                <li><a href="manage_announcement.php">Manage Announcement</a></li>
                <li><a href="ticket_management.php">Ticket Management</a></li>
                <li><a href="user_management.php">User Management</a></li>
                <li><a href="lecture_registration.php">Lecture Registration</a></li>
            </ul>
            <div class = "logout-side">

    <div class="profile">
        <a href="userprofilemanagement.php">
           <img src="./images/user-icon.png" alt="User Profile">
        </a>
    </div>
    <div>
         <a onclick="confirmLogout();" href="javascript:void(0);" class="logout-label">Logout</a>
        </div>
    </div>
</div>
    <!-- Js file of confirm update -->
    <script src="js/confirmUpdate.js"></script>
              <!--For response massege-->
              <?php
                session_start();
                ?>
                
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



    <!--table of support member Tickets-->
    <div class="table-wrapper">
            <table>
                <tr id="header">
                    <th>Support Ticket Id</th>
		            <th>User Ticket Id</th>
		            <th>Email</th>
		            <th>Agent Name</th>
                    <th>Message</th>
                    <th>Reply</th>
                    <th>Action</th>
                 </tr> 
                
            <?php
            require 'config2.php';

            $result = mysqli_query($con, "SELECT * FROM admin_support");
            while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                    <td><?php echo $row["S_ticket_id"]; ?></td>
                    <td><?php echo $row["User_Ticket_id"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Message"]; ?></td>
                    <td><?php echo $row["Reply"]; ?></td>
                    <td><button><a href="crudticketmanagement.php?sdelete=<?php echo $row["S_ticket_id"]; ?>"  class="delete" >Delete</a></button></td>
                    </tr>
                    <?php
                }
                    ?>
            </table>
            </div>
             
           
            <!--Support  application-->
            <div class="container">
                <form action="crudticketmanagement.php" method="post">
                    <h2>Support Member Ticket Management</h2>
                    <div class="content">
                       <div class="input-box">
                            <label for="id">Support Ticket Id</label>
                            <input type="text" name="sid" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="reply">Reply</label>
                            <input type="text" name="sreply" required>
                        </div>
                        
                    <div class="button-container">
                        <button onclick="confirmUpdate()" style="width:100%" type="Submit" name="supdate">Reply</button>
                    </div>
                    <!-- Js file of confirm update -->
                    <script src="js/confirmUpdate.js"></script>
                    
                </form>
            
        </div>
    </div>
 <!--For response massege-->
 <div id="response">
        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            // Clear the session message after displaying it
            unset($_SESSION['message']);
        }
        ?>
    </div>
    

</body>
</html>