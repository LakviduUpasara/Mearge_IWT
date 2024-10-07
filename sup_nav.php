<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type= "text/css" href="./styles/sup_nav.css">
    
    <style>/*Footer*/
footer {
    text-align: center;
    padding: 20px;
    background-color: #bcbcbc;
    position: absolute;
    bottom: -300px;
    width: 97.5%;
    height: 60px; 
}

.footerLogo {
    width: 100px; 
    height: 40px; 
    margin: 0 auto;
}
/* For very small windows, make footer fixed */
@media (max-height: 600px) { /* Adjust height as needed */
    footer {
        position: fixed;
        bottom: 0;
    }
}
</style>
</head>
<body>
<div class="navbar">
                <div class="logo-div">
                    <img src="images/logo.png" alt="logo" class="logo">
                </div>
             <ul>
               
            <li><a class="nav" href= "supportDashboard.php">Announcements</a></li>
            <li><a class="nav" href="SupportTicketrew.php">Ticket Review</a></li>
            <li><a class="nav" href="admin_support.php">Admin Support</a></li>
         


            </ul>
            <div class = "logout-side">

    <div class="profile">
        <a href="userprofile.php">
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
</body>
</html>
