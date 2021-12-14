<?php
include('authentication.php');

if (isset($_POST['delete_request'])) {
    $user_id = $_POST['delete_request']; // Inside $_POST['user_delete'] only we have the 'id' see view-register.php

    $query = "DELETE FROM needed WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Request Deleted Successfully";
        header('Location: view-requests.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-requests.php');
        exit(0);
    }
}

if (isset($_POST['add_request'])) {
    $patient_name = $_POST['patient_name'];
    $required_blood_group = $_POST['required_blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $query = "INSERT INTO needed (patient_name,required_blood_group,contact,city) VALUES ('$patient_name','$required_blood_group','$contact','$city')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Request added Successfully";
        header('Location: view-requests.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-requests.php');
        exit(0);
    }
}

if (isset($_POST['update_request'])) {
    $user_id = $_POST['user_id'];
    $patient_name = $_POST['patient_name'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $query = "UPDATE needed SET patient_name='$patient_name',required_blood_group='$blood_group',contact='$contact',city='$city' WHERE id='$user_id'";
    $query_run=mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = "updated successfully";
        header('Location: view-requests.php');
        exit(0);
    }
}
?>