<?php
        require 'config2.php';



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
              }
              
              $Loged_user_id =  $_SESSION['User_id'];
              $userID = $_POST['uid'];
              
              if ($Loged_user_id !=  $userID )
              {
                $_SESSION ['error'] =  "Unauthorized Access" ;

                header('Location: teacherdashboard.php');

              }
              else
              {  
                    $userFname = $_POST['firstname'];
                    $userLname = $_POST['lastname'];
                    $userPhone = $_POST['phone'];
                    $userEmail = $_POST['email'];
                    $User_role = 'lecture';

                
                    
                    
                    if (isset($_POST['update']))
                    {
        
                        // Update the lecture's details
                        $sqlUpdate = "UPDATE user_detail SET First_Name=?, Last_Name=?, Phone=?, Email=? ,User_role = ? WHERE User_id=?";
                        $stmt = $con->prepare($sqlUpdate);
                        $stmt->bind_param("sssssi", $userFname, $userLname, $userPhone, $userEmail,$User_role, $userID);
        
                        if ($stmt->execute())
                        {
                            $_SESSION['User_role'] = 'lecture';
                             echo "<script>alert('Lecture details updated successfully');</script>";
                             header("Location:LectureDashbord.php ");
                             exit();
                        } else {
                                 $_SESSION ['error']  ="Registration failed" ;
                                header("Location:teacherdashboard.php");
                                exit();
                        }
        
                    }

                }
    
            
        }
?>
