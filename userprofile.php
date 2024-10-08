<?php
    
        session_start();

     if(isset($_SESSION['success']))
     {
         echo" <script>alert(' ".$_SESSION['success']."') ;</script>" ;
 
     } else if(isset($_SESSION['error']))
     {
       
         echo" <script>alert(' ".$_SESSION['error']."') ;</script>" ;
     }
       unset($_SESSION['error']);
       unset($_SESSION['success']);
      
?>
<!--table of user profiles-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave Online Teacher Trainer</title>
    <link rel="stylesheet"  href="styles/UserProfile.css">


    <link rel = "stylesheet" href="table.css" >

    
    <!--<link rel ="stylesheet" href ="table.css">-->
</head>
<body>      

        <?php

            include    'Hederfootor.php';
             ManagemntNavbr() ;  
            
        ?>
     
        <div class="table-wrapper">
           
        <table border="1px">
                <tr id="header">
		            <th>Id</th>
		            <th>First_Name</th>
		            <th>Last_Name</th>
                    <th>Phone</th>
		            <th>Email</th>
                 </tr> 
                
            <?php
            require './config2.php';
            
             $userID = $_SESSION['User_id'];  
            $sql = "SELECT User_id ,First_Name,Last_Name,Phone,Email  FROM user_detail  WHERE User_id  = '$userID'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $User_detail = $stmt->get_result();
            $row =  $User_detail->fetch_assoc();
            ?>
                    <tr>
                    <td><?php echo $row["User_id"]; ?></td>
                    <td><?php echo $row["First_Name"]; ?></td>
                    <td><?php echo $row["Last_Name"]; ?></td>
                    <td><?php echo $row["Phone"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    </tr>
            </table>
            </div>

            <div class="container">
        <div class="sidebar">
            <div class="profile-pic">
                <img src="usericon.png" alt="Profile Picture">
            </div>
        </div>
        <div class="main-content">
            <div class="profile-header">
                <h1>Edit Profile</h1>
            </div>
            <form class="profile-form" action="userprofilecntrl.php" method = "post">
                
                <div class="input-item">
                    <label for="sid">User ID:</label>
                    <input type="text" name="sid" id="sid" required><br><br>
                </div>
                <div class="input-item">
                    <label for="sfname">First Name:</label>
                    <input type="text" name="sfname" id="sfname" required><br><br>
                </div>
        
                <div class="input-item">
                    <label for="slname">Last Name:</label>
                    <input type="text" name="slname" id="slname" required><br><br>
                </div>
        
                <div class="input-item">
                    <label for="semail">Email:</label>
                    <input type="email" name="semail" id="semail" required><br><br>
                </div>
                <div  class="input-item">
                    <label>Password:</label>
                    <input type="password" name="password"><br><br>
                </div>
        <!-- Buttons for Update and Delete -->
        <div>
            <button type="submit" class="update-delete-btn" name="updateUser" onclick="openPopup()">Update Details</button>
        <div>
        <div class="popup" id="pop-up">
            <p>Your details has been successfully updated.</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>

        <button type="submit" class="update-delete-btn" name="deleteUser" onclick="openPopup1()">Delete Account</button>
        <div>
        <div class="popup" id="pop-up1">
            <p>Your account has been deleted.</p>
            <button type="button" onclick="closePopup1()">OK</button>
        </div>
    </form>
</div>
<script>
    let popup = document.getElementById("pop-up");
function openPopup(event){
    
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}
let popup1 = document.getElementById("pop-up1");
function openPopup1(event){
    
    popup1.classList.add("open-popup");
}
function closePopup1(){
    popup1.classList.remove("open-popup");
}

</script>

        <?php

         include 'Hederfootor.php';
         Managemntfooter();
        ?>

</body>
</html>
