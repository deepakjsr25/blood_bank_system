<?php
include('authentication.php');

if (isset($_POST['add_request'])) {
    $patient_name = $_POST['patient_name'];
    $required_blood_group = $_POST['required_blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $query = "INSERT INTO needed (patient_name,required_blood_group,contact,city) VALUES ('$patient_name','$required_blood_group','$contact','$city')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Request added Successfully";
        header('Location: view-myrequests.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-myrequests.php');
        exit(0);
    }
}

?>
