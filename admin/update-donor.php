<?php
include('authentication.php');


if (isset($_POST['delete_donor'])) {
    $user_id = $_POST['delete_donor']; // Inside $_POST['user_delete'] only we have the 'id' see view-register.php

    $query = "DELETE FROM donors WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Donor Deleted Successfully";
        header('Location: view-donors.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-donors.php');
        exit(0);
    }
}

if (isset($_POST['add_donor'])) {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $query = "INSERT INTO donors (name,blood_group,contact,city) VALUES ('$name','$blood_group','$contact','$city')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Donor added Successfully";
        header('Location: view-donors.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-donors.php');
        exit(0);
    }
}

if (isset($_POST['update_donor'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $query = "UPDATE donors SET name='$name',blood_group='$blood_group',contact='$contact',city='$city' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "updated successfully";
        header('Location: view-donors.php');
        exit(0);
    }
}
?>