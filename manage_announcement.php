 <!--Nadeeja - Manage Announcement-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
    <link rel ="stylesheet" href ="styles\manage_announcement.css">
    <link rel ="stylesheet" href ="styles\admin_dashboard.css">
    <link rel ="stylesheet" href ="styles\admin_announcementtable.css">
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

    <!--table of announcements-->
            <div class="table-wrapper">
            <table>
                <tr id="header">
		            <th>Announcement Id</th>
                    <th>Topic</th>
		            <th>Description</th>
                    <th>Action</th>
		        </tr> 
                
            <?php
            require 'config2.php';

            $result = mysqli_query($con, "SELECT * FROM announcement_detail");
           
            while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                    <td><?php echo $row["Announcement_id"]; ?></td>
                    <td><?php echo $row["Topic"]; ?></td>
                    <td><?php echo $row["Description"]; ?></td>
                    <td><button><a  href="crudAnnouncement.php?delete=<?php echo $row["Announcement_id"]; ?>" class="delete" >Delete</a></button></td>
                    </tr>
                    <?php
                }
                    ?>
            </table>
            </div>
    <!--announcement form-->
    <div class="container">
        <h2>Manage Announcement</h2>
                <form action="crudAnnouncement.php" method="post">
                        <input type="text" name="sid" required placeholder="Enter Announcement ID">
                        <input type="text" name="stopic" required placeholder="Enter Topic">
                        <textarea name="sdescription" id="" placeholder="Enter Description"></textarea>
                        
                    <div class="button-container">
                        <button style="width:100px" type="Submit" name="add">Add</button>
                        <button onclick="return confirmUpdate()" style="width:100px" type="Submit" name="update">Update</button>
                       
                    </div>
                    <!-- Js file of confirm update -->
                    <script src="js/confirmUpdate.js"></script>
                </form>
           
    </div>
    
    <!--For response massege-->
    <div id="response">
        <?php
        if (isset($_SESSION['message'])) {
          
            echo "<script>alert('".$_SESSION['message']."');</script>";
            // Clear the session message after displaying it
            unset($_SESSION['message']);
        }
        ?>
    </div>
 
<footer>
  <img class="footerLogo" src="./images/logo.png" alt="teachWave logo">
  <p> &copy; 2024 TechWave Online Teacher Training</p>
</footer>
</body>
</html>