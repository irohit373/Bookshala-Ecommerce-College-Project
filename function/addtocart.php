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

    $item_id = $_GET['book_id'];
    $user_id = $_SESSION['MEMBER_ID'];

    $query = "SELECT user_id FROM cart WHERE item_id = $item_id";
    $result = mysqli_query($conn, $query);
        if ($result->num_rows == 0) {
            if($item_id){
                $query = "INSERT INTO cart (item_id, user_id, time) VALUES ('$item_id', '$user_id', NOW())";
                if (mysqli_query($conn, $query)) {
                    echo "<script>
                        alert('Added to Cart');
                        window.location.href='../home.php';
                         </script>";
                }else{
                    echo "<script>
                            alert('POST ERROR: Try Again');
                            window.location.href='../include/seller.php';
                        </script>";
                }
            }else{
                echo "<script>
                        alert('Something Went Wrong');
                        window.location.href='../home.php';
                </script>";
            }   
        }else{
            echo '<script>
                alert("Already In Cart");
                window.location.href="../home.php";
            </script>';
        }
?>