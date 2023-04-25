<?php 

    require "connection.php";
    require "session.php";


    $fname = "";
    $lname = "";
    $email = "";
    // $errors = array();

    if (isset($_POST['submit'])) {
        // $fname = mysqli_real_escape_string($_POST['fname']);
        // $lname = mysqli_real_escape_string($_POST['lname']);
        // $email = mysqli_real_escape_string($_POST['email']);
        // $password1 = mysqli_real_escape_string($_POST['password']);
        // $password2 = mysqli_real_escape_string($_POST['password2']);
           
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
            


            $password3 = sha1($password1);
            $password = md5($password3);



            // $sql = "INSERT INTO admin_data (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            $sql = "INSERT INTO user (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
            
            // echo "hello check 21";
            
            if (mysqli_query($conn, $sql)) {
                echo "New record Created Successfully";
                
                $sql = "SELECT * FROM  `user` WHERE  `email` =  '" . $email . "' AND  `password` =  '" . $password . "'";
                $result = mysqli_query($conn, $sql);
 
                
                $numrows = mysqli_num_rows($result);
                
                $found_user  = mysqli_fetch_array($result);
            
                    $_SESSION['MEMBER_ID']  = $found_user['id']; 
                    $_SESSION['FIRST_NAME'] = $found_user['fname']; 
                    $_SESSION['LAST_NAME']  =  $found_user['lname']; 
                    
                    header('location:../home.php');
            } else {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }

        }
    
?>