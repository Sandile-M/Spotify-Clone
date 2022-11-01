<?php
    ob_start();

    $timezone = date_default_timezone_set("Africa/Johannesburg");

    $connection = mysqli_connect("localhost", "root", "", "spotify-clone");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>