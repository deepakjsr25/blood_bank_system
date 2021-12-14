<?php
session_start();
// I have removed these includes because I want to rredirect the user to login page if he tries to access /bb/index.php
// include('includes/header.php');
// include('includes/navbar.php');

if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Login to access Dashboard";
    header("Location: login.php");
    exit(0);
} else {
    if ($_SESSION['auth_role'] == "1") {
        // $_SESSION['message'] = "You are not Authorised";
        header("Location: admin/index.php");
        exit(0);
    } elseif ($_SESSION['auth_role'] == "0") {
        // $_SESSION['message'] = "You are not Authorised";
        header("Location: user/index.php");
        exit(0);
    }
}

?>