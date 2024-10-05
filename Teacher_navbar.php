<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles/teacher_nvbar.css">
    <link rel='stylesheet' type='text/css' href="styles/lectureRegisterstyle.css">

    
</head>
<body>
                    <!-- Navbar -->
                    <div class="navbar">
                <div class="logo-div">
                    <img src="images/logo.png" alt="logo" class="logo">
                </div>
                    <ul>
                        <li><a href="./teacherdashboard.php">Dashboard</a></li>
                        <li><a href="./teachercourseviev.php">Courses</a></li>
                        <li><a href="./admin_support.php">Support</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="#"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Teach with us</a></li>

                
                    </ul>

                <div class = "logout-side">

                    <div class="profile">
                        <a href="userprofile.php">
                            <img src="./images/user-icon.png" alt="User Profile">
                        </a>
                    </div>
                    <div>
                     <a href="logout.php" class="logout-label">Logout</a>
                    </div>
                </div>
        </div>    


        
            <div id="id01" class="modal">

            <div class ="close-btn" id ="close-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">&times;</div>
            
            <form class="modal-content animate" action="lectureRegister.php" method="post">
                <div class="container">
                <div class="lecture">
                <center><h1>Lecture Registration</h1></center>
                </div>
                <label for="uid"><b>User ID</b></label>
                <input type="text" placeholder="Enter User ID" name="uid" required>

                <label for="firstname"><b>First name</b></label>
                <input type="text" placeholder="Enter firstname" name="firstname" required>

                <label for="lastname"><b>Last name</b></label>
                <input type="text" placeholder="Enter lastname" name="lastname" required>

                <label for="phone"><b>Phone number</b></label>
                <input type="text" placeholder="Enter phone number" name="phone" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter email" name="email" required>
              
            </div>

                <div class="container" style="background-color:#f1f1f1">
                <input type="submit" id="button_3" >
                
                </div> 
            </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
</script>
</body>
</html>