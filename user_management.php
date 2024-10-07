 <!--Nadeeja - User Management-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel ="stylesheet" href ="styles\user_management.css">
    <link rel ="stylesheet" href ="styles\admin_dashboard.css">
    <link rel ="stylesheet" href ="styles\admin_usertable.css">
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

 
              <!--For response massege-->
              <?php
                session_start();
                ?>
                
<!--table of user profiles-->
            <div class="table-wrapper">
            <table>
                <tr id="header">
		            <th>Id</th>
		            <th>First_Name</th>
		            <th>Last_Name</th>
                    <th>Phone</th>
		            <th>Email</th>
                    <th>Password</th>
                    <th>User_Role</th>
                    <th>Action</th>
                 </tr> 
                
            <?php
            require 'config2.php';

            $result = mysqli_query($con, "SELECT User_id, First_Name, Last_Name, Phone, Email, Password, User_role
                                FROM user_detail
                                WHERE User_role LIKE 'teacher'");
            while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                    <td><?php echo $row["User_id"]; ?></td>
                    <td><?php echo $row["First_Name"]; ?></td>
                    <td><?php echo $row["Last_Name"]; ?></td>
                    <td><?php echo $row["Phone"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Password"]; ?></td>
                    <td><?php echo $row["User_role"]; ?></td>
                    <td><button><a href="crudusermanagement.php?delete=<?php echo $row["User_id"]; ?>" class="delete" >Delete</a></button></td>
                    </tr>
                    <?php
                }
                    ?>
            </table>
            </div>
             
           
            <!--User managment application-->
            <div class="container">
                <form action="crudusermanagement.php" method="post">
                    <h2>User Management</h2>
                    <div class="content">
                       <div class="input-box">
                            <label for="id">User Id</label>
                            <input type="text" name="sid" required>
                        </div>
                        <div class="input-box">
                            <label for="firstname">First Name</label>
                            <input type="text" name="sfname" required>
                        </div>
                        <div class="input-box">
                            <label for="lname">Last Name</label>
                            <input type="text" name="slname" required>
                        </div>
                        <div class="input-box">
                            <label for="phone">phone</label>
                            <input type="text" name="sphone" required>
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="text" name="semail" required>
                        </div>
                        <div class="input-box">
                            <label for="password">password</label>
                            <input type="password" name="spwd" required>
                        </div>
                        <div class="input-box">
                            <label for="ur">User Role</label>
                            <div class="select-container">
                                <select class="select-box" name="suserRole" id="userRole">
                                    <option value="lecture">lecture</option>
                                    <option value="teacher">teacher</option>
                                    <option value="admin">admin</option>
                                    <option value="supportmember">supportmember</option>
                                </select>
                            </div>
                        </div>
                    <div class="button-container">
                        <button style="width:100px" type="Submit" name="add">Add</button>
                        <button onclick="return confirmUpdate()" style="width:100px" type="Submit" name="update">Update</button>
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