<?php
session_start();
include("admin/config/dbcon.php");

if (isset($_POST['register_btn'])) {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password == $confirm_password) {
        //check email
        $checkusername = "SELECT username FROM users WHERE username=$username";
        $checkusername_run = mysqli_query($conn, $checkusername);

        if (mysqli_num_rows($checkusername_run) > 0) {
            //Already exixts;
            $_SESSION['message'] = "Already exixts";
            header("Location: register.php");
            exit(0);
        } else {
            $user_query = "INSERT INTO users (fname,lname,username,password) VALUES ('$fname','$lname','$username','$password')";
            $user_query_run = mysqli_query($conn, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['message'] = "something";
                header("Location: register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and confirm password does not match";
        header("Location: register.php");
        exit(0);
    }
} else {
    header("Location: register.php");
    exit(0);
}
?>