<?php
     include "../function/connection.php";
     include "../function/session.php";

    
    if (isset($_POST['submit']) && !empty($_FILES["image_thumbnail"]["name"])) {
    
        $book_title = $_POST['book_title'];
        $book_author = $_POST['book_author'];
        $seller_id = $_SESSION['MEMBER_ID'];
        $book_price = $_POST['book_price'];
        $image_dest = $_FILES["image_thumbnail"]["name"];
        $book_description = $_POST['book_description'];
        $book_tags = $_POST['book_tags'];

        $sql = "INSERT INTO items (title, author, seller_id, price, stock_insertion_date, image_thumbnail, description, tags) VALUES ('$book_title', '$book_author', '$seller_id', '$book_price', NOW(), '$image_dest', '$book_description', '$book_tags')";

        if (mysqli_query($conn, $sql)) {
            // echo "New record Created Successfully";

            $check = getimagesize($_FILES["image_thumbnail"]["tmp_name"]);
            if($check != false){
                if (move_uploaded_file($_FILES["image_thumbnail"]["tmp_name"], "../data/book_img/".$_FILES["image_thumbnail"]["name"])) {
                    echo "The file " . htmlspecialchars( basename($_FILES["image_thumbnail"]["name"])) . " has been uploaded";
                }else{
                    echo "sorry, your file is not uploaded error : move_uploaded_file not working";
                }
            }else{
                echo "File is not an image";
            }

        }else{
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }

    }else{
        echo "POST Error: ";
    }

?>