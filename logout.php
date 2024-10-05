<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['Email'];
    $password = $_POST['password'];
    checkUser($email, $password);
} elseif (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    checkUser($email, $password);
}

function checkUser($email, $password) {
    include 'config2.php'; 

    // Get user details from the database using email
    $query = "SELECT * FROM user_detail WHERE Email = ? LIMIT 1";
    $get_detail = $con->prepare($query);
    $get_detail->bind_param('s', $email);
    $get_detail->execute();
    $result = $get_detail->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['Password'])) {
        // Password is correct
        if (isset($_POST['remember'])) {
            setcookie('user_id', $user['User_id'], time() + (86400 * 30), "/"); // 1 month
            setcookie('email', $user['Email'], time() + (86400 * 30), "/"); // 1 month
        } else {
            $_SESSION['user_id'] = $user['User_id'];
            $_SESSION['email'] = $user['Email'];
        }

        $user_role = $user['User_role'];
        $_SESSION['User_Role'] = $user_role;
        $_SESSION['User_id'] = $user['User_id'];

        // Redirect based on user role
        switch ($user_role) {
            case 'admin':
                header("Location: Admin_dashboard.php");
                exit();
            case 'lecture':
                header("Location: LectureDashboard.php");
                exit();
            case 'supportmember':
                header("Location: adminsupport.php");
                exit();
            case 'teacher':
                header("Location: teacherdashboard.php");
                exit();
            default:
                header("Location: home.php?error=Unknown role");
                exit();
        }
    } else {
        // If password or email is incorrect, show an error message
        $_SESSION['error'] = "Invalid Email or Password";
        header("Location: ./index.php");
        exit();
    }
}
?>
