<?php    
    function    ManagemntNavbr()
    {

        $user_role = $_SESSION['User_Role'] ;
        // Redirect based on user role
        switch ($user_role) {
            case 'admin':
               include 'adminNav.php' ;
            case 'lecture':
                include 'lecternavbar.php' ;
            case 'supportmember':
                include 'sup_nav.php' ;
            case 'teacher':
                include 'Teacher_navbar.php' ;
            default:
           
        }
    }

    function Managemntfooter()
    {

        $user_role = $_SESSION['User_Role'] ;
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