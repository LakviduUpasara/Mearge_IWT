<?php
// Check if a session is already started before calling session_start()
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// The rest of your code
if (!function_exists('ManagemntNavbr')) {
    function ManagemntNavbr() {
        $user_role = $_SESSION['User_role'];
        // Redirect based on user role
        if ($user_role == 'admin') {
            require 'adminNav.php';
        }
        elseif ($user_role == 'lecture') {
            require 'lecternavbar.php';
        }
        elseif ($user_role == 'supportmember') {
            require 'sup_nav.php';
        }
        elseif ($user_role == 'teacher') {
            require 'Teacher_navbar.php';
        }
    }
}

if (!function_exists('Managemntfooter')) {
    function Managemntfooter() {
        $user_role = $_SESSION['User_role'];
        // Redirect based on user role
        switch ($user_role) {
            case 'admin':
                include 'Adminfooter.php';
                break;
            case 'lecture':
                include 'footer.php';
                break;
            case 'supportmember':
                include 'sup_nav.php';
                break;
            case 'teacher':
                include 'footer.php';
                break;
            default:
                // Add a default behavior if necessary
                break;
        }
    }
}
?>
