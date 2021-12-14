<?php
session_start();
include('admin/config/dbcon.php');

if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        foreach ($login_query_run as $data) {
            $user_id = $data['id'];
            $user_name = $data['username'];
            $user_role = $data['role_as'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$user_role"; // 1- admin 0-user
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
        ];

        if ($_SESSION['auth_role'] == 1) {  //1=admin
            $_SESSION['message'] = "Welcome to admin dashboard";
            header("Location: admin/index.php");
            exit(0);
        }elseif($_SESSION['auth_role'] == 0){ // 0=user
            $_SESSION['message'] = "You are logged in";
            header("Location: user/index.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Username or Password does not exist";
        header("Location: login.php");
        exit(0);
    }
} else {
    $_SESSION['message'] = "You are not allowed to access this file";
    header("Location: login.php");
    exit(0);
}
