<?php   

    session_start() ;
    function    ManagemntNavbr()
    {
        $user_role = $_SESSION['User_role'];
        // Redirect based on user role
        switch ($user_role) {
            case 'admin':
               include 'adminNav.php' ;
               break;
            case 'lecture':
                include 'lecternavbar.php' ;
                break;
            case 'supportmember':
                include 'sup_nav.php' ;
                break;
            case 'teacher':
                include 'Teacher_navbar.php' ;
                break;
            default:
            break;
           
        }
    }

    function Managemntfooter()
    {

        $user_role = $_SESSION['User_role'];
        // Redirect based on user role
        switch ($user_role) {
            case 'admin':
               include 'Adminfooter.php' ;
            case 'lecture':
                include 'footer.php' ;
            case 'Adminfooter.php':
                include 'sup_nav.php' ;
            case 'teacher':
                include 'footer.php' ;
            default:   
        }
    }

  


?>