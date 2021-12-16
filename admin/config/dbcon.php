<?php
$host = "localhost";
$username = "root";
$password = "123456";
$database = "bbank";

$conn = mysqli_connect("$host","$username","$password","$database");

if(!$conn){
    header("location: ../errors/dberror.php");
    die();
}
?>