<?php 

    // include 'connection.php';

    $server  ="localhost";
    $username="root";
    $password="usbw";
    $databse ="bookshala";

    $conn = mysqli_connect($server, $username, $password, $database);

    $fname = "";
    $lname = "";
    $email = "";
    $errors = array();

    if (isset($_POST['submit'])) {
        // $fname = mysql_real_escape_string($_POST['fname']);
        // $lname = mysql_real_escape_string($_POST['lname']);
        // $email = mysql_real_escape_string($_POST['email']);
        // $password1 = mysql_real_escape_string($_POST['password']);
        // $password2 = mysql_real_escape_string($_POST['password2']);
           
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $password2 = $_POST['password2'];
        
        //   if (empty($fname)) {
        //     array_push($errors, "Name is required");    }
        //   if (empty($email)) {
        //     array_push($errors, "Email is required");   }
        //   if (empty($password1)) {
        //     array_push($errors, "Password is required");    }
        //   if ($password1 != $password2) {
        //     array_push($errors, "Please Confirm your Password");    }
            


        // if (count($errors) == 0) {
            $password3 = sha1($password1);
            $password = md5($password3);



            // $sql = "INSERT INTO admin_data (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            $sql = "INSERT INTO check1 (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            
            echo "hello check 21";
            
            if (mysqli_query($conn, $sql)) {
               echo "New record Created Successfully";
            } else {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            // mysqli_query($conn, $sql);
            // echo "error8";
            header('location:check.html');
            // echo "error9";
        // } else{
        //         array_push($errors, "Data not inserted");
        //         echo "error10";
        //   }  
    }
    
    mysqli_close($conn);
?>