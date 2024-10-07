 <!--Nadeeja - Admin Dashboard-->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
    <link rel ="stylesheet" href ="styles\admin_dashboard.css">
    <link rel ="stylesheet" href ="styles\admin_footer.css">
</head>
<body>
    
    <!--Admin navigation bar-->
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