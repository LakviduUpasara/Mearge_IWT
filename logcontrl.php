<?php
        session_start();



            if ($_SERVER['REQUEST_METHOD'] === 'POST')
             {
                $email = $_POST['Email'];
                $password = $_POST['password'];
                checkUser($email,$password) ;

             }
             else if  (isset($_SESSION["email"])&& isset($_SESSION["password"]))
             {

                $email  =$_SESSION["email"] ;
                $password = $_SESSION["password"];
                checkUser($email,$password) ;

             }

             function  checkUser($email, $password)
             {  
                include 'config2.php'; 

                // get user deatail from email from data base 
                $query = "SELECT * FROM  user_detail WHERE email = ? LIMIT 1";
                $get_deatail = $con->prepare($query);
                $get_deatail->bind_param('s', $email);
                $get_deatail->execute();
                $result = $get_deatail->get_result();
                $user = $result->fetch_assoc();


                if ( $password === $user['Password'])
                {
                
                        // if passored correct

                        if (isset( $_POST['remember'])) {
                            $hashed_password = password_hash($user['Password'], PASSWORD_DEFAULT);
                            setcookie('user_id', $user['User_id '], time() + (86400 * 30), "/");
                            setcookie('password', $hashed_password, time() + (86400 * 30), "/"); // 1 month
                            setcookie('email', $user['Email '], time() + (86400 * 30), "/"); // 1 month
                            // 1 month
                        } else {
                            $_SESSION['user_id'] = $user['id'];
                            $_SESSION['password'] = $user['Password'];
                            $_SESSION['email']  = $user['Email'];

                        }

                        $user_role = $user['User_role'];
                        echo  $user_role;
                        
                        // Redirect based on user role
                        switch ($user_role) {
                            case 'admin':
                                header("Location: Admin_dashboard.php");
                                exit();
                            
                            case 'lecture':
                                header("Location: LectureDashbord.php");
                                exit();
                                
                            case 'supportmember':
                                header("Location: adminsupport.php");
                                exit();
                                
                            case 'user':
                                header("Location: teacherdashboard.php");
                                exit();
                            
                            default:
                                // If role is unknown, show error
                                header("Location: home.php?error=Unknown role");
                                exit();
                            
                                
                        } 
                    } else 
                    {
                        // if passored or email incorrct error massage 
                        $_SESSION ['error'] = "Invalid Email  or Password"; 
                        header("Location: home.php?");

                        exit();
                    }


        }

        $get_deatail->close();
        $con->close();
            
        
?>
