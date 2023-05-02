<?php
    //  include "../function/connection.php";
    //  include "../function/session.php";

    //  && !empty($_FILES["image_thumbnail"]["name"])
    
    
    if (isset($_POST['submit'])) {
        
        $targetDir = "";
        $$target_file = $targetDir . basename($_FILES["image_thumbnail"]["name"]);
 
        // File upload path
        // $statusMsg = "";
    
        // $book_title = $_POST['book_title'];
        // $book_author = $_POST['book_author'];
        // $seller_id = $_SESSION['MEMBER_ID'];
        // $book_price = $_POST['book_price'];
        // $book_description = $_POST['book_description'];
        // $book_tags = $_POST['book_tags'];

        $check = getimagesize($_FILES["image_thumbnail"]["tmp_name"]);
        if($check != false){
            if (move_uploaded_file($_FILES["image_thumbnail"]["tmp_name"], "data/".$_FILES["image_thumbnail"]["name"])) {

                echo "The file " . htmlspecialchars( basename($_FILES["image_thumbnail"]["name"])) . " has been uploaded";
            }else{
                echo "sorry, your file is not uploaded";
            }
        }else{

            echo "File is not an image";
        }
    }else{
        echo "POST Error: ";
    }
    // Display status message
    // echo $statusMsg;    
?>