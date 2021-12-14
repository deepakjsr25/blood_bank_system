<?php
include('authentication.php');

if (isset($_POST['delete_user'])) {
    $user_id = $_POST['delete_user']; // Inside $_POST['user_delete'] only we have the 'id' see view-register.php

    $query = "DELETE FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin/User Deleted Successfully";
        header('Location: view-register.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-register.php');
        exit(0);
    }
}

if (isset($_POST['add_user'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? 1 : 0;

    $query = "INSERT INTO users (fname,lname,username,password,role_as,status) VALUES ('$fname','$lname','$username','$password','$role_as','$status')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin/User added Successfully";
        header('Location: view-register.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-register.php');
        exit(0);
    }
}

if (isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? 1 : 0;

    $query = "UPDATE users SET fname='$fname',lname='$lname',username='$username',password='password',role_as='$role_as',status='$status' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "updated successfully";
        header('Location: view-register.php');
        exit(0);
    }
}
?>