<?php

    $server  ="localhost";
    $username="root";
    $password="usbw";
    $databse ="bookshala";

    $conn = mysqli_connect($server, $username, $password, $database);
    // $db = mysqli_select_db($conn, $database) or die("could not select database");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }else{
        echo "Connected successfully";
      }
?> 