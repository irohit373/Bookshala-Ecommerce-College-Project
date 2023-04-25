<?php
    require 'connection.php';
    require 'session.php';

    if (isset($_POST['submit'])) {
 
    $email = trim($_POST['email']);
    $upass = trim($_POST['password']);
    $hupass = sha1($upass);
	$l_upass = md5($hupass);

if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "../login_page.php";
                </script>
        <?php
}else{
        $sql = "SELECT * FROM  `user` WHERE  `email` =  '" . $email . "' AND  `password` =  '" . $l_upass . "'";
        $result = mysqli_query($conn, $sql);
 
        if ($result){
        $numrows = mysqli_num_rows($result);
     
            if ($numrows == 1) {
                $found_user  = mysqli_fetch_array($result);
 
                $_SESSION['MEMBER_ID']  = $found_user['id']; 
                $_SESSION['FIRST_NAME'] = $found_user['fname']; 
                $_SESSION['LAST_NAME']  =  $found_user['lname']; 
           
             ?>    <script type="text/javascript">
				    	window.location = "../login_page.php";

					</script>
             <?php       echo("ther is a problem");
            } else {
              ?>    <script type="text/javascript">
                alert("Wrong Username or Password.");
                window.location = "../login_page.php";
                </script>
        <?php

            }
 
         } else {
                 # code...
         die("Table Query failed: " );
        }
        
    }       
} 
 ?>