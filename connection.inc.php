<?php
//ob_start();
$username = "root";
$password = "";
$database = "royals";

    $con = mysqli_connect("localhost", $username, $password, $database);
    if (!$con){
        die("Database Connection Failed" . mysqli_error($con));
    }
    // date_default_timezone_set('Africa/Lagos');
    ?>