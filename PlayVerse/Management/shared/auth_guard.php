<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


function protect_page($allowed_role) {
    if (!isset($_SESSION['user_id'])) {

        header("Location: ../../../Auth/MVC/html/login.php");
        exit();
    }

    if ($_SESSION['role'] !== $allowed_role) {

        if ($_SESSION['role'] === 'admin') {
            header("Location: ../../../Admin/MVC/html/admin_dashboard.php");
        } else {
            header("Location: ../../../User/MVC/html/user_dashboard.php");
        }
        exit();
    }
}


function requireRole($role) {
    protect_page($role);
}
?>