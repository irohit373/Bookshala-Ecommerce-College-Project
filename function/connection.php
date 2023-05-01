<?php

    $server  ="localhost:3306";
    $username="root";
    $password="usbw";
    $database ="bookshala";

    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, $database) or die("could not select database");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
          }
?> 