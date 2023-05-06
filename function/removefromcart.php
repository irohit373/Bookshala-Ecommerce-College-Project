<?php
      require 'session.php';
      require 'connection.php';
  
      if (!logged_in()) {
      echo'
          <script type="text/javascript">
              window.location = "../login_page.php";
          </script>
      ';
      }

      $item_id = $_GET['id'];
      $user_id = $_SESSION['MEMBER_ID'];

      $query = "SELECT user_id FROM cart WHERE item_id = $item_id";
     
      $result = mysqli_query($conn, $query);
        if ($result->num_rows == 0) {
                echo "<script>
                        alert('Something Went Wrong: Try Again');
                        window.location.href='../inlcude/home.php';
                </script>";
        }else{
            $query = "DELETE FROM cart WHERE item_id = $item_id AND user_id = $user_id";
            if (mysqli_query($conn, $query)) {
                echo '<script>
                    alert("Removed From Cart");
                    window.location.href="../include/cart.php";
                </script>';
            }
        }
      
?>
