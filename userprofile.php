<!--table of user profiles-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachWave</title>
    <link rel="stylesheet"  href="userProfileManagment.css">


    <link rel = "stylesheet" href="table.css" >

    <style>

body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

table{
    margin-top: 20px;
    position: relative;
    left: 55%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-collapse: collapse;
    width: 50%;
    height: 100px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
   
}
tr{
    transition: all .2s ease-in;
    cursor: pointer;
}
th{
    position:sticky;
    top:0;
    background-color: #0d0b56;
    color:white;
    min-width:80px;
    padding: 5px;
    width: 80px;
    min-height: 30px;
    height: 50px;
}
.table-wrapper{
    
    height: calc(80vh - 450px);
    overflow-y: scroll;
    height: 200px;
}

th,td{
    padding: 2px;
    text-align:center;
    border-bottom: 2px solid #ddd;
    
}

tr:hover{
    background-color: #f5f5f5;
    transform: scale(1.01);
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}
/*media query*/
@media only screen and (max-width: 768px){
    table{
        width:90%;
    }
}     

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
  }
  
  .container {
    display: flex;
    min-height: 695px;
    margin-top: 1px;
  }
  
  .sidebar {
    width: 250px;
    background-color: #a3cef1;
    padding: 20px;
    border-right: 1px solid #eaeaea;
  }
  
  .profile-pic img {
    width: 200px;
  }
  
  .main-content {
    flex: 1;
    padding: 20px;
    background-color: #fff;
    width: 100%;
  }
  
  .profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
  }
  
  .profile-header h1 {
    font-size: 24px;
    color: #333;
  }
  
  .profile-form .input-item {
    margin-bottom: 20px;
  }
  
  .profile-form .input-item label {
    display: block;
    font-size: 20px;
    margin-bottom: 5px;
    color: #555;
  }

  .profile-form .input-item input{
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fafafa;
    color: #333;
  }
  
  
  .btn:hover {
    background-color: #274c77;
  }
  .update-delete-btn{
    background-color: #a3cef1; 
    color: black; 
    display: inline-block;
    padding: 12px 20px; 
    margin: 10px 0;;
    border: none; 
    margin-left: 800px;
    border-radius: 5px; 
    cursor: pointer; 
    font-size: 16px; 
    width: 30%; 
    text-align: center;
    transition: background-color 0.3s ease; 
  }
  
  .update-delete-btn button:hover {
    background-color: #274c77; 
  }

  .popup{
    width: 300px;
    height: 150px;
    background-color: #edede9;
    border-radius: 6px;
    position: fixed;
    top: 50%; /*0*/
    left: 50%;
    transform: translate(-50%, -50%)scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #023e8a;
    font-size: 25px;
    font-weight: 50px;
    visibility: hidden;
    transition: transform 0.4s, visibility 0.4s;
  }
  .open-popup
  {
    visibility: visible;
    transform: translate(-50%, -50%)scale(1);
  }
  .popup button{
    width: 100%;
    margin-top: 50px;
    background: #023e8a;
    color: rgb(255, 255, 255);
    border: 0;
    font-size: 18px;
    border-radius: 4px;
  }
    </style>
    
    <!--<link rel ="stylesheet" href ="table.css">-->
</head>
<body>

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
            require 'config.php';


            $sql = "SELECT Id,First_Name,Last_Name,Phone,Email FROM testing";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $User_detail = $stmt->get_result();
            $row =  $User_detail->fetch_assoc();
            ?>
                    <tr>
                    <td><?php echo $row["Id"]; ?></td>
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
            <form class="profile-form">
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
                    <input type="text"><br><br>
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
    require 'config.php';
    
    // Collect data from the form
     $userID = $_POST["ID"];
     $userFname = $_POST["sfirstname"];
     $userLname = $_POST["slastname"];
     $userPhone = $_POST["sphone"];
     $userEmail = $_POST["semail"];
     $userPwd = $_POST["spassword"];
     $User_role = "teacher" ;
    
    // Check which button was pressed
    if (isset($_POST['updateUser'])) {
        // Update the user details
        if(empty($userID) || empty($userFname) || empty($userLname) || empty($userPhone) || empty($userEmail)) {
            echo "All fields are required!";
        } else {
            $sql = "UPDATE regis SET firstname='$f_name', lname='$l_name', phone='$phone', email='$email', password='$pwd' WHERE id='$ID'";
            
            if($con->query($sql)) {
                echo "User details updated successfully!";
            } else {
                echo "Failed to update user details!";
            }
        }
    } elseif (isset($_POST['deleteUser'])) {
        // Delete the user
        if(empty($ID)) {
            echo "User ID is required for deletion!";
        } else {
            $sql = "DELETE FROM regis WHERE id='$ID'";
            
            if($con->query($sql)) {
                echo "User deleted successfully!";
            } else {
                echo "Failed to delete user!";
            }
        }
    }
    
    // Close the connection
    $con->close();
    ?>
        
        </body>