<?php
//ob_start();
$username = "globalco_users";
$password = ",&{jxRkEDBh%";
$database = "globalco_goldcoydb";

    $con = mysqli_connect("localhost", $username, $password, $database);
    if (!$con){
        die("Database Connection Failed" . mysqli_error($con));
    }
    // date_default_timezone_set('Africa/Lagos');
    ?>
