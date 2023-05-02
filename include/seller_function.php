<?php
    //  include "../function/connection.php";
    //  include "../function/session.php";

    $targetDir = "/home/rohit/Desktop/";
    $$target_file = $targetDir . basename($_FILES["image_thumbnail"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //  && !empty($_FILES["image_thumbnail"]["name"])

    
     if (isset($_POST['submit'])) {

 
        // File upload path
        // $statusMsg = "";
    
        // $book_title = $_POST['book_title'];
        // $book_author = $_POST['book_author'];
        // $seller_id = $_SESSION['MEMBER_ID'];
        // $book_price = $_POST['book_price'];
        // $book_description = $_POST['book_description'];
        // $book_tags = $_POST['book_tags'];

        $check = getimagesize($_FILES["image_thumbnail"]["tmp_name"]);
        if($check !== false){
            if (move_uploaded_file($_FILES["image_thumbnail"]["tmp_name"], $target_file)) {
                echo "check4";

                echo "The file " . htmlspecialchars( basename($_FILES["image_thumbnail"]["name"])) . " has been uploaded";
            }else{
                echo "sorry, your file is not uploaded";
            }
        }else{
            echo "File is not an image";
        }
    }
    echo "check5";

    // Display status message
    // echo $statusMsg;    
?>