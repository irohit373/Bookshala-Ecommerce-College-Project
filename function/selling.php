<?php
     include "../function/connection.php";
     include "../function/session.php";

    if (isset($_POST['submit']) && !empty($_FILES["image_thumbnail"]["name"])) {
    
        $book_title = $_POST['book_title'];
        $book_author = $_POST['book_author'];
        $seller_id = $_SESSION['MEMBER_ID'];
        $book_price = $_POST['book_price'];
        // $image_dest = $_FILES["image_thumbnail"]["name"];
        $book_description = $_POST['book_description'];
        $book_tags = $_POST['book_tags'];
        $ext = pathinfo($_FILES['image_thumbnail']['name'], PATHINFO_EXTENSION);
        $imagename = $book_title . $ext;

        $sql = "INSERT INTO items (title, author, seller_id, price, stock_insertion_date, image_thumbnail, description, tags) VALUES ('$book_title', '$book_author', '$seller_id', '$book_price', NOW(), '$imagename', '$book_description', '$book_tags')";

        $check = getimagesize($_FILES["image_thumbnail"]["tmp_name"]);
        
        if($check != false){

            if (move_uploaded_file($_FILES["image_thumbnail"]["tmp_name"], "../data/book_img/".$imagename)) {
                
                if (mysqli_query($conn, $sql)) {
                        echo "<script>
                            alert('Book is Added to Stock');
                            window.location.href='../home.php';                                
                        </script>";
                }else{
                        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
                        echo "<script>
                                alert('Error : '". $sql ."<br>". mysqli_error($conn).");
                                window.location.href='../include/seller.php';                                
                        </script>";
                }
            }else{
                echo '<script>
                    alert("Sorry, SERVER ERROR: your file is not uploaded error : move_uploaded_file not working");
                    window.location.href="../include/seller.php";
                </script>';
            }
        }else{
            echo "<script>
                alert('THat is not an Image');
                window.location.href='../include/seller.php';
            </script>";        
        }

    }else{
        echo "<script>
                alert('POST ERROR: Try Again');
                window.location.href='../include/seller.php';
        </script>";
    }

?>